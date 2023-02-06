<?php 
session_start();

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Pizza Delivery</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>

<body>
<nav class="navbar navbar-expand fixed-top">
        <ul class="nav navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link logo d-inline" href="#"><img src="assets/images/pizza-logo.png" alt="Pizza Logo" width="45px"></a>
                <a class="nav-link d-inline" href="#">Pizza Delivery</a>
            </li>
        </ul>
        <ul class="nav navbar-nav ml-auto">
            <li class="nav-item">
                <a href="#about-us" class="nav-link">About Us</a>
            </li>
            <li class="nav-item">
                <a href="#chefs" class="nav-link">Chefs</a>
            </li>
            <li class="nav-item">
                <a href="#contact" class="nav-link">Contact</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="menu.php" role="button" aria-haspopup="true" aria-expanded="false">Menu</a>
                <div class="dropdown-menu">
                    <a class="nav-link" href="menu.php#pizza">Pizza</a>
                    <a class="nav-link" href="menu.php#sweets">Sweets</a>
                    <a class="nav-link" href="menu.php#drinks">Drinks</a>
                </div>
            </li>
            <span class="divider"></span>
            <?php if (!isset($_SESSION['user_id'])) { ?>
                <li class="nav-item">
                    <a href="cart.php" class="nav-link"><i class="fa fa-cart-plus" aria-hidden="true"></i></a>
                </li> 
                <li class="nav-item">
                    <a href="login.php" class="nav-link">Login</a>
                </li>
                <li class="nav-item">
                    <a href="register.php" class="nav-link">Register</a>
                </li> 
            <?php } else { ?>
                <li class="nav-item">
                    <a href="cart.php" class="nav-link"><i class="fa fa-cart-plus" aria-hidden="true"></i></a>
                </li> 
                <li class="nav-item">
                    <a href="controllers/logout-user.php" class="nav-link">Logout</a>
                </li> 
            <?php } ?>
        </ul>
    </nav>

    <button
        type="button"
        class="btn btn-danger btn-floating btn-lg"
        id="btn-back-to-top">
        <i class="fa fa-arrow-up" aria-hidden="true"></i>
    </button>
    <div class="jumbotron jumbotron-fluid">
        <div class="container hero">
            <h1 class="display-3">Pizza Delivery</h1>
            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita tempora dolor incidunt veritatis accusantium similique? Accusamus quasi omnis voluptatem eligendi perferendis provident, qui quo saepe laudantium officiis inventore? Deleniti, nobis?</p>
            <hr class="my-2">
            <p>Lorem ipsum</p>
            <p class="lead">
                <a class="btn btn-lg order" href="menu.php" role="button">ORDER NOW</a>
            </p>
        </div>
    </div>

    <section id="about-us">
        <div class="container">
            <div class="row about-row">
                <div class="col-6 p-0">
                    <img src="assets/images/pizza-delivery.jpg" width="100%" alt="Pizza in delivery box">
                </div>
                <div class="col-6 p-0 about-text">
                    <h2 data-aos="fade-left" data-aos-once="true">Lorem Ipsum</h2>
                    <p data-aos="fade-left" data-aos-once="true">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam quos hic vero dignissimos. Voluptatibus magnam magni ut quam ipsum, vitae atque deleniti, temporibus laudantium repellat reiciendis aperiam inventore quis voluptatum?</p>
                    <p data-aos="fade-left" data-aos-once="true">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam quos hic vero dignissimos. Voluptatibus magnam magni ut quam ipsum, vitae atque deleniti, temporibus laudantium repellat reiciendis aperiam inventore quis voluptatum?</p>
                </div>
            </div>
            <div class="row row-after">
                <div class="col-6 p-0 about-text">
                    <h2 data-aos="fade-right" data-aos-once="true">Lorem Ipsum</h2>
                    <p data-aos="fade-right" data-aos-once="true">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam quos hic vero dignissimos. Voluptatibus magnam magni ut quam ipsum, vitae atque deleniti, temporibus laudantium repellat reiciendis aperiam inventore quis voluptatum?</p>
                    <p data-aos="fade-right" data-aos-once="true">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam quos hic vero dignissimos. Voluptatibus magnam magni ut quam ipsum, vitae atque deleniti, temporibus laudantium repellat reiciendis aperiam inventore quis voluptatum?</p>
                </div>
                <div class="col-6 p-0">
                    <img  src="assets/images/pizza-making.jpg" width="100%" alt="Making Pizza">
                </div>
            </div>
        </div>
    </section>

    <section id="pizza">
        <div class="container-fluid text-right">
            <div class="row">
                <div class="col-5">
                    <img data-aos="fade-up" data-aos-once="true" src="assets/images/pizza.png" alt="" width="auto" height="100px">
                </div>
                <div class="col-7 text-left mt-3">
                    <h1 data-aos="fade-up" data-aos-once="true" class="display-4">OPEN 24/7</h1>
                </div>
            </div>
        </div>
    </section>

    <section id="chefs">
        <h2 data-aos="fade-up" data-aos-once="true">Our Chefs</h2>
        <div class="container">
            <div class="row chefs-row">
                <div class="col-4">
                    <img  class="img img-fluid chef-picture" data-aos="fade-up" data-aos-once="true" src="https://www.sbs.com.au/food/sites/sbs.com.au.food/files/styles/full/public/pavoni_tcl_d.jpg?itok=m6VN2mYL" alt="">
                    <h3 data-aos="fade-up" data-aos-once="true">Walter White</h3>
                    <p data-aos="fade-up" data-aos-once="true">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus hic non unde dolorem, aut natus officiis, recusandae provident nam exercitationem numquam optio quos vel voluptate blanditiis libero error asperiores! Ut?</p>
                </div>
                <div class="col-4">
                    <img class="img img-fluid chef-picture" data-aos="fade-up" data-aos-once="true" src="https://nerdyfoodies.com/wp-content/uploads/2021/01/chef-fabio-viviani-1024x1024.jpg" alt="">
                    <h3 data-aos="fade-up" data-aos-once="true">Jesse Pinkman</h3>
                    <p data-aos="fade-up" data-aos-once="true">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum recusandae repellat quia, deleniti fugit natus placeat blanditiis accusamus aliquid repudiandae, laborum perspiciatis nihil saepe ratione doloremque? Ex hic quia at.</p>
                </div>
                <div class="col-4">
                    <img class="img img-fluid chef-picture" data-aos="fade-up" data-aos-once="true" src="https://i.dailymail.co.uk/1s/2019/04/17/01/12365980-6930129-image-a-25_1555459844494.jpg" alt="">
                    <h3 data-aos="fade-up" data-aos-once="true">Mike Ehrmantraut</h3>
                    <p data-aos="fade-up" data-aos-once="true">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non dolores rerum corrupti? Architecto dolorem amet tenetur inventore dolores non, dolorum aliquid praesentium ipsum quae vero distinctio rerum perspiciatis vel exercitationem.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container-fluid p-3">
            <div class="row">
                <div class="col-8">
                <iframe data-aos="zoom-in-right" data-aos-once="true" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d577.0183569808196!2d-106.63194635494685!3d35.10399539649543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ssr!2srs!4v1675110953474!5m2!1ssr!2srs" width="100%" height="650" style="border:0;" allowfullscreen="" loading="auto" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-4">
                    <h4 data-aos="zoom-in-left" data-aos-once="true">Find Us Here</h4>
                    <p data-aos="zoom-in-left" data-aos-once="true"><i class="fa fa-location-arrow" aria-hidden="true"></i> 65th Avenue 43</p>
                    <h4 data-aos="zoom-in-left" data-aos-once="true">Call us</h4>
                    <p data-aos="zoom-in-left" data-aos-once="true"><i class="fa fa-phone" aria-hidden="true"></i> (+381)00-000-0000</p>
                    <div data-aos="zoom-in-left" data-aos-once="true" class="form-divider"></div>
                    <div class="form-section">
                        <h4 data-aos="zoom-in-left" data-aos-once="true">Email us</h4>
                        <form action="#" method="post" id="contact-form" data-aos="zoom-in-left" data-aos-once="true">
                            <div class="form-group">
                                <label  for="">Name:</label>
                                <input  type="text" class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="John Smith...">
                            </div>
                            <div class="form-group">
                                <label  for="">Email:</label>
                                <input  type="email" name="email" id="email" class="form-control" placeholder="example@gmail.com" aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                                <label  for="">Message:</label>
                                <textarea  class="form-control" name="message" id="message" rows="3" placeholder="Your message here..."></textarea>
                            </div>
                            <button  type="submit" class="btn">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Thank you!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>We appreciate your feedback and we'll get back to you as soon as possible.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'templates/footer.php' ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
        $(document).ready(function(){
            $(document).on('scroll', function(){
                if ( $(window).scrollTop() > 30) {
                    $("nav").css({
                        'transition' : 'background-color 0.5s ease-in-out, border-bottom 0.5s ease-in-out',
                        'background-color' : '#4E6C50',
                        'border-bottom' : '2px solid #F2DEBA'
                    });
                    $(".dropdown-menu").css({
                        'transition' : 'background-color 0.5s ease-in-out',
                        'background-color' : '#4E6C50'
                    });
                    $("#btn-back-to-top").css({'display' : 'block'});
                } else {
                    $("nav").css({
                        'transition' : 'background-color 0.5s ease-in-out, border-bottom 0.5s ease-in-out',
                        'background-color' : 'transparent',
                        'border-bottom' : 'transparent'
                    });
                    $(".dropdown-menu").css({
                        'transition' : 'background-color 0.5s ease-in-out',
                        'background-color' : 'transparent'
                    });
                    $("#btn-back-to-top").css({'display' : 'none'});
                }
            });
            $(document).ready(function(){
                $("#btn-back-to-top").click(function() {
                    window.scrollTo({ top: 0});
                });
            });
            const form = document.getElementById("contact-form");

            form.addEventListener("submit", event => {
                event.preventDefault();

                const formData = new FormData(form);

                fetch("controllers/contact.php", {
                    method: "POST",
                    body: formData
                })
                .then(response => response.text())
                .then(data => {
                    console.log(data);
                    $("#exampleModalCenter").modal("toggle");
                    form.reset();
                })
                .catch(error => {
                    console.error("Error:", error);
                });
            });

        });
    </script>
  </body>
</html>