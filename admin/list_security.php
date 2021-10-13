<?php 
    // Create connection
    $connect = new mysqli('localhost', 'root', '', 'register_system');

    // Check Connection

    if ($connect->connect_error) {
        die("Something wrong.: " . $connect->connect_error);
      }

    $sql = "SELECT * FROM user WHERE userGroup= 'Security'";
    $result = $connect->query($sql);

?>
<table id="example1" class="table table-bordered  table-hover table-striped">
  <thead>
    <tr class="danger">
      <th><center>ID</center></th>
      <th>USERNAME</th>
      <th>f_name</th>
      <th>l-name</th>
      <th>car_position</th>
      <th>status</th>
      <th>action</th>
    </tr>
  </thead> 
    <tbody>
                <?php while($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['user_id']; ?></td>
                        <td><?php echo $row['username'];?></td>
                        <td><?php echo $row['f_name']; ?></td>
                        <td><?php echo $row['l_name']; ?></td>
                        <td><?php echo $row['car_position']; ?></td>
                        <td>
                          <?php 
                          
                          $st = $row['status']; 

                          if($st == "Y"){
                            echo "<font style='color:green'>ยืนยันสำเร็จ</font> " ;
                          }
                          else if($st == "N"){
                            echo "<font style='color:blue'>รอยืนยัน</font> " ;
                          }
                          else if($st == "B"){
                            echo "<font style='color:red'>ระงับการใช้งาน</font> " ;
                          }

                          ?>
                      </td>
                        <td><a href="delete_user.php?ID=<?php  echo  $row['user_id'] ;?>" class="btn btn-danger btn-sm" onclick="return confirm('ยันยันการลบ')">ลบ</a>
                          <a href="index_edit_Security.php?ID=<?php  echo  $row['user_id'] ;?>" class="btn btn-warning btn-sm">เเก้ไข</a>
                         <?php  if($st == "Y"){ ?>
                           
                           <a href="ban.php?ID=<?php  echo  $row['user_id'] ;?>" class="btn btn-danger btn-sm" onclick="return confirm('ยืนยัน')">ระงับบัญชี</a> 
                       <?php  }  
                         else if($st == "N"){?>
                          <a href="success.php?ID=<?php  echo  $row['user_id'] ;?>" class="btn btn-success btn-sm" onclick="return confirm('ยืนยัน')">ยืนยันเข้าระบบ</a>
                      <?php   } 
                      else if($st == "B"){?>
                        <a href="success.php?ID=<?php  echo  $row['user_id'] ;?>" class="btn btn-success btn-sm" onclick="return confirm('ยืนยัน')">ยืนยันเข้าระบบ</a>
                    <?php   } ?>
                        </td>
                    </tr>
                <?php endwhile ?>
    </tbody>
</table>