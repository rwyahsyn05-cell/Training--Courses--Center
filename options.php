<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}
?>

<h2>Options</h2>

<ul>
    <li>View Courses</li>
    <li>Register Course</li>
</ul>

<a href="main.php">Back</a>
