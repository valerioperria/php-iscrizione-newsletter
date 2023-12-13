<?php
include __DIR__ . '/functions.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-iscrizione-newsletter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <form action="index.php" method="GET">
        <div class="container mt-5">
            <label for="mail">Inserisci e-mail</label>
            <input type="text" id="mail" name="mail" class="mb-3">
            <div class="alert <?php echo $alert ?>" role="alert"><?php echo $result ?></div>
        </div>
    </form>
</body>

</html>