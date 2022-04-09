<?php

if ($_FILES['imagem']['tmp_name']) {
    $pasta = "img/";
    $uplodou = move_uploaded_file($_FILES['imagem']['tmp_name'], $pasta . $_FILES['imagem']['name']);

    if ($uplodou == false) {
        die("Erro ao enviar imagem");
    }

    $foto = $_FILES['imagem']['name'];

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

    $sql = "UPDATE usuario 
            SET nome = '$nome',
            imagem = '$foto'
            WHERE id = $id";


    $res = mysqli_query($con, $sql);

    if ($res) {
        echo "Usuario inserido com sucesso!";
    }

}else {

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

    $sql = "UPDATE usuario 
            SET nome = '$nome' 
            WHERE id = $id";


    $res = mysqli_query($con, $sql);

    if ($res) {
        echo "Usuario inserido com sucesso!";
    }
}

?>

