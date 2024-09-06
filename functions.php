<?php 

    function generatePassword($length) {

        $characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!£$%&/^,.><€";
        $password = '';
        for ($i = 0; $i < $length; $i++) {
            $password.= $characters[rand(0, strlen($characters) - 1)];
        }

        return $password;
    }

    if (isset($_GET['number'])) {
        $lenght = (int)($_GET['number']);

        if ($lenght >=6 && $lenght <=12) {
            $password = generatePassword($lenght);
        } else {
            $error = "Inserisci un numero compreso tra 6 e 12";
        }
    }

?>