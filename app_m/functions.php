<?php 

    define('DB_SERVER', 'localhost'); // Your hostname
    define('DB_USER', 'root'); // Database Username
    define('DB_PASS', ''); // Database Password
    define('DB_NAME', 'new_application_2'); // Database Name

    class DB_con {
        function __construct() {
            $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
            $this->dbcon = $conn;

            if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }
        }

        public function usernameavailable($uname) {
            $checkuser = mysqli_query($this->dbcon, "SELECT username FROM tblusers WHERE username = '$uname'");
            return $checkuser;
        }

        public function registration($fname, $uname, $uemail, $password) {
            $reg = mysqli_query($this->dbcon, "INSERT INTO tblusers(fullname, username, useremail, password) VALUES('$fname', '$uname', '$uemail', '$password')");
            return $reg;
        }

        public function signin($uname, $password) {
            $signinquery = mysqli_query($this->dbcon, "SELECT id, fullname FROM tblusers WHERE username = '$uname' AND password = '$password'");
            return $signinquery;
        }

        public function insert($discord_id, $discord_username, $discord_avatar) {
            $result = mysqli_query($this->dbcon, "INSERT INTO users(discord_id,discord_username,discord_avatar) VALUES('$discord_id', '$discord_username', '$discord_avatar')");
            return $result;
        }

        public function fetchdata() {
            $result = mysqli_query($this->dbcon, "SELECT * FROM tblusers");
            return $result;
        }

        public function fetchonerecord($userid) {
            $result = mysqli_query($this->dbcon, "SELECT * FROM users WHERE id = '$userid'");
            return $result;
        }

        

        public function update($discord_id, $discord_username, $discord_avatar, $userid) {
            $result = mysqli_query($this->dbcon, "UPDATE users SET 
                discord_id = '$discord_id',
                discord_username = '$discord_username',
                discord_avatar = '$discord_avatar',
                WHERE id = '$userid'
            ");
            return $result;
        }

        public function delete($userid) {
            $deleterecord = mysqli_query($this->dbcon, "DELETE FROM users WHERE id = '$userid'");
            return $deleterecord;
        }
    }

?>