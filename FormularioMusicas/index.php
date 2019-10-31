<?php

include_once ('conexao.php');

$artista=$_POST['art'];
$titulo=$_POST['titulo'];
$descricao=$_POST['descricao'];
$preco=$_POST['preco'];
$ano=$_POST['ano'];
$tipo_musica=$_POST['tipo_musica'];
$gravadora=$_POST['gravadora'];
$musica=$_POST['musica'];

$sql_nv = mysqli_query($conn,"INSERT INTO cd(art,titulo,descricao,preco,ano,tipo_musica,gravadora,musica) values('$artista','$titulo','$descricao', '$preco','$ano','$tipo_musica','$gravadora','$musica')");
echo"<h1><center>Cadastro do CD <br> Realizado com Sucesso!!!";
mysqli_close($conn);

?>