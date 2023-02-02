<?php 

require_once __DIR__ . '/models/Pizza.php';
require_once __DIR__ . '/models/Dessert.php';
require_once __DIR__ . '/models/Drink.php';
$pizzas = Pizza::allPizzas();
$desserts = Dessert::allDesserts();
$drinks = Drink::allDrinks();

session_start();
if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
  // get the items in the cart
  $items = $_SESSION['cart'];
}

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Menu</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style-menu.css">
  </head>
  <body>
    <nav class="navbar navbar-expand fixed-top">
        <ul class="nav navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link d-inline" href="index.php">Home</a>
            </li>
        </ul>
        <ul class="nav navbar-nav ml-auto">
            <li class="nav-item">
                <a href="#pizza" class="nav-link">Pizza</a>
            </li>
            <li class="nav-item">
                <a href="#sweets" class="nav-link">Sweets</a>
            </li>
            <li class="nav-item">
                <a href="#drinks" class="nav-link">Drinks</a>
            </li>
            <span class="divider"></span>
            <?php if (!isset($_SESSION['user_id'])) { ?>
                <li class="nav-item">
                    <a href="#" class="nav-link">Login</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Register</a>
                </li> 
            <?php } else { ?>
                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="fa fa-cart-plus" aria-hidden="true"></i></a>
                </li> 
                <li class="nav-item">
                    <a href="#" class="nav-link">Logout</a>
                </li> 
            <?php } ?>
        </ul>
    </nav>

    <section id="pizza">
        <div class="container">
            <div class="section-header">
                <h1>Pizza</h1>
                <div class="section-divider"></div>
            </div>
            <div class="row">
              <?php foreach ($pizzas as $pizza) { ?>
                <div class="col-md-3">
                    <div class="card text-left">
                      <img class="card-img-top" src="<?= $pizza->image ?>" alt="">
                      <div class="card-body p-1">
                        <h4 class="card-title m-0"><?= $pizza->name ?></h4>
                        <p class="card-text m-0"><?= $pizza->ingredients ?></p>
                        <div class="customize">
                          <?php $prices = Pizza::getPizzaPrice($pizza->id) ?>
                            <p class="s">Size: </p>
                            <select class="pizza-size" name="pizza-size" id="pizza-size-<?= $pizza->id ?>">
                              <?php foreach ($prices as $price) { ?>
                                <option data-price="<?= $price->price ?>"value="<?= $price->size ?>"><?= $price->size ?></option>
                              <?php } ?>
                            </select>
                            <p class="price" data-price="<?= $prices[0]->price ?>" id="price-pizza-<?= $pizza->id ?>">$<?= $prices[0]->price ?></p>
                        </div>
                        <div class="order">
                            <div class="qty" data-id="<?= $pizza->id ?>">
                                <button class="minus" id="minus-pizza-<?= $pizza->id ?>" disabled="true">-</button>
                                <input type="text" name="qty" id="qty-pizza-<?= $pizza->id ?>" value="1" disabled>
                                <button class="plus" id="plus-pizza-<?= $pizza->id ?>">+</button>
                            </div>
                            <button class="add_to_cart_button" id="add-pizza-<?= $pizza->id ?>">ADD</button>
                        </div>
                      </div>
                    </div>
                </div>
              <?php } ?>
            </div>
        </div>
    </section>

    <section id="sweets">
        <div class="container">
          <div class="section-header">
            <h1>Dessert</h1>
            <div class="section-divider"></div>
          </div>
          <div class="row">
            <?php foreach ($desserts as $dessert) { ?>
              <div class="col-md-3">
                    <div class="card text-left">
                      <img class="card-img-top" src="<?= $dessert->image ?>" alt="">
                      <div class="card-body p-1">
                        <h4 class="card-title m-0"><?= $dessert->name ?></h4>
                        <p class="card-text m-0"><?= $dessert->ingredients ?></p>
                        <p class="price" data-price="<?= $dessert->price ?>" id="price-dessert-<?= $dessert->id ?>">$<?= $dessert->price ?></p>
                        <div class="order">
                            <div class="qty" data-id="<?= $dessert->id ?>">
                                <button class="minus" id="minus-dessert-<?= $dessert->id ?>" disabled="true">-</button>
                                <input type="text" name="qty" id="qty-dessert-<?= $dessert->id ?>" value="1" disabled>
                                <button class="plus" id="plus-dessert-<?= $dessert->id ?>">+</button>
                            </div>
                            <button class="add_to_cart_button" id="add-dessert-<?= $dessert->id ?>">ADD</button>
                        </div>
                      </div>
                    </div>
                </div>
            <?php } ?>
          </div>
        </div>
    </section>

    <section id="drinks">
        <div class="container">
          <div class="section-header">
            <h1>Drinks</h1>
            <div class="section-divider"></div>
          </div>
          <div class="row">
            <?php foreach ($drinks as $drink) { ?>
              <div class="col-md-3">
                <div class="card text-left">
                  <img class="card-img-top" src="<?= $drink->image ?>" alt="">
                  <div class="card-body">
                    <h4 class="card-title"><?= $drink->name ?></h4>
                    <p class="price" data-price="<?= $drink->price ?>" id="price-drink-<?= $drink->id ?>">$<?= $drink->price ?></p>
                    <div class="order">
                        <div class="qty" data-id="<?= $drink->id ?>">
                            <button class="minus" id="minus-drink-<?= $drink->id ?>" disabled="true">-</button>
                            <input type="text" name="qty" id="qty-drink-<?= $drink->id ?>" value="1" disabled>
                          <button class="plus" id="plus-drink-<?= $drink->id ?>">+</button>
                        </div>
                      <button class="add_to_cart_button" id="add-drink-<?= $drink->id ?>">ADD</button>
                    </div>
                  </div>
                </div>
              </div>
            <?php } ?>
          </div>
        </div>
    </section>

    <?php include 'templates/footer.php' ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
         $(document).ready(function(){
            $(".plus").on('click', function() {
              let id = $(this).parent().attr('data-id');
              let check = $(this).attr('id');
              let type;
              if (check.includes('pizza')) {
                type = "pizza-";
              } else if (check.includes('dessert')) {
                type = "dessert-";
              } else {
                type = "drink-";
              }
              let qty = $("#qty-" + type + id).val();
              let qty_i = parseInt(qty);
              qty_i += 1;
              if (qty_i < 10) {
                  qty = qty_i;
                  $("#minus-" + type + id).removeAttr('disabled');
              } else {
                  $("#plus-" + type + id).attr('disabled', 'true');
              }
              $("#qty-" + type + id).val(qty_i);
              let price = $("#price-" + type + id).attr("data-price");
              let price_i = parseFloat(price);
              $("#price-" + type + id).text("$" + ((price_i * qty_i).toFixed(2)));
            });

            $(".minus").on('click', function() {
              let id = $(this).parent().attr('data-id');
              let check = $(this).attr('id');
              let type;
              if (check.includes('pizza')) {
                type = "pizza-";
              } else if (check.includes('dessert')) {
                type = "dessert-";
              } else {
                type = "drink-";
              }
              let qty = $("#qty-" + type + id).val();
              let qty_i = parseInt(qty);
              qty_i -= 1;
               if (qty_i > 1) {
                qty = qty_i;
                $("#plus-" + type + id).removeAttr('disabled');
              } else {
                  $("#minus-" + type + id).attr('disabled', 'true');
              }
              $("#qty-" + type + id).val(qty_i);
              let price = $("#price-" + type + id).attr("data-price");
              let price_i = parseFloat(price);
              $("#price-" + type + id).text("$" + (price_i * qty_i).toFixed(2));
            });

            $(".pizza-size").on('change', function() {
              let id = $(this).attr('id');
              let id_s = id.slice(11);
              let price = $("option:selected", this).attr('data-price');
              let qty = $("#qty-pizza-" + id_s).val("1");
              $("#price-pizza-" + id_s).text("$" + price);
              $("#price-pizza-" + id_s).attr("data-price", price);
              $("#plus-pizza-" + id_s).removeAttr('disabled');
              $("#minus-pizza-" + id_s).attr('disabled', 'true');
            });

            // add the 'add to cart' button click event listener
            $('.add_to_cart_button').on('click', function() {
              // get the product id and quantity from the form fields
              let check = $(this).attr('id');
              let product_id = check.substring(check.lastIndexOf('-') + 1);
              let product_type = check.substring(check.indexOf('-') + 1, check.lastIndexOf('-'));
              let quantity = $('#qty-' + product_type + '-' + product_id).val();
              console.log(product_type + "(id: " + product_id + ")" + " = " + quantity);

              // send the request to the PHP file
              fetch('controllers/add_to_cart.php', {
                method: 'POST',
                headers: {
                  'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: 'product_id=' + product_id + '&product_type=' + product_type + '&quantity=' + quantity
              })
                .then(response => response.json())
                .then(data => {
                  // check if the operation was successful
                  if (data.success) {
                    // show a success message
                    alert('Item added to cart!');
                  } else {
                    // show an error message
                    alert('There was an error adding the item to the cart.');
                  }
                })
                .catch(error => {
                  // show an error message
                  alert('There was an error processing the request.');
                });
            });

         });
    </script>
  </body>
</html>