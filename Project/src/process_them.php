<?php
   include 'config.php';//Nhớ
   $Bienso= $_POST['license_no'];
   $Model = $_POST['model'];
   $Nam= $_POST['year'];
   $Kieu = $_POST['ctype'];
   $Giatheongay = $_POST['drate'];
   $Giatheotuan= $_POST['wrate'];
   $Trangthai= $_POST['status'];
    //Bước 2: 
    $sql = "INSERT INTO CARS ( license_no, model, year, ctype, drate , wrate, status)
    VALUES ('$Bienso','$Model','$Nam','$Kieu','$Giatheongay','$Giatheotuan','$Trangthai')";
     $result = mysqli_query($conn, $sql);
    // //Bước 3 
     if($result >0 ){
         header("Location:index.php");
     }else{
         echo "lỗi";
    }
    //Buwosc4: Đóng kết nối
    mysqli_close($conn);

?>