<?php

if(isset($_POST['title']) && isset($_POST['author']) && isset($_POST['content'])) {
    $article = ['title' => $_POST['title'], 'author' => $_POST['author'], 'content' => $_POST['content']];
    file_put_contents('article.json', json_encode($article));
} else {

?>


<html>
<body>
<form name="post_article" method="post" action="./post_form.php">
    <label>Заголовок</label><br>
    <input type="text" name="title"><br>
    <label>Автор</label><br>
    <input type="text" name="author"><br>
    <label>Текст</label><br>
    <textarea name="content"></textarea><br>
    <input type="submit" value="Отправить">
</form>
</body>
</html>

<?php
    }
?>