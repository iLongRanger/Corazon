$(function() {
  $('#personal-table').DataTable({
    processing: true,
    serverSide: true,
    search: {
      caseInsensitive: true
    },

    ajax: 'http://vifi.local.com/personal/datatable',

    columns: [

      { data: 'id', name: 'Id' },
      { data: 'id_number', name: 'id_number' },
      { data: 'name', name: 'name' },
      { data: 'contactNumber', name: 'contactNumber'},
      { data: 'email', name: 'email'},


    ]
  });
});

$(document).ready(function() {
  var table = $('#personal-table').DataTable();


  $('#personal-table tbody').on( 'click', 'tr', function () {
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
    link = 'personal/edit/' + custString;
    window.location = link;

  } );
});/**
 * Created by Popoy on 12/19/2017.
 */
