<?php
try {
    $conn = new PDO("mysql:host=localhost;dbname=vue", 'root', 'root');

    if(empty($_POST['name'])) exit("Поле 'Имя' не заполнено");
    if(empty($_POST['message'])) exit("Поле 'Сообщение' не заполнено");

    $query = "INSERT INTO message VALUES (NULL , :name, :content, NOW() )";
    $msg = $conn->prepare($query);
    $msg->execute(['name' => $_POST['name'], 'content' => $_POST['message']]);

    $msg_id =  $conn->lastInsertId();

    header("Location: index.php");

}
catch (PDOException $e)
{
    echo "error" .$e->getMessage();
}
