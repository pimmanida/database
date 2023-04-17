<?php 
    class DBcontroller{
        private $host="localhost";
        private $user="root";
        private $password="";
        private $database="register_oop";
        private $conn;

        function __construct(){
            $this->conn = $this->connectDB();
        }
        function connectDB(){
            $conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
            return $conn;
        }
        function runQuery($query){
            $result = mysqli_query($this->conn, $query);
            while($row = mysqli_fetch_assoc($result)){
                $resultset[]=$row;
            }
            if(!empty($resultset))
                return $resultset;
        }
        function numRows($query){
            $result = mysqli_query($this->conn, $query);
            $rowcount = mysqli_num_rows($result);
            return $rowcount;
        }
        public function fetchdata() {
            $result = mysqli_query($this->conn, "SELECT * FROM tblusers");
            return $result;
        }
        public function fetchcodedata() {
            $result = mysqli_query($this->conn, "SELECT code FROM tblusers");
            return $result;
        }
    }
?> 