$(function() {
  $('#initials').DataTable({

    processing: true,
    serverSide: true,
    search: {
      caseInsensitive: false
    },

    ajax: 'http://vifi.local.com/pre_employment/datatable',


    columns: [

      { data: 'id', name: 'Id'},
      { data: 'fileNo', name: 'fileNo' },
      { data: 'name', name: 'name' },
      { data: 'status', name: 'status'},
      { data: 'created_at', name: 'created_at'},
      { data: 'updated_at', name: 'updated_at'},



    ]
  });
});


$(document).ready(function() {
  var table = $('#initials').DataTable();


  $('#initials tbody').on( 'click', 'tr', function () {
    if ( $(this).hasClass('selected') ) {
      $(this).removeClass('selected');
    }
    else {
      table.$('tr.selected').removeClass('selected');
      $(this).addClass('selected');
    }
    var custid = $(this).children(":first").text();
    var custString = custid.toString();



    var link;
    link = 'pre_employment/edit/' + custString;
    window.location = link;

  } );
});/**
 * Created by Popoy on 12/19/2017.
 */