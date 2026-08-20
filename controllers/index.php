<?php

global $conn;

$heading = 'Home Page';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'] ?? null;
	$fullName = $_POST['full_name'];
	$jobPosition = $_POST['job_position'];

    if($id) {
        mysqli_query(
            $conn, 
            "UPDATE create_users_table SET full_name='$fullName', job_position='$jobPosition' WHERE id=$id"
        );
    } else {
        mysqli_query(
            $conn,
            "INSERT INTO create_users_table (full_name, job_position) VALUES ('$fullName', '$jobPosition')"
        );
    }
}

$delete = isset($_GET['delete']);
if ($delete) {
    $user = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM create_users_table WHERE id=$user");
}

$query = mysqli_query($conn, 'SELECT * FROM create_users_table');

require 'views/index.view.php';