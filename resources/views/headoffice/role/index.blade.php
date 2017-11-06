@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection

@section('main-content')

    @if(Session::has('deleted_role'))

        <p class="alert alert-danger">{{session('deleted_role')}}</p>
    @endif

    @if(Session::has('created_role'))

        <p class="alert alert-success">{{session('created_role')}}</p>
    @endif

    @if(Session::has('updated_role'))

        <p class="alert alert-warning">{{session('updated_role')}}</p>
    @endif

    <div class="container-fluid spark-screen text-black">
        <div class="row">
            <!--<div class="col-md-8 col-md-offset-2">-->

            <!-- Default box -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Roless</h3>

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
                                            <table id="roles-table" class="table table-striped">
                                                <thead>
                                                <tr>
                                                    <th>Role No.</th>
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
        $('#roles-table').DataTable({
            processing: true,
            serverSide: true,
            search: {
                caseInsensitive: true
            },

            ajax: 'http://cims.dev/roles/datatable',

            columns: [

                { data: 'id', name: 'Id' },
                { data: 'name', name: 'name' },
                { data: 'description', name: 'description' },

            ]
        });
    });

    $(document).ready(function() {
        var table = $('#roles-table').DataTable();


        $('#roles-table tbody').on( 'click', 'tr', function () {
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
            link = 'roles/edit/' + custString;
            window.location = link;

        } );
    });

</script>


@endpush


