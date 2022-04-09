<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php

$servidor = "localhost";
$usuario = "root";
$senha = "minas";
$banco = "usuario";

$con = mysqli_connect($servidor, $usuario, $senha);

if ($con == false) {
    die("Erro ao conectar BD.");
}

$bd = mysqli_select_db($con, $banco);

if ($bd == false) {
    die("Erro ao selecionar BD.");
}

$sql = "SELECT * FROM usuario order by nome";

$res = mysqli_query($con, $sql);

while($linha = mysqli_fetch_assoc($res)){
    echo $linha['nome']."<br>";
    echo "<img src='img/".$linha['imagem']."'style='border-radius: 100px; width:100px; height:100px;'>";
    echo "<br>";
    echo "<a class='btn btn-outline-secondary' href='editar.php?id=".$linha['id']."'>Editar<br></a>";
    echo "<br> <br>";
}

?>