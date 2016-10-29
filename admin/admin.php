<?php ob_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>PHP - ADMIN PANEL</title>
    </head>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <body>

    <style>

    html,body{
      background: url('https://hd.unsplash.com/photo-1469386220931-a05a3a71cbb5') no-repeat center;
    }
    </style>

       <div class="container">
            <h1>PHP CRUD GRID</h1>
                <button class="btn btn-warning"><a href="news/news.php">NEWS</a></button>
                <?php

                session_start();


               if(!$_SESSION['login'] == true){
                   header('Location:login.php');
               } ?>




            <BUTTON class="alert alert-success pull-right"><a href='logout.php'>LOGOUT</a></BUTTON>
            <BUTTON class="alert alert-warning pull-right"><a href='../index.php'>BACK TO INDEX.PHP</a></BUTTON>

        </div>
    </body>
</html>
