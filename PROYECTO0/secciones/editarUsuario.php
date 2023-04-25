<?php
include_once '../bd.php';
include_once '../templates/header.php';
$id = $_GET['id'];
$sql = "SELECT * FROM users WHERE id = $id";
$result = $conn->query($sql);
$usuario = $result->fetch();
?>

<div class="card">
  <div class="card-header">
    Agregar datos
  </div>
  <div class="card-body">

    <form method="POST" action="actualizar.php">
      <div class="mb-3">
        <input type="hidden" name="id" value="<?php echo $usuario['ID'] ?>">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" name="username" id="username" aria-describedby="helpId" placeholder="Username" value="<?php echo $usuario['USERNAME'] ?>">
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text" class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="Email" value="<?php echo $usuario['EMAIL'] ?>">
      </div>
      <div class="mb-3">
        <label for="age" class="form-label">Age</label>
        <input type="number" class="form-control" name="age" id="email" aria-describedby="helpId" placeholder="Apellido" value="<?php echo $usuario['AGE'] ?>">
      </div>
      <button type="submit" class="btn btn-success">Editar</button>
    </form>
  </div>
</div>

<?php include_once '../templates/footer.php'; ?>