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

    ajax: '/employment/add-edit-remove-column-data',

    columns: [

      { data: 'id', name: 'id' },
      { data: 'name', name: 'name' },
      { data: 'department_id', name: 'department_id' },
      { data: 'position_id', name: 'position_id'},
      {data: 'action', name: 'action', orderable: false, searchable: false},
    ]
  });
});
/**
 * Created by Popoy on 12/19/2017.
 */
