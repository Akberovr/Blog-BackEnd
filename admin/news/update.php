<?php 
$filename = "db.php";
if(file_exists($filename)){
    include $filename; 
}
?>
<?php
$myDatabase = new Database();
$id = $_GET["id"];
$tname = "news";
if (isset($id)) {
    $result = $myDatabase->select_spesific_news($id, $tname);
    $row = mysqli_fetch_assoc($result);   
    
}
if (isset($_POST["update"])) {

    $newTitle = $_POST["title"];
    $newText = $_POST["text"];
    $newImg = $_FILES["img"];
    
    $myDatabase->update_news($newTitle, $newText, $newImg, $id);
    

    

    header("Location:news.php");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <met
        a charset="UTF-8">
        <title>Update NEWS</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        </head>
        <body>
            <style>

                html,body{

                }
            </style>
            <div class="container">
                <div class="btn btn-warning"><a href="news.php">BACK</a></div>
                <div class="col-md-8">
                    <h1>Update NEWS</h1>

                    <form action="" method="post" enctype="multipart/form-data">
                        TITLE <input type="text" name="title" class="form-control" value="<?= $row["title"] ?>" >  
                        TEXT  <textarea name="text" class="form-control" ><?= htmlspecialchars($row["text"]); ?></textarea><br>
                        IMAGE <input type="file" name="img" class="form-control"  value><span><?=$row["photo"]?></span><br>

                        <input type="submit" class="btn btn-success" name="update" value="Update">
                    </form>
                </div>
            </div>
        </body>
</html>

