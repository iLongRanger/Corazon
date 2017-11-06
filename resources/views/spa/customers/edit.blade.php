@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
    <div class="container-fluid spark-screen" xmlns:margin-right="http://www.w3.org/1999/xhtml"
         xmlns:border-radius="http://www.w3.org/1999/xhtml" xmlns:float="http://www.w3.org/1999/xhtml"
         xmlns:height="http://www.w3.org/1999/xhtml">

        <div class="row">
	<div class ="box-header">
            @include('includes.form_error')
            <div class="col-md-3">
                <!-- Profile Image -->
                <div class="box box-primary">
                    <div class="box-body box-profile">
                        <img class=" img-responsive img-rounded" src="{{$customers->photo ? $customers->photo->file:'/img/avatar.png'}}" alt="User profile picture">

                        <h3 class="profile-username text-center text-black">{{$customers->name}}</h3>

                        <p class="text-muted text-center text-black">{{$customers->email}}</p>

                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                                <b>Customer Since</b><span class="pull-right">{{$customers->created_at->diffForHumans()}}</span>
                            </li>
                            <li class="list-group-item">
                                <b>Last changes made</b><span class="pull-right">{{$customers->updated_at->diffForHumans()}}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!-- /.profile pic -->
            <div class="col-md-9">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#personal" data-toggle="tab">Customer History</a></li>
                        <li><a href="#edit" data-toggle="tab">Update Customer Information</a></li>
                        <!-- <li><a href="#password" data-toggle="tab">Change Password</a></li>-->
                    </ul>
                    <div class="tab-content">
                        <!-- /.change personal -->
                        <div class="active tab-pane" id="personal">

                        </div>
                        <!-- /.end personal-->
                        <!-- /.change password -->
                        <div class="tab-pane" id="password">

                        </div>
                        <!-- /.end change pass -->
                        <!-- /.Edit info -->
                        <div class="tab-pane" id="edit">
                            <div class ="box box-info">
                                <br />


                                {!! Form::model($customers, ['method'=>'PATCH', 'action'=>['CustomersController@update', $customers->id], 'files'=> true])!!}

                                <div class="form-group">
                                    {!!Form::label('name', 'Name:')!!}
                                    {!!Form::text('name', null, ['class'=>'form-control'])!!}
                                </div>

                                <div class="form-group">
                                    {!!Form::label('address', 'Address:')!!}
                                    {!!Form::text('address', null, ['class'=>'form-control'])!!}
                                </div>

                                <div class="form-group">
                                    {!!Form::label('contact', 'Contact Number:')!!}
                                    {!!Form::text('contact', null, ['class'=>'form-control'])!!}
                                </div>

                                <div class="form-group">
                                    {!!Form::label('email', 'Email:')!!}
                                    {!!Form::text('email', null, ['class'=>'form-control'])!!}
                                </div>

                                <div class="form-group">
                                    {!!Form::label('photo_id', 'Photo: (200x200px)')!!}
                                    {!!Form::file('photo_id',null , ['class'=>'form-control'])!!}
                                </div>

                                <div class = "form-group">
                                    {!!Form::submit('Update Customer Record' , ['class'=>'btn btn-primary'])!!}
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
