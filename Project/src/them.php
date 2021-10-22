<?php
include 'header.php';
include 'config.php';
?>
<main class= "container mt-5 ">
    <h2 class="mb-3">Nhập thông tin xe:</h2>
    <form action="process_them.php" method="post">
        
        <div class="mb-3 row">
            <label for="license_no" class="col-sm-2 col-form-label">Biển số xe: </label>
            <div class="col-sm-10">
                <input type="text"  class="form-control"  name="license_no">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="model" class="col-sm-2 col-form-label">Model: </label>
            <div class="col-sm-10">
                <input type="text"  class="form-control"  name="model">
            </div>
        </div>
        
        <div class="mb-3 row">
            <label for="year" class="col-sm-2 col-form-label">Năm sản xuất: </label>
            <div class="col-sm-10">
                <input type="date"  class="form-control" name="year">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="ctype" class="col-sm-2 col-form-label">Kiểu ô tô: </label>
            <div class="col-sm-10">
                <input type="text"  class="form-control"  name="ctype">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="drate" class="col-sm-2 col-form-label">Giá cho thuê theo ngày: </label>
            <div class="col-sm-10">
                <input type="text"  class="form-control"  name="drate">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="wrate" class="col-sm-2 col-form-label">Giá cho thuê theo tuần: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control"  name="wrate">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="status" class="col-sm-2 col-form-label">Trạng thái: </label>
            <div class="col-sm-10">
                <input type="text"  class="form-control" name="status">
            </div>
        </div>        
       <div class="mb-3 row">
            <button name="btnLuu" type="submit" class="btn btn-success">Lưu lại</button>
        </div>
    </form>
</main>
<?php
    include 'footer.php';
?>