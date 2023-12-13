<?php
include __DIR__ . '/functions.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-iscrizione-newsletter</title>
</head>

<body>
    <form action="index.php" method="GET">
        <label for="mail">Inserisci e-mail</label>
        <input type="text" id="mail" name="mail">
        <p><?php echo $result ?></p>
    </form>
</body>

</html>