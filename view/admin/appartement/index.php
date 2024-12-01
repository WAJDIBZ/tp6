<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Gestion des Biens Immobiliers</title>
    <style>
        body {
            background-image: url('https://cdn-ak.f.st-hatena.com/images/fotolife/f/furutanimunenobu/20190226/20190226220236.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
    </style>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand text-white" href="index.php">KATANA Immobiliére</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav me-auto">

                <li class="nav-item">
                    <a class="nav-link" href="../../../controller//admin/appartement//add.php">Add a proprety</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../../../controller/admin/appartement//lister.php">Proprety List</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">More Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-sign-in"></i>Connect</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-sign-out"></i>Disconnect</a>
                </li>

            </ul>
            <form class="d-flex" method="get" action="details.php">
                <input class="form-control me-sm-2" type="search" placeholder="Search" name="ref">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <div class="container mt-3">
        <div class="text-center my-4">
            <h1 class="display-4" style="color: #ffffff; text-shadow: 2px 2px 4px #000000;">Liste des appartement</h1>
        </div>
        <div class="row">
            <?php
            foreach ($LesAppartements as $val) {
            ?>
                <div class="col-3">
                    <div class="card">
                        <img src="https://i.pinimg.com/originals/4e/76/f8/4e76f83e581019338b43ed0000edc964.jpg" class="img-fluid" alt="la photo du produit">
                        <div class="card-body">
                            <h1 class="card-title"><?= $val[1] ?></h1>
                            <p class="card-text"><?= $val[2] ?></p>
                        
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
        <?php
        include "footer.php";
        ?>
    </div>


</body>

</html>