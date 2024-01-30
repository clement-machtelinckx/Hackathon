<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/index_style.css" media="screen">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Hackathon</title>
</head>
<?php
include_once "_partials/header.php";
?>
<style>
            .logo {
            width: 200px;
            height: 200px;
        }
</style>
<body>
<div class="">
        <img src="img/Tour_du_monde-removebg-preview.png" alt="Tour du Monde" class="logo">
    </div>
    <div class="d-flex justify-content-between">
        <div class="container mt-4 bg-body-secondary">

            <form>
                <fieldset>
                    <div class="container mt-4">

                        <div class="form-group">
                            <label for="name" class="form-label mt-4">Place name</label>
                            <input type="email" class="form-control" id="name" placeholder="Place Name">
                        </div>
                        <div class="form-group">
                            <label for="nb_ppl" class="form-label mt-4">Nombre of ppl</label>
                            <input type="email" class="form-control" id="nb_ppl" placeholder="Enter number of ppl">
                        </div>
                        <div class="form-group">
                            <label for="adresse" class="form-label mt-4">Location</label>
                            <input type="email" class="form-control" id="adresse" placeholder="Enter address">
                        </div>
                        <div class="form-group">
                            <label for="price" class="form-label mt-4">Price per day</label>
                            <input type="email" class="form-control" id="price" placeholder="Enter price">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label mt-4">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <fieldset class="form-group">
                            <legend class="mt-4">Handicap access</legend>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="handi_acces_yes">
                                <label class="form-check-label" for="handi_acces_yes">Yes</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="handi_acces_no" checked="">
                                <label class="form-check-label" for="handi_acces_no">No</label>
                            </div>
                        </fieldset>
                    </div>
                </fieldset>
                <button class="btn btn-success mt-4">Submit</button>
            </form>
        </div>
        <div class="container mt-4 bg-body-secondary">
            <div class="form-group mt-4">
                <label for="exampleTextarea" class="form-label mt-4">Description</label>
                <textarea class="form-control" id="exampleTextarea1" rows="3" placeholder="add description"></textarea>
            </div>
            <div class="form-group mt-4">
                <label for="exampleTextarea" class="form-label mt-4">Restaurant / snack near by</label>
                <textarea class="form-control" id="exampleTextarea2" rows="3" placeholder="Restaurants and Snack description "></textarea>
            </div>
            <div class="form-group mt-4">
                <label for="exampleTextarea" class="form-label mt-4">Activites near by</label>
                <textarea class="form-control" id="exampleTextarea3" rows="3" placeholder="activites description"></textarea>
            </div>
        </div>
    </div>
</body>
</html>
