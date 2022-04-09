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

<form action="gravar.php" method="POST" enctype="multipart/form-data" >

<div class="container-fluid">
<br>

<div class="row">
    <div class="col">
    
    <h1  class="text-secondary fst-italic"><svg xmlns="http://www.w3.org/2000/svg" width="43" height="43" fill="currentColor" class="bi bi-file-earmark-person" viewBox="0 0 15 16">
  <path d="M11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2v9.255S12 12 8 12s-5 1.755-5 1.755V2a1 1 0 0 1 1-1h5.5v2z"/>
</svg>
        CADASTRO 
    </h1>
    <br><br>   
    </div>
</div>

<div class="row">
        <div class="col-7">
            <label for="nome" >Nome:</label>
            <input type="text" name="nome" class="form-control"> 
            <br> <br>
    </div>

    <div class="row">
        <div class="col-4">
            <label for="foto">Foto:</label>
            <input type="file" name="foto" class="form-control">
            <br> <br>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-secondary">Gravar</button>
            <a href="/perfil/verusuarios.php" class="btn btn-outline-secondary">Ver Usuários</a>
            <br> <br>
        </div>
    </div>

</div>

 

</form>
   
</body>
</html>