$(document).ready(function () {
    $(document).ready(function() {
        // Server side processing script for wallpapers listing in CMS
        oTable = $('#users').DataTable({
            "processing": true,
            "serverSide": true,
            "aaSorting": [[ 0, "desc" ]],
            "ajax": "/user/get_users",
            "columns": [
                {data: 'name', searchable: false},
                {data: 'email'} ,
                {data: 'password'}
            ]
        });
    });

});