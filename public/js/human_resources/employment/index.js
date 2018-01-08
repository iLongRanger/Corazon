/**
 * Created by Popoy on 1/8/2018.
 */
$(function() {
  $('#employment').DataTable({
    processing: true,
    serverSide: true,
    search: {
      caseInsensitive: false
    },

    ajax: 'http://vifi.local.com/employment/datatable',

    columns: [

      { data: 'id', name: 'id' },
      { data: 'name', name: 'name' },
      { data: 'department_id', name: 'department_id' },
      { data: 'role_id', name: 'role_id'},

    ]
  });
});

$(document).ready(function() {
  var table = $('#employent').DataTable();


  $('#employment tbody').on( 'click', 'tr', function () {
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
    link = 'employment/edit/' + custString;
    window.location = link;

  } );
});/**
 * Created by Popoy on 12/19/2017.
 */
