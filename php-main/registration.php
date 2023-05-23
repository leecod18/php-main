<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Đăng ký</title>
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="icons-1.7.2/font/bootstrap-icons.css"/>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="h3 text-center text-danger">
                    Đăng ký
                </div>
                <div class="col-2">

                </div>
                <div class="col-8">
                    <div class="mb-3">
                        <form action="main/actionListener.php" method="POST">
                             <label for="exampleFormControlInput1" class="form-label">Họ tên</label>
                        <input type="text" name="hoten" class="form-control" id="exampleFormControlInput1">
                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email">
                        <label for="id" class="form-label">Giới tính</label><!-- comment --><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gt" id="inlineRadio1" value="first">
                            <label class="form-check-label" for="inlineRadio1">Nam</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gt" id="inlineRadio2" value="second">
                            <label class="form-check-label" for="inlineRadio2">Nữ</label>
                        </div>
                      
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Số điện thoại</label>
                        <input type="text" name="sdt" class="form-control" id="exampleFormControlInput1" placeholder="09********">
                         <label for="exampleFormControlTextarea2" class="form-label">Mật khẩu</label>
                         <input type="password" name="matkhau" class="form-control" id="exampleFormControlInput2" ><br>
                         <button type="submit" class="btn btn-primary">Đăng ký</button>
                        </form>
                    </div>
                </div>  
            </div>
        </div>
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>        
        <script src="js/bootstrap.min.js"></script>

    </body>
</html>
