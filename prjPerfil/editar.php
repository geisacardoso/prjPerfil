<?php

$id = $_GET['id'];

if($id == ""){
    die ("Erro ao realizar solicitação");

}

extract($_POST);

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

    $sql = "SELECT * FROM usuario where id = $id";

    $res = mysqli_query($con, $sql);

    if ($res == false) {
        die ("Erro ao localizar usuário.");
    }

    $usuario = mysqli_fetch_assoc($res);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Cadastro</title>
</head>
<body>

<form action="confirmar.php" method="POST" enctype="multipart/form-data" >

<div class="container-fluid">
<br>

<div class="row">
    <div class="col">
    <input type="hidden" name="id" value="<?=$id?>">
    </div>
    <br> <br>
</div>

<div class="row">
        <div class="col-7">
            <label for="nome" >Nome:</label>
            <input type="text" name="nome" value="<?=$usuario['nome']?>" class="form-control"> 
            <br> <br>
    </div>

    <div class="row">
        <div class="col-4">
            <label for="imagem">Imagem atual:</label>
            <figure>
            <img src="img/<?=$usuario['imagem']?>" height="100">
            </figure>
            <br> <br>
        </div>
    </div>

    <div class="row">
        <div class="col-4">
            <label for="foto">Alterar imagem</label>
            <br>
            <input type="file" name="imagem" class="form-control">
            <br> <br>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-secondary">Confirmar</button>
            <br> <br>
        </div>
    </div>

</div>
 

</form>
   
</body>
</html>