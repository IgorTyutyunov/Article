<?php
$mysqli->query("SET names utf8");
$allArticle=$mysqli->query("SELECT * FROM articletable");
while(($row=$allArticle->fetch_assoc())!=false){
	echo $row[id].'. '.functionArticlePreview($row[id],$row[article],200);
	echo "<br><br>";
}
$mysqli->close();
?>