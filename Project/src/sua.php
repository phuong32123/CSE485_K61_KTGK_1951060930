<?php
    include 'header.php';
    include 'config.php';
    $id = $_GET['id'];
    $sql = "SELECT * from  CARS where vehicle_id = '$id'";
    $result_current = mysqli_query($conn, $sql);
    $row_current = mysqli_fetch_assoc($result_current);
?>
<main class= "container mt-5 ">
    <h2 class="mb-3">Nhập thông tin xe:</h2>
    <form action="" method="post">
        
    <div class="mb-3 row">
            <label for="vehicle_id" class="col-sm-2 col-form-label">Mã phương tiện  </label>
            <div class="col-sm-10">
                <input type="text" disabled value="<?php echo $row_current['vehicle_id'] ?>" class="form-control" id="vehicle_id" name="vehicle_id">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="license_no" class="col-sm-2 col-form-label">Biển số xe </label>
            <div class="col-sm-10">
                <input type="text" value="<?php echo $row_current['license_no'] ?>" class="form-control" id="bd_name" name="license_no">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="model" class="col-sm-2 col-form-label">Model </label>
            <div class="col-sm-10">
                <input type="text" value="<?php echo $row_current['model'] ?>" class="form-control" id="model" name="model">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="year" class="col-sm-2 col-form-label">Năm sản xuất </label>
            <div class="col-sm-10">
                <input type="date" value="<?php echo $row_current['year'] ?>" class="form-control" id="year" name="year">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="ctype" class="col-sm-2 col-form-label">Kiểu oto </label>
            <div class="col-sm-10">
                <input type="text" value="<?php echo $row_current['ctype'] ?>" class="form-control" id="ctype" name="ctype">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="drate" class="col-sm-2 col-form-label">Giá cho thuê theo ngày </label>
            <div class="col-sm-10">
                <input type="text" value="<?php echo $row_current['drate'] ?>" class="form-control" id="drate" name="drate">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="wrate" class="col-sm-2 col-form-label">Gía cho thuê theo tháng </label>
            <div class="col-sm-10">
                <input type="text" value="<?php echo $row_current['wrate'] ?>" class="form-control" id="wrate" name="wrate">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="status" class="col-sm-2 col-form-label">Trạng thái </label>
            <div class="col-sm-10">
                <input type="text" value="<?php echo $row_current['status'] ?>" class="form-control" id="status" name="status">
            </div>
        </div>
        

        <div class="mb-3 row">
            <button name="btnLuu" type="submit" class="btn btn-success">Lưu lại</button>
        </div>
        <?php
                        $sql = 'select * from CARS ';
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            echo '<option value="'.$row_current['vehicle_id'].'">'.$row_current['license_no'].'</option>';
                            while ($row = mysqli_fetch_assoc($result)) {
                                if($row['vehicle_id'] == $row_current['license_no']) {
                                    echo null;
                                } else {
                                    echo '<option value="'.$row['vehicle_id'].'">'.$row['license_no'].'</option>';
                                }
                            }
                        }
                    ?>
    </form>
</main>
<?php
    include 'footer.php';
?>

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