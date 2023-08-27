<?php
include_once('./models/Auth.php');

if(isset($_POST['login'])){
    $data = [
        "username" => $_POST['username'],
        "password" => $_POST['password']
    ];

    $result = Auth::login($data);
    // die(var_dump($result));
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
            padding: 1.5rem;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <div class="background-image pt-72 bg-cover bg-center">
        <div class="overlay absolute top-0 left-0 w-full h-full bg-black opacity-50"></div>
        <div class="form-container absolute">
            <form class="p-5" method="POST">
                <h2 class="text-3xl font-semibold mb-4">Formulir Login</h2>
                <!-- Tag Altert PHP -->
                <?php if(isset($result)) : ?>
                <div class="alert alert-<?php $result["status"] === 'error' ? print ("danger") :
                  "Success" ?>">
                    <?= $result["message"] ?>
                </div>
                <?php endif ?>
                <!-- penutup tag alert -->

                <div class="mb-4">
                    <label class="block text-gray-800 text-sm font-semibold mb-2" for="username">Nama</label>
                    <input class="w-full px-3 py-2 border rounded-md" type="text" id="username" name="username">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-800 text-sm font-semibold mb-2" for="password">Password</label>
                    <input class="w-full px-3 py-2 border rounded-md" type="password" id="password" name="password">
                </div>
                <input type="submit" name="login" value="Sign In"
                    class="cursor-pointer bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-md" />

                <div class="mt-3 font-normal flex">
                    <h6>Not registred yet?</h6>
                    <a href="register.php" class="pl-2 text-blue-600 hover:text-blue-800">Sign up</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>