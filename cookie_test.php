<?php

//setcookie('test-cookie', 'this is my first cookie');

if (isset($_POST['username']) && !empty($_POST['username'])){
    setcookie('form-sent', '1');
}

if (isset($_COOKIE['form-sent']) && $_COOKIE['form-sent'] == '1'){
    echo 'Форма уже отправлена' . PHP_EOL;
} else {

?>

<html>
<body>
<form method="post" action="./cookie_test.php">
    <label>Ваше имя</label><br>
    <input type="text" name="username"><br>
    <input type="submit" value="Отправить">
</form>
</body>
</html>

<?php
}
?>