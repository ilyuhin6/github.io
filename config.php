<?php
$servername = "localhost"; // Адрес сервера базы данных, по умолчанию localhost
$username = "admin"; // Имя пользователя базы данных, обычно root
$password = "v136rt"; // Пароль пользователя, либо root, либо пустое поле
$dbname = "phpro"; // Имя вашей базы данных

// Подключение к базе данных
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка подключения
if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

// Теперь можно выполнять запросы к базе данных
?>