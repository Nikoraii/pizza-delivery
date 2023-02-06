<?php 

require_once __DIR__ . '/models/Pizza.php';
require_once __DIR__ . '/models/Dessert.php';
require_once __DIR__ . '/models/Drink.php';

session_start();
$session_id = "";
if (isset($_SESSION['user_id'])) {
    $session_id = $_SESSION['user_id'];
}
$items = $_SESSION['cart'];
$full_price = 0;
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Cart</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style-cart.css">
  </head>
  <body>
    <nav class="navbar navbar-expand fixed-top">
        <ul class="nav navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link d-inline" href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
        </ul>
        <ul class="nav navbar-nav ml-auto">
            <?php if (!isset($_SESSION['user_id'])) { ?>
                <li class="nav-item">
                    <a href="login.php" class="nav-link">Login</a>
                </li>
                <li class="nav-item">
                    <a href="register.php" class="nav-link">Register</a>
                </li> 
            <?php } else { ?>
                <li class="nav-item">
                    <a href="controllers/logout-user.php" class="nav-link">Logout</a>
                </li> 
            <?php } ?>
        </ul>
    </nav>

    <div class="container">
        <div class="row">
            <?php if(!empty($items)) { 
            foreach ($items as $item => $quantity) { 
                $type = explode("-", $item);
                $id = substr($item, strrpos($item, "-") + 1);
                $product;
                $price;
                $size;
                if ($type[0] == "pizza") {
                    $size = substr($item, strpos($item, "-") + 1, strrpos($item, "-") - strlen($item));
                    $product = Pizza::getPizza($id);
                    $price = Pizza::getPizzaPrice($id);
                } elseif (str_contains($type[0], "dessert")) {
                    $product = Dessert::getDessert($id);
                } else {
                    $product = Drink::getDrink($id);
                }
                ?>
                <?php if ($type[0] == "pizza") { ?>
                    <div class="col-lg-6">
                        <h4 style="display: inline"><?= $product->name ?> - <?= $size ?>cm</h4>
                        <h5 style="display: inline; float:right">Qty: <?= $quantity ?></h5>
                    </div>
                    <div class="col-lg-6" style="text-align: right;">
                        <?php $price_product = number_format($price[0]->price * $quantity, 2); 
                            $full_price += $price_product; ?>
                        <h4><?= $price_product ?>$</h4>
                    </div>
                <?php } else { ?>
                    <div class="col-lg-6">
                        <h4 style="display: inline"><?= $product->name ?></h4>
                        <h5 style="display: inline; float:right">Qty: <?= $quantity ?></h5>
                    </div>
                    <div class="col-lg-6" style="text-align: right;">
                        <?php $price_product = number_format($product->price * $quantity, 2); 
                            $full_price += $price_product; ?>
                        <h4><?= $price_product ?>$</h4>
                    </div>
                <?php } ?>
            <?php } ?>
                <div class="col-lg-6 price">
                    <h1>FULL PRICE:</h1>
                </div>
                <div class="col-lg-6 price" style="text-align: right;">
                    <h1 id="full_price"><?= number_format($full_price, 2) ?>$</h1>
                    <button id="pay_all">PAY</button>
                </div>
            <?php } else { ?>
                <div class="col-lg-12" style="text-align: center;">
                    <h1 class="display-1">Your cart is empty!</h1>
                </div>
            <?php } ?>
        </div>
    </div>

    <?php include 'templates/footer.php' ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $("#pay_all").on('click', function() {
                let user_id = '<?= $session_id ?>';
                let full_price = $("#full_price").text();
                full_price = full_price.substring(0, full_price.length - 1);
                console.log(user_id + " - " + full_price);
                if (user_id) {
                    fetch('controllers/pay_cart.php', {
                        method: 'POST',
                        headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                        },
                        body: 'user_id=' + user_id + '&full_price=' + full_price
                    })
                        .then(response => response.json())
                        .then(data => {
                        if (data.success) {
                            alert('Congratulations!');
                            window.location.href = "menu.php";
                        } else {
                            alert('There was an error when you tried to pay. Please try again.');
                        }
                        })
                        .catch(error => {
                        alert('There was an error processing the request.');
                    });
                } else {
                    alert('You need to sign in if you want to order!');
                }
            })
        })
    </script>
  </body>
</html>