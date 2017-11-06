<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CustomerRequest;
use App\Customers;
use App\Photo;
use Yajra\DataTables\Facades\Datatables;
use Illuminate\Support\Facades\Session;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function datatable()
    {
        return Datatables::of(Customers::query())->make(true);
    }
    public function index()
    {
        $customers = Customers::all();
        return view('spa.customers.index', compact('customers'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('spa.customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CustomerRequest $request)
    {

        $input = $request->all(); // to persist data on database

        if ($file =$request->file('photo_id')){ // will validate if photo existed before saving to database
            $name = time() .$file->getClientOriginalName(); // will get the name og the photo from the user with a time appended on it
            $file->move('images', $name); //will move the photo on images directory with a name on it
            $photo=Photo::create(['file'=>$name]); // create the photo
            $input['photo_id'] = $photo->id; // will save photo id and name
        }
        Customers::create($input); // will save everything on database
        Session::flash('created_customer', 'Customer record has been created.');
        return redirect('/customers');
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
        $customers = Customers::findorFail($id); // to edit the selected user
        return view ('spa.customers.edit', compact('customers'));
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
        $customers = Customers::findOrFail($id);
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

        $customers->Update($input); //will update the data on database
        Session::flash('updated_customer', 'Customer record has been Updated');
        return redirect('/customers');
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
