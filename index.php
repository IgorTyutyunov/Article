<?php 
include_once "ConnectDB.php";
include_once "FunctionArticlePreview.php";
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<h3>Текст статьи</h3>
Если длина статьи меньше 200-от символов, то она отображается полностью, без возможности открыть её по ссылке.
<form name"formArticle" action="index.php" method="post">
<textarea name="textAreaArticle" cols="50" rows="10">
</textarea>
<br>
<input name="submitSave" type="submit" value="Сохранить">
</form>
<?php 
include_once "AddArticle.php";
include_once "ShowArticle.php";
?>
</body>
</html>