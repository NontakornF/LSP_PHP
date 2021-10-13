<?php
include('condb.php');  

$query55 = "SELECT * FROM car_position ORDER BY cp_id ASC";
$result55 = mysqli_query($conn, $query55);

$i=1;

	
?>

<div class="container">
<h2 class="text-center m-4"> Manage Position</h2>
<div class="d-flex justify-content-end">
<a href="position.php?act=add" class="btn btn-primary btn-flat mt-2 mb-2 col-2">เพิ่ม</a>
</div>
<table class="table table-bordered table-striped datatable  border" align="center">
    <thead>
        <tr class="info">
            <th scope="col">#</th>
            <th class="text-nowrap"scope="col">position</th>
            <th class="text-nowrap"scope="col">action</th>
            
        </tr>
    </thead>
    <?php foreach($result55 as $row_p) { ?>
    <tr>
        <th scope="row"><?php echo $i++ ?></th>
        <td><?php echo $row_p['cp_id']; ?></td>
        <td><?php echo $row_p['name']; ?></td>
        <td>
            <div class="d-flex">
                    <a href="position.php?act=edit&cp_id=<?php echo $row_p['cp_id']; ?>"
                    class="btn btn-warning btn-flat btn-sm"><i class="fas fa-edit"></i></a><a
                    href="position.php?act=delete&ID=<?php echo $row_p['cp_id']; ?>"
                    class="btn btn-danger btn-flat btn-sm" onclick="return confirm('ลบหรือไม่?')"><i class="fas fa-trash-alt"></i></a>
            </div>
        </td>
    </tr>
     <?php }  ?>


</table>
</div>