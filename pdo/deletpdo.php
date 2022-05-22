<?php
$id = $_GET["id"];
try {
    $conn = new PDO('mysql:host=localhost;dbname=blogsitephp', 'root', '');
    $result = $conn->query("DELETE FROM `content` WHERE `id`= $id");
    header("Location: Show_contentpdo.php");
    exit();
} catch (PDOException $e) {
    echo "خطایی به وجود آمده: " . $e->getMessage();
}

