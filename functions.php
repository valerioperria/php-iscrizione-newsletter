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
