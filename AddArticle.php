<?php
	if(isset($_POST[submitSave])){
		$mysqli->query("SET names utf8");
		$mysqli->query("INSERT INTO articletable (article) VALUES('$_POST[textAreaArticle]')");
	}
?>