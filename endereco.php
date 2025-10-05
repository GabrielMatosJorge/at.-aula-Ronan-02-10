<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulario at. Ronan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="css/styles.css">
  </head>
  
  <body class="container">
    <div class="p-1 text-light">
    <h1>Formulario at. Ronan!</h1>
    </div>

    <form method="POST" action="recebe-endereco.php" > 
  <div class="mb-3 text-light">
   <label for="nome" class="form-label">nome</label>
    <input type="text" class="form-control" id="nome" name="nome" >
  </div>
  <div class="mb-3 text-light">
    <label for="semetre" class="form-label">Semestre do Curso:</label>
    <input type="number" class="form-control" id="semestre" name="semestre">
  <div class="mb-3 text-light">
    <label for="curso" class="form-label">Curso:</label>
    <input type="text" class="form-control" id="curso" name="curso">
  </div>
   <div class="mb-3 text-white">
            <label for="número" class="form-label">Número (1 a 10):</label>
            <input type="number" name="número" id="número" class="form-control" min="1" max="10" required>
        </div>

  <a href="index.php" class="btn btn-primary">VOLTAR</a>

  <button type="reset" class="btn btn-danger">LIMPAR</button>

  <button type="submit" class="btn btn-success">ENVIAR</button>
  
  </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>