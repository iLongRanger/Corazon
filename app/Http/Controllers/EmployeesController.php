<?php

namespace App\Http\Controllers;

use App\Employees;
use Illuminate\Http\Request;
use App\Http\Requests\EmployeesRequest;
use App\Role;
use App\Photo;
use App\Department;
use Yajra\DataTables\Facades\Datatables;
use Illuminate\Support\Facades\Session;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function datatable()
    {
        return Datatables::of(Employees::query())->make(true);
    }
    public function index()
    {
        $employees = Employees::all();
        return view('human_resources.employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        $roles = Role::pluck('name', 'id')->all();
        $departments = Department::pluck('name', 'id')->all();
        return view("human_resources.employees.create" ,compact('employees','roles', 'departments') );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmployeesRequest $request)
    {
       
            $input = $request->all();
            if ($file =$request->file('photo_id')){ // will validate if photo existed before saving to database
                $name = time() .$file->getClientOriginalName(); // will get the name og the photo from the user with a time appended on it
                $file->move('images', $name); //will move the photo on images directory with a name on it
                $photo=Photo::create(['file'=>$name]); // create the photo
                $input['photo_id'] = $photo->id; // will save photo id and name
            }
            Employees::create($input); // will save everything on database
            Session::flash('created_employee', 'New Employee record has been created.');
            return redirect('/employees');
        
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
        $roles = Role::pluck('name', 'id')->all();
        $departments = Department::pluck('name', 'id')->all();
        $employees = Employees::findorFail($id); // to edit the selected user
        return view ('human_resources.employees.edit', compact('employees', 'roles', 'departments')); // will display user with the id selected on edit view
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $employee = Employees::findOrFail($id);
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
        $employee->Update($input); //will update the data on database
        Session::flash('updated_employee', 'Record has been Updated');
        return redirect('/employees');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
