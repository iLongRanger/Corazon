<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonalRequest;
use Illuminate\Http\Request;
use App\Personal;
use App\Photo;
use Yajra\DataTables\Facades\Datatables;
use Illuminate\Support\Facades\Session;

class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAddEditRemoveColumnData()
    {
        $personals = Personal::select(['id', 'id_number', 'name',  'contactNumber', 'email'])->get();

        return Datatables::of($personals)
            ->addColumn('action', function ($personal) {
                return '<a href="/personal/edit/'.$personal->id.'" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i> Edit</a>';

            })
            ->make(true);
    }
    public function index()
    {
        $personal = Personal::all();
        return view('human_resources.personal.index', compact('personal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('human_resources.personal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PersonalRequest $request)
    {
        $input = $request->all();
        if ($file =$request->file('photo_id')){ // will validate if photo existed before saving to database
            $name = time() .$file->getClientOriginalName(); // will get the name og the photo from the user with a time appended on it
            $file->move('images', $name); //will move the photo on images directory with a name on it
            $photo=Photo::create(['file'=>$name]); // create the photo
            $input['photo_id'] = $photo->id; // will save photo id and name
        }
        Personal::create($input); // will save everything on database
        Session::flash('created_personal', 'New record has been created.');
        return redirect('/personal');
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
        $personal = Personal::findorFail($id); // to edit the selected user
        return view ('human_resources.personal.edit', compact('personal'));
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
        $personal =Personal::findOrFail($id);
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
        $personal->Update($input); //will update the data on database
        Session::flash('updated_personal', 'Record has been Updated');
        return redirect('/personal');
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
