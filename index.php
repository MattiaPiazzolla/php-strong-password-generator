<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>PHP Strong Password Generator</title>
</head>
<body>
    <div class="container">
        <div class="row vh-100 justify-content-center align-items-center">
            <div class="col-12">
                <h1 class="text-center">Strong Password Generator</h1>
                <h3 class="text-center">Genera una password sicura</h3>
                <form action="./index.php" method="GET" class="p-5 border rounded bg-light">
                    <div class="row row-cols-1 row-cols-lg-3 g-4">
                        <div class="col">
                            <label for="passLength" class="form-label">Lunghezza password:</label>
                            <input type="number" class="form-control" id="passLength" name="passLength" min="8" max="50" required>
                        </div>
                        <div class="col d-flex flex-column justify-content-center">
                            <p>Consenti ripetizioni di uno o più caratteri:</p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="doubleChar" id="doubleCharYes" value="yes" checked>
                                <label class="form-check-label" for="doubleCharYes">Sì</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="doubleChar" id="doubleCharNo" value="no">
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