<?php
    // Начинаем сессию
    session_start();

    // Если переменной $_SESSION['name'] нет, то устанавливаем ее значение пустой строки
    if (!isset($_SESSION['name'])) {
        $_SESSION['name'] = '';
    }

    // Если переменной $_SESSION['mail'] нет, то устанавливаем ее значение пустой строки
    if (!isset($_SESSION['mail'])) {
        $_SESSION['mail'] = '';
    }

    // Если переменной $_SESSION['image'] нет, то устанавливаем ее значение пустой строки
    if (!isset($_SESSION['image'])) {
        $_SESSION['image'] = '';
    }

    // Если переменной $_SESSION['message'] нет, то устанавливаем ее значение пустой строки
    if (!isset($_SESSION['message'])) {
        $_SESSION['message'] = '';
    }
?>

<!-- Разметка формы с использованием Bootstrap стилей -->
<form class="bg-light p-3" method="post" action="mail.php" enctype="multipart/form-data">
    
    <!-- Левая часть формы -->
    <div class="d-flex flex-column">
        
        <label for="name" class="mb-2">Имя:</label>
        <input required maxlength="30" type="text" name="name" class="mb-3" value=<?=$_SESSION['name']?>>

        <label for="mail" class="mb-2">E-mail:</label>
        <input required maxlength="30" type="email" name="mail" class="mb-3" value=<?=$_SESSION['mail']?>>

        <label for="image" class="mb-2">Файл:</label>
        <input accept=".jpg, .png" type="file" name="image" class="mb-3" value=<?=$_SESSION['image']?>>
    
    </div>

    <!-- Правая часть формы -->
    <div class="d-flex flex-column">
        
        <label for="message" class="mb-2">Сообщение:</label>
        <textarea rows="7" cols="50" name="message" class="mb-3" value=<?$_SESSION['message']?>></textarea>

        <input required type="submit" value="Отправить" class="btn btn-primary">
    </div>

</form>
