<?php

namespace App\Http\Controllers;
use App\Department;
use Yajra\DataTables\Contracts\DataTable;
use Yajra\DataTables\Facades\Datatables;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Http\Requests\DepartmentRequest;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAddEditRemoveColumnData()
    {
        $departments = Department::select(['id', 'name', 'description', 'created_at', 'updated_at'])->get();

        return DataTables::of($departments)
            ->addColumn('action', function ($department){
                return '<a href="/departments/edit/'.$department->id.'"class="btn btn-xs btn-primary"><i class="fa fa-edit"></i>Edit</a>';
            })
            ->make(true);
    }


    public function index()
    {

        return view('human_resources.maintenance.department.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('human_resources.maintenance.department.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DepartmentRequest $request)
    {
        $input = $request->all();
        Department::create($input); // will save everything on database
        Session::flash('created_department', 'The department has been created.');
        return redirect('/departments');
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
        $department = Department::findOrFail($id);
        return view('human_resources.maintenance.department.edit', compact('department'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DepartmentRequest $request, $id)
    {
        $department = Department::findOrFail($id);
        $input = $request->all(); // to persist
        $department->Update($input); //will update the data on database
        Session::flash('updated_department', 'Department record has been updated');
        return redirect('/departments');
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
