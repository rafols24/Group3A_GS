<?php
class MyStore{
    private $server = "mysql:host=localhost;dbname=group3a_gs";
    private $user = "root";
    private $pass = "";
    private $options = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    );
    protected $connection;
    public function openConnection(){
        try{
            $this -> connection = new PDO(
                $this->server,
                $this->user,
                $this->pass,
                $this->options
            );
            // echo "connected successfully! ";
            return $this->connection;
        }catch(PDOException $error){
            echo "Error connection: ".$error->getMessage();
        }
    }
    public function closeConnection(){
        $this->$connection = null;
    }

    public function getUsers(){
        $connection = $this->openConnection();
        $statement = $connection->prepare("SELECT * FROM adminDB");
        $statement->execute();
        $users = $statement->fetchAll();
        $usersCount = $statement->rowCount();

        if($usersCount > 0){
            return $users;
        }else{
            return 0;
        }
    } //end get users

    public function login(){
        if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $connection = $this->openConnection();
            $statement = $connection->prepare("SELECT * FROM adminDB WHERE username=? AND password=?");
            $statement->execute([$username, $password]);
            $user = $statement->fetch();
            $total = $statement->rowCount();

            if($total > 0){
                $_SESSION['username'] = $username;
                header("Location: try.php");
            }else{
                echo "login failed!";
            }
        }
    }

}

$mystore = new MyStore();

?>