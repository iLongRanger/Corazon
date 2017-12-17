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

    public function getAddEditRemoveColumn()
    {
        return view('datatables.collection.add-edit-remove-column');
    }

    public function getAddEditRemoveColumnData()
    {
        $users = User::select(['id', 'name', 'email', 'password', 'created_at', 'updated_at'])->get();

        return Datatables::of($users)
            ->addColumn('action', function ($user) {
                return '&lta href="#edit-'.$user->id.'" class="btn btn-xs btn-primary"&gt&lti class="glyphicon glyphicon-edit"&gt&lt/i&gt Edit&lt/a&gt';
            })
            ->editColumn('id', 'ID: @{{$id}}')
            ->removeColumn('password')
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
