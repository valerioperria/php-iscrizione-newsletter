<?php

if (empty($_GET['mail'])) {
    $result = 'inserisci mail';
    $alert = 'alert-info';
} else {
    if (isset($_GET['mail'])) {
        $mail = $_GET['mail'];
        if (str_contains($mail, '@')) {
            $result = 'good job';
            $alert = 'alert-success';
        } else {
            $result = 'bad job';
            $alert = 'alert-danger';
        }
    }
}
