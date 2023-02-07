<?php 

session_start();
if (isset($_SESSION['user_id'])) {
  header('Location: index.php');
  die();
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Register</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style-register.css">
  </head>
  <body>
    <nav class="navbar navbar-expand fixed-top">
        <ul class="nav navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link d-inline" href="javascript:history.back()"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
            </li>
        </ul>
    </nav>

    <div class="container">
      <div class="row">
        <div class="col-lg-6 p-0">
          <img src="assets/images/pizza.jpg" alt="" class="img img-fluid" style="height: 100%; width: auto; object-fit: cover;">
        </div>
        <div class="col-lg-6">
          <form action="#" method="post" id="register-form">
            <div class="form-group">
              <label  for="">Full Name:</label>
              <input  type="text" class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="John Smith..." required>
            </div>
            <div class="form-group">
                <label  for="">Email:</label>
                <input  type="email" name="email" id="email" class="form-control" placeholder="example@gmail.com" aria-describedby="helpId" required>
            </div>
            <div class="form-group">
              <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="tel" class="form-control" name="phone" id="phone" aria-describedby="helpId" placeholder="061 000 0000">
              </div>
            </div>
            <div class="form-group">
              <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" class="form-control" name="address" id="address" aria-describedby="helpId" placeholder="68th Street 14..." required>
              </div>
            </div>
            <div class="form-group" id="show_hide_password">
              <label for="password">Password:</label>
              <div class="input-group mb-3">
                <input type="password" class="form-control" name="password" id="password" aria-describedby="helpId" placeholder="" required>
                <div class="input-group-append">
                  <a class="btn show-hide" href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                </div>
              </div>
            </div>
            <button id="register" type="submit" class="btn">Register</button>
          </form>
        </div>
      </div>
    </div>

    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Welcome!</h5>
                  <button type="button" id="close" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <p>Please sign in to continue.</p>
              </div>
          </div>
      </div>
  </div>
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
      $(document).ready(function() {
        $("#show_hide_password a").on('click', function(event) {
            event.preventDefault();
            if ($('#show_hide_password input').attr("type") == "text"){
                $('#show_hide_password input').attr('type', 'password');
                $('#show_hide_password i').addClass( "fa-eye-slash" );
                $('#show_hide_password i').removeClass( "fa-eye" );
                $('.show-hide').css({
                  "background-color": "white",
                  "color": "#4e6c50"
                });
            }else if ($('#show_hide_password input').attr("type") == "password"){
                $('#show_hide_password input').attr('type', 'text');
                $('#show_hide_password i').removeClass( "fa-eye-slash" );
                $('#show_hide_password i').addClass( "fa-eye" );
                $('.show-hide').css({
                  'background-color': '#4e6c50', 
                  'color': 'white'
                });
            }
        });
        function phoneMask() { 
          let num = $(this).val().replace(/\D/g,''); 
          $(this).val(num.substring(0,3) + ' ' + num.substring(3,6) + ' ' + num.substring(6,10)); 
        }
        $('[type="tel"]').keyup(phoneMask);

        const form = document.getElementById("register-form");

        form.addEventListener("submit", event => {
            event.preventDefault();

            const formData = new FormData(form);

            fetch("controllers/register-user.php", {
                method: "POST",
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                console.log(data);
                $("#exampleModalCenter").modal("toggle");
                form.reset();
                $(document).on('click', function() {
                  window.location.href = "login.php";
                });
            })
            .catch(error => {
                console.error("Error:", error);
            });
        });
      });
    </script>
  </body>
</html>