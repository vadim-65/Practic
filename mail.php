<?php
    session_start(); // запуск сессии

    // Если форма была отправлена методом POST, сохраняем данные в сессии
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $_SESSION['name'] = isset($_POST['name']) ? $_POST['name'] : '';
        $_SESSION['mail'] = isset($_POST['mail']) ? $_POST['mail'] : '';
        $_SESSION['image'] = isset($_POST['image']) ? $_POST['image'] : '';
        $_SESSION['message'] = isset($_POST['message']) ? $_POST['message'] : '';
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Подключаем Bootstrap стили -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE2S9pIkaG3JuA4VARS15" crossorigin="anonymous">
    <title>Ваше сообщение успешно отправлено</title>
</head> 
<body>
    <?php
        $back = "<p><a href=\"javascript:history.back()\">Вернуться назад</a></p>";
        if(empty($_SESSION['name']) || empty($_SESSION['mail']) || empty($_SESSION['message'])){ 
            echo "Для отправки сообщения заполните все поля!$back";
        } else {
            // Отправляем письмо на указанный адрес электронной почты
            // Содержимое письма формируется из данных в сессии
            mail(
                'lukasenkovadim206@mail.ru',
                'http://localhost/practic/index.php',
                'Вам написал: ' . $_SESSION['name'] . '<br>Его почта: ' . $_SESSION['mail'] . '<br>Его сообщение: ' . $_SESSION['message'] . '<br>Прикрепленный файл: ' . $_SESSION['image'],
                "Content-type:text/html;charset=windows-1251"
            );

            // Выводим сообщение об успешной отправке и ссылку на возврат к форме
            echo "Ваше сообщение успешно отправлено!<br>Вы получите ответ в ближайшее время.<br>$back";

            // Выводим данные, сохраненные в сессии
            echo "Name: {$_SESSION['name']}<br>Mail: {$_SESSION['mail']}<br>Message: {$_SESSION['message']}";
            exit;
        }
    ?>

    <!-- Подключаем Bootstrap скрипты -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmIa7digMnWJdO8W6Jsp" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE2S9pIkaG3JuA4VARS15" crossorigin="anonymous"></script>
</body>
</html>



   
    
   