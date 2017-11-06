@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection

@section('main-content')

    @if(Session::has('deleted_user'))

        <p class="alert alert-danger">{{session('deleted_user')}}</p>
    @endif

    @if(Session::has('created_user'))

        <p class="alert alert-success">{{session('created_user')}}</p>
    @endif

    @if(Session::has('updated_user'))

        <p class="alert alert-warning">{{session('updated_user')}}</p>
    @endif

    <div class="container-fluid spark-screen text-black">
        <div class="row">
            <!--<div class="col-md-8 col-md-offset-2">-->

                <!-- Default box -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">System Users</h3>

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
                                                <table id="users-table" class="table table-striped">
                                                    <thead>
                                                    <tr>


                                                        <th>User Number</th>
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Created At</th>
                                                        <th>Updated</th>

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
            $('#users-table').DataTable({
                processing: true,
                serverSide: true,
                search: {
                    caseInsensitive: true
                },


                ajax: 'http://cims.dev/users/datatable',



                columns: [

                    
                    { data: 'id', name: 'id' },
                    { data: 'name', name: 'name' },
                    { data: 'email', name: 'email' },
                    { data: 'created_at', name: 'created_at'     },
                    { data: 'updated_at', name: 'updated_at' }





                ]
            });
        });

      $(document).ready(function() {
        var table = $('#users-table').DataTable();


        $('#users-table tbody').on( 'click', 'tr', function () {
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
          link = 'users/edit/' + custString;
          window.location = link;

        } );
      });

    </script>

    <script>
      $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
      });

    </script>

@endpush


