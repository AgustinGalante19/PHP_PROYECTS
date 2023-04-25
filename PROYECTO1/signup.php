<?php
include_once './templates/header.php';
require './database.php';

$mensaje = '';

if (!empty($_POST['email']) && !empty($_POST['username']) && !empty($_POST['password'])) {
  $email = $_POST['email'];
  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = "INSERT INTO login (email, username, password) VALUES ('$email', '$username', '$password')";
  $result = $conn->query($sql);
  if ($result) {
    $mensaje = "Creado correctamente 👍";
  } else {
    $mensaje =  "Error: " . $conn->errorInfo()[2];
  }
}
?>

<div class="flex flex-col min-h-screen">
  <div class="flex-1 bg-[#33A1FD]">
    <main>
      <div class="bg-[#2176FF] w-[800px] p-48 rounded">
        <?php if (!empty($mensaje)) { ?>
          <div class="p-4 bg-green-400 text-white font-bold rounded">
            <p> <?= $mensaje ?> </p>
          </div>
        <?php } ?>
        <h1 class="text-2xl font-bold mb5 text-center text-white">Registrarse</h1>
        <form action="signup.php" method="POST" class="space-y-5">
          <div>
            <label for="email" class="block font-medium mb-1 text-white">Email:</label>
            <input id="email" type="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-500 focus:border-blue-500" required>
          </div>
          <div>
            <label for="username" class="block font-medium mb-1 text-white">Username:</label>
            <input id="username" type="text" name="username" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-500 focus:border-blue-500" required>
          </div>
          <div>
            <label for="password" class="block font-medium mb-1 text-white">Contraseña:</label>
            <input id="password" name="password" type="password" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-500 focus:border-blue-500" required>
          </div>
          <div class="flex justify-center items-center">
            <button type="submit" class="bg-[#31393C] hover:bg-[#63757c] text-white px-4 py-2 rounded-lg font-medium transition">Registrarse</button>
          </div>
        </form>
        <span class="text-gray-100 text-sm">Ya tienes una cuenta?</span>
        <a href="<?php echo $urlBase;?>" class="text-gray-100 underline text-sm">Iniciar sesión</a>
      </div>
    </main>

    <?php include_once './templates/footer.php'; ?>