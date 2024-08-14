<?php

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

                <div class="col-12 col-sm-12 col-md-10 col-lg-6">
                    <h1 class="text-center text-color">{{ title }}</h1>

                    <div class="card p-3">

                        <!-- messaggio di errore se non sono stati inseriti l'obiettivo e/o la descrizione -->
                        <div class="p-3 alert alert-danger d-flex justify-content-between" v-if="inputError">
                            <span>
                                Attenzione, immettere un nuovo elemento e la sua descrizione.
                            </span>

                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" @click.prevent="inputError = false"></button>

                        </div>

                        <!-- lista degli items -->
                        <ul class="list-group">

                            <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" v-for="(item, index) in list" :key="`list${index}`">

                                <!-- se l'elemento ha chiave-valore "done:true", al click il testo diventa barrato -->
                                <strong :class="{crossed : item.done}" @click="changeObj(index)">
                                    {{ item.task }}
                                </strong>

                                <div class="group-buttons">
                                    <!-- pulsante per cancellare l'oggetto della lista -->
                                    <button type="button" class="btn btn-danger" v-if="item.done">
                                        <i class="fa-solid fa-trash" @click="removeObj(index)"></i>
                                    </button>

                                    <!-- pulsante per attivare la descrizione degli oggetti -->
                                    <a :href="`description.php?index=${index}`" class="btn btn-warning">
                                        <i class="fa-regular fa-eye"></i>
                                    </a>

                                </div>
                            </li>

                        </ul>

                    </div>

                    <div class="card p-3 mt-2">

                        <!-- form per inviare il nuovo task -->
                        <form @submit.prevent="addObj">
                            <div class="mt-3 box">
                                <input v-model="todoItem.task" type="text" class="form-control mt-3" placeholder="Inserisci un nuovo task">
                                <textarea v-model="todoItem.text" class="form-control mt-3" placeholder="Descrizione"></textarea>
                                <button type="submit" class="btn btn-primary mt-3">Invia</button>
                            </div>
                        </form>

                    </div>


                </div>
            </div>
        </div>

    </div>
    <script src="./js/app.js"></script>
    
</body>

</html>