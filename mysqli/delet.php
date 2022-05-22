<?php
$id=$_GET["id"];
$db = mysqli_connect("localhost", "root", "") or die("error1");
mysqli_select_db($db, "blogsitephp");
$str = "DELETE FROM `content` WHERE `id`= $id ";
$result = mysqli_query($db, $str);
header("Location: Show_content.php");
exit();
