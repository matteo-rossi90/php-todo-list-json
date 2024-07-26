<?php


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CDN fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CDN axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.7.2/axios.min.js" integrity="sha512-JSCFHhKDilTRRXe9ak/FJ28dcpOJxzQaCd3Xg8MyF6XFjODhy/YMCM8HW0TFDckNHWUewW+kfvhin43hKtJxAw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- CDN bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CDN Vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <!-- link css -->
    <link rel="stylesheet" href="style.css" />

    <title>Php to do list</title>
</head>

<body>
    <div id="app">

        <div class="container">

            <div class="row justify-content-center p-5">

                <div class="col-6">
                    <h1 class="text-center text-color">To do list</h1>

                    <!-- lista degli items -->
                    <div class="card p-3">
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <strong>
                                    An item
                                </strong>
                                <div class="btn btn-danger">
                                    <i class="fa-solid fa-trash"></i>
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <strong>
                                    An item
                                </strong>
                                <div class="btn btn-danger">
                                    <i class="fa-solid fa-trash"></i>
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <strong>
                                    An item
                                </strong>
                                <div class="btn btn-danger">
                                    <i class="fa-solid fa-trash"></i>
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <strong>
                                    An item
                                </strong>
                                <div class="btn btn-danger">
                                    <i class="fa-solid fa-trash"></i>
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <strong>
                                    An item
                                </strong>
                                <div class="btn btn-danger">
                                    <i class="fa-solid fa-trash"></i>
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <strong>
                                    An item
                                </strong>
                                <div class="btn btn-danger">
                                    <i class="fa-solid fa-trash"></i>
                                </div>
                            </li>


                        </ul>

                        <!-- form per inviare il nuovo task -->
                        <form action="index.php">
                            <div class="mt-3 btn-group box">
                                <input type="text" class="form-control" id="input-task" name="input-task" placeholder="Inserisci un nuovo task">

                                <button type="submit" class="btn btn-primary">Invia</button>

                            </div>
                        </form>

                    </div>


                </div>
            </div>
        </div>

    </div>
    <script src="main.js"></script>
</body>

</html>