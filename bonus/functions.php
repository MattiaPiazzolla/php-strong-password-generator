<?php
function passwordGenerator($length, $useLetters, $useNumbers, $useSymbols, $rep) {

    
    // DEFINISCO UN ARRAY D'APPOGGIO
    $completeString = [];
    // GESTISCO IL CASO IN CUI LETTER È SELEZIONATO
    if ($useLetters) {
        $completeString = array_merge($completeString, range('A', 'Z'), range('a', 'z'),range('A', 'Z'), range('a', 'z'),range('A', 'Z'), range('a', 'z'));
    }
    // GESTISCO IL CASO IN CUI LETTER È NUMBER
    if ($useNumbers) {
        $completeString = array_merge($completeString, range(0, 9),range(0, 9),range(0, 9));
    }
    // GESTISCO IL CASO IN CUI LETTER È SYMBOL
    if ($useSymbols) {
        $completeString = array_merge($completeString, str_split('!@#$%^&*()-_=+[]{}'), str_split('!@#$%^&*()-_=+[]{}'), str_split('!@#$%^&*()-_=+[]{}'));
    }
    if (!$rep){
        $completeString = array_unique($completeString);
        // CONTROLLO SE LA LUNGHEZZA DELLA PASSWORD È SUPERIORE AL NUMERO DI CARATTERI UNICI DISPONIBILI
        if ($length > count($completeString)) {
            return 'La lunghezza della password supera il numero di caratteri unici disponibili!';
        }
 // SELEZIONA CARATTERI UNICI SENZA RIPETIZIONI
 $characters = [];
 $availableChars = $completeString;
 for ($i = 0; $i < $length; $i++) {
     $index = array_rand($availableChars);
     $characters[] = $availableChars[$index];
     unset($availableChars[$index]);
     $availableChars = array_values($availableChars); // REINDICE L'ARRAY
 }
 return implode('', $characters);
} else {
 // SE LE RIPETIZIONI SONO PERMESSE
 $password = '';
 for ($i = 0; $i < $length; $i++) {
     $password .= $completeString[array_rand($completeString)];
 }
 return $password;
}
};