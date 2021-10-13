<?php 
    session_start();
    include('server.php');

    $errors = array();

    if (isset($_POST['reg_user'])){
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
        $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);
        $f_name = mysqli_real_escape_string($conn, $_POST['f_name']);
        $l_name = mysqli_real_escape_string($conn, $_POST['l_name']);
        $userGroup = mysqli_real_escape_string($conn, $_POST['userGroup']);
        $status = mysqli_real_escape_string($conn, $_POST['status']);
    
        if(empty($username)){
            array_push($errors,"Username is required");
        }
        if(empty($password_1)){
            array_push($errors,"Password is required");
        }
        if(empty($f_name)){
            array_push($errors,"Firstname is required");
        }
        if(empty($l_name)){
            array_push($errors,"Lastname is required");
        }
        if($password_1 != $password_2){
            array_push($errors, "The two passwords do not match");
        }
        
        $user_check_query = "SELECT * FROM user WHERE username = '$username'";
        $query = mysqli_query($conn,$user_check_query);
        $result = mysqli_fetch_assoc($query);

        if ($result){ // if user exists
            if ($result['username'] === $username){
                array_push($errors,"Username already exists");
            }
        }
        if(count($errors)== 0){
            $password = md5($password_1);

            $sql ="INSERT INTO user (username, password,f_name, l_name, userGroup,status ) VALUES ('$username','$password_1','$f_name','$l_name','$userGroup','$status')";
            $result = mysqli_query($conn,$sql);


            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            echo '
            <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
            ';		
            echo '
            <script>
                setTimeout(function() {
                swal({
                        title: "Login success",
                        text: "Successfuly register",
                        type: "success"
                    }, function() {
                    window.location = "index.php";
                });
                }, 100);
            </script>
            ';
        }
    }   
?>