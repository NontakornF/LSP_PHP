<?php 
    include('condb.php');
     
        $user_id = $_POST['user_id'];
        $f_name =  $_POST['f_name'];
        $l_name = $_POST['l_name'];
        $cp_id = $_POST['cp_id'];
    
//update data

        $sql ="UPDATE user SET 

        cp_id= '$cp_id'
        
        WHERE user_id = $user_id
        
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