<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <?php
        include 'function.php'; 
        session_start();
        $_SESSION['password'] = getPassword($passLength);
    ?>
</head>
<body>
    <form>
        <label for="passLength">Lunghezza Password:</label>
        <input type="number" name="passLength">
        <br>
        <input type="submit" value="GENERA">
    </form>
</body>
</html>