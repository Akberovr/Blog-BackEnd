<!DOCTYPE html>
<html lang="en">
<head>
    <met
    a charset="UTF-8">
    <title>CREATE NEWS</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>
<style>

html,body{
  background: url('https://hd.unsplash.com/photo-1469386220931-a05a3a71cbb5') no-repeat center;
}
</style>
    <div class="container">
       <div class="btn btn-warning"><a href="news.php">BACK</a></div>
        <div class="col-md-8">
            <h1>NEWS</h1>
            <form action="conn.php" method="post" enctype="multipart/form-data">
                TITLE <input type="text" name="title" class="form-control">
                TEXT  <textarea name="text" class="form-control"></textarea><br>
                IMAGE <input type="file" name="img" class="form-control"><br>
                <input type="submit" class="btn btn-success" name="news_submit">
            </form>
        </div>
    </div>

    <?php



//
//    if(isset($_POST['news_submit'])){
//        $insertNews->insert_news('news',$_POST['title'],$_POST['text'],$_FILES['img']['name']);
//        header ("Location:create.php");
//    }


    ?>


</body>
</html>
