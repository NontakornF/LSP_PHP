<?php 
    include('condb.php');

    //echo'pre';
    //print_r($_POST);
    //echo'/pre';
//exit;
        $user_id =  $_POST['user_id'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $f_name = $_POST['f_name'];
        $l_name= $_POST['l_name'];
    
//update data

        $sql ="UPDATE user SET 

        username ='$username',
        password ='$password',
        f_name ='$f_name',
        l_name ='$l_name'
        
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
                      title: " success edit_user",
                      text: "Successfuly ",
                      type: "success"
                  }, function() {
                  window.location = "index_Security.php";
              });
              }, 100);
          </script>
          ';
      }
?>