<?php

require_once "core/conn.php";
//registration
if ( isset($_POST['registration']) ){
    $email = $_POST['email'];
    $login = $_POST['login'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];
    if( !empty($email) && !empty($login) && !empty($password1) && !empty($password2)){
        if( $password1 == $password2 ){
            $db->execute("INSERT INTO users (login, password, email) VALUES ('$login', '$password2', '$email')");
            echo 'Вы успешно зарегистрированы! ' . '<a href="/"><b>Вернуться на главную</b></a>';
        } else {
            echo 'Пароли не совпадают! Попробуйте еще раз';
        }
    } else {
        echo 'Заполните все поля!';
    }
}

//login
if ( isset($_POST['login']) ){
    $password = $_POST['password'];
    $email = $_POST['email'];
    if ( !empty($email) && !empty($password) ){
        $auth = $db->fetch("SELECT login, email, COUNT(id) AS count FROM users WHERE password = '$password' && email = '$email'");
        if ($auth['count'] == 1){
            $_SESSION['user']['login'] = $auth['login'];
            $_SESSION['user']['email'] = $auth['email'];
            echo '<div>Добро пожаловать <b>' . $auth['login'] . '</b>!</br><a href="/">Вернуться на главную</a></div>';
        } else {
            echo 'Введенного Вами пользователя не существует! Попробуйте еще раз';
        }
    } else {
        echo 'Заполните все поля!';
    }
}
