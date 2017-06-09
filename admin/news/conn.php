<?php

include "db.php";

$myDatabase = new Database();

if (isset($_POST['news_submit'])) {
    $myDatabase->insert_news($_POST['title'], $_POST['text'], $_POST["img"]);
    header("Location:create.php");
}




?>