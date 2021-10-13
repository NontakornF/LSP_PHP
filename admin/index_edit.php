<?php 
$menu = "product"

?>
<title>Admin license_plates</title>
<?php 
    include("condb.php"); 
    include("header.php"); 

$LicensePlates_id = $_GET['ID'];

//echo $LicensePlates_id;
$sql ="SELECT * FROM license_plates WHERE LicensePlates_id=$LicensePlates_id";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);

//print_r($row);

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
            <h2>Edit LicensePlates</h2>
    </div>
                    <form action="edit_lsp.php" method="post">
                        <div class="input-group">
                            <label for="LicensePlates_id">LicensePlates_id</label>
                            <input type="text"name="LicensePlates_id" value="<?php echo $row['LicensePlates_id']; ?>" readonly >
                        </div>
                        <div class="input-group">
                            <label for="LicensePlates">LicensePlates</label>
                            <input type="text"name="LicensePlates" value="<?php echo $row['LicensePlates']; ?>" >
                        </div>
                        <div class="input-group">
                            <label for="status">status</label>
                            <input type="text"name="status" value="<?php echo $row['status']; ?>" readonly >
                        </div>
                        <div class="input-group">
                            <label for="img_full">img_full</label>
                            <br>
                            <?php echo '<img style="width: 250px; height: 150px"src="data:image/jpeg;base64,'.base64_encode( $row['img_full'] ).'"/>' ;?>
                        </div>
                        <div class="input-group">
                            <label for="img">img</label>
                            <br>
                            <?php echo '<img style="width: 250px; height: 90px"src="data:image/jpeg;base64,'.base64_encode( $row['img'] ).'"/>' ;?>
                        </div>
                        <div class="input-group">
                            <label for="time">time</label>
                            <input type="text"name="time" value="<?php echo $row['time']; ?>" readonly >
                        </div>
                        <br>
                        <button class="btn">  SAVE  </button>
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