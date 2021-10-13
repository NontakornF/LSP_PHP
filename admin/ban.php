<meta charset="UTF-8">
<?php 
include('condb.php'); 

$user_id = $_GET["ID"];

$sql = "UPDATE user SET 
status ='B' WHERE user_id=$user_id ";
$result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());

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
                          window.location = "index_Security.php";
                      });
                      }, 1000);
                  </script>
                  ';
                }else{
                  echo '
                  <script>
                      setTimeout(function() {
                      swal({
                              title: "ไม่สำเร็จ  !!",
                              type: "warning"
                          }, function() {
                          window.location = "index_Security.php";
                      });
                      }, 1000);
                  </script>
                  ';

                }

?>