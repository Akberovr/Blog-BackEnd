<?php

include "config.php";

class Database extends Config {

    public $tname;
    public $title;
    public $text;
    public $photo;
    public $img;

    public function select_news($tname) {
        $this->tname = $tname;
        $sql = "SELECT * FROM $tname ORDER BY id DESC";
        $query = mysqli_query($this->conn, $sql);

        return $query;
    }

    public function select_spesific_news($id, $tname) {
        $this->tname = $tname;
        $sql = "SELECT * FROM $tname WHERE id='$id'";
        $query = mysqli_query($this->conn, $sql);

        return $query;
    }

    public function insert_news($title, $text, $img) {
        $this->title = $title;
        $this->text = $text;
        $this->photo = $img;

        if (isset($_FILES["img"])) {

            $file_name = $_FILES["img"]["name"];

            $target_dir = "uploads/";
            $target_file = $target_dir . date("dmyGsi") . basename($file_name);

            $img = $target_file;
            $tmp_name = $_FILES["img"]["tmp_name"];
            //move_uploaded_file($tmp_name, $target_file);
//             move_uploaded_file($target_file, $target_di r . $file_name);
            move_uploaded_file($tmp_name, $target_file);

            $sql = "INSERT INTO news(title,text,photo,view) VALUES('$title','$text','$img',0)";
            $query = mysqli_query($this->conn, $sql);

            return $query;
        }
    }

    public function update_news($newTitle, $newText, $newImg, $id) {

        $this->title = $newTitle;
        $this->text = $newText;

        $id = $_GET["id"];
        $file_name = $_FILES["img"]["name"];


        if (!file_exists($filename)) {
            $sql = "SELECT photo FROM news WHERE id='$id'";

            $query = mysqli_query($this->conn, $sql);

            while ($row = mysqli_fetch_assoc($image_query)) {
                $newImg = $row["photo"];
            }
            return $row;
        } else {
            $target_dir = "uploads/";
            $target_file = $target_dir . date("dmyGsi") . basename($file_name);

            $newImg = $target_file;
            $tmp_name = $_FILES["img"]["tmp_name"];

            move_uploaded_file($tmp_name, $target_file);
            $sql = "UPDATE News SET title='$newTitle',text='$newText' ,photo='$newImg' WHERE id='$id'";
            $query = mysqli_query($this->conn, $sql);
            return $query;
        }
    }

    public function deleteNews($id) {
        if (isset($_GET['id'])) {

            $sql = "DELETE  FROM news WHERE id=$id";
            $query = mysqli_query($this->conn, $sql);

            if ($query) {
                header('Location:news.php');
            } else {
                echo "Cannot deleted";
            }
        }
    }

    public function view_count($id) {
        $sql = "UPDATE news SET view= view+1 WHERE id=$id";
        $query = mysqli_query($this->conn, $sql);

        return $query;
    }

    public function most_view() {
        $sql = "SELECT * FROM news ORDER BY view DESC LIMIT 5";
        $query = mysqli_query($this->conn, $sql);

        return $query;
    }

    public function recent_feeds() {
        $sql = "SELECT * FROM news ORDER BY  id DESC LIMIT 5";
        $query = mysqli_query($this->conn, $sql);

        return $query;
    }

}

?>
