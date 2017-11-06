<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserEditRequest;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use App\User;
use App\Employees;
use App\Role;
use App\Photo;
use App\Department;
use Yajra\DataTables\Facades\Datatables;
use Illuminate\Support\Facades\Session;
use DB;


class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Function for actions on datatable
     */


    public function datatable()
    {
        return Datatables::of(User::query())->make(true);
    }

    public function index()
    {
        $users = User::all();
        return view('headoffice.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // $names=Employees::select(DB::raw("CONCAT(firstname,' ',middlename, ' ' , lastname) AS name"),'id')->pluck('name', 'id');
        //$names = Employees::pluck('firstname', 'id')->all();
        //$employeeid=Employees::pluck('employeeid')->all();
        $roles = Role::pluck('name', 'id')->all();
        $departments = Department::pluck('name', 'id')->all();
        return view('headoffice.users.create', compact('roles', 'departments'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        //function for password
        if(trim($request->password)== ' '){
            $input = $request->except('password');
        }else{
            $input = $request->all(); // to persist data on database
        }
        if ($file =$request->file('photo_id')){ // will validate if photo existed before saving to database
            $name = time() .$file->getClientOriginalName(); // will get the name og the photo from the user with a time appended on it
            $file->move('images', $name); //will move the photo on images directory with a name on it
            $photo=Photo::create(['file'=>$name]); // create the photo
            $input['photo_id'] = $photo->id; // will save photo id and name
        }
        //to encrypt password
        $input['password']= bcrypt($request->password);
        // if photo is not existed
        User::create($input); // will save everything on database
        Session::flash('created_user', 'The user has been created.');
        return redirect('/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $employees = Employees::all();
        $roles = Role::pluck('name', 'id')->all();
        $departments = Department::pluck('name', 'id')->all();
        $user = User::findorFail($id); // to edit the selected user
        return view ('headoffice.users.edit', compact('employees','user', 'roles', 'departments')); // will display user with the id selected on edit view
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserEditRequest $request, $id)
    {
        //function for password
       // $input = $request->all(); // to persist data on database

        // find the user with the selected id
        $user = User::findOrFail($id);
        $input = $request->all(); // to persist data on database
        //check if photo is existing
        if($file = $request->file('photo_id')){
            //make a name for the photo
            $name = time(). $file->getClientOriginalName();
            //move to images folder
            $file->move('images' , $name);
            //create a photo
            $photo= Photo::create(['file'=>$name]);
            // will save photo id and name
            $input['photo_id'] = $photo->id;
        }
        $input['password']= bcrypt($request->password);
        $user->Update($input); //will update the data on database
        Session::flash('updated_user', 'The user has been Updated');
        return redirect('/users');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        unlink(public_path() . $user->photo->file); // to delete the image used by the user
        $user->delete();

        Session::flash('deleted_user', 'The user has been deleted');
        return redirect ('/users');
    }
}