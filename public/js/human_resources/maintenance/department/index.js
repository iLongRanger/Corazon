$(function() {
  $('#department-table').DataTable({
    processing: true,
    serverSide: true,
    search: {
      caseInsensitive: true
    },

    ajax: '/departments/add-edit-remove-column-data',

    columns: [

      { data: 'id', name: 'id' },
      { data: 'name', name: 'name' },
      { data: 'description', name: 'description' },
      {data: 'action', name: 'action', orderable: false, searchable: false},

    ]
  });
});
