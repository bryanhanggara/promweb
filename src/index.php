<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="output.css">
    <title>Login</title>

</head>
<body>
    <section class="bg-emerald-50 min-h-screen flex items-center justify-center">
        <!-- login container -->
        <div class="bg-white flex rounded-2xl shadow-lg max-w-3xl p-5 items-center">
          <!-- form -->
          <div class="md:w-1/2 px-8 md:px-16">
            <h2 class="font-bold text-2xl text-[#294B29]">Form Mahasiswa</h2>
            <p class="text-xs mt-4 text-[#4F6F52]">Silahkan isi biodata diri anda</p>
      
            <form action="main.php" method="POST" class="flex flex-col gap-1.5">
              <input class="p-2 mt-5 rounded-xl border" type="email" name="email" placeholder="Email" required>
              <input type="text" class="p-2 rounded-xl border" name="nama" placeholder="Nama Lengkap">
              <input type="text" class="p-2 rounded-xl border" name="NIM" placeholder="NIM">
              <input type="text" class="p-2 rounded-xl border" name="fakultas" placeholder="Fakultas">
              <input type="text" class="p-2 rounded-xl border" name="jurusan" placeholder="Jurusan">
              <button class="p-2 mt-5 bg-[#739072] rounded-xl text-white font-bold py-2 hover:scale-105 duration-300" type="submit">Submit</button>
            </form>

          </div>
      
          <!-- image -->
          <div class="md:block hidden w-1/2">
            <img class="rounded-2xl" src="https://i.pinimg.com/564x/3d/46/30/3d4630d017b344eed3b5ad1036806d3d.jpg">
          </div>
        </div>
      </section>
      
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</body>
</html>