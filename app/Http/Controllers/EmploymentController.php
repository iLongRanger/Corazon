<?php

namespace App\Http\Controllers;

use App\Department;
use App\Employment;
use App\Http\Requests\EmploymentRequest;
use App\PreEmployment;
use App\Role;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\Datatables;
use Illuminate\Support\Facades\Session;

class EmploymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAddEditRemoveColumnData()
    {
        $employments = Employment::select(['id', 'name', 'department_id',  'position_id'])->get();

        return Datatables::of($employments)
            ->addColumn('action', function ($employment) {
                return '<a href="/employment/edit/'.$employment->id.'" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i> Edit</a>';

            })
            ->make(true);
    }
    public function index()
    {
        $employment = Employment::all();
        return view('human_resources.employment.index', compact('employment'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $role = Role::pluck('name', 'name')->all();
        $departments =Department::pluck('name', 'name')->all();
        $pre_employment = PreEmployment::where('status', 1)->pluck('name','name')->all();
        $employment = Employment::all();
        return view('human_resources.employment.create', compact('employment', 'pre_employment', 'departments', 'role'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmploymentRequest $request)
    {
        $input= $request->all();
        Employment::create($input);
        Session::flash('created', 'New employment record has been created!');
        return redirect('/employment');
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
    public function edit($recordNo)
    {
        $role = Role::pluck('name', 'name')->all();
        $departments = Department::pluck('name', 'name')->all();
        $employment = Employment::findorFail($recordNo);
        return view ('human_resources.employment.edit', compact('employment', 'role', 'departments'));
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
        $employment =Employment::findOrFail($id);
        $input = $request->all();
        $employment->Update($input); //will update the data on database
        Session::flash('updated', 'Employment record has been Updated');
        return redirect('/employment');
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
