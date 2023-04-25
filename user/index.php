<?php
include_once '../templates/header.php';
$bdConnection =  include('../bd.php');
$usersQuery = "SELECT * FROM users";
$usersResponse = $bdConnection->query($usersQuery);
?>

<table class="table table-light table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Age</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php while ($fila = $usersResponse->fetch()) { ?>
      <tr scope="row">
        <td><?php echo $fila['ID']; ?></td>
        <td><?php echo $fila['USERNAME']; ?></td>
        <td><?php echo $fila['EMAIL']; ?></td>
        <td><?php echo $fila['AGE']; ?></td>
        <td>
          <a href="../secciones/editarUsuario.php?id=<?php echo $fila['ID']; ?>" class="btn btn-primary">
            📝
          </a>
          <form id="delete-form">
            <input type="hidden" name="id" id="id" value="<?php echo $fila['ID']; ?>">
            <input name="borrar" id="borrar" class="btn btn-danger delete-user" type="submit" data-userid="<?php echo $fila['ID']; ?>" value="🗑">
          </form>
        </td>
      </tr>
    <?php } ?>
  </tbody>
</table>
<script>
  const deleteForms = document.querySelectorAll(".delete-user");
  deleteForms.forEach(form => {
    form.addEventListener('submit', (event) => {
      event.preventDefault();
      const userId = form.dataset.userid;
      if (confirm(`¿Está seguro que desea eliminar el usuario con ID ${userId}?`)) {
        fetch(`../secciones/eliminarUsuario.php`, {
            method: "POST",
            body: new URLSearchParams({
              id: userId
            })
          })
          .then(response => {
            if (response.ok) {
              console.log(form.parentNode.parentNode)
              alert('El usuario ha sido eliminado correctamente.');
            } else {
              alert('Ha ocurrido un error al eliminar el usuario.');
            }
          })
      }
    })
  })
</script>
<?php include_once '../templates/footer.php'; ?>