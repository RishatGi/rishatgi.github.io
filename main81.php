 <main class="main-content">
    <!-- Your main content goes here -->
   <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Комментарии</title>
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
// Создаем подключение
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверяем подключение
if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
}

// Выполняем SQL-запрос для выборки комментариев
$sql = "SELECT * FROM comments";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Выводим комментарии
    while ($row = $result->fetch_assoc()) {
        echo "<ul class='com-list-noava' id='commentOutput" . $row['comment_id'] . "'>";
        echo "<li id='commentEntry" . $row['comment_id'] . "' class='commentstd clearover'>";
        echo "<strong class='number'>#" . $row['comment_number'] . "</strong>";
        echo "<p class='com-meta'>";
        echo "<strong>" . $row['comment_author'] . "</strong> <span>(<em>" . $row['comment_date'] . "</em>)</span>";
        echo "</p>";
        echo "<div class='com-edit'></div>";
        echo "<p class='commententry'>" . $row['comment_text'] . "</p>";
        echo "</li>";
        echo "</ul>";
    }
} else {
    echo "Нет комментариев.";
}

// Закрываем подключение
$conn->close();
?>

</body>
</html>

</main> 
<br>
<br>
<br>
<br>
<br>
<br>
<br>
