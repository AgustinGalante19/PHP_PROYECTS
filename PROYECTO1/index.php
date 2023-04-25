<?php
include_once 'templates/header.php';
require 'database.php';
?>

<body>
  <div class="flex flex-col min-h-screen">
    <div class="flex-1 bg-[#33A1FD]">
      <main>
        <div class="bg-[#2176FF] w-[800px] p-48 rounded">
          <h1 class="text-2xl font-bold mb5 text-center text-white">Iniciar sesión</h1>
          <form action="" method="post" class="space-y-5">
            <div>
              <label for="email" class="block font-medium mb-1 text-white">Email:</label>
              <input id="email" type="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-500 focus:border-blue-500" required>
            </div>
            <div>
              <label for="password" class="block font-medium mb-1 text-white">Contraseña:</label>
              <input id="password" name="password" type="password" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-500 focus:border-blue-500" required>
            </div>
            <div class="flex justify-center items-center">
              <button type="submit" class="bg-[#31393C] hover:bg-[#63757c] text-white px-4 py-2 rounded-lg font-medium transition">Iniciar Sesión</button>
            </div>
            <span class="text-gray-100 text-sm">No tienes una cuenta?</span>
            <a type="submit" href="signup.php" class="text-gray-100 underline text-sm">Registrarse</a>
          </form>
        </div>
      </main>

      <?php
      include_once 'templates/footer.php';
      ?>