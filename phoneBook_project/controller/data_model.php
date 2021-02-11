<?php
include "database.php";

class model
{


    public function registration()
    {
        $name = trim($_POST['name']);
        $username = trim($_POST['username']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        $insert_sql = "INSERT INTO `users`(`name`, `username`, `email`, `password`) VALUES ('$name','$username','$email','$password')";
        $conn = new database();
        $result_insert = $conn->run_sql_query($insert_sql);
        if ($result_insert == true) {
            return true;
        } else {
            return false;
        }
    }
    public function login()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $select_sql = "SELECT * FROM `users` WHERE `email`='$email' and `password`='$password'";
        $conn = new database();
        $result_select = $conn->run_sql_query($select_sql);
        if ($result_select == true) {
            return $result_select;
        } else {
            return false;
        }
    }
    public function contact()
    {
        $name = trim($_POST['name']);
        $phone = trim($_POST['phone']);
        $email = trim($_POST['email']);
        $user_email = $_SESSION['email'];
        $insert_sql = "INSERT INTO `contact`(`name`, `phone`, `email`, `user_email`) VALUES ('$name','$phone','$email','$user_email')";
        $conn = new database();
        $result_insert = $conn->run_sql_query($insert_sql);
        if ($result_insert == true) {
            return true;
        } else {
            return false;
        }
    }
    public function contact_select()
    {
        $user_email = $_SESSION['email'];
        $select = "SELECT * FROM `contact` Where `user_email`='$user_email'";
        $conn = new database();
        $result_select = $conn->run_sql_query($select);
        if ($result_select == true) {
            return $result_select;
        } else {
            return false;
        }
    }
    public function deleteContactData($deleteID)
    {
        // $deleteID = $_GET['deleteID'];
        $delete_sql = "DELETE FROM `contact` WHERE `id`='$deleteID'";
        $conn = new database();
        $result_delete = $conn->run_sql_query($delete_sql);
        if ($result_delete == true) {
            return true;
        } else {
            return false;
        }
    }
    public function editSelectContact($editID)
    {
        //select 
        // $editID = $_GET['editID'];
        $select_sql = "SELECT * FROM `contact` WHERE `id`='$editID'";
        $conn = new database();
        $result_select = $conn->run_sql_query($select_sql);
        if ($result_select == true) {
            return $result_select;
        } else {
            return false;
        }
    }
    public function editContact($editID)
    {
        // $editID = $_GET['editID'];
        //update sql
        $name = trim($_POST['name']);
        $phone = trim($_POST['phone']);
        $email = trim($_POST['email']);
        $user_email = trim($_POST['user_email']);
        $update_sql = "UPDATE `contact` SET `name`='$name',`phone`='$phone',`email`='$email',`user_email`='$user_email' WHERE `id`='$editID'";
        $conn = new database();
        $result_update = $conn->run_sql_query($update_sql);
        if ($result_update == true) {
            return true;
        } else {
            return false;
        }
    }
}
