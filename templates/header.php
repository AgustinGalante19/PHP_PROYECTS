<?php
$urlBase = "http://localhost:8080/Proyecto0"
?>

<!doctype html>
<html lang="es">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>
<body>
  <header>
    <nav class="navbar navbar-expand navbar-light bg-light mb-4">
      <ul class="nav navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="<?php echo $urlBase;?>/secciones/op1.php" aria-current="page">Nav 1 <span class="visually-hidden">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Nav 2</a>
        </li>
      </ul>
    </nav>
  </header>
  <main class="container">