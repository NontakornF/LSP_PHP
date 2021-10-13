<?php  include('condb.php');

$cp_id = $_GET['cp_id'];


$sql="SELECT * FROM car_position WHERE cp_id=$cp_id";
$result = mysqli_query($conn,$sql);
$rowp = mysqli_fetch_array($result);



?>


<div class="container">
<div class="col-md-12">
    <form name="register" action="edit_db.php" method="POST" enctype="multipart/form-data"
        class="form-horizontal">
        <div class="form-group">
            <div class="col-sm-2"> </div>
            <div class="col-sm-12" align="left">
                <h4 class="text-center"> add position</h4>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-2" align="">position:</div>
            <div class="col-sm-12" align="left">
                <input name="name" type="text" required class="form-control" value="<?php echo  $rowp['name'];  ?>">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-2"> </div>
            <div class="col-sm-12" align="right">
                <input type="hidden" name="cp_id" id="" value="<?php echo $cp_id;  ?>">
                <button type="submit" class="btn btn-success btn-flat" id="btn"><span class="glyphicon glyphicon-saved"></span>
                    บันทึก
                </button> <a href="position.php" type="button" class="btn btn-danger btn-flat" id="btn"><span
                        class="glyphicon glyphicon-saved"></span> ยกเลิก </a>
            </div>
        </div>
    </form>
</div>
</div>