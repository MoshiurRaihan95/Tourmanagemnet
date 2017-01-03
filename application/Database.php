<?php

class Database {

    private $conn;

    public function __construct($host, $user, $pass, $dbName) {
        $this->conn = mysqli_connect($host, $user, $pass, $dbName) or die("Mysqli Error");
    }

    /**
     * This function is to Insert data into table.
     * @param string $test
     * @param string $cols
     * @return boolean
     */
    public function Insert($tms_user, $cols) {
        $sql = "INSERT INTO $tms_user SET $cols";
        $result = mysqli_query($this->conn, $sql);
        if (mysqli_affected_rows($this->conn) > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function getAll($table, $column) {
        $sql = "SELECT $column FROM $table";
        $result = mysqli_query($this->conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            return mysqli_fetch_all($result, MYSQLI_ASSOC);
        } else {
            echo "No data avalible";
        }
    }

    public function getByColumn($table, $column, $where_col_name, $where_col_val) {
        $sql = "SELECT $column FROM $table WHERE $where_col_name = '$where_col_val' ";
        $result = mysqli_query($this->conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            return mysqli_fetch_all($result, MYSQLI_ASSOC);
        } else {
            echo "No data avalible";
        }
    }

    public function login($table, $column, $email, $password) {
        $sql = "SELECT $column FROM $table WHERE user_email = '$email' AND user_password = '$password'";
        $result = mysqli_query($this->conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            return mysqli_fetch_all($result, MYSQLI_ASSOC);
        } else {
            echo "No data avalible";
        }
    }

}

$obj = new Database("localhost", "root", "", "tms");


$all_data=$obj->getAll("tms_user", "*");
echo "<pre>";
print_r($all_data);