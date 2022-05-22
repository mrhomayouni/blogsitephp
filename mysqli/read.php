<?php
$id = $_GET["id"];
echo "<a href='delet.php?id=$id'> delete </a>";
$db = mysqli_connect("localhost", "root", "") or die("error1");
mysqli_select_db($db, "blogsitephp");
$str = "SELECT * FROM `content` WHERE `id`= $id ";
$result = mysqli_query($db, $str);
$str2 = "SELECT * FROM `comment` WHERE `post_id`= $id ";

$result2 = mysqli_query($db, $str2);


while ($content = mysqli_fetch_array($result)) {
    echo "<h1> ".$content["title"]."</h1>";
    echo "<p>".$content["body"]." </p>"."<br><br>";
    echo "writer is  ".$content["writer"];
    echo "<br><br>";
    echo $content["date"]."  ".$content["category"];
    echo "<br>";
}

while($comment = mysqli_fetch_array($result2)){
    echo $comment["writer"] ." said: ";
    echo $comment["body"];
    echo "<br>";
}

?>

<form action="" method="post">
    <input type="text" name="name" placeholder="your name">
    <input type="text" name="comment" placeholder="your comment">
    <input type="submit" value="send" name="send">
</form>
<?php
if(isset($_POST["send"])){
    $name=$_POST["name"];
    $comment=$_POST["comment"];
    $str3="INSERT INTO `comment`(`post_id`, `body`, `writer`) VALUES ('$id','$comment','$name')";
    $result2 = mysqli_query($db, $str3);



}

?>
