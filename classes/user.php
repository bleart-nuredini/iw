<?php
  include 'db_connector.php';

  /**
   * Contains the relevant data for connecting
   * into a database, the object representing 
   * the database connection, and helper methods
   * for performing CRUD operations.
   */
  class User extends DBConnector {

    public function __construct() {
      parent::__construct();
    }

    public function validate_login($un, $pw) {
      $q = "SELECT * FROM user WHERE username = '$un' AND password = '$pw'";
      $res = $this->conn->query($q);
      if (!$res) die("Erorr while accessing the database"); 

      if ($res->num_rows > 0){
          $row = $res->fetch_array();
          return true;
      } else {
        return false;
      }
    }

    // get user ID from the given username and password
    public function get_id($un, $pw) {
      $q   = "SELECT user_id FROM user WHERE username = '$un' AND password = '$pw'";
      $res = $this->conn->query($q);
      if (!$res) die("Erorr while accessing the database"); 

      if ($res->num_rows > 0){
        $row = $res->fetch_array();
        return $row['user_id'];
      } else {
        return false;
      }
    }

    // get role from the given user ID
    public function get_role($ui) {
      $q = "SELECT role FROM user WHERE user_id = $ui";
      $res = $this->conn->query($q);
      if (!$res) die("Error while accessing the database for user ID");

      if ($res->num_rows > 0) {
        $row = $res->fetch_array();
        return $row['role'];
      } else {
        return false;
      }
    }

    // inserts a row in the database from the given user data
    public function insert_to_db($un, $email, $pw, $role) {
      $q = "INSERT INTO user VALUES(NULL, '$un', '$email', '$pw', '$role')";
      $res = $this->conn->query($q);
      if (!$res) die("Could not access the database");
    }
    
    public function exec_query($q) {
      return $this->conn->query($q);
    }

    public function fix_string($str) {
      return $this->conn->real_escape_string($str);
    }

    public function get_num_of_users() {
      $q = "SELECT * FROM user";
      $res = $this->conn->query($q);

      return $res->num_rows;
    }

    public function get_num_of_admins() {
      $q = "SELECT * FROM user WHERE role='admin'";
      $res = $this->conn->query($q);

      return $res->num_rows;
    }

    public function get_num_of_articles() {
      $q = "SELECT * FROM article";
      $res = $this->conn->query($q);

      return $res->num_rows;
    }

    public function get_author($user_id) {
      $q = "SELECT username FROM user WHERE user_id = $user_id";
      $result = $this->conn->query($q);
      if (!$result) die("Could not access database");
      $row = $result->fetch_array(MYSQLI_ASSOC);

      return $row["username"];
    }
  }
?>