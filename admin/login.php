<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>

        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>
         <script src="js/vendor/jquery-3.1.0.slim.min.js"></script>

        <script src="js/main.js"></script>


        <div class="row">
            <div class="container">
                <div class="col-md-offset-4 col-md-4">
                    <div class="col-md-offset-3 col-md-9 imagePhoto">
                        <img src="img/no-image.png" class="text-center">
                    </div>
                <div class="col-md-12 text-center">
                    <h4>Admin Login</h4>
                    <span>Sign in to your account</span>
                </div>
                <form action="check.php" method="post">
                    <div class="form-group">
                        <input type="text" name="mailAdress" class="form-control" placeholder="Email Address">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="col-md-offset-4 col-md-8">
                        <input type="submit" class="btn btn-success" name="click" value="Sign In">
                        <br>
                        <a href="../index.php">HOME PAGE</a>
                    </div>

                </form>

                <?php
                session_start();
                if(isset($_SESSION['loginerror'])){ ?>
                        <p><?=$_SESSION['loginerror']?></p>
                        <?php
                        unset($_SESSION['loginerror']);

                         }  ?>
                </div>
            </div>
        </div>
    </body>
</html>
