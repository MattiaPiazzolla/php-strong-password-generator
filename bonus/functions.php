<?php
function passwordGenerator($length) {
    // GENERO I NUMERI DA 0 A 9
    $numbers = range(0, 9);
    // GENERO LE LETTERE DALLA A ALLA z (con qualche simbolo)
    $letters = range("A", "z");
    // UNISCO I 2 ARRAY
    $completeString = array_merge($numbers, $letters);
    // MESCOLO L'ARRAY
    shuffle($completeString);
    // INIZIALIZZO UNA STRINGA VUOTA
    $password = '';
    // CICLO L'ARRAY IL NUMERO DI VOLTE INDICATO DAL FORM PASSANDOLO CON IL PARAMETRO LENGTH
    for ($i = 0; $i < $length; $i++) {
        // CONCATENO IL CARATTERE ALLA STRINGA PASSWORD
        $password .= $completeString[$i];
    }
    return $password;
}