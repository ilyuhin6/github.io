<?php
    // Собираем данные с формы и сохраняем их в переменные
    $name_user = $_POST['user-name'];
    $first_name = $_POST['fisrt-name'];
    $date_user = $_POST['date-user'];
    $country_user = $_POST['country-user'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_true = $_POST['password-true'];

    $arr_user = [$name_user, $first_name, $date_user, $country_user, $email, $password];
    // Проверяем совпадают ли пароли
    if($password != $password_true){
        echo "Пароли то не совпадают" . "<br>" . "<a href='/'> Вернуться назад</a>";
    } else {
        foreach($arr_user as $user){
            echo $user . "<br>";
        }
    }
?>