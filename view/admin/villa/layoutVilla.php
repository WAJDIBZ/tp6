<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <title>Document</title>
</head>

<body>
    <?php
    include "navVilla.php"; ?>
    <div class="container mt-3">
        <div class="text-center my-4">
            <h1 class="display-4" style="color: #ffffff; text-shadow: 2px 2px 4px #000000;"><?= $titre ?></h1>
        </div>
        <?= $contenu ?>
</body>

</html>