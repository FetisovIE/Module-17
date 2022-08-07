<html>
<body>
<form method="post" action="./upload_file.php" enctype="multipart/form-data">
    <input type="file" name="photo"><br>
    <input type="submit" value="Отправить">
</form>
</body>
</html>

<?php

if (isset($_FILES['photo'])) {
    try {
        move_uploaded_file($_FILES['photo']['tmp_name'], './' . $_FILES['photo']['name']);
        ?>
        <img src="<?php echo './' . $_FILES['photo']['name'] ?>">
        <?php
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
}

?>