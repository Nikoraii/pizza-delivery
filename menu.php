<!doctype html>
<html lang="en">
  <head>
    <title>Menu</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
            <li class="nav-item">
                <a href="#" class="nav-link">Login</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Register</a>
            </li>
        </ul>
    </nav>

    <section id="pizza">
        <div class="container">
            <div class="section-header">
                <h1>Pizza</h1>
                <div class="section-divider"></div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="card text-left">
                      <img class="card-img-top" src="assets/images/pizza-making.jpg" alt="">
                      <div class="card-body p-1">
                        <h4 class="card-title m-0">Capricciosa</h4>
                        <p class="card-text m-0">mozzarella cheese, Italian baked ham, mushroom, artichoke and tomato</p>
                        <div class="customize">
                            <p id="s">Size: </p>
                            <select name="size" id="size">
                                <option value="26">24</option>
                                <option value="32">30</option>
                                <option value="42">38</option>
                            </select>
                            <p class="price">$8.54</p>
                        </div>
                        <div class="order">
                            <div class="qty">
                                <button id="minus" disabled="true">-</button>
                                <input type="text" name="qty" id="qty" value="1" disabled>
                                <button id="plus">+</button>
                            </div>
                            <button id="add">ADD</button>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-left">
                      <img class="card-img-top" src="assets/images/pizza-delivery.jpg" alt="">
                      <div class="card-body p-1">
                        <h4 class="card-title">Title</h4>
                        <p class="card-text">Body</p>
                        <select name="" id="">
                            <option value="26">28</option>
                            <option value="32">32</option>
                            <option value="42">42</option>
                        </select>
                        <button>Add to Cart</button>
                      </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-left">
                      <img class="card-img-top" src="assets/images/pizza-making.jpg" alt="">
                      <div class="card-body p-1">
                        <h4 class="card-title">Title</h4>
                        <p class="card-text">Body</p>
                      </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-left">
                      <img class="card-img-top" src="assets/images/pizza-section.jpg" alt="">
                      <div class="card-body p-1">
                        <h4 class="card-title">Title</h4>
                        <p class="card-text">Body</p>
                      </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-left">
                      <img class="card-img-top" src="assets/images/pizza-delivery.jpg" alt="">
                      <div class="card-body p-1">
                        <h4 class="card-title">Title</h4>
                        <p class="card-text">Body</p>
                        <select name="" id="">
                            <option value="26">28</option>
                            <option value="32">32</option>
                            <option value="42">42</option>
                        </select>
                        <button>Add to Cart</button>
                      </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-left">
                      <img class="card-img-top" src="assets/images/pizza-making.jpg" alt="">
                      <div class="card-body p-1">
                        <h4 class="card-title">Title</h4>
                        <p class="card-text">Body</p>
                        <select name="" id="">
                            <option value="26">28</option>
                            <option value="32">32</option>
                            <option value="42">42</option>
                        </select>
                        <button>Add to Cart</button>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="sweets">
        <div class="container">
        <div class="section-header">
                <h1>Sweets</h1>
                <div class="section-divider"></div>
            </div>
            <div class="row gy-6">
                <div class="col-md-3">
                    <div class="card text-left">
                      <img class="card-img-top" src="assets/images/pizza-making.jpg" alt="">
                      <div class="card-body p-1">
                        <h4 class="card-title">Title</h4>
                        <p class="card-text">Body</p>
                        <select name="" id="">
                            <option value="26">28</option>
                            <option value="32">32</option>
                            <option value="42">42</option>
                        </select>
                        <button>Add to Cart</button>
                      </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-left">
                      <img class="card-img-top" src="assets/images/pizza-delivery.jpg" alt="">
                      <div class="card-body p-1">
                        <h4 class="card-title">Title</h4>
                        <p class="card-text">Body</p>
                        <select name="" id="">
                            <option value="26">28</option>
                            <option value="32">32</option>
                            <option value="42">42</option>
                        </select>
                        <button>Add to Cart</button>
                      </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-left">
                      <img class="card-img-top" src="assets/images/pizza-making.jpg" alt="">
                      <div class="card-body p-1">
                        <h4 class="card-title">Title</h4>
                        <p class="card-text">Body</p>
                      </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-left">
                      <img class="card-img-top" src="assets/images/pizza-section.jpg" alt="">
                      <div class="card-body p-1">
                        <h4 class="card-title">Title</h4>
                        <p class="card-text">Body</p>
                      </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-left">
                      <img class="card-img-top" src="assets/images/pizza-delivery.jpg" alt="">
                      <div class="card-body p-1">
                        <h4 class="card-title">Title</h4>
                        <p class="card-text">Body</p>
                        <select name="" id="">
                            <option value="26">28</option>
                            <option value="32">32</option>
                            <option value="42">42</option>
                        </select>
                        <button>Add to Cart</button>
                      </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-left">
                      <img class="card-img-top" src="assets/images/pizza-making.jpg" alt="">
                      <div class="card-body p-1">
                        <h4 class="card-title">Title</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        <p class="card-text">Body</p>
                        <select name="" id="">
                            <option value="26">28</option>
                            <option value="32">32</option>
                            <option value="42">42</option>
                        </select>
                        <button>Add to Cart</button>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="drinks">
        <div class="container">
        <div class="section-header">
                <h1>Drinks</h1>
                <div class="section-divider"></div>
            </div>
            <div class="row gy-6">
                <div class="col-md-3">
                    <div class="card text-left">
                      <img class="card-img-top" src="assets/images/pizza-making.jpg" alt="">
                      <div class="card-body p-1">
                        <h4 class="card-title">Title</h4>
                        <p class="card-text">Body</p>
                        <select name="" id="">
                            <option value="26">28</option>
                            <option value="32">32</option>
                            <option value="42">42</option>
                        </select>
                        <button>Add to Cart</button>
                      </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-left">
                      <img class="card-img-top" src="assets/images/pizza-delivery.jpg" alt="">
                      <div class="card-body p-1">
                        <h4 class="card-title">Title</h4>
                        <p class="card-text">Body</p>
                        <select name="" id="">
                            <option value="26">28</option>
                            <option value="32">32</option>
                            <option value="42">42</option>
                        </select>
                        <button>Add to Cart</button>
                      </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-left">
                      <img class="card-img-top" src="assets/images/pizza-making.jpg" alt="">
                      <div class="card-body p-1">
                        <h4 class="card-title">Title</h4>
                        <p class="card-text">Body</p>
                      </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-left">
                      <img class="card-img-top" src="assets/images/pizza-section.jpg" alt="">
                      <div class="card-body p-1">
                        <h4 class="card-title">Title</h4>
                        <p class="card-text">Body</p>
                      </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-left">
                      <img class="card-img-top" src="assets/images/pizza-delivery.jpg" alt="">
                      <div class="card-body p-1">
                        <h4 class="card-title">Title</h4>
                        <p class="card-text">Body</p>
                        <select name="" id="">
                            <option value="26">28</option>
                            <option value="32">32</option>
                            <option value="42">42</option>
                        </select>
                        <button>Add to Cart</button>
                      </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-left">
                      <img class="card-img-top" src="assets/images/pizza-making.jpg" alt="">
                      <div class="card-body p-1">
                        <h4 class="card-title">Title</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        <p class="card-text">Body</p>
                        <select name="" id="">
                            <option value="26">28</option>
                            <option value="32">32</option>
                            <option value="42">42</option>
                        </select>
                        <button>Add to Cart</button>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
         $(document).ready(function(){
            let qty = $("#qty").val();
            qty_i = parseInt(qty);
            $("#plus").on('click', function() {
                qty_i += 1;
                qty = qty_i;
                if (qty_i < 10) {
                    $("#minus").removeAttr('disabled');
                } else {
                    $("#plus").attr('disabled', 'true');
                }
                $("#qty").val(qty_i);
            });
            $("#minus").on('click', function() {
                qty_i -= 1;
                qty = qty_i;
                if (qty_i > 1) {
                    $("#plus").removeAttr('disabled');
                } else {
                    $("#minus").attr('disabled', 'true');
                }
                $("#qty").val(qty_i);
            })
         });
    </script>
  </body>
</html>