<?php
function passwordGenerator($length, $useLetters, $useNumbers, $useSymbols) {
     // DEFINISCO UN ARRAY D'APPOGGIO
     $completeString = [];
    // GESTISCO IL CASO IN CUI LETTER È SELEZIONATO
    if ($useLetters) {
        $completeString = array_merge($completeString, range('A', 'Z'), range('a', 'z'));
    }
    // GESTISCO IL CASO IN CUI LETTER È NUMBER
    if ($useNumbers) {
        $completeString = array_merge($completeString, range(0, 9));
    }
    // GESTISCO IL CASO IN CUI LETTER È SYMBOL
    if ($useSymbols) {
        $completeString = array_merge($completeString, str_split('!@#$%^&*()-_=+[]{}'));
    }
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