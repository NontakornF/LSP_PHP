<?php 
    // Create connection
    $connect = new mysqli('localhost', 'root', '', 'register_system');

    // Check Connection

    if ($connect->connect_error) {
        die("Something wrong.: " . $connect->connect_error);
      }

    $sql = "SELECT * FROM license_plates WHERE status= 'out'";
    $result = $connect->query($sql);

?>
<table id="example1" class="table table-bordered  table-hover table-striped">
  <thead>
    <tr class="danger">
      <th><center>No.</center></th>
      <th>LicensePlates</th>
      <th>status</th>
      <th>imgLicensePlates_FULL</th>
      <th>imgLicensePlates_Crop</th>
      <th>time</th>
      <th>action</th>
    </tr>
  </thead> 
    <tbody>
                <?php while($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['LicensePlates_id']; ?></td>
                        <td><?php echo $row['LicensePlates'];?></td>
                        <td><?php echo $row['status']; ?></td>
                        <td><?php echo '<img style="width: 250px; height: 150px"src="data:image/jpeg;base64,'.base64_encode( $row['img_full'] ).'"/>' ;?></td>
                        <td><?php echo '<img style="width: 250px; height: 90px"src="data:image/jpeg;base64,'.base64_encode( $row['img'] ).'"/>' ;?></td>
                        <td><?php echo $row['time']; ?></td>
                        <td><a href="delete.php?ID=<?php  echo  $row['LicensePlates_id'] ;?>" class="btn btn-danger btn-sm">ลบ</a>
                            <a href="index_edit.php?ID=<?php  echo  $row['LicensePlates_id'] ;?>" class="btn btn-danger btn-sm">เเก้ไข</a></td>
                    </tr>
                <?php endwhile ?>
    </tbody>
</table>