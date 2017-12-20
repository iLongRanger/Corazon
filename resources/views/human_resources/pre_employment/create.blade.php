@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection

@section('main-content')

    <div class="container-fluid spark-screen text-black">
        <div class="row">
            <div class="box  box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Upload Pre-employment requirements</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">

                    @include('includes.form_error')
                    {!! Form::open(['method'=>'POST', 'action'=>'PreEmploymentController@store', 'files'=> true])!!}
                    <div class = 'row'>
                        <div class = 'col-md-6'>
                            <div class="form-group">
                                {!!Form::label('fileNo', 'Pre Employment Record Number')!!}
                                {!!Form::text('fileNo', null, ['class'=>'form-control', 'placeholder'=>'PE-00N'])!!}
                            </div>
                        </div>
                        <div class = 'col-md-6'>
                            <div class="form-group">
                                {!!Form::label('name', 'For Applicant')!!}
                                {!!Form::select('name', [''=>'Choose an Applicant'] + $personal, null, ['class'=>'form-control'])!!}
                            </div>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-md-6'>
                            <div class="form-group">
                                {!!Form::label('applicationForm', 'Accomplished Application Form')!!}
                                {!!Form::file('applicationForm',null , ['class'=>'form-control'])!!}
                            </div>
                        </div>
                        <div class='col-md-6'>
                            <div class="form-group">
                                {!!Form::label('resume', 'Resume')!!}
                                {!!Form::file('resume',null , ['class'=>'form-control'])!!}
                            </div>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-md-6'>
                            <div class="form-group">
                                {!!Form::label('NBI', 'NBI Clearance')!!}
                                {!!Form::file('NBI',null , ['class'=>'form-control'])!!}
                            </div>
                        </div>
                        <div class='col-md-6'>
                            <div class="form-group">
                                {!!Form::label('healthCert', 'Health Certificate')!!}
                                {!!Form::file('healthCert',null , ['class'=>'form-control'])!!}
                            </div>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-md-6'>
                            <div class="form-group">
                                {!!Form::label('brgyClearance', 'Barangay Clearance')!!}
                                {!!Form::file('brgyClearance',null , ['class'=>'form-control'])!!}
                            </div>
                        </div>
                        <div class='col-md-6'>
                            <div class="form-group">
                                {!!Form::label('birthCert', 'Birth Certificate')!!}
                                {!!Form::file('birthCert',null , ['class'=>'form-control'])!!}
                            </div>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-md-6'>
                            <div class="form-group">
                                {!!Form::label('marrigeCert', 'Marriage Certificate')!!}
                                {!!Form::file('marrigeCert',null , ['class'=>'form-control'])!!}
                            </div>
                        </div>
                        <div class='col-md-6'>
                            <div class="form-group">
                                {!!Form::label('status', 'Record Status')!!}
                                {!!Form::select('status', [''=>'Choose Status'] +array('Complete' => 'Complete', 'Incomplete' => 'Incomplete'), '' ,  ['class'=>'form-control'])!!}
                            </div>
                        </div>
                    </div>
                    <div class='row'>
                        <div class = 'col-md-1'>
                            <div class='form-group'>
                                {!!Form::submit('Create Record', ['class'=>'btn btn-primary'])!!}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>



@endsection

