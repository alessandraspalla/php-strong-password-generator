<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generated password</title>    
    <?php
        session_start();
        $pws = $_SESSION["password"];
    ?>

</head>
<body>
    <h1>Generated password: <span> <?php echo $pws; ?> </span></h1>
</body>
</html>