<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulário at Ronan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  
  <body class="container">
    <h1>Formulário at. Ronan</h1>

    <form method="POST" action="form.php" > 
  <div class="mb-3">
    <label for="nome" class="form-label">nome</label>
    <input type="text" class="form-control" id="nome" name="nome" >
  </div>
  <div class="mb-3">
    <label for="semetre" class="form-label">Semestre do Curso:</label>
    <input type="number" class="form-control" id="semestre" name="semestre">
  </div>

  <a href="index.php" class="btn btn-info">VOLTAR</a>

  <button type="reset" class="btn btn-warning">LIMPAR</button>

  <button type="submit" class="btn btn-success">ENVIAR</button>
  
  </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>