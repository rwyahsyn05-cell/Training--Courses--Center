<?php
session_start();
include "config.php";

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

// عند حفظ الكورس
if (isset($_POST['save'])) {
    $name = $_POST['name'];

    // إدخال البيانات في قاعدة البيانات
    $conn->query("INSERT INTO courses(name) VALUES('$name')");

    echo "Course Saved Successfully";
}
?>

<h2>Add Course</h2>

<form method="post">
    <input name="name" placeholder="Course Name">
    <button name="save">Save</button>
</form>

<a href="main.php">Back</a>
