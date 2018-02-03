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
                    <h3 class="box-title">View/Update {{$employment->name}}'s employment record</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">

                    @include('includes.form_error')


                    {!! Form::model($employment,['method'=>'PATCH', 'action'=>['EmploymentController@update',$employment->id] ,'files'=> true])!!}

                    <div class = 'row'>

                        <div class = 'col-lg-4'>
                            <div class="form-group">
                                {!!Form::label('id', 'Record Number:')!!}
                                {!!Form::text('id', null, ['class'=>'form-control', 'placeholder'=>'EMP-000'])!!}
                            </div>
                        </div>
                        <div class = 'col-lg-4'>
                            <div class="form-group">
                                {!!Form::label('name', 'Employee Name')!!}
                                {!!Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Last name, First Name, Middle name'])!!}
                            </div>
                        </div>
                        <div class = 'col-lg-4'>

                        </div>
                    </div>
                    <div class ='row'>
                        <div class = 'col-lg-4'>
                            <div class="form-group">
                                {!!Form::label('department_id', 'department')!!}
                                {!!Form::select('department_id', [''=>'Choose Department'] + $departments, null, ['class'=>'form-control'])!!}
                            </div>
                        </div>
                        <div class = 'col-lg-4'>
                            <div class="form-group">
                                {!!Form::label('role_id', 'Role')!!}
                                {!!Form::select('role_id', [''=>'Positions'] + $role, null, ['class'=>'form-control'])!!}
                            </div>
                        </div>
                    </div>
                    <div class = 'row'>
                        <div class = 'col-lg-4'>
                            <div class="form-group">
                                {!!Form::label('salary', 'Salary')!!}
                                {!!Form::number('salary', null, ['class'=>'form-control', 'placeholder'=>'0.00'])!!}
                            </div>
                        </div>
                        <div class = 'col-lg-4'>
                            <div class="form-group">
                                {!!Form::label('dateHired', 'Date hired')!!}
                                {!!Form::text('dateHired', null, ['class'=>'form-control'])!!}
                            </div>
                        </div>
                        <div class = 'col-lg-4'>
                            <div class="form-group">
                                {!!Form::label('status', 'Employee Status')!!}
                                {!!Form::select('status', [''=>'Choose Status'] +array('Active' => 'Active', 'Inactive' => 'Inactive') , '', ['class'=>'form-control'])!!}
                            </div>
                        </div>
                    </div>
                    <div class = "form-group pull-right">
                        {!!Form::submit('Update Record', ['class'=>'btn btn-warning'])!!}
                    </div>

                    {!! Form::close() !!}
                </div>
            </div> <!-- /.box-body -->
        </div>
    </div>  <!-- /.box -->
    <!--</div>-->
@endsection
