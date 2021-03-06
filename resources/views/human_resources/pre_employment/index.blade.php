@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('scripts')
    @parent
    <script src="/js/human_resources/pre_employment/index.js"></script>
@endsection

@section('main-content')



    @if(Session::has('deleted_employee'))

        <p class="alert alert-danger">{{session('deleted_employee')}}</p>
    @endif

    @if(Session::has('created'))

        <p class="alert alert-success">{{session('created')}}</p>
    @endif

    @if(Session::has('updated'))

        <p class="alert alert-warning">{{session('updated')}}</p>
    @endif

    <div class="container-fluid spark-screen text-black">

        <div class="row">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h4 class="text-black">Pre-employment Requirements Records</h4>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">

                    <div class="row">
                        <div class="col-lg-12">
                            <div    >
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <table id="initials" class="table table-striped table-hover">
                                                <thead>
                                                <tr>
                                                    <th>No.</th>
                                                    <th>File Number</th>
                                                    <th>Record Owner</th>
                                                    <th>Received Date</th>
                                                    <th>Updated at</th>
                                                    <th>Actions</th>
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

