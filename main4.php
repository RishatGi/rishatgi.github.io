 <main class="main-content">
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Комментарии</title>
    <style>
        textarea {
            width: 100%;
        }
    </style>
	<script>
    function wrapText(elementId, startTag, endTag) {
        var textarea = document.getElementById(elementId);
        var start = textarea.selectionStart;
        var end = textarea.selectionEnd;
        var selectedText = textarea.value.substring(start, end);
        var replacement = startTag + selectedText + endTag;
        textarea.value = textarea.value.substring(0, start) + replacement + textarea.value.substring(end);
    }

    function alignText(elementId, alignment) {
        var textarea = document.getElementById(elementId);
        var start = textarea.selectionStart;
        var end = textarea.selectionEnd;
        var selectedText = textarea.value.substring(start, end);
        var replacement = "<div style='text-align:" + alignment + "'>" + selectedText + "</div>";
        textarea.value = textarea.value.substring(0, start) + replacement + textarea.value.substring(end);
    }
</script>
</head>
<body>

<?php
// $servername = "ваш_хост";
// $username = "ваше_имя_пользователя";
// $password = "ваш_пароль";
// $dbname = "ваша_база_данных";
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "teach";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Обработка формы отправки комментария
    if (!empty($_POST['name']) && !empty($_POST['comment'])) {
        $name = $_POST['name'];
        $comment = $_POST['comment'];
        $comment_format = !empty($_POST['comment_format']) ? $_POST['comment_format'] : '';

        // Создаем подключение
     $conn = new mysqli($servername, $username, $password, $dbname);



        // Проверяем подключение
        if ($conn->connect_error) {
            die("Ошибка подключения к базе данных: " . $conn->connect_error);
        }

        // Выполняем SQL-запрос для вставки нового комментария
        $sql = "INSERT INTO comments (comment_number, comment_author, comment_date, comment_text, comment_format) 
                VALUES (NULL, '$name', NOW(), '$comment', '$comment_format')";
        
        if ($conn->query($sql) === TRUE) {
            echo "Комментарий успешно добавлен.";
        } else {
            echo "Ошибка при добавлении комментария: " . $conn->error;
        }

        // Закрываем подключение
        $conn->close();
    } else {
        echo "Заполните все обязательные поля.";
    }
}
?>

<form method="post" action="obra.php">
    <label for="name">Name: *</label><br>
    <input type="text" name="name" id="name" value="" class="single" required><br>

    <label for="comment">Message: *</label><br>
    <textarea name="comment" id="comment" rows="6" cols="80" required></textarea><br>

    <label for="comment_format">Formatting:</label><br>
    <input type="text" name="comment_format" id="comment_format"><br>

    <div>
        <button type="button" onclick="wrapText('comment', '<strong>', '</strong>')">Bold</button>
        <button type="button" onclick="wrapText('comment', '<em>', '</em>')">Italic</button>
        <button type="button" onclick="alignText('comment', 'left')">Align Left</button>
        <button type="button" onclick="alignText('comment', 'center')">Align Center</button>
        <button type="button" onclick="alignText('comment', 'right')">Align Right</button>
        <button type="submit" name="send">Отправить</button>
    </div>
</form>



</body>
</html>
	
</main> 

