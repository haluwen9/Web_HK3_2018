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
      $dbname = $setting["databasename"];

      $db = new mysqli($host, $username, $password, $dbname, $port);
      if ($db->connect_error) {
        die("Cannot connect to Database!". $db->connect_error);
      }
    }

    // Constructor function with parameter [string $filename]
    public function __construct1(string $filename) {
      $setting = parse_ini_file($filename);
      
      $host = $setting["servername"];
      $port = $setting["port"];
      $username = $setting["username"];
      $password = $setting["password"];
      $dbname = $setting["databasename"];

      $db = new mysqli($host, $username, $password, $dbname, $port);
      if ($db->connect_error) {
        die("Cannot connect to Database!". $db->connect_error);
      }
    }

    public function runQuery(string $sql) {
      try {
        $res = $db->query($sql);
        return res;
      }
      catch (Exception $e) {
        echo $e;
      }
    }

  }
?>