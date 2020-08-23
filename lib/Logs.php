<?php
class Logs {

    protected $db;

    public function __construct() {
        $this -> db = new Database;
    }

    public function addLog($typ, $ip, $info) {
        $this -> db -> query("INSERT INTO logs (LTYP, LDAT, LIPA, LINF)
        VALUES (:LTYP, :LDAT, :LIPA, :LINF)");

        // Bind data
        $this -> db -> bind(':LTYP', $typ);
        $this -> db -> bind(':LDAT', date('Y-m-d H:i:s'));
        $this -> db -> bind(':LIPA', $ip);
        $this -> db -> bind(':LINF', $info);
        // Execute
        if($this -> db -> execute()) {
        return true;
        } else {
        return false;
        }
    }
}