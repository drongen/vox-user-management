$(document).ready(function () {
    // Server side processing script for wallpapers listing in CMS
    oTable = $('#users').DataTable({
        "processing": true,
        "serverSide": false,
        "aaSorting": [[2, "desc"]],
        "ajax": "/user/get_users",
        "columns": [
            {data: 'name', searchable: false},
            {data: 'email', orderable: false},
            {data: 'role'},
            {data: 'country'}
        ]
    });

});