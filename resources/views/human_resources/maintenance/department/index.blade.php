@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection

@section('scripts')
    @parent
    <script src="/js/human_resources/maintenance/department/index.js"></script>
@endsection

@section('main-content')

    @if(Session::has('deleted_department'))

        <p class="alert alert-danger">{{session('deleted_department')}}</p>
    @endif

    @if(Session::has('created_department'))

        <p class="alert alert-success">{{session('created_department')}}</p>
    @endif

    @if(Session::has('updated_department'))

        <p class="alert alert-warning">{{session('updated_department')}}</p>
    @endif




    <div class="container-fluid spark-screen text-black">
        <div class="row">
            <!--<div class="col-md-8 col-md-offset-2">-->

            <!-- Default box -->
            <div class="box box-primary">
                <div class="box-header with-border">
                <h4 class="text-black">Department List</h4>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fa fa-times"></i></button>
                </div>
            </div>
                <div class="col-lg-2 pull-left">
                    <a href="/departments/create">
                    <button type="button" class="btn btn-block btn-success">
                        <i class="fa fa-plus"></i>
                        <span>Create new</span>
                    </button>
                    </a>
                </div>


                <div class="box-body">

                    <div class="row">
                        <div class="col-lg-12">
                            <div>
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <table id="department-table" class="table table-striped table-bordered">
                                                <thead>
                                                <tr>
                                                    <th >No.</th>
                                                    <th >Name</th>
                                                    <th >Description</th>
                                                    <th >Actions</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                </tbody>
                                            </table>
                                        </div><!-- /.col -->
                                    </div><!-- /.row -->
                                </div><!-- ./box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>

@endsection


