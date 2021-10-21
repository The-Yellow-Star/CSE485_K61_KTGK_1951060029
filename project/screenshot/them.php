<?php 
$conn = mysqli_connect('localhost', 'root', '', 'dhtl_danhba');
if (!$conn) {
    die("Kết nối thất bại  .Kiểm tra lại các tham số    khai báo kết nối");
}
$sql_dv = "select * from blood_donor";
$result_dv = mysqli_query($conn,$sql_dv);
    if(isset($_POST['them'])) {
        $bd_name= $_POST['bd_name'];
        $bd_sex = $_POST['bd_sex'];
        $bd_age = $_POST['bd_age'];
        $bd_bgroup = $_POST['bd_bgroup'];
        $bd_reg_date = $_POST['bd_reg_date'];
        $bd_phno = $_POST['bd_phno']; 

        $sql_insert = "INSERT into blood_donor(bd_name,bd_sex,bd_age,bd_bgroup,bd_reg_date,bd_phno)
            values ('$bd_name','$bd_sex','$bd_age','$bd_bgroup','$bd_reg_date','$bd_phno')";
            
        mysqli_query($conn,$sql_insert);
        header('location: admin.php');

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <title>Hệ thống quản lý ngân hàng máu</u></title>
</head>
<body>
    <div class ="container-fluid">
        <div class = "row header">
            <div class = "co-md-12">
                <img src="../src/1234.png" alt="" class="img-fluid">
            </div>
        </div>
        <div class = "row nav-menu">
            <div class="col-md-12">
              <nav class=" navbar-light bg-light">
                  <div class="container-fluid">
                  <div class="row">
                  <div class="col-md-12">
                    <ul class="nav justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="admin.php"><i class="fas fa-home"></i>Trang chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="cc.php"></i>Danh sách hiến máu</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="#">Hỗ trợ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ">Hướng dẫn</a>
                        </li>
                    </ul>
                </div>
                </div>
                </div>
              </nav>
            </div>
        </div>
        <div>
    <div class="container">
        <form class="mt-4" method="POST" action="">
            <div class="mb-3">
                <label for="bd_name" class="form-label">Họ và Tên</label>
                <input type="text" name="bd_name" class="form-control" id="bd_name" >
            </div>
            <div class="mb-3">
            <label for="txtSex" class="form-label">Giới tính</label>
                <select class="form-select" name="txtSex" id="txtSex" required>
                    <option value= 0>Nam</option>;
                    <option value= 1>Nữ</option>;
                </select>
            </div>
            <div class="mb-3">
                <label for="bd_age" class="form-label">Tuổi</label>
                <input type="text" name="bd_age" class="form-control" id="bd_age" >
            </div>
            <div class="mb-3">
                <label for="bd_bgroup" class="form-label">Nhóm máu</label>
                <input type="text" name="bd_bgroup" class="form-control" id="bd_bgroup" >
            </div>
            <div class="mb-3">
                <label for="bd_reg_date" class="form-label">Ngày</label>
                <input type="text" name="bd_reg_date" class="form-control" id="bd_reg_date" >
            </div>
            <div class="mb-3">
                <label for="bd_phno" class="form-label">SĐT</label>
                <input type="text" name="bd_phno" class="form-control" id="bd_phno" >
            </div>
            <button type="submit" class="btn btn-primary mt-3 mb-4" name="them">Thêm</button>
        </form>
    </div>
<?php 
include('./footer.php');
?>
