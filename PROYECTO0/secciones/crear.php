<?php
include_once("../templates/header.php");
?>
<!-- enctype="multipart/form-data" sirve para poder adjuntar archivos, si no se pone no se van a adjuntar o va a tirar error -->
<div class="card">
  <div class="card-header">
    Agregar datos
  </div>
  <div class="card-body">

    <form action="procesarDatos.php" method="POST" enctype="multipart/form-data">

      <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" name="username" id="username" aria-describedby="helpId" placeholder="Name">
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text" class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="Lastname">
      </div>
      <div class="mb-3">
        <label for="age" class="form-label">Age</label>
        <input type="number" class="form-control" name="age" id="email" aria-describedby="helpId" placeholder="Age">
      </div>
      <button type="submit" class="btn btn-success">Agregar</button>
      <a name="" id="" class="btn btn-primary" href="op1.php" role="button">Cancelar</a>
    </form>
  </div>
</div>

<?php
include_once("../templates/footer.php");
?>