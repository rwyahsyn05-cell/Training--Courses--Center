<?php
session_start();

if (isset($_POST['login'])) {
    $_SESSION['user'] = $_POST['user'];

    header("Location: main.php");
    exit;
}
?>

<h2>تسجيل الدخول</h2>

<form method="post">
    <input name="user" placeholder="اسم المستخدم"><br><br>
    <input name="pass" type="password" placeholder="كلمة المرور"><br><br>
    <button name="login">دخول</button>
</form>
?>
