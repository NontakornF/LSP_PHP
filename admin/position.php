<?php 

$menu = "index"

?>
<title>position </title>
<?php include("header.php"); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
    </div><!-- /.container-fluid -->
</section>
<br><br>
<!-- Main content -->
<section class="content"> 
<?php include("navbar.php"); ?>
<?php $act = (isset($_GET['act'])? $_GET['act']: '');
    if($act=="add"){
        include('add_position.php');  
    }
    else if($act=="edit"){
        include('edit_position.php');  
    }
    else if($act=="delete"){
        include('delete_position.php');  
    }
    else{
        include('position_list.php');      
    }

?>
</section>
<!-- /.content -->

<?php include('footer.php'); ?>

<script>
$(function() {
    $(".datatable").DataTable();
    // $('#example2').DataTable({
    //   "paging": true,
    //   "lengthChange": false,
    //   "searching": false,
    //   "ordering": true,
    //   "info": true,
    //   "autoWidth": false,
    // http://fordev22.com/
    // });
});
</script>

</body>

</html>