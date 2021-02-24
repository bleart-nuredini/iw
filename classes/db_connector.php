<?php
  class DBConnector {

    private $hn = 'localhost';
    private $un = 'demo';
    private $pw = 'demo';
    private $db = 'iw';
    protected $conn;

    public function __construct() {
      if (!isset($this->conn)) {
        $this->conn = new mysqli($this->hn, $this->un, $this->pw, $this->db);
      }

      if ($this->conn->connect_error) die("Fatal error");

      return $this->conn;
    }
  }
?>
