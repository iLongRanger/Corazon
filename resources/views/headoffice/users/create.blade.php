@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
    <div class="container-fluid spark-screen text-black">
        <div class="row">
            <!--<div class="col-md-8 col-md-offset-2">-->

            <!-- Default box -->
            <div class="box  box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Create New User</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">

                    @include('includes.form_error')


                    {!! Form::open(['method'=>'POST', 'action'=>'UsersController@store', 'files'=> true])!!}


                    <div class="form-group">
                        {!!Form::label('name', 'Full Name')!!}
                        {!!Form::text('name', null, ['class'=>'form-control'])!!}
                    </div>

                    <div class="form-group">
                        {!!Form::label('email', 'Email:')!!}
                        {!!Form::email('email', null, ['class'=>'form-control'])!!}
                    </div>

                    <div class="form-group">
                        {!!Form::label('role_id', 'Role:')!!}
                        {!!Form::select('role_id', [''=>'Choose Position'] + $roles, null, ['class'=>'form-control'])!!}
                    </div>

                    <div class="form-group form-control-required">
                        {!!Form::label('department_id', 'Department:')!!}
                        {!!Form::select('department_id', [''=>'Choose Department'] + $departments, null, ['class'=>'form-control'])!!}
                    </div>

                    <div class="form-group">
                        {!!Form::label('is_active', 'Status:')!!}
                        {!!Form::select('is_active', array(1=>'Active',0=>'Inactive'),0,  ['class'=>'form-control'])!!}
                    </div>

                    <div class="form-group">
                        {!!Form::label('photo_id', 'Photo: (200x200px)')!!}
                        {!!Form::file('photo_id',null , ['class'=>'form-control'])!!}
                    </div>

                    <div class="form-group">
                        {!!Form::label('password', 'Password:')!!}
                        {!!Form::password('password', ['class'=>'form-control'])!!}
                    </div>

                    <div class = "form-group">
                        {!!Form::submit('Create User', ['class'=>'btn btn-primary'])!!}
                    </div>

                    {!! Form::close() !!}

                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>  <!-- /.box -->
@endsection
