@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection

@section('main-content')
<div class="row">
         <div class="col-md-3">
                <!-- Profile Image -->
                <div class="box box-primary">
                    <div class="box-body box-profile">
                        <img class=" img-responsive img-rounded" src="{{$employees->photo ? $employees->photo->file:'/img/avatar.png'}}" alt="Employee profile picture">

                        <h3 class="profile-username text-center text-black">{{$employees->lastname}} {{$employees->firstname}} {{$employees->middlename}}</h3>

                        <p class="text-muted text-center text-black">{{$employees->role->name}}</p>
                         <p class="text-muted text-center text-black">{{$employees->department->name}}</p>

                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                                <b>User Since</b><span class="pull-right">{{$employees->created_at->diffForHumans()}}</span>
                            </li>
                            <li class="list-group-item">
                                <b>Last changes made</b><span class="pull-right">{{$employees->updated_at->diffForHumans()}}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!-- /.profile pic -->
    <div class ="col-md-9 pull-right">
        <div class="nav-tabs-custom">

            <ul class="nav nav-tabs">
                <li class="active">
                    <a href="#personal" data-toggle="tab">
                        <img src="/img/icons/personal.png" width="50" height="50" alt="Personal Information" toggle="tooltip" title="Personal Information"/>
                    </a>
                </li>
                <li>
                    <a href="#contact" data-toggle="tab">
                        <img src="/img/icons/contact.png" width="50" height="50" alt="Contact Information" toggle="tooltip" title="Contact Information"/>
                    </a>
                </li>
                <li>
                    <a href="#emergency" data-toggle="tab">
                        <img src="/img/icons/emergency.png" width="50" height="50" alt="Emergency Contact Number" toggle="tooltip" title="Emergency Contact Number"/>
                    </a>
                </li>
                <li>
                    <a href="#job" data-toggle="tab">
                       <img src="/img/icons/job.png" width="50" height="50" alt="Job Title" toggle="tooltip" title="Job Title"/>
                    </a>

                </li>

            </ul>
            <br/>
            @include('includes.form_error')
           {!! Form::model($employees, ['method'=>'PATCH', 'action'=>['EmployeesController@update', $employees->id], 'files'=> true])!!}
                <div class="tab-content">
                    <div class="active tab-pane box-body" id="personal">
                        <div class="alert alert-info alert-dismissible">
                        <p>Personal Information</p>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-3">
                                {!!Form::label('photo_id', 'Employee Photo (200x200px)')!!}
                                {!!Form::file('photo_id',null , ['class'=>'form-control'])!!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4">
                                {!!Form::label('lastname', 'Last name')!!}
                                {!!Form::text('lastname', null, ['class'=>'form-control','placeholder'=>'Enter last Name'])!!}
                            </div>
                            <div class="form-group col-md-4">
                                {!!Form::label('firstname', 'First name')!!}
                                {!!Form::text('firstname', null, ['class'=>'form-control','placeholder'=>'Enter first Name'])!!}
                            </div>
                            <div class="form-group col-md-4">
                                {!!Form::label('middlename', 'Middle name')!!}
                                {!!Form::text('middlename', null, ['class'=>'form-control','placeholder'=>'Enter middle Name'])!!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4">
                                {!!Form::label('street', 'Street')!!}
                                {!!Form::text('street', null, ['class'=>'form-control','placeholder'=>'Enter street name'])!!}
                            </div>
                            <div class="form-group col-md-4">
                                {!!Form::label('houseno', 'House Number')!!}
                                {!!Form::text('houseno', null, ['class'=>'form-control','placeholder'=>'Enter house number'])!!}
                            </div>
                            <div class="form-group col-md-4">
                                {!!Form::label('brgy', 'Barangay')!!}
                                {!!Form::text('brgy', null, ['class'=>'form-control','placeholder'=>'Enter city'])!!}
                            </div>
                            <div class="form-group col-md-4">
                                {!!Form::label('city', 'City')!!}
                                {!!Form::text('city', null, ['class'=>'form-control','placeholder'=>'Enter city'])!!}
                            </div>
                            <div class="form-group col-md-4">
                                {!!Form::label('region', 'Region')!!}
                                {!!Form::text('region', null, ['class'=>'form-control','placeholder'=>'Enter region'])!!}
                            </div>
                            <div class="form-group col-md-4">
                                {!!Form::label('zipcode', 'Zipcode')!!}
                                {!!Form::text('zipcode', null, ['class'=>'form-control','placeholder'=>'Enter zipcode'])!!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4">
                                {!!Form::label('birthdate', 'Birth Date')!!}
                                {!!Form::text('birthdate', null, ['class'=>'form-control','placeholder'=>'MM/DD/YYYY'])!!}
                            </div>
                            <div class="form-group col-md-4">
                                {!!Form::label('birthplace', 'Birth Place')!!}
                                {!!Form::text('birthplace', null, ['class'=>'form-control','placeholder'=>'City Name'])!!}
                            </div>
                            <div class="form-group col-md-4">
                                {!!Form::label('marital_id', 'Status')!!}
                                {!!Form::text('marital_id', null, ['class'=>'form-control','placeholder'=>'Ex. Single, Married, Widdowed'])!!}
                            </div>
                            
                            

                        </div>
                    </div><!--END PERSONAL TAB-->

                    <div class="tab-pane box-body" id="contact">
                        <div class="alert alert-info alert-dismissible">
                            <p>Contact Information</p>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4">
                                {!!Form::label('phone', 'Phone number')!!}
                                {!!Form::text('phone', null, ['class'=>'form-control','placeholder'=>'0000-000-0000'])!!}
                            </div>
                            <div class="form-group col-md-4">
                                {!!Form::label('aphone', 'Alternate Phone number')!!}
                                {!!Form::text('aphone', null, ['class'=>'form-control','placeholder'=>'0000-000-0000'])!!}
                            </div>
                            <div class="form-group col-md-4">
                                {!!Form::label('hphone', 'Home Phone number')!!}
                                {!!Form::text('hphone', null, ['class'=>'form-control','placeholder'=>'000-00-00'])!!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4">
                                {!!Form::label('email', 'Email Address')!!}
                                {!!Form::email('email', null, ['class'=>'form-control','placeholder'=>'example@domain.com'])!!}
                            </div>
                            <div class="form-group col-md-4">
                                {!!Form::label('facebook', 'Facebook Link')!!}
                                {!!Form::text('facebook', null, ['class'=>'form-control','placeholder'=>'facebook.com/username'])!!}
                            </div>
                        </div>
                    </div><!--END OF  CONTACT INFORMATION-->
                    <div class="tab-pane box-body" id="emergency">
                        <div class="alert alert-info alert-dismissible">
                            <p>Emergency Contact Person</p>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4">
                                {!!Form::label('ename', 'Full name')!!}
                                {!!Form::text('ename', null, ['class'=>'form-control','placeholder'=>'Enter full name'])!!}
                            </div>
                            <div class="form-group col-md-4">
                                {!!Form::label('relationship', 'Relationship')!!}
                                {!!Form::text('relationship', null, ['class'=>'form-control','placeholder'=>'Enter relationship'])!!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4">
                                {!!Form::label('econtact', 'Phone number')!!}
                                {!!Form::text('econtact', null, ['class'=>'form-control','placeholder'=>'0000-000-0000'])!!}
                            </div>
                            <div class="form-group col-md-4">
                                {!!Form::label('ealcontact', 'Alternate Phone number')!!}
                                {!!Form::text('ealcontact', null, ['class'=>'form-control','placeholder'=>'0000-000-0000'])!!}
                            </div>
                            <div class="form-group col-md-4">
                                {!!Form::label('eaddress', 'Address')!!}
                                {!!Form::text('eaddress', null, ['class'=>'form-control','placeholder'=>'Enter complete address'])!!}
                            </div>
                        </div>
                    </div><!--END OF  EMERGENCY CONTACT PERSON-->
                    <div class="tab-pane box-body" id="job">
                        <div class="alert alert-info alert-dismissible">
                            <p>Job Title</p>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4">
                                {!!Form::label('employeeid', 'Employee Identification number')!!}
                                {!!Form::text('employeeid', null, ['class'=>'form-control','placeholder'=>'Enter id number'])!!}
                            </div>
                            <div class="form-group col-md-4">
                                {!!Form::label('role_id', 'Role:')!!}
                                {!!Form::select('role_id', [''=>'Positions'] + $roles, null, ['class'=>'form-control'])!!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4">
                                {!!Form::label('started_date', 'Start Date')!!}
                                {!!Form::text('started_date', null, ['class'=>'form-control','placeholder'=>'MM/DD/YYYY'])!!}
                            </div>
                            <div class="form-group form-control-required col-md-4">
                                {!!Form::label('department_id', 'department')!!}
                                {!!Form::select('department_id', [''=>'Choose Department'] + $departments, null, ['class'=>'form-control'])!!}
                            </div>
                            <div class="form-group col-md-4">
                                {!!Form::label('salary', 'Salary')!!}
                                {!!Form::text('salary', null, ['class'=>'form-control','placeholder'=>'.00'])!!}
                            </div>
                            <div class = "form-group pull-left col-md-3">
                                {!!Form::submit('Update Record', ['class'=>'btn btn-success'])!!}
                            </div>
                        </div>
                    </div><!--END OF JOB TITLE-->
                </div><!-- /.tab content -->
            {!! Form::close() !!}
        </div> <!-- /.nav custom tab -->
    </div>
</div>
@endsection
