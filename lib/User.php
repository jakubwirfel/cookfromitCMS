<?php
include_once './helpers/validators.php';

class User extends Validators {
    protected $db;
    public function __construct() {
        $this -> db = new Database;
    }

    public function login($data) {
        $this -> db -> query("SELECT USID, UNAM, UEMA, USIP, UGRO FROM user WHERE UNAM = :unam AND UPAS = :upas AND UGRO = :ugro");
        $pass= md5($data['password']);

        $this -> db -> bind(':unam', $data['user']);
        $this -> db -> bind(':upas', $pass);
        $this -> db -> bind(':ugro', 3);

        $results = $this -> db -> resultSet();
        $numRows = $this -> db -> rowCount();
        if($numRows == 1) {
            foreach($results as $row) {
                $_SESSION['userId'] = $row -> USID;
                $_SESSION['username'] = $row -> UNAM;
                $_SESSION['confirm'] = "start";
            }
            return true;
        } else {
            return false;
        }
    }

    public function logout() {

        session_destroy();
        unset($_SESSION['userId']);
        unset($_SESSION['username']);
        unset($_SESSION['confirm']);

        if (!isset($_SESSION['confirm']) && !isset($_SESSION['username']) && !isset($_SESSION['userId'])) {
            return true;
        } else {
            return false;
        }
    }
}
