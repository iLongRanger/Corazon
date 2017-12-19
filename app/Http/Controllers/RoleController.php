<?php

namespace App\Http\Controllers;
use App\Http\Requests\RoleRequest;
use App\Role;
use App\User;
use Yajra\DataTables\Facades\Datatables;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Alert;


class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function getAddEditRemoveColumnData()
    {
        $roles = Role::select(['id', 'name', 'description',  'created_at', 'updated_at'])->get();

        return Datatables::of($roles)
            ->addColumn('action', function ($role) {
                return '<a href="/roles/'.$role->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
            })
           
            ->make(true);
    }

    public function datatable()
    {
        return Datatables::of(Role::query())->make(true);
    }
    public function index()
    {

        return view('headoffice.role.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('headoffice.role.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoleRequest $request)
    {
        $input = $request->all();
        Role::create($input); // will save everything on database
       // Alert::warning('Good job!');
        alert()->success('Success Message', 'Optional Title');
        //Session::flash('created_role', 'New Role has been created.');
        return redirect('/roles');
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
        $role = Role::findOrFail($id);
        return view('headoffice.role.edit', compact('role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RoleRequest $request, $id)
    {
        $role = Role::findOrFail($id);
        $input = $request->all(); // to persist
        $role->Update($input); //will update the data on database
        Session::flash('updated_role', 'Role has been Updated');
        return redirect('/roles');
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
