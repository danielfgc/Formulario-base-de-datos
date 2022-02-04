<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
    <title>Acceso a Datos</title>
  </head>
  <body>
    <h2>Crud Basico</h2>
    <div class="container">
    <form method="get">
    <div class="col-3">
  <label for="Título" class="form-label">Título</label>
  <input type="text" class="form-control" id="Título" name="Titulo">
</div>
<div class="col-3">
  <label for="Autor" class="form-label">Autor</label>
  <input type="text" class="form-control" id="Autor" name="Autor">
</div>
<div class="col-3">
  <label for="fecha" class="form-label">Fecha</label>
  <input type="date" class="form-control" id="fecha" name="Fecha">
</div>
<div class="col-3">
  <label for="exampleFormControlTextarea1" class="form-label">Descripción</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="Desc"></textarea>
</div>
<button type="submit" class="btn btn-primary mb-3">Publicar</button>
</form>
<table class="table table-striped table-hover">
        <thead>
            <th>Id</th>
            <th>Titulo</th>
            <th>Autor</th>
            <th>Fecha de Publicacion</th>
            <th>Descripción</th>
            
        </thead>
    <?php
        require_once("Conexion.php");
        $conexion = new Conexion();
        $conexion -> gestionarPublicaciones();
        $conexion -> verPubli();
        
    ?>
</div>

 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  </body>
</html>
