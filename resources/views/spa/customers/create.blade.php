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
                    <h3 class="box-title">Create New Customer Record</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">

                    @include('includes.form_error')


                    {!! Form::open(['method'=>'POST', 'action'=>'CustomersController@store', 'files'=> true])!!}

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
                        {!!Form::submit('Create Customer', ['class'=>'btn btn-primary'])!!}
                    </div>

                    {!! Form::close() !!}
                </div>
            </div> <!-- /.box-body -->
        </div>
    </div>  <!-- /.box -->
    <!--</div>-->
@endsection
