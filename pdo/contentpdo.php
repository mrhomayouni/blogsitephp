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

    try {
        $conn = new PDO('mysql:host=localhost;dbname=blogsitephp', 'root', '');
        $result = $conn->query( "INSERT INTO `content`(`id`, `title`, `body`, `writer`, `date`, `category`) VALUES ('$id','$title','$body','$writer','$date','$category')" );
    } catch (PDOException $e) {
        echo 'Opps, Something bad just happened!' . '<br>';
        echo $e->getMessage();
    }
}
