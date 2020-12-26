<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO</title>
    <style>
        body{
            background: #2c3e50;
        }
        .card{
            border: 1px solid black;
            background: #ecf0f1;
            width: 500px;
            margin: 0 auto;
            margin-top: 10%;
            border-radius: 10px;
            overflow: hidden;
        }
        h1{
            color: #2c3e50;
            display: block;
            text-align: center;
        }

        form{
            padding: 50px;
            margin-top: -30px;
        }
        input{
            width: 90%;
            padding: 10px;

        }
        .form-group{
            margin-bottom: 30px;
        }
        .submit{
            background: #2ecc71;
            width: 30%;
            height: 40px;
            float: right;
            margin-bottom: 30px;
            font-size: 16px;
            color: white;
        }
        .message{
            background: red;
            padding: 7px;
            color: white;
            display: block;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>LOGIN</h1>
        <hr>
        
        <form action="login-process.php" method="POST" class="form">
            <?php
                session_start();
                if(isset($_SESSION["status"])){
                    if($_SESSION["status"] == "online"){
                        header("Location: index.php");
                    }
                }
                if(isset($_GET["status"])){
                    $status = $_GET["status"];
                    if($status == "failed"){
            ?>
                        <div class="message">
                            <strong>Email</strong> atau <strong>Password</strong> salah!!!
                        </div>
            <?php
                    }
                }
            ?>
            
            <div class="form-group">
                <label for="email">Email</label><br>
                <input type="email" name="email">
            </div>
            <div class="form-group">
                <label for="password">Password</label><br>
                <input type="password" name="password">
            </div>

            <button type="submit" class="submit">Login</button> 

        </form>
    </div>
</body>
</html>