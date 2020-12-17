<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Hi Valeeqa</title>
    <style>
        .login-border{
            border: 1px solid black;
            width: 50%;
            margin-top: 150px;
            margin-bottom: 70px;
        }
        .login-register-switch{
            width: 100%;
            height: 50px;
            overflow: hidden;
        }
        .login-register-form{
            border: 1px 
        }
        form{
            margin-left: 10%;
            margin-right: 10%;
            margin-bottom: 5%;
        }
    </style>
  </head>
  <body>
    <?php include "nav.php"; ?>
    <div class="container">
        <center>
            <div class="login-border">
                <div class="login-register-switch">
                    <div class="row text-center">
                        <div class="col">
                            <a href="#" class="btn" style="width: 100%;">Login</a>
                        </div>
                        <div class="col">
                        <a href="#" class="btn btn-secondary" style="width: 100%;">Register</a>
                        </div>
                    </div>
                </div>
                
                <form action="login-process.php" method="POST">
                    <div class="form-group text-left">
                        <label for="email">Email: </label>
                        <input type="email" name="email" id="" class="form-control">
                    </div>
                    <div class="form-group text-left">
                        <label for="pwd">Password: </label>
                        <input type="password" name="pwd" id="" class="form-control">
                    </div>
                    <a href="#" style="text-align: left;">Lupa kata sandi?</a>
                    <button type="submit" class="btn btn-primary" style="width: 100%; height: 50px; margin-top: 20px;">Login</button>
                </form>
            </center>

        </div>
    </div>
    <?php include "footer.php"; ?>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>