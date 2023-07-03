<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password generator</title>    
    <?php
        include "function.php";
    ?>
</head>
<body>

    <div class="text-center">
        <h1>
            Password generator
        </h1>
        <form>
            <label for="length">Lunghezza Password:</label>    
            <input type="number" name="length" id="length">
            <input type="submit" value="CREATE">
            <br>
            <input type="checkbox" name="letters" id="letters">
            <label for="letters">Lettere</label>
            <input type="checkbox" name="numbers" id="numbers">
            <label for="numbers">Numeri</label>
            <input type="checkbox" name="symbols" id="symbols">
            <label for="symbols">Simboli</label>
            <input type="checkbox" name="ripetition" id="ripetition">
            <label for="ripetition">Ripetizione</label>
        </form>
    </div>
</body>
</html>