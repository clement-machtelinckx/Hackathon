<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/index_style.css" media="screen">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <title>Time2Find</title>
</head>
<?php
include_once "_partials/header.php";
?>
<body>
    <style>
        body {
            background-image: url('img/rs-131591-20140418-armin-x1800-19-1397834195.webp');
            background-size: cover;
            background-repeat: no-repeat;
        }
        .logo2 {
            width: 300px;
            height: 300px;
        }
    </style>

    <div class="container d-flex justify-content-center align-items-center mt-4" style="height: 60vh;">
        <div class="w-50 text-center">
            <div class="mb-4"> <!-- Ajout de la classe mb-4 pour ajouter un espace en bas du logo -->
                <img src="img/Tour_du_monde-removebg-preview.png" alt="Tour du Monde" class="logo2">
            </div>
            <form>
                <input type="text" placeholder="search a place" class="form-control form-control-lg">
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
