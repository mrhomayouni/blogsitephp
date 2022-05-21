<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>content</title>
</head>
<body>

<form action="" method="post">
    <input type="number" name="id" placeholder="id"><br><br>
    <input type="text" name="title" placeholder="title"><br><br>
    <input type="text" name="body" placeholder="the content"><br><br>
    <input type="text" name="writer" placeholder="writer"><br><br>
    <input type="date" name="date" placeholder="date"><br><br>
    <input type="text" name="category" placeholder="category"><br><br>
    <input type="submit" value="send" name="send"><br>
</form>

<?php
if (isset($_POST["send"])) {
    $id = $_POST["id"];
    $title = $_POST["title"];
    $body = $_POST["body"];
    $writer = $_POST["writer"];
    $date = $_POST["date"];
    $category = $_POST["category"];

    $db = mysqli_connect("localhost", "root", "") or die("error1");
    mysqli_select_db($db, "blogsitephp");

    $str = "INSERT INTO `content`(`id`, `title`,`body`,`writer`,`date`,`category`) VALUES ('$id','$title','$body','$writer','$date','$category')";
    $result = mysqli_query($db, $str);




}

?>
</body>

</html>
