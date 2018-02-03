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
                    <h3 class="box-title">Create New Department</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">

                    @include('includes.form_error')


                    {!! Form::open(['method'=>'POST', 'action'=>'DepartmentController@store', 'files'=> true])!!}


                    <div class = "col-lg-6">
                        <div class="form-group">
                            {!!Form::label('name', 'Name')!!}
                            {!!Form::text('name', null, ['class'=>'form-control'])!!}
                        </div>
                    </div>

                    <div class = "col-lg-6 center">
                        <div class="form-group">
                            {!!Form::label('description', 'Description')!!}
                            {!!Form::text('description', null, ['class'=>'form-control'])!!}
                        </div>
                    </div>
                    <div class ="col-md-3 text-right pull-right">
                        <div class = "form-group">
                            {!!Form::submit('Create Department', ['class'=>'btn btn-success'])!!}
                        </div>
                    </div>

                    {!! Form::close() !!}
                </div>
            </div> <!-- /.box-body -->
        </div>
    </div>  <!-- /.box -->
    <!--</div>-->
@endsection
