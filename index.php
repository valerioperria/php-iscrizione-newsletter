<?php
if (empty($_GET['mail'])) {
    $result = 'inserisci mail';
} else {
    if (isset($_GET['mail'])) {
        $mail = $_GET['mail'];
        if (str_contains($mail, '@')) {
            $result = 'good job';
        } else {
            $result = 'bad job';
        }
    }
}

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