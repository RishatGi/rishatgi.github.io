<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "teach";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['name']) && !empty($_POST['comment'])) {
        $name = $_POST['name'];
        $comment = $_POST['comment'];
        $comment_format = !empty($_POST['comment_format']) ? $_POST['comment_format'] : '';

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Ошибка подключения к базе данных: " . $conn->connect_error);
        }

        $sql = "INSERT INTO comments (comment_number, comment_author, comment_date, comment_text, comment_format) 
                VALUES (NULL, '$name', NOW(), '$comment', '$comment_format')";
        
        if ($conn->query($sql) === TRUE) {
            echo "Комментарий успешно добавлен.";
        } else {
            echo "Ошибка при добавлении комментария: " . $conn->error;
        }

        $conn->close();

        // Возвращаемся на предыдущую страницу
        header('Location: index.php');
        exit();
    } else {
        echo "Заполните все обязательные поля.";
    }
}
?>
