@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection

@section('main-content')

    @if(Session::has('deleted_customer'))

        <p class="alert alert-danger">{{session('deleted_customer')}}</p>
    @endif

    @if(Session::has('created_customer'))

        <p class="alert alert-success">{{session('created_customer')}}</p>
    @endif

    @if(Session::has('updated_customer'))

        <p class="alert alert-warning">{{session('updated_customer')}}</p>
    @endif

    <div class="container-fluid spark-screen text-black">
        <div class="row">
            <!--<div class="col-md-8 col-md-offset-2">-->

            <!-- Default box -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Customers List</h3>

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
                                            <table id="customers-table" class="table table-striped">
                                                <thead>
                                                <tr>
                                                    <th>Customer No.</th>
                                                    <th>Name</th>
                                                    <th>Contact Number</th>
                                                    <th>Email</th>

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
        $('#customers-table').DataTable({
            processing: true,
            serverSide: true,
            search: {
                caseInsensitive: true
            },

            ajax: 'http://cims.dev/customers/datatable',

            columns: [

                { data: 'id', name: 'Id' },
                { data: 'name', name: 'name' },
                { data: 'contact', name: 'contact' },
                { data: 'email', name: 'email' },

            ]
        });
    });

    $(document).ready(function() {
        var table = $('#customers-table').DataTable();


        $('#customers-table tbody').on( 'click', 'tr', function () {
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
            link = 'customers/edit/' + custString;
            window.location = link;

        } );
    });

</script>


@endpush


