<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}
?>

<h2>الصفحة الرئيسية</h2>

مرحباً: <b><?php echo $_SESSION['user']; ?></b>

<ul>
    <li><a href="options.php">الخيارات</a></li>
    <li><a href="add_course.php">إضافة كورس</a></li>
    <li><a href="logout.php">تسجيل خروج</a></li>
</ul>
