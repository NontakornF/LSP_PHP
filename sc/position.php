<?php 
$menu = "product"

?>
<title>Security license_plates</title>

<?php include("header.php"); 
      include("condb.php");
    
    ?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
    </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit User</title>

        <link rel="stylesheet" href="../style.css">
    </head>
    <body>
        
        <div class="header">
            <h2>Select position</h2>
    </div>

    <form action="position_edit.php" method="post">
        <div class="input-group">
            <label for="user_id">User_id</label>
            <input type="text"name="user_id"value="<?php echo  $_SESSION['user_id']; ?>"readonly>
        </div>
        <div class="input-group">
            <label for="firstname">Firstname</label>
            <input type="firstname"name="f_name"value="<?php echo  $_SESSION['f_name']; ?>"readonly>
        </div>
        <div class="input-group">
            <label for="lastname">Lastname</label>
            <input type="lastname"name="l_name"value="<?php echo  $_SESSION['l_name']; ?>"readonly>
        </div>
        <label for="Position">Position</label>
        <SELECT NAME="car_position" class="form-control">
            <option value="Door1(in)">Door1(in)</option>
            <option value="Door1(out)">Door1(out)</option>
        </SELECT>
        <div class="input-group">
            <button class="btn btn-flat btn-success col-3">ENTER</button>
        </div>
    </form>
    
    </body>
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
    // });
});
</script>