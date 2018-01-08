<?php

namespace App\Http\Controllers;

use App\ApplicationForms;
use App\Health;
use App\Http\Requests\PreEmploymentRequest;
use App\Nbi;
use App\Birth;
use App\Barangay;
use App\Marriage;
use App\Resumes;
use App\Http\Requests\PreEmploymentRequestUpdate;
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
        $pre_employment = PreEmployment::all();
        $personal = Personal::pluck('name', 'name')->all();
        return view('human_resources.pre_employment.create', compact('personal', 'pre_employment'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PreEmploymentRequest $request)
    {
        $input = $request->all();
        if ($file =$request->file('applicationForm_id')){
            $name = time() .$file->getClientOriginalName();
            $file->move('applicationForms', $name);
            $application=ApplicationForms::create(['file'=>$name]);
            $input['applicationForm_id'] = $application->id;
        }
        if ($file =$request->file('resume_id')){
            $name = time() .$file->getClientOriginalName();
            $file->move('resumes', $name);
            $application=Resumes::create(['file'=>$name]);
            $input['resume_id'] = $application->id;
        }
        if ($file =$request->file('NBI_id')){
            $name = time() .$file->getClientOriginalName();
            $file->move('nbi', $name);
            $application=Nbi::create(['file'=>$name]);
            $input['NBI_id'] = $application->id;
        }
        if ($file =$request->file('healthCert_id')){
            $name = time() .$file->getClientOriginalName();
            $file->move('health', $name);
            $application=Health::create(['file'=>$name]);
            $input['healthCert_id'] = $application->id;
        }
        if ($file =$request->file('brgyClearance_id')){
            $name = time() .$file->getClientOriginalName();
            $file->move('brgy', $name);
            $application=Barangay::create(['file'=>$name]);
            $input['brgyClearance_id'] = $application->id;
        }
        if ($file =$request->file('birthCert_id')){
            $name = time() .$file->getClientOriginalName();
            $file->move('birth', $name);
            $application=Birth::create(['file'=>$name]);
            $input['birthCert_id'] = $application->id;
        }
        if ($file =$request->file('marriageCert_id')){
            $name = time() .$file->getClientOriginalName();
            $file->move('marriage', $name);
            $application=Marriage::create(['file'=>$name]);
            $input['marriageCert_id'] = $application->id;
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
        $pre_employment = PreEmployment::findorFail($id);
        $personal = Personal::all();
        return view ('human_resources.pre_employment.edit', compact('pre_employment', 'personal' ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PreEmploymentRequestUpdate $request, $id)
    {
        $pre_employment= PreEmployment::findOrFail($id);
        $input = $request->all();
        if($file = $request->file('applicationForm_id')){
            $name = time(). $file->getClientOriginalName();
            $file->move('applicationForms' , $name);
            $photo= ApplicationForms::create(['file'=>$name]);
            $input['applicationForm_id'] = $photo->id;
        }
        if($file = $request->file('resume_id')){
            $name = time(). $file->getClientOriginalName();
            $file->move('resumes' , $name);
            $photo= Resumes::create(['file'=>$name]);
            $input['resume_id'] = $photo->id;
        }
        if($file = $request->file('NBI_id')){
            $name = time(). $file->getClientOriginalName();
            $file->move('nbi' , $name);
            $photo= Nbi::create(['file'=>$name]);
            $input['NBI_id'] = $photo->id;
        }
        if($file = $request->file('healthCert_id')){
            $name = time(). $file->getClientOriginalName();
            $file->move('health' , $name);
            $photo= Health::create(['file'=>$name]);
            $input['healthCert_id'] = $photo->id;
        }
        if($file = $request->file('brgyClearance_id')){
            $name = time(). $file->getClientOriginalName();
            $file->move('brgy' , $name);
            $photo= Barangay::create(['file'=>$name]);
            $input['brgyClearance_id'] = $photo->id;
        }
        if($file = $request->file('birthCert_id')){
            $name = time(). $file->getClientOriginalName();
            $file->move('birth' , $name);
            $photo= Birth::create(['file'=>$name]);
            $input['birthCert_id'] = $photo->id;
        }
        if($file = $request->file('marriageCert_id')){
            $name = time(). $file->getClientOriginalName();
            $file->move('marriage' , $name);
            $photo= Marriage::create(['file'=>$name]);
            $input['marriageCert_id'] = $photo->id;
        }
        $pre_employment->Update($input); //will update the data on database
        Session::flash('updated', 'Record has been Updated');

        return redirect('/pre_employment');



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
