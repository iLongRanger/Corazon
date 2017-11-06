@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
    <div class="container-fluid spark-screen" xmlns:margin-right="http://www.w3.org/1999/xhtml"
         xmlns:border-radius="http://www.w3.org/1999/xhtml" xmlns:float="http://www.w3.org/1999/xhtml"
         xmlns:height="http://www.w3.org/1999/xhtml">

        <div class="row">
            @include('includes.form_error')
            <div class="col-md-3">
                <!-- Profile Image -->
                <div class="box box-primary">
                    <div class="box-body box-profile">
                        <img class=" img-responsive img-rounded" src="{{$user->photo ? $user->photo->file:'/img/avatar.png'}}" alt="User profile picture">

                        <h3 class="profile-username text-center text-black">{{$user->name}}</h3>

                        <p class="text-muted text-center text-black">{{$user->role->name}}</p>

                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                                <b>User Since</b><span class="pull-right">{{$user->created_at->diffForHumans()}}</span>
                            </li>
                            <li class="list-group-item">
                                <b>Last changes made</b><span class="pull-right">{{$user->updated_at->diffForHumans()}}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!-- /.profile pic -->
            <div class="col-md-9">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                       <!-- <li class="active"><a href="#personal" data-toggle="tab">Personal Information</a></li>-->
                        <li><a href="#edit" data-toggle="tab">Update User Information</a></li>
                       <!-- <li><a href="#password" data-toggle="tab">Change Password</a></li>-->
                    </ul>
                    <div class="tab-content">
                        <!-- /.change personal -->
                        <!--<div class="active tab-pane" id="personal">
                             
                              
                           
                        </div>-->
                        <!-- /.end personal-->
                        <!-- /.change password -->
                        <div class="active tab-pane" id="password">

                        </div>
                        <!-- /.end change pass -->
                        <!-- /.Edit info -->
                        <div class="tab-pane" id="edit">
                            <div class ="box box-info">
                                <br />
                                <p class="text-bold text-black">
                                    Note: Password needs to be change if user information is updated.
                                    </p>

                                {!! Form::model($user, ['method'=>'PATCH', 'action'=>['UsersController@update', $user->id], 'files'=> true])!!}

                                <div class="form-group">
                                    {!!Form::label('name', 'Name:')!!}
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
                                    {!!Form::select('is_active', array(1=>'Active',0=>'Inactive'),null,  ['class'=>'form-control'])!!}
                                </div>

                                <div class="form-group">
                                    {!!Form::label('photo_id', 'Upload Another Photo:')!!}
                                    {!!Form::file('photo_id',null , ['class'=>'form-control'])!!}
                                </div>

                                <div class="form-group">
                                    {!!Form::label('password', 'Password:')!!}
                                    {!!Form::password('password', ['class'=>'form-control'])!!}
                                </div>
                                <div class = "form-group">
                                    {!!Form::submit('Update', ['class'=>'btn btn-primary'])!!}
                                </div>

                            </div>
                            {!! Form::close() !!}


                        </div>
                        </div><!-- /end .Edit info -->
                    </div>  <!-- /.tab-pane -->
                </div> <!-- /.tab-content -->
            </div>  <!-- /.nav-tabs-custom -->
        </div> <!-- /.col -->
    </div><!--main-->

@endsection
