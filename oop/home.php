<?php
session_start();

if($_SESSION["username"] === null) {
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Class Ranks</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
  <div class="">
    <!-- header -->
    <nav class="bg-green-600 text-white">
      <div class="py-3 mx-5">
        <div class="flex items-center">
          <h1 class="font-bold text-3xl mr-auto">Ranking Kelas XI-RPL </h1>
          <ul class=" flex flex-row font-medium mt-0 mr-6 space-x-7 text-sm">
            <li>
              <a href="#" class="text-gray-900 dark:text-white hover:underline" aria-current="page">Home</a>
            </li>
            <li>
              <a href="#" class="text-gray-900 dark:text-white hover:underline">Company</a>
            </li>
            <li>
              <a href="#" class="text-gray-900 dark:text-white hover:underline">Team</a>
            </li>
            <li>
              <a href="#" class="text-gray-900 dark:text-white hover:underline">Features</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- main -->
    <div class="flex">
      <!-- sidebar -->
      <div class="basis-1/4 bg-gray-300 p-5">
        <form class="rounded-xl bg-white p-4" action="">
          <h1 class="pb-5 pt-1 font-semibold
            text-3xl text-center">Form Input Nilai</h1>
          <div class="mb-3">
            <label for="nama">Nama :</label>
            <input class=" w-full block placeholder:font-light rounded border border-blue-300 p-1" id="nama" type="text"
              placeholder="Nama Lengkap">
          </div>
          <div class=" mb-3">
            <label for="nilai">Nilai :</label>
            <input class=" block w-full placeholder:font-light rounded border border-blue-300 p-1" id="nilai"
              type="number" placeholder="Nilai">
          </div>
          <div class="gap-2">
            <button class=" text-white bg-green-500 hover:bg-green-600 pt-2 pb-2 pr-6 pl-6 rounded-xl ">Submit</button>
          </div>
        </form>
      </div>
      <!-- content -->
      <div class="basis-3/4 bg-blue-400">
        <div class="rounded-xl m-5 bg-white p-5">
          <h1 class="pb-6 font-semibold text-3xl text-center">.⋆｡˚📝˚｡Tabel Siswa｡˚📝˚｡⋆.</h1>
          <table class="border text-center w-full ">
            <thead class="border bg-green-600 text-white">
              <tr>
                <th class="w-20 p-3">No</th>
                <th class=" w-96">Nama</th>
                <th class="">Nilai</th>
                <th class="">Aksi</th>
              </tr>
            </thead>
            <tbody class="bg-green-400">
              <tr class="border">
                <td class="p-4">1</td>
                <td>Abdurrahman Faiz</td>
                <td>90</td>
                <td>
                  <button class=" text-white hover:bg-blue-800 pt-2 pb-2 pr-3 pl-3 rounded-xl bg-blue-500">Edit</button>
                  <button class=" text-white hover:bg-red-800 pt-2 pb-2 pr-3 pl-3 rounded-xl bg-red-500">Hapus</button>
                </td>
              </tr>
              <tr class="border">
                <td class="p-4">2</td>
                <td>Ahmad faudzan</td>
                <td>80</td>
                <td>
                  <button class=" text-white hover:bg-blue-800 pt-2 pb-2 pr-3 pl-3 rounded-xl bg-blue-500">Edit</button>
                  <button class=" text-white hover:bg-red-800 pt-2 pb-2 pr-3 pl-3 rounded-xl bg-red-500">Hapus</button>
                </td>
              </tr>
              <tr class="border">
                <td class="p-4">3</td>
                <td>Adystya Anandita</td>
                <td>85</td>
                <td>
                  <button class=" text-white hover:bg-blue-800 pt-2 pb-2 pr-3 pl-3 rounded-xl bg-blue-500">Edit</button>
                  <button class=" text-white hover:bg-red-800 pt-2 pb-2 pr-3 pl-3 rounded-xl bg-red-500">Hapus</button>
                </td>
              </tr>
              <tr class="border">
                <td class="p-4">3</td>
                <td>Aisyah Salsabila</td>
                <td>80</td>
                <td>
                  <button class=" text-white hover:bg-blue-800 pt-2 pb-2 pr-3 pl-3 rounded-xl bg-blue-500">Edit</button>
                  <button class=" text-white hover:bg-red-800 pt-2 pb-2 pr-3 pl-3 rounded-xl bg-red-500">Hapus</button>
                </td>
              </tr>
              <tr class="border">
                <td class="p-4">4</td>
                <td>Aldo Ahmad Hirzi</td>
                <td>95</td>
                <td>
                  <button class=" text-white hover:bg-blue-800 pt-2 pb-2 pr-3 pl-3 rounded-xl bg-blue-500">Edit</button>
                  <button class=" text-white hover:bg-red-800 pt-2 pb-2 pr-3 pl-3 rounded-xl bg-red-500">Hapus</button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!-- footer -->
    <div class="bg-green-600 text-white p-3 text-center">
      <p>No copyright @<span class="line-through italic">Kvn.ads</span></p>
    </div>
  </div>
</body>

</html>