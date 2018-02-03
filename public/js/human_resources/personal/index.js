$(function() {
  $('#personal-table').DataTable({
    processing: true,
    serverSide: true,
    search: {
      caseInsensitive: false
    },

    ajax: '/personal/add-edit-remove-column-data',

    columns: [

      { data: 'id', name: 'id' },
      { data: 'id_number', name: 'id_number' },
      { data: 'name', name: 'name' },
      { data: 'contactNumber', name: 'contactNumber'},
      { data: 'email', name: 'email'},
      {data: 'action', name: 'action', orderable: false, searchable: false},

    ]
  });
});
/**
 * Created by Popoy on 12/19/2017.
 */
