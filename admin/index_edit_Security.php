<?php 
$menu = "product"

?>
<title>Admin license_plates</title>

<?php include("header.php"); 
      include("condb.php");
      
      $user_id = $_GET['ID'];

      $sql ="SELECT * FROM user WHERE user_id=$user_id";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result);
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
            <h2>Edit User</h2>
    </div>

    <form action="edit_user.php" method="post">
        <div class="input-group">
            <label for="user_id">User_id</label>
            <input type="text"name="user_id"value="<?php echo $row['user_id']; ?>"readonly>
        </div>
        <div class="input-group">
            <label for="username">Username</label>
            <input type="username"name="username"value="<?php echo $row['username']; ?>"required>
        </div>
        <div class="input-group">
            <label for="password">Password</label>
            <input type="password"name="password"value="<?php echo $row['password']; ?>"required>
        </div>
        <div class="input-group">
            <label for="firstname">Firstname</label>
            <input type="firstname"name="f_name"value="<?php echo $row['f_name']; ?>"required>
        </div>
        <div class="input-group">
            <label for="lastname">Lastname</label>
            <input type="lastname"name="l_name"value="<?php echo $row['l_name']; ?>"required>
        </div>
        <div class="input-group">
            <button class="btn">ENTER</button>
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
    // http://fordev22.com/
    // });
});
</script>