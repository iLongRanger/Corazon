@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
    <div class="row">
        <div class ="box-header">
            @include('includes.form_error')
            <div class="col-md-3">
                <!-- Profile Image -->
                <div class="box box-info">
                    <div class="box-body box-profile">
                        <img class=" img-responsive img-rounded" src="{{$personal->photo ? $personal->photo->file:'/img/avatar.png'}}" alt="User profile picture">

                        <h3 class="profile-username text-center text-black">{{$personal->name}}</h3>

                        <p class="text-muted text-center text-black">{{$personal->email}}</p>

                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                                <b>Record Since</b><span class="pull-right">{{$personal->created_at->diffForHumans()}}</span>
                            </li>
                            <li class="list-group-item">
                                <b>Last changes made</b><span class="pull-right">{{$personal->updated_at->diffForHumans()}}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!-- /.profile pic -->
    <div class="col-lg-1">
    </div>

    <div class="container-fluid spark-screen text-black col-md-9">
        <div class="row">
            <!-- Default box -->
            <div class="box  box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">View/Update Record</h3>
                    @include('includes.form_error')
                    {!! Form::model($personal, ['method'=>'PATCH', 'action'=>['PersonalController@update', $personal->id], 'files'=> true])!!}
                    <div class="box-body">
                        <div class = 'row'>

                            <div class = 'col-md-3'>
                                <div class="form-group">
                                    {!!Form::label('id_number', 'Identification Number')!!}
                                    {!!Form::text('id_number', null, ['class'=>'form-control','placeholder'=>'DepartmentCode-Year-RecordNumber'])!!}
                                </div>
                            </div>
                            <div class = 'col-lg-5'>
                                <div class="form-group">
                                    {!!Form::label('name', 'Name')!!}
                                    {!!Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Last name, First Name, Middle name'])!!}
                                </div>
                            </div>
                            <div class = 'col-lg-3'>
                                <div class="form-group col-md-4">
                                    {!!Form::label('photo_id', 'Photo')!!}
                                    {!!Form::file('photo_id',null , ['class'=>'form-control', 'placeholder'=>'upload a new one'])!!}
                                </div>
                            </div>
                        </div>
                        <div class ='row'>
                            <div class = 'col-md-3'>
                                <div class="form-group">
                                    {!!Form::label('contactNumber', 'Contact Number:')!!}
                                    {!!Form::text('contactNumber', null, ['class'=>'form-control', 'placeholder'=>'0000-0000-000'])!!}
                                </div>
                            </div>
                            <div class = 'col-md-9'>
                                <div class="form-group">
                                    {!!Form::label('address', 'Complete Address:')!!}
                                    {!!Form::text('address', null, ['class'=>'form-control', 'placeholder'=>'Complete Address'])!!}
                                </div>
                            </div>
                        </div>
                        <div class ="row">
                            <div class = 'col-lg-3'>
                                <div class="form-group">
                                    {!!Form::label('birthday', 'Date of birth:')!!}
                                    {!!Form::text('birthday', null, ['class'=>'form-control'])!!}
                                </div>
                            </div>
                            <div class = 'col-lg-9'>
                                <div class="form-group">
                                    {!!Form::label('email', 'Email Address:')!!}
                                    {!!Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'example@host.com'])!!}
                                </div>
                            </div>
                        </div>
                        <div class="row pull-right">
                            <div class = "form-group col-md-3">
                                {!!Form::submit('Update Record', ['class'=>'btn btn-warning'])!!}
                            </div>

                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
