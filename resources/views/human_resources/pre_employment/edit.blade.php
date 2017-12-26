@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection

@section('main-content')

    <div class="container-fluid spark-screen text-black ">
        <div class="row">
            <!-- Default box -->
            <div class="box  box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">View/Update Record of {{$pre_employment->name}}</h3>
                    @include('includes.form_error')
                    {!! Form::model($pre_employment, ['method'=>'PATCH', 'action'=>['PreEmploymentController@update', $pre_employment->id], 'files'=> true])!!}
                    <div class="box-body">
                        <div class = 'row'>
                            <div class = 'col-md-6'>
                               {{$pre_employment->application->file}}

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
