<?php

namespace App\Http\Controllers;

use App\InitialRequirements;
use Illuminate\Http\Request;
use App\Personal;
use App\PreEmployment;
use Yajra\DataTables\Facades\Datatables;
use Illuminate\Support\Facades\Session;

class PreEmploymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function datatable()
    {
        return Datatables::of(PreEmployment::query())->make(true);
    }
    public function index()
    {

        $pre_employment = PreEmployment::all();
        return view('human_resources.pre_employment.index', compact('pre_employment'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $personal = Personal::pluck('name', 'name')->all();
        return view('human_resources.pre_employment.create', compact('personal'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        if ($file =$request->file('applicationForm')){
            $name = time() .$file->getClientOriginalName();
            $file->move('initial', $name);
            $photo=InitialRequirements::create(['file'=>$name]);
            $input['applicationForm'] = $photo->id;
        }
        if ($file =$request->file('resume')){
            $name = time() .$file->getClientOriginalName();
            $file->move('initial', $name);
            $photo=InitialRequirements::create(['file'=>$name]);
            $input['resume'] = $photo->id;
        }
        if ($file =$request->file('NBI')){
            $name = time() .$file->getClientOriginalName();
            $file->move('initial', $name);
            $photo=InitialRequirements::create(['file'=>$name]);
            $input['NBI'] = $photo->id;
        }
        if ($file =$request->file('healthCert')){
            $name = time() .$file->getClientOriginalName();
            $file->move('initial', $name);
            $photo=InitialRequirements::create(['file'=>$name]);
            $input['healthCert'] = $photo->id;
        }
        if ($file =$request->file('brgyClearance')){
            $name = time() .$file->getClientOriginalName();
            $file->move('initial', $name);
            $photo=InitialRequirements::create(['file'=>$name]);
            $input['brgyClearance'] = $photo->id;
        }
        if ($file =$request->file('birthCert')){
            $name = time() .$file->getClientOriginalName();
            $file->move('initial', $name);
            $photo=InitialRequirements::create(['file'=>$name]);
            $input['birthCert'] = $photo->id;
        }
        if ($file =$request->file('marrigeCert')){
            $name = time() .$file->getClientOriginalName();
            $file->move('initial', $name);
            $photo=InitialRequirements::create(['file'=>$name]);
            $input['marrigeCert'] = $photo->id;
        }
        PreEmployment::create($input); // will save everything on database
        Session::flash('created', 'New record has been created.');
        return redirect('/pre_employment');
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
        //
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
        //
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
