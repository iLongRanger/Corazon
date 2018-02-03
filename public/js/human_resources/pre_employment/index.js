$(function() {
  $('#initials').DataTable({

    processing: true,
    serverSide: true,
    search: {
      caseInsensitive: false
    },

    ajax: '/pre_employment/add-edit-remove-column-data',


    columns: [

      { data: 'id', name: 'id'},
      { data: 'fileNo', name: 'fileNo' },
      { data: 'name', name: 'name' },
      { data: 'created_at', name: 'created_at'},
      { data: 'updated_at', name: 'updated_at'},
      {data: 'action', name: 'action', orderable: false, searchable: false},


    ]
  });
});


/**
 * Created by Popoy on 12/19/2017.
 */