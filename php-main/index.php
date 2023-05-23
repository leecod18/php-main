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
        <title>Đăng nhập</title>
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="icons-1.7.2/font/bootstrap-icons.css"/>
        <script src="js/main.js"></script>
        <script>
            function load() {
                window.location='registration.php'
    
};
        </script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="h3 text-center text-danger">
                    Đăng nhập
                </div>
                <div class="col-3">
                    
                </div>
                <div class="col-9">
                    <div class="col-8">
                        <form action="main/login.php" method="post">
                              <div class="mb-3 m-1">
                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="user" placeholder="name@example.com" name="email"/>
                    </div>
                    <div class="mb-3 m-1">
                        <label for="exampleFormControlTextarea1" class="form-label" >Password</label>
                        <input type="password" id="pass" class="form-control" name="pass"/><br>
                        <input onclick="" class="btn btn-primary " type="submit" value="Đăng nhập" name="login" />
                        <input type="button" class="btn btn-primary " value="Đăng ký" onclick="load()">
                        </form>
                        
                    </div>
                </div>
                </div>
            </div>

        </div>
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>        
        <script src="js/bootstrap.min.js"></script>

    </body>
</html>
