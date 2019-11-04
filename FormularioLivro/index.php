<?php
$host="localhost";
$user="root";
$pass="";
$banco="cadastro_livro";
$conexao=mysqli_connect($host,$user,$pass) or die (mysqli_error());
mysqli_select_db($conexao,$banco)or die (mysqli_error());

$titulo=$_POST['titulo'];
$autor=$_POST['autor'];
$editora=$_POST['editora'];
$preco=$_POST['precooo3'];



$sql=mysqli_query($conexao,"insert into livros(titulo,autor,editora,preco)values('$titulo', '$autor', '$editora', '$preco')");
echo"<center>Cadastro Realizado com Sucesso!!!";
mysqli_close($conexao);

?>