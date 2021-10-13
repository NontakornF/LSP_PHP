<?php 
    include('condb.php');

//exit;

        $LicensePlates_id = mysqli_real_escape_string($conn, $_POST['LicensePlates_id']);
        $LicensePlates = mysqli_real_escape_string($conn, $_POST['LicensePlates']);
        $status = mysqli_real_escape_string($conn, $_POST['status']);
        $time= mysqli_real_escape_string($conn, $_POST['time']);
    
//update data

        $sql ="UPDATE license_plates SET 

          LicensePlates='$LicensePlates'
        
        WHERE LicensePlates_id = $LicensePlates_id
        
        ";

        $result = mysqli_query($conn,$sql);
        
        if($result){
          echo '
          <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
          ';		
          echo '
          <script>
              setTimeout(function() {
              swal({
                      title: " success edit",
                      text: "Successfuly ",
                      type: "success"
                  }, function() {
                  window.location = "index.php";
              });
              }, 100);
          </script>
          ';
      }
?>