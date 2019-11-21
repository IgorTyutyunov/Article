<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Полный текст статьи</title>
</head>
<body>
<h2>Полный текст статьи</h2>
<?php  
 include_once "ConnectDB.php";
 functionSelectArticle($_GET[id]);
 echo "<br> <a href=/index.php>Назад</a>";
 $mysqli->close();
?>

</body>
</html>
