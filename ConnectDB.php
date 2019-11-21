<?php  
$HOST = "localhost";       
$USER = "root";              
$PASS = "";                  
$DB = "articledb";  
$mysqli = new mysqli($HOST, $USER, $PASS);

	if(!$mysqli->select_db($DB)){
		$mysqli->query("CREATE DATABASE $DB"); 
		$mysqli->select_db($DB);
		$mysqli->query("SET NAMES 'utf8'"); 
		$mysqli->query("SET CHARACTER SET 'utf8'");
		$mysqli->query("SET SESSION collation_connection = 'utf8_general_ci'");
		$mysqli->query("CREATE TABLE articletable(id int NOT NULL PRIMARY KEY auto_increment, article text )CHARACTER SET utf8 COLLATE utf8_general_ci;");
	}

function functionSelectArticle($id){
	global $mysqli;
	$mysqli->query("SET names utf8");
	$selectArticle=$mysqli->query("SELECT article FROM articletable WHERE id=$id");
	$row=$selectArticle->fetch_assoc();
	echo $row[article];
}	
?>