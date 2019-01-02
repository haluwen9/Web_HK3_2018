<?php
  class DBConnection {
    // Mysqli Object
    private $db;

    // Default Constructor function
    public function __construct() {
      $setting = parse_ini_file("dbconnection.ini");
      
      $host = $setting["servername"];
      $port = $setting["port"];
      $username = $setting["username"];
      $password = $setting["password"];
      $dbname = $setting["dbname"];

      $this->db = new mysqli($host, $username, $password, $dbname, $port);
      $this->db->set_charset("utf8");
      if ($this->db->connect_error) {
        die("Cannot connect to Database!". $this->db->connect_error);
      }
    }

    // Constructor function with parameter [string $filename]
    public function __construct1(string $filename) {
      $setting = parse_ini_file($filename);
      
      $host = $setting["servername"];
      $port = $setting["port"];
      $username = $setting["username"];
      $password = $setting["password"];
      $dbname = $setting["dbname"];

      $this->db = new mysqli($host, $username, $password, $dbname, $port);
      if ($this->db->connect_error) {
        die("Cannot connect to Database!". $this->db->connect_error);
      }
    }

    public function runQuery(string $sql) {
      $result = $this->db->query($sql);
      if ($result === FALSE) {
        die($this->db->error);
      }
      else {
        return $result; 
      }
    }

  }
?>