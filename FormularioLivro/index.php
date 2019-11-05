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
$preco=$_POST['preco'];


if($_POST['button'] == "Cadastrar"){
$sql=mysqli_query($conexao,"insert into livros(titulo,autor,editora,preco)values('$titulo', '$autor', '$editora', '$preco')");
echo"<h1>O $titulo foi cadastrado com sucesso!!!</h1>";
}

if($_POST['button'] == "Deletar"){
    $sql = mysqli_query($conexao, "delete from livros where titulo ='{$titulo}'");
    echo"<h1> O livro '$titulo', foi deletado com sucesso!</h1>";
}

if($_POST['button'] == "Atualizar"){
    $sql=mysqli_query($conexao, "update livros set autor='{$autor}' where editora = '$editora'");
    echo"<h1>O $autor foi atualizado com sucesso!!!</h1>";
}

if($_POST['button'] == "Selecionar"){
    $busca = "select * from livros ";
    $sql = mysqli_query($conexao, $busca);
    $i=0;
    while ($linha= mysqli_fetch_array($sql)){
        echo"<input type='text' value='".$linha['titulo']."'/>";
        echo"<input type='text' value='".$linha['autor']."'/>";
        echo"<input type='text' value='".$linha['editora']."'/>";
        echo"<input type='text' value='".$linha['preco']."'/>";
        $i++;
    }
}
mysqli_close($conexao);

?>
<a href="index.html">Voltar</a>