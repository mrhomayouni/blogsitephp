<?php
$db = mysqli_connect("localhost", "root", "") or die("error1");
mysqli_select_db($db, "blogsitephp");
$str = "SELECT * FROM `content`";
$result = mysqli_query($db, $str);


while ($content = mysqli_fetch_array($result)) {
    echo "<a href='read.php?id=". $content["id"] ."'> ". $content["title"] ." </a>";
    echo "<br><br>";
}
>?
