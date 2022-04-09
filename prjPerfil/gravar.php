<?php

if ($_FILES['foto']['tmp_name']) {
    $pasta = "img/";
    $uplodou = move_uploaded_file($_FILES['foto']['tmp_name'], $pasta . $_FILES['foto']['name']);

    if ($uplodou == false) {
        die("Erro ao enviar imagem");
    }

    $foto = $_FILES['foto']['name'];

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

    $sql = "INSERT INTO usuario (nome, imagem) VALUES ('$nome', '$foto')";

    $res = mysqli_query($con, $sql);

    if ($res) {
        echo "Usuario inserido com sucesso!";
    }
} else {

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

    $sql = "INSERT INTO usuario (nome, imagem) VALUES ('$nome', 'padrao.jpg')";

    $res = mysqli_query($con, $sql);

    if ($res) {
        echo "Usuario inserido com sucesso!";
    }
}

?>
