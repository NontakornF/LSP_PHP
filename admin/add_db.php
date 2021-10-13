<?php 

error_reporting( error_reporting() & ~E_NOTICE );

include('condb.php');

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
// exit;



$name =  mysqli_real_escape_string($conn,$_POST['name']);


$sql ="INSERT INTO car_position  (name) VALUES('$name') ";
    
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    echo '
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    ';		
    if($result){
      echo '
      <script>
         setTimeout(function() {
        swal({
          title: "สำเร็จ",
          type: "success"
        }, function() {
          window.location = "position.php";
        });
      }, 100);
    </script>
    ';
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('ไม่สำเร็จ');";
  echo "window.location = 'position.php?act=edit'; ";
  echo "</script>";
  }
?>  