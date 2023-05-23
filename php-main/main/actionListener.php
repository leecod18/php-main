<?php
function getMale($gt){
    if($gt=="first")return"Nam";
    return "Nữ";
}
$host='localhost';
$username='root';
$passwd='';
$dbname='qlnv';
$connect=new mysqli($host,$username,$passwd,$dbname);
$hoten=$_POST['hoten'];
$email=$_POST['email'];
$gioitinh= getMale($_POST['gt']);
$sdt=$_POST['sdt'];
$pass=$_POST['matkhau'];
$sql="INSERT INTO NHANVIEN VALUES('$hoten','$email','$gioitinh','$sdt','$pass')";
if($connect->query($sql)==TRUE){
    echo "<script>alert('Thêm thành công')</script>";
    echo "<script>window.location='http://localhost/ExtremeVN/index.php'</script>";
         
}else{
    
}

?>
