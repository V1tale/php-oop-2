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
    <!-- STYLE -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <main>
        <div class="container">
            <div class="row">
                <h2>Food</h2>
                <?php foreach ($articles1 as $food) { ?>
                    <div class="col-3">
                        <div class="card">
                            <img src="./img/<?php echo ($food->picture) ?>.jpg" alt="">
                            <h3><?php echo ($food->name) ?></h3>
                            <h4>Category: <?php echo $food->category->pet ?></h4>
                            <h4>Price: € <?php echo ($food->price) ?></h4>
                            <h4>Chewable: <?php echo ($food->available) ?></h4>
                            <h4>Quantity: <?php echo ($food->quantity) ?> kg</h4>
                            <h4>Nutritional Values: <?php echo ($food->nutritionalValues) ?></h4>
                            <h4>Expires in: <?php echo ($food->expirationDate) ?></h4>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="row">
                <h2>Toys</h2>
                <?php foreach ($articles2 as $toy) { ?>
                    <div class="col-3">
                        <div class="card">
                            <img src="./img/<?php echo ($toy->picture) ?>.jpg" alt="">
                            <h3><?php echo ($toy->name) ?></h3>
                            <h4>Category: <?php echo $toy->category->pet ?></h4>
                            <h4>Price: € <?php echo ($toy->price) ?></h4>
                            <h4>Chewable: <?php echo ($toy->available) ?></h4>
                            <h4>Color: <?php echo ($toy->color) ?></h4>
                            <h4>weight: <?php echo ($toy->weight) ?> gr</h4>
                            <h4>chewable: <?php echo ($toy->chewable) ?></h4>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="row">
                <h2>Kennels</h2>
                <?php foreach ($articles3 as $kennel) { ?>
                    <div class="col-3">
                        <div class="card">
                            <img src="./img/<?php echo ($kennel->picture) ?>.jpg" alt="">
                            <h3><?php echo ($kennel->name) ?></h3>
                            <h4>Category: <?php echo $kennel->category->pet ?></h4>
                            <h4>Price: € <?php echo ($kennel->price) ?></h4>
                            <h4>available: <?php echo ($kennel->available) ?></h4>
                            <h4>color: <?php echo ($kennel->color) ?></h4>
                            <h4>height: <?php echo ($kennel->height) ?> m</h4>
                            <h4>width: <?php echo ($kennel->width) ?> m</h4>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </main>
</body>

</html>