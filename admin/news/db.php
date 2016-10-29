<?php



    class Database{
        // db con
        public $hostname;
        public $username;
        public $password;
        public $dbname;
        public $conn;
        // db con ending //

        public $tname;
        public $title;
        public $text;
        public $photo;
        public $img;



        public function __construct($host,$user,$pass,$db){
            $this->hostname=$host;
            $this->username=$user;
            $this->password=$pass;
            $this->dbname=$db;

            $this->conn=mysqli_connect($this->hostname,$this->username,$this->password,$this->dbname);
            if(!$this->conn){
                echo "Error";
            }
        }

        public function select_news($tname){
            $this->tname = $tname;
            $sql = "SELECT * FROM $tname ORDER BY id DESC";
            $query = mysqli_query($this->conn,$sql);

            return $query;
        }

        public function insert_news($title,$text){
            $this->title = $title;
            $this->text = $text;

            $img_name = $_FILES["img"]["name"];
            $target_file = "uploads/" . basename($img_name);

            $img = $target_file;

            if(isset($_POST['news_submit'])){
                $tmp_name = $_FILES["img"]["tmp_name"];
                move_uploaded_file($tmp_name, $target_file);

                $sql="INSERT INTO news(title,text,photo,view) VALUES('$title','$text','$img',0)";
                $query = mysqli_query($this->conn,$sql);


                return $query;
            }

        }

        public function view_count($id){
          $sql = "UPDATE news SET view= view+1 WHERE id=$id";
          $query = mysqli_query($this->conn,$sql);

          return $query;
        }


        public  function most_view(){
          $sql = "SELECT * FROM news ORDER BY view DESC LIMIT 5";
          $query = mysqli_query($this->conn,$sql);

          return $query;
        }

        public  function recent_feeds(){
          $sql = "SELECT * FROM news ORDER BY  id DESC LIMIT 5";
          $query = mysqli_query($this->conn,$sql);

          return $query;
        }

    }


    ?>
