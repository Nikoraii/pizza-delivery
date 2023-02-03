<!doctype html>
<html lang="en">
  <head>
    <title>Sign In</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style-login.css">
  </head>
  <body>
    <nav class="navbar navbar-expand fixed-top">
        <ul class="nav navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link d-inline" href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
        </ul>
    </nav>

    <div class="container">
        <?php if (isset($_GET['error'])) { ?>
            <h2>Wrong email or password.</h2>
        <?php } ?>
        <form action="controllers/login-user.php" method="post" id="login-form">
          <div class="form-group">
              <label  for="">Email:</label>
              <input  type="email" name="email" id="email" class="form-control" placeholder="example@gmail.com" aria-describedby="helpId" required>
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
          <button id="login" type="submit" class="btn">Sign In</button>
        </form>
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
                    "color": "#820000"
                    });
                }else if ($('#show_hide_password input').attr("type") == "password"){
                    $('#show_hide_password input').attr('type', 'text');
                    $('#show_hide_password i').removeClass( "fa-eye-slash" );
                    $('#show_hide_password i').addClass( "fa-eye" );
                    $('.show-hide').css({
                    'background-color': '#820000', 
                    'color': 'white'
                    });
                }
            });
        })
    </script>
  </body>
</html>