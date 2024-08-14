<?php

// Prendere l'indice dalla query string
if (isset($_GET['index'])) {
    $index = $_GET['index'];

    // Prendere il file JSON e salvarlo come stringa
    $string = file_get_contents('todo.json');

    // Trasformare la stringa in un array PHP
    $list = json_decode($string, true);

    // Recuperare il task con l'indice fornito
    if (isset($list[$index])) {
        $task = $list[$index]['task'];
        $description = $list[$index]['text'];
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CDN fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CDN bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CDN Vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- CDN axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.7.2/axios.min.js" integrity="sha512-JSCFHhKDilTRRXe9ak/FJ28dcpOJxzQaCd3Xg8MyF6XFjODhy/YMCM8HW0TFDckNHWUewW+kfvhin43hKtJxAw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- link css -->
    <link rel="stylesheet" href="style.css" />
    <title>Php to do list</title>
</head>

<body>
    <div id="app">

        <div class="container">

            <div class="row justify-content-center p-5">

                <div class="col-6">
                    <h1 class="text-center text-color">{{ title }}</h1>

                    <div class="card p-3">
                        
                        <h3 class="text-center"><?php echo htmlspecialchars($task); ?></h3>
                        <p class="mt-3 callout p-4"><?php echo  htmlspecialchars($description); ?></p>

                    </div>

                    <a href="index.php" class="btn btn-warning mt-4">Indietro</a>


                </div>
            </div>
        </div>

    </div>
    <script src="./js/app.js"></script>
</body>

</html>