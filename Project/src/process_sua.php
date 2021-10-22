<?php
    if(isset($_POST['btnLuu'])) {
        $id = $_GET['id'];
        $license_no= $_POST['license_no'];
        $model = $_POST['model'];
        $year= $_POST['year'];
        $ctype = $_POST['ctype'];
       $drate = $_POST['drate'];
       $wrate= $_POST['wrate'];
       $status= $_POST['status'];
        
            
        include './config.php';
        $sql = "UPDATE CARS SET license_no ='$license_no',model='$model',year='$year',ctype='$ctype',drate='$drate',wrate='$wrate',status='$status',
        WHERE vehicle_id = '$id'";
        echo $sql;
    
        $result_update = mysqli_query($conn, $sql);
        if($result_update) 
        {
           header("Location:index.php");
        }
        else {
            echo'them k thanh cong';
            // header("Location:error.php");
        }
    }     
?> 