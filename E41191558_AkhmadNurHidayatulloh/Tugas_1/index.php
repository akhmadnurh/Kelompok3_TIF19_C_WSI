<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1</title>
</head>
<body>
    <?php 
        // Tipe data PHP
        // String
        $hello = "Hello World! <br>";
        echo $hello;

        // Integer
        $a = 4;
        $b = 5;
        $result = $a+$b;
        echo $result."<br>";

        $f = 12.6;
        echo $f."<br>";

        // Array
        $names = ["Akhmad", "Nur", "Hidayatulloh"];
        foreach($names as $name){
            echo $name." ";
        }
    ?>

    <hr>
    <!-- Paragraf -->
    <p align="right">Ini merupakan paragraf pertama</p>
    <p align="center">Ini merupakan paragraf kedua</p>
    
    <hr>
    <!-- Tabel -->
    <table border="1">
        <tr>
            <td>1</td>
            <td>2</td>
            <td>3</td>
        </tr>
        <tr>
            <td>4</td>
            <td>5</td>
            <td>6</td>
        </tr>
        <tr>
            <td>7</td>
            <td>8</td>
            <td>9</td>
        </tr>
    </table>
    
    <hr>
    <!-- Hyperlink -->
    <a href="2.html">Klik di sini</a>

    <hr>
    <!-- List -->
    <!-- Ordered List -->
    <ol>
        <li>Item 1</li>
        <li>Item 2</li>
        <li>Item 3</li>
    </ol>
    <!-- Unordered List -->
    <ul>
        <li>Item 1</li>
        <li>Item 2</li>
        <li>Item 3</li>
    </ul>

    <hr>
    <!-- Form -->
    <form action="">
        <label for="id">ID</label>
        <input type="text" name="" id="id" value="21" readonly>
    </form>
</body>
</html>