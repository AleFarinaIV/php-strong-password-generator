<?php 

    include './functions.php'

?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <title>Password Generator</title>
    </head>

    <body>

        <div class="container text-white py-5">
            <div class="row g-4">
                <div class="col-12">
                    <div class="d-flex justify-content-center">
                        <form action="./index.php" method="get" class="bg-danger py-5 px-4 w-50">
                            <div class="row g-3">
                                <div class="col-12">
                                    <h1 class="text-center">Genera la tua password sicura!</h1>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span>Inserisci qui un numero</span>
                                            <input type="number" name="number" id="number" class="form-control form-control-sm w-25">
                                        </div>
                                    </div>
                                </div>
                                <?php if (isset($password)) { ?>
                                    <div class="col-12 mt-4">
                                        <div class="alert alert-success">
                                            La tua password generata è: <strong><?php echo $password; ?></strong>
                                        </div>
                                    </div>
                                <?php } elseif (isset($error)) { ?>
                                    <div class="col-12 mt-4">
                                        <div class="alert alert-danger">
                                            <?php echo $error; ?>
                                        </div>
                                    </div>
                                <?php } ?>
                                <div class="col-12 mt-4">
                                    <button type="submit" class="btn btn-primary text-white">Invia</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </body>

</html>