<?php
class Addons {
    protected $db;
    public function __construct() {
        $this -> db = new Database;
    }

    public function selectAddons() {
        $this -> db -> queryCMS("SELECT * FROM addons");
        // Assign Results Set
        $results = $this -> db -> resultSet();

        return $results;
    }
}