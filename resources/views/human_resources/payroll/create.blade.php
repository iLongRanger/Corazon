@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection

@section('scripts')
    @parent
    <script src="/js/human_resources/payroll/create.js"></script>
@endsection


@section('main-content')
    <div class="container-fluid spark-screen text-black">
        <div class="row">
            <!--<div class="col-md-8 col-md-offset-2">-->

            <!-- Default box -->
            <div class="box  box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Create New Payroll</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    @include('includes.form_error')
                    {!! Form::open(['method'=>'POST', 'action'=>'PayrollController@store', 'files'=> true])!!}
                        <div class = 'col-lg-3'>
                            <div class="form-group">
                                {!!Form::label('payroll_no', 'Payroll Number')!!}
                                {!!Form::text('payroll_no', null, ['class'=>'form-control', 'placeholder'=>'0000-0000-000', ])!!}
                            </div>
                            <div class="form-group">
                                {!!Form::label('name', 'For Applicant')!!}
                                {!!Form::select('name', [''=>'Choose an Employee'] + $employment, null, ['class'=>'form-control'])!!}
                            </div>
                            <div class="form-group">
                                {!!Form::label('salary', 'Salary')!!}
                                {!!Form::text('salary' , null , ['class'=>'form-control', 'disabled'])!!}
                            </div>

                        </div>
                    <div class = "form-group pull-right">
                        {!!Form::submit('Create Payroll', ['class'=>'btn btn-success'])!!}
                    </div>

                    {!! Form::close() !!}
                </div>
            </div> <!-- /.box-body -->
        </div>
    </div>  <!-- /.box -->
    <!--</div>-->
@endsection
