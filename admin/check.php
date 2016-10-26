<?php
session_start(); 
ob_start();
if (isset($_POST['click'])) {
	$mailAdress = $_POST['mailAdress'];
	$password = $_POST['password'];
	
	if (!empty($mailAdress) && !empty($password)) {
			if($mailAdress=="admin" && $password=="admin"){
				$_SESSION['login'] = true;
				header('Location:admin.php');
		}else{
			$_SESSION['loginerror'] = 'login ve ya parol sefdir';
			header('Location:login.php');
		}
    }else{
        $_SESSION['loginerror'] = 'Bosluq buraxmayin';
        header('Location:index.php');
    }

}
