<?php

class ProcessMethods implements interface ProcessInterface {
    public $db = 'Booking';
    public $host = '127.0.0.1';
    public $cs = 'utf8';
    public $username = 'root';
    public $password = 'newpassword';
    function Conn() {
        $dsn = "mysql:host=$this->host;dbname=$this->db;charset=$this->cs";
        $pdo = new PDO($dsn, $this->username, $this->password);
        try {
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    function Submit($userId,$Full_Name,$email,$phone_Number,$User_Name,$Password) {
        try {
            $dsn = "mysql:host=$this->host;dbname=$this->db;charset=$this->cs";
            $pdo = new PDO($dsn, $this->username, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = $pdo->prepare("INSERT `Users` (userId,Full_Name,email,phone_Number,User_Name,Password) values ('$userId','$Full_Name','$email','$phone_Number','$User_Name','$Password')");
            $sql->execute();
            
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

}

?>

