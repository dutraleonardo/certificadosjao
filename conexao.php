<?php
$hostdb = "localhost";
$userdb = "root";
$passdb = "";// senha do banco de dados
$tabledb = "jaoodontou3";// tabela do banco de dados

$conecta = mysql_connect($hostdb, $userdb, $passdb) or die (mysql_error());
@mysql_select_db($tabledb, $conecta) or die ("Erro ao conectar com o banco de dados");
?>