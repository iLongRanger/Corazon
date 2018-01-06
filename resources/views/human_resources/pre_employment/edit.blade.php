@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection

@section('main-content')



                <div class="box box-info">
                    <div class="box-body">
                        <div class="row">
                            <div class ='col-md-12'>
                                <div class="col-md-12">
                                    @include('includes.form_error')
                                </div>
                                <table class="table table-responsive">
                                    <thead>
                                    <tr>
                                        <th>
                                            <span class ='fa fa-file'>
                                                File Number
                                            </span>
                                        </th>
                                        <th>
                                            <span class = "fa fa-user">
                                                Applicant's Name
                                            </span>
                                        </th>
                                        <th>
                                            <span class='fa  fa-calendar-check-o'>
                                            Recieved Date
                                            </span>
                                        </th>
                                        <th>
                                            <span class ='fa fa-calendar-plus-o'>
                                                Last Update
                                            </span>
                                        </th>
                                        <th>
                                            <span class="fa fa-bookmark">
                                                Status
                                            </span>
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>{{$pre_employment->fileNo}}</td>
                                        <td>{{$pre_employment->name}}</td>
                                        <td>{{$pre_employment->created_at->diffForHumans()}}</td>
                                        <td>{{$pre_employment->updated_at->diffForHumans()}}</td>
                                        <td>
                                            @if($pre_employment->status == 'Complete')
                                                <span class="label label-success">{{$pre_employment->status}}</span>
                                            @else
                                                <span class="label label-danger">{{$pre_employment->status}}</span>
                                            @endif
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="box box-info">
                    {!! Form::model($pre_employment, ['method'=>'PATCH', 'action'=>['PreEmploymentController@update', $pre_employment->id], 'files'=> true])!!}
                    <div class="box-body">
                        <div class = 'row'>
                            <div class = 'col-md-12'>
                                    
                                <table class="table table-hover table-responsive">
                                    <thead>
                                        <tr>
                                            <th>
                                                <span class="fa fa-file-archive-o">
                                                    File Type
                                                </span>
                                            </th>
                                            <th>
                                                <span class="fa fa-download">
                                                    Download file
                                                </span>
                                            </th>
                                            <th>
                                                <span class="fa fa-upload">
                                                    Update
                                                </span>
                                            </th>
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
                                        {!!Form::label('status', 'Please update record status')!!}
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



@endsection
