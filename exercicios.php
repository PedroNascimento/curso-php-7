<!DOCTYPE html>
<html lang="pt-BR">
<head>
  
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    
  <link rel="stylesheet" href="./assets/styles/style.css">
  <link rel="stylesheet" href="./assets/styles/exercicio.css">
  
  <title>Curso PHP - Cod3r</title>
</head>
<body class="exercicio">
  <header class="header">
    <h1>Curso PHP</h1>
    <h2>Visualização dos Exercícios</h2>
  </header>
  <nav class="navegacao">
    <a href=<?= "{$_GET['dir']}/{$_GET['file']}.php" ?> 
      class="verde">Sem formatação</a>
    <a href="index.php" class="vermelho">Voltar</a>    
  </nav>
  <main class="main">
    <div class="content">
      <?php 
        include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
      ?>
      
    </div>
  </main>
  <footer class="footer">
    Pedro Nascimento | COD3R & ALUNOS <?= date('Y');?>
  </footer>  
</body>
</html>