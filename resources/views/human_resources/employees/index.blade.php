@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection

@section('main-content')

    
    @if(Session::has('deleted_employee'))

        <p class="alert alert-danger">{{session('deleted_employee')}}</p>
    @endif

    @if(Session::has('created_employee'))

        <p class="alert alert-success">{{session('created_employee')}}</p>
    @endif

    @if(Session::has('updated_employee'))

        <p class="alert alert-warning">{{session('updated_employee')}}</p>
    @endif

           

    <div class="container-fluid spark-screen text-black">
        
        <div class="row">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h4 class="text-black">Employee List</h4>
                    <p class="small col-md-3"> Click on data to view or make changes.</p>
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
                                            <table id="employee-table" class="table table-striped">
                                                <thead>
                                                <tr>
                                                    <th>Record No.</th>
                                                    <th>Employee Id</th>
                                                    <th>First Name</th>
                                                    <th>Middle Name</th>
                                                    <th>Last Name</th>
                                                    <th>Phone Number</th>
                                                    <th>Email Address</th>
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
        $('#employee-table').DataTable({
            processing: true,
            serverSide: true,
            search: {
                caseInsensitive: false
            },

            ajax: 'http://cims.dev/employees/datatable',

            columns: [
                { data: 'id', name: 'id' },
                { data: 'employeeid', name: 'employeeid' },
                { data: 'firstname', name: 'firstname' },
                { data: 'middlename', name: 'middlename' },
                { data: 'lastname', name: 'lastname' },
                //{ data: function (data,type,dataToset){return data.lastname+ " "+ data.firstname+", "+data.middlename;}},
                { data: 'phone', name: 'phone' },
                { data: 'email', name: 'email' },


            ]
        });
    });

    $(document).ready(function() {
        var table = $('#employee-table').DataTable();


        $('#employee-table tbody').on( 'click', 'tr', function () {
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
            link = 'employees/edit/' + custString;
            window.location = link;

        } );
    });

</script>


@endpush


