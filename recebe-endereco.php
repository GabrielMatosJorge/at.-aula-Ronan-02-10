<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/styles.css">
    <title>resultados e tabuada</title>
</head>
<body class="container text-white">

<div class="container p-1 text-white border-white-subtle rounded-3;" style="max-width: 800px; max-height: 450px; overflow: auto; text-align:center;"> 
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "<h1>Seus resultados:</h1>";
    echo "Nome: " . $_POST['nome'] . "<br>";
    echo "Semestre: " . $_POST['semestre'] . "<br>";
    echo "Curso: " . $_POST['curso'] . "<br>";
    ?>

    <?php
    // verifica o numero digitado, cria a variavel $numero exibe o titulo da tabela/tabuada //
    if (isset($_POST['número']) & ($_POST['número'])) {
        $numero = $_POST['número'];
        echo "Número: $numero<br><br>";
        ?>
    </div>
    <div class="container mt-2 bg-dark text-dark bold  " style="max-width: 300px; max-height: 410px; overflow: auto; text-align:center;">

     <?php   
        echo "<strong>Tabuada do $numero:</strong><br>";

        // Tabela tabuada da variavel $numero//
        echo "<table style='border: 2px  black; border-collapse: collapse; width: 100%;'>";
        echo "<tr style='border: 2px  black;'> <th style='border: 2px black;'> $numero </th><th style='border: 2px black;'>Resultado</th></tr>";
        for ($i = 0; $i <= 10; $i++) {
        echo "<tr> <td style='padding: 10px;' >$numero x $i</td> <td style='padding: 10px;'>" . ($numero * $i) . "</td> </tr>";
        }
        echo "</table>";
    } 
}
?>
</div>
</div>
 <br>
<div class="container-box" style="max-width: 500px; max-height: 255px; overflow: auto; text-align: center;">
    <br>
    <img src="https://i.ytimg.com/vi/rrpmu_sXs6I/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLDw4rpWNS0XIvYbWp1b0iah4r_jtQ" alt="Tamo Junto" class="img-fluid">
</div>


    <a href="endereco.php" class="btn btn-dark">VOLTAR</a>
</body>
</html>
