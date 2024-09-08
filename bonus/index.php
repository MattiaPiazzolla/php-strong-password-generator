<?php
session_start();
// INCULDO IL FILE DOVE HO DEFINITO LA FUNZIONE PER GENERARE LA PASSWORD
include './functions.php';
// INIZIALIZZO LE VARIABILI
$lengthNotDefined = false; 
$lengthParOk = true;
$showResult = false; // variabile di controllo generale

// CONTROLLO SE È STATO INSERITO UN NUMERO NEL CAMPO INPUT PER LA LUNGHEZZA DELLA PASSWORD
if (isset($_GET['passLength']) && ($_GET['passLength'] !== '')) {
    $showResult = true; 
    // CONVERTO IL VALORE INSERITO IN NUMERO INTERO
    $passLength = intval($_GET['passLength']);
    // RECUPERO GLI IMPUT DI NUMERI LETTERE E SIMBOLI
    $useLetters = isset($_GET['letter']);
    $useNumbers = isset($_GET['number']);
    $useSymbols = isset($_GET['symbol']);

    // VERIFICO SE LA LUNGHEZZA DELLA PASSWORD È COMPRESA TRA 8 E 50
    if ($passLength >= 8 && $passLength <= 50) {
        $lengthParOk = true;
        // AVVIO LA SESSIONE
        $_SESSION['generatedPassword'] = passwordGenerator($passLength, $useLetters, $useNumbers, $useSymbols);
        // REINDIRIZZO AD UNA PAGINA DI OUTPUT 
        header('location: ./output.php');
    } else {
        $lengthParOk = false;
    }
} elseif (isset($_GET['passLength'])) {
    $showResult = true;
    $lengthNotDefined = true;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>PHP Strong Password Generator</title>
</head>

<body>
    <div class="container">
        <button class="btn mt-4 position-fixed"><a href="../index.php"><i class="fas fa-arrow-left"></i></a></button>
        <h1 class="text-center">Strong Password Generator (<span class="text-primary">Bonus</span>)</h1>
        <h3 class="text-center">Genera una password sicura</h3>
        <div class="row vh-100 justify-content-center align-items-center">
            <div class="col-12">

                <?php if ($showResult) { ?>
                <?php if ($lengthNotDefined) { ?>
                <div class="alert alert-danger" role="alert">
                    Errore: Inserisci una lunghezza per la password.
                </div>
                <?php } elseif (!$lengthParOk) { ?>
                <div class="alert alert-warning" role="alert">
                    Errore: La lunghezza della password deve essere compresa tra 8 e 50 caratteri.
                </div>
                <?php } else { ?>
                <div class="alert alert-success" role="alert">
                    <?php echo "La tua password generata è: " . passwordGenerator($passLength); ?>
                </div>
                <?php } ?>
                <?php } ?>

                <form action="./index.php" method="GET" class="p-5 border rounded bg-dark text-light">
                    <div class="row row-cols-1 row-cols-lg-3 g-4">
                        <div class="col">
                            <label for="passLength" class="form-label">Lunghezza password:</label>
                            <!-- chiedi perchè la forma contratta lascia 1 nel campo input -->
                            <input type="number" class="form-control" id="passLength" name="passLength" min="8" max="50"
                                required
                                value="<?php echo isset($_GET['passLength']) ? htmlspecialchars($_GET['passLength']) : ''; ?>">
                        </div>
                        <div class="col d-flex flex-column justify-content-center">
                            <p>Consenti ripetizioni di uno o più caratteri:</p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="doubleChar" id="doubleCharYes"
                                    value="yes" checked>
                                <label class="form-check-label" for="doubleCharYes">Sì</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="doubleChar" id="doubleCharNo"
                                    value="no">
                                <label class="form-check-label" for="doubleCharNo">No</label>
                            </div>
                        </div>
                        <div class="col">
                            <p>Gruppo di caratteri da includere:</p>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="letter" name="letter">
                                <label class="form-check-label" for="letter">Lettere</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="number" name="number">
                                <label class="form-check-label" for="number">Numeri</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="symbol" name="symbol">
                                <label class="form-check-label" for="symbol">Simboli</label>
                            </div>
                        </div>
                    </div>
                    <div class="buttons d-flex justify-content-center mt-5">
                        <button type="submit" class="btn btn-primary mx-2">Genera</button>
                        <button type="reset" class="btn btn-secondary mx-2">Annulla</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>