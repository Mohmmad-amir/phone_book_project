<?php
class database
{
    public $db_host = "localhost";
    public $db_user = "root";
    public $db_password = "";
    public $db_name = "phone_book";

    public function __construct()
    {
        $this->db_Connection();
    }
    public function db_Connection()
    {
        $conn = mysqli_connect($this->db_host, $this->db_user, $this->db_password, $this->db_name);
        if ($conn == true) {
            return $conn;
        } else {
            return false;
        }
    }
    public function run_sql_query($sql)
    {
        $run_query = mysqli_query($this->db_Connection(), $sql);
        if ($run_query == true) {
            return $run_query;
        } else {
            return false;
        }
    }
}
