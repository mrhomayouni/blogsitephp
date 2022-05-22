<?php
$id = $_GET["id"];
echo "<a href='delet.php?id=$id'> delete </a>";
$conn = new PDO('mysql:host=localhost;dbname=blogsitephp', 'root', '');
$result = $conn->query("SELECT * FROM `content` WHERE `id`= $id ");
foreach ($result as $res) {
    echo "<h1> " . $res["title"] . "</h1>";
    echo "<p>" . $res["body"] . " </p>" . "<br><br>";
    echo "writer is  " . $res["writer"];
    echo "<br><br>";
    echo $res["date"] . "  " . $res["category"];
    echo "<br>";
}
$result3=$conn->query("SELECT * FROM `comment` WHERE `post_id`=$id");
foreach ($result3 as $res){
    echo $res["writer"] ." said: ";
    echo $res["body"];
    echo "<br>";
}

?>

<form action="" method="post">
    <input type="text" name="name" placeholder="your name">
    <input type="text" name="comment" placeholder="your comment" >
    <input type="submit" value="send" name="send">

</form>
<?php
if(isset($_POST["send"])){
    $name=$_POST["name"];
    $comment=$_POST["comment"];
    $result2=$conn->query("INSERT INTO `comment`(`post_id`, `body`, `writer`) VALUES ('$id','$comment','$name')");

}


?>
