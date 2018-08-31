<?php
/**
 * Created by PhpStorm.
 * User: athira
 * Date: 20/8/18
 * Time: 4:57 PM
 */ ?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <style>
        #example {
        }
    </style>
</head>
<body>

<table id="example" class="display" style="width:100%">
    <thead>

    </thead>
    <tbody></tbody><tr>
        <th>ID</th>
        <th>Data</th>
        <th>Created</th>
        <th>Updated</th>

    </tr>
</table>
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
<script type="text/javascript" charset="utf8"
        src="http://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script>
    $(function () {
        $("#example").DataTable({
            processing:true,
            serverSide: true,
            paging: true,
            pageLength: 2,
            ajax: {
                url: '/load',
                type: 'GET',
                dataSrc:'mydata',
            },
            columns: [
                {data: 'id'},
                {data: 'data'},
                {data: 'created_at'},
                {data: 'updated_at'},
            ],



        });
    })

</script>