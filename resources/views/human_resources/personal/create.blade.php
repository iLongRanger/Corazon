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
                    <h3 class="box-title">Create New Record</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">

                    @include('includes.form_error')


                    {!! Form::open(['method'=>'POST', 'action'=>'PersonalController@store', 'files'=> true])!!}
                    <h5>Personal Information</h5>
                    <div class = 'row'>
                        <div class = 'col-lg-4'>
                            <div class="form-group">
                                {!!Form::label('id_number', 'Application Number')!!}
                                {!!Form::text('id_number', null, ['class'=>'form-control','placeholder'=>'Application Number'])!!}
                            </div>
                        </div>
                        <div class = 'col-lg-4'>
                            <div class="form-group">
                                {!!Form::label('name', 'Name')!!}
                                {!!Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Last name, First Name, Middle name'])!!}
                            </div>
                        </div>
                        <div class = 'col-lg-4'>
                            <div class="form-group col-md-3">
                                {!!Form::label('photo_id', 'Photo')!!}
                                {!!Form::file('photo_id',null , ['class'=>'form-control'])!!}
                            </div>
                        </div>
                    </div>
                    <div class ='row'>
                        <div class = 'col-lg-4'>
                            <div class="form-group">
                                {!!Form::label('contactNumber', 'Contact Number')!!}
                                {!!Form::text('contactNumber', null, ['class'=>'form-control', 'placeholder'=>'0000-0000-000'])!!}
                            </div>
                        </div>
                        <div class = 'col-lg-8'>
                            <div class="form-group">
                                {!!Form::label('address', 'Complete Address')!!}
                                {!!Form::text('address', null, ['class'=>'form-control', 'placeholder'=>'Complete Address'])!!}
                            </div>
                        </div>
                    </div>
                    <div class = 'row'>
                        <div class = 'col-lg-4'>
                            <div class="form-group">
                                {!!Form::label('birthday', 'Date of birth')!!}
                                {!!Form::date('birthday', null, ['class'=>'form-control'])!!}
                            </div>
                        </div>
                        <div class = 'col-lg-8'>
                            <div class="form-group">
                                {!!Form::label('email', 'Email Address')!!}
                                {!!Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'example@host.com'])!!}
                            </div>
                        </div>
                    </div>
                    <h5>Government Numbers</h5>
                    <div class ='row'>
                        <div class = 'col-lg-3'>
                            <div class="form-group">
                                {!!Form::label('pagibig', 'Pag-ibig number')!!}
                                {!!Form::text('pagibig', null, ['class'=>'form-control', 'placeholder'=>'0000-0000-000'])!!}
                            </div>
                        </div>
                        <div class = 'col-lg-3'>
                            <div class="form-group">
                                {!!Form::label('philhealth', 'Philhealth number')!!}
                                {!!Form::text('philhealth', null, ['class'=>'form-control', 'placeholder'=>'0000-0000-000'])!!}
                            </div>
                        </div>
                        <div class = 'col-lg-3'>
                            <div class="form-group">
                                {!!Form::label('tin', 'TIN number')!!}
                                {!!Form::text('tin', null, ['class'=>'form-control', 'placeholder'=>'0000-0000-000'])!!}
                            </div>
                        </div>
                        <div class = 'col-lg-3'>
                            <div class="form-group">
                                {!!Form::label('sss', 'SSS number')!!}
                                {!!Form::text('sss', null, ['class'=>'form-control', 'placeholder'=>'0000-0000-000'])!!}
                            </div>
                        </div>
                    </div>
                    <div class = "form-group pull-right">
                        {!!Form::submit('Create New Record', ['class'=>'btn btn-success'])!!}
                    </div>

                    {!! Form::close() !!}
                </div>
            </div> <!-- /.box-body -->
        </div>
    </div>  <!-- /.box -->
    <!--</div>-->
@endsection
