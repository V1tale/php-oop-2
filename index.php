<?php
require_once __DIR__ . "/articles.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href=" 	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body>
    <main>
        <div class="container">
            <div class="row">
                <?php foreach ($articles1 as $food) { ?>
                    <div class="col-3">
                        <div class="card">
                            <img src="./img/<?php echo ($food->picture) ?>.jpg" alt="">
                            <h2><?php echo ($food->name) ?></h2>
                            <h2>Price: € <?php echo ($food->price) ?></h2>
                            <h2>Chewable: <?php echo ($food->available) ?></h2>
                            <h2>Quantity: <?php echo ($food->quantity) ?> kg</h2>
                            <h2>Nutritional Values: <?php echo ($food->nutritionalValues) ?></h2>
                            <h2>Expire in: <?php echo ($food->expirationDate) ?></h2>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="row">
                <div class="col-3">
                    <div class="card">

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <div class="card">

                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>