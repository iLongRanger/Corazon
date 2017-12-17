
  $(function() {
    $('#roles-table').DataTable({
      processing: true,
      serverSide: true,
      search: {
        caseInsensitive: true
      },
      ajax: 'http://vifi.dev/roles/add-edit-remove-column-data',
      columns: [
          {data: 'id', name: 'id'},
          {data: 'name', name: 'name'},
          {data: 'email', name: 'email'},
          {data: 'created_at', name: 'created_at'},
          {data: 'updated_at', name: 'updated_at'},
          {data: 'action', name: 'action', orderable: false, searchable: false}
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


