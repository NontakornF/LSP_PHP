<?php  

include('condb.php');

$cp_id = $_GET['ID'];

$sql="DELETE FROM car_position WHERE cp_id='$cp_id' ";
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
                title: " success",
                text: "Successfuly ",
                type: "success"
            }, function() {
            window.location = "position.php";
        });
        }, 100);
    </script>
    ';
}
?>