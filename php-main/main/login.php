<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qlnv";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$email = $_POST['email'];
$pass = $_POST['pass'];
if($email==""||$pass==""){
      echo "<script>window.location='http://localhost/ExtremeVN/index.php'</script>";
    return;
}
$sql = "SELECT *FROM NhanVien where email='$email' and matkhau='$pass'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<script>alert('Đăng nhập thành công')</script>";
    $query="select*from nhanvien";
    $s=$conn->query($query);
     while($row = mysqli_fetch_assoc($s)) {
    echo "Họ Tên: " . $row["hoten"]. " - Email: " . $row["email"].  "<br>";
  }
  
}else{
    echo "<script>alert('Thông tin tài khoản hoặc mật khẩu không chính xác')</script>";
    echo "<script>window.location='http://localhost/ExtremeVN/index.php'</script>";
  
} 

$conn->close();
?>