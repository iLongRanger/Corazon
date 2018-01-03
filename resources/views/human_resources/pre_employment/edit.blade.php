@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection

@section('main-content')

    <div class="container-fluid spark-screen text-black ">
        <div class="row">
            <!-- Default box -->
       
            <div class ='col-md-12'>
                <div class="box  box-info">
                        
                        @include('includes.form_error')
                        {!! Form::model($pre_employment, ['method'=>'PATCH', 'action'=>['PreEmploymentController@update', $pre_employment->id], 'files'=> true])!!}
                        <div class="box-body">
                                <div class = 'row'>
                                        <div class = 'col-md-6'>
                                            <h4> 
                                                Pre employment files of {{$pre_employment->name}} 
                                            </h4>
                                            <h4> 
                                                File Status: {{$pre_employment->status}} 
                                            </h4>
                                        </div>
                                        <div class = 'col-md-6'>
                                                <h4> 
                                                    Recieved Date: {{$pre_employment->created_at->diffForHumans()}} 
                                                </h4>
                                                <h4> 
                                                    Last Changes Made: {{$pre_employment->updated_at->diffForHumans()}} 
                                                </h4>
                                        </div>
                                    </div>
                            <div class = 'row'>
                                <div class = 'col-md-12'>
                                    
                                    <table class="table table-hover table-responsive">
                                        <thead>
                                        <tr>
                                            <th>File Type</th>
                                            <th>Download file</th>
                                            <th>Update</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Application Form</td>
                                            <td>
                                                <a href="{{$pre_employment->application ? $pre_employment->application->file:'No file'}}">{{$pre_employment->application ? $pre_employment->application->file:'No file'}}</a><br/>
                                            </td>

                                            <td>
                                                <div class="form-group">
                                                    {!!Form::label('applicationForm_id', 'Upload an Application form')!!}
                                                    {!!Form::file('applicationForm_id',null , ['class'=>'form-control'])!!}
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Resume</td>
                                            <td>
                                                <a href="{{$pre_employment->resume ? $pre_employment->resume->file:'No File'}}">{{$pre_employment->resume ? $pre_employment->resume->file:'No File'}}</a><br/>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    {!!Form::label('resume_id', 'Upload a Resume')!!}
                                                    {!!Form::file('resume_id',null , ['class'=>'form-control'])!!}
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>NBI Clearance</td>
                                            <td>
                                                <a href="{{$pre_employment->nbi ? $pre_employment->nbi->file:'No file'}}">{{$pre_employment->nbi ? $pre_employment->nbi->file:'No file'}}</a><br/>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    {!!Form::label('NBI_id', 'Upload NBI Clearance')!!}
                                                    {!!Form::file('NBI_id',null , ['class'=>'form-control'])!!}
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Health Certificate</td>
                                            <td>
                                                <a href="{{$pre_employment->health ? $pre_employment->health->file:'No file'}}">{{$pre_employment->health ? $pre_employment->health->file:'No file'}}</a><br/>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    {!!Form::label('healthCert_id', 'Upload a Health Certificate')!!}
                                                    {!!Form::file('healthCert_id',null , ['class'=>'form-control'])!!}
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Barangay Clearance</td>
                                            <td>
                                                <a href="{{$pre_employment->brgy ? $pre_employment->brgy->file:'No file'}}">{{$pre_employment->brgy ? $pre_employment->brgy->file:'No file'}}</a><br/>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    {!!Form::label('brgyClearance_id', 'Upload a Barangay Clearance')!!}
                                                    {!!Form::file('brgyClearance_id',null , ['class'=>'form-control'])!!}
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Birth Certificate</td>
                                            <td>
                                                <a href="{{$pre_employment->birth ? $pre_employment->birth->file:'No file'}}">{{$pre_employment->birth ? $pre_employment->birth->file:'No file'}}</a><br/>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    {!!Form::label('birthCert_id', 'Upload a Birth Certificate')!!}
                                                    {!!Form::file('birthCert_id',null , ['class'=>'form-control'])!!}
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Marriage Certificate</td>
                                            <td>
                                                <a href="{{$pre_employment->marriage ? $pre_employment->marriage->file:'No file'}}">{{$pre_employment->marriage ? $pre_employment->marriage->file:'No file'}}</a><br/>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    {!!Form::label('marriageCert_id', 'Upload a Marriage Certificate')!!}
                                                    {!!Form::file('marriageCert_id',null , ['class'=>'form-control'])!!}
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <div class='col-md-6'>
                                        <div class="form-group">
                                            {!!Form::label('status', 'File Status')!!}
                                            {!!Form::select('status', [''=>'Choose Status'] +array('Complete' => 'Complete', 'Incomplete' => 'Incomplete'), '' ,  ['class'=>'form-control'])!!}
                                        </div>
                                        <div class = "form-group">
                                            {!!Form::submit('Update Record', ['class'=>'btn btn-warning'])!!}
                                        </div>
                                    </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                </div>
            </div>

        </div>
    </div>

@endsection
