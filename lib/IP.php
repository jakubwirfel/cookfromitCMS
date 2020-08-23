<?php
include_once './helpers/validators.php';

class IP extends Validators {

    protected $db;
    protected $ip;

    public function __construct() {
        $this -> db = new Database;
    }


    public function addIpAddr($ip) {
        $this -> db -> query("INSERT INTO ipau (IPAD, IPDA) VALUES (:ip, :date)");

        // Bind data
        $this -> db -> bind(':ip', $ip);
        $this -> db -> bind(':date', date('Y-m-d H:i:s'));

        if($this -> db -> execute()) {
            $_SESSION['ip'] = $ip;
            return true;
        } else {
            return false;
        }
    }

    public function getIpId($ip) {

        $this -> db -> query("SELECT IPID FROM ipau WHERE IPAD = :ip");

        // Bind data
        $this -> db -> bind(':ip', $ip);

        $row = $this -> db -> single();

        return $row;
    }
}