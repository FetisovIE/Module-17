<?php

session_start();

if (!isset($_SESSION['sent'])){
    $_SESSION['sent'] = 0;
} else {
    if (isset($_POST['form-checker'])) {
        $_SESSION['sent']++;
    }
}

$sent = $_SESSION['sent'];
?>

<html>
<body>
<p>Форма заполнялась: <?php echo $sent; ?> раз</p>
<form name="test" method="post" action="./check_session.php">
    <input type="hidden" name="form-checker" value="1">
    <input type="submit" value="Отправить">
</form>
</body>
</html>
