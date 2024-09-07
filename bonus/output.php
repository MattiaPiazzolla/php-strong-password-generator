<?php
session_start();
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
    <title>Password Generata</title>
</head>

<body>
    <div class="container">
        <div class="row vh-100 justify-content-center align-items-center">
            <div class="col-12 text-center">
                <h1 class="text-center">Password Generata</h1>
                <div class="alert alert-success mt-4">
                    <h2>La tua password generata è: <span
                            class=" fw-bold"><?php echo  $_SESSION['generatedPassword']; ?></span></h2>
                </div>
                <button class="btn btn-primary mt-4"><a href="./index.php"
                        class=" text-decoration-none text-light">Genera una Nuova
                        Password</a></button>
            </div>
        </div>
    </div>
</body>

</html>