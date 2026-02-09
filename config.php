config.php
<?php
$conn = new mysqli("localhost", "root", "", "training_center");
if ($conn->connect_error) {
    die("فشل الاتصال بقاعدة البيانات");
}
?>





