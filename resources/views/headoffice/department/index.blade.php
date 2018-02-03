@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
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
                    <h3 class="box-title">Departments</h3>

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
                            <div>
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <table id="department-table" class="table table-striped">
                                                <thead>
                                                <tr>
                                                    <th>Department No.</th>
                                                    <th>Name</th>
                                                    <th>Description</th>
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

@stack('scripts')
@push('scripts')
<script type="text/javascript">
    $(function() {
        $('#department-table').DataTable({
            processing: true,
            serverSide: true,
            search: {
                caseInsensitive: true
            },

            ajax: 'http://vifi.dev/departments/datatable',

            columns: [

                { data: 'id', name: 'Id' },
                { data: 'name', name: 'name' },
                { data: 'description', name: 'description' },

            ]
        });
    });

    $(document).ready(function() {
        var table = $('#department-table').DataTable();


        $('#department-table tbody').on( 'click', 'tr', function () {
            if ( $(this).hasClass('selected') ) {
                $(this).removeClass('selected');
            }
            else {
                table.$('tr.selected').removeClass('selected');
                $(this).addClass('selected');
            }
            var custid = $(this).children(":first").text();
            var custString = custid.toString();

            // var custidFix = custString.substr(0, custString.indexOf(','));



            var link;
            link = 'departments/edit/' + custString;
            window.location = link;

        } );
    });

</script>


@endpush


