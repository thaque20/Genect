<html>
<body>
<button id="export" data-export="export">Export</button>
<?php include 'data.php'; ?>

<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="jquery.tabletoCSV.js"></script>
<script>
    $("#export").click(function(){
         $("table").tableToCSV();
    });

</script>
</body>
</html>