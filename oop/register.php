<?php
include_once('./models/Auth.php');

if(isset($_POST['register'])) {
    $data = [
        "name" => $_POST["name"],
        "username" => $_POST["username"],
        "password" => $_POST["password"],
        "password_confirm" => $_POST["password_confirm"]
    ];

    $register = Auth::register($data);

    if($register["status"] === "success") {
        header("Location: login.php");
    }
    else{
        header("Location: register.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Background Image dengan Efek Gelap dan Formulir Tengah - Tailwind CSS</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .background-image {
            background-image: url('../img/RPL.jpeg');
            height: 100vh;
        }


        .form-container {
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(255, 255, 255, 0.8);
            width: 80vh;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <div class="background-image pt-72 bg-cover bg-center">
        <div class="overlay absolute top-0 left-0 w-full h-full bg-black opacity-50"></div>
        <div class="form-container absolute">
            <form class="p-5 px-10" method="POST">
                <h2 class="text-3xl font-semibold mb-4">Formulir Registrasi</h2>

                <div class="mb-4">
                    <label class="block text-gray-800 text-sm font-semibold mb-2" for="name">Nama</label>
                    <input class="w-full px-3 py-2 border rounded-md" type="text" id="name" name="name" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-800 text-sm font-semibold mb-2" for="username">Username</label>
                    <input class="w-full px-3 py-2 border rounded-md" type="username" id="username" name="username" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-800 text-sm font-semibold mb-2" for="password">Password</label>
                    <input class="w-full px-3 py-2 border rounded-md" type="password" id="password" name="password" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-800 text-sm font-semibold mb-2" for="password_confirm">Password Confirm</label>
                    <input class="w-full px-3 py-2 border rounded-md" type="password_confirm" id="password_confirm" name="password_confirm" required>
                </div>
                <input type="submit" name="register" value="Submit"
                    class="cursor-pointer bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-md" />

                <div class="mt-3 font-normal flex">
                    <h6>Already have an account?</h6>
                    <a href="login.php" class="pl-2 text-blue-600 hover:text-blue-800">Sign In</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
<!-- 
<div class="actual-form">
  <div class="input-wrap">
    <input type="text" name="name" id="name" class="input-field" />
    <label for="username">Name</label>
  </div>

  <div class="input-wrap">
    <input type="username" name="username" id="username" class="input-field" />
    <label for="username">Username</label>
  </div>

  <div class="input-wrap">
    <input type="password" name="password" id="password" class="input-field" />
    <label for="password">Password</label>
  </div>

  <div class="input-wrap">
    <input type="password_confirm" name="password_confirm" id="password_confirm" class="input-field" />
    <label for="password_confirm">password_confirm</label>
  </div>

  <input type="submit" name="register" value="Sign In" class="sign-btn" /> -->