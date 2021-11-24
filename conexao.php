<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "quizera";


$banco = new mysqli("localhost","root","","quizera");
//$conexao =  new mysqli($servidor, $usuario, $senha, $dbname);
$conexao =   @mysqli_connect($servidor, $usuario, $senha, $dbname);
?>