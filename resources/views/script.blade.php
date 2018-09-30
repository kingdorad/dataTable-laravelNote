<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js" ></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
   $('#example').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": "dataTableData",
            "columns": [
            //行數對應JSON欄位個數與名稱
            { "data": "id" },
            { "data": "name" },
            { "data": "phone" },
            { "data": "address" },
            { "data": "birthday" },
            { "data": "created_at" },
            { "data": "updated_at" }
        ],

    } );

});

</script>
