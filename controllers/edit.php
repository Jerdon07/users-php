<?php

$heading = 'Edit Page';

global $conn;
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM create_users_table WHERE id = $id");
$user = mysqli_fetch_assoc($query);

require 'views/edit.view.php';