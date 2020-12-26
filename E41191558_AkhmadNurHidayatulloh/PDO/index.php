<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <?php
        session_start();
        if(!isset($_SESSION["status"])){
            header("Location: login.php");
        }elseif($_SESSION["status"] == "offline"){
            header("Location: login.php");
        }
        
    ?>
    <center>
        <h1>BERHASIL!!!</h1>
        <p>Belajar PHP Data Object</p>
        <br>
        <p>Klik di <a href="logout.php">sini</a> untuk keluar.</p>
    </center>
</body>
</html>