<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        include 'function.php';
        session_start();
    ?>
</head>
<body>
    <h1>IN QUESTO SITO SEGRETISSIMO VEDRAI LA TUA PASSWORD...
        <br>
        ... <?php echo $_SESSION['password']; ?>
    </h1>
    <a href="/index.php">Torna al Generatore</a>
</body>
</html>