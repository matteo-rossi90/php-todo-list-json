<?php

// Prendere il file JSON e salvalo come stringa
$string = file_get_contents('todo.json');

// Trasformare la stringa in elemento PHP
$list = json_decode($string, true);

// se è inviato correttamente il nuovo elemento si aggiorna il file json
if (isset($_POST['task'])) {
    $todoItem = [
        'task' => $_POST['task'],
        'done' => false,
        'text' => $_POST['text']
    ];

    //aggiungere l'elemento alla lista
    $list[] = $todoItem;

    //sovrascrivere l'elemento nel file json
    file_put_contents('todo.json', json_encode($list));
};

// se esiste la chiave 'indexDelete' togliere l'elemento in base all'indice
if (isset($_POST['indexDelete'])) {
    $index = $_POST['indexDelete'];
    array_splice($list, $index, 1);
    file_put_contents('todo.json', json_encode($list));
}

// se esiste la chiave 'taskDone', cambiare il valore della proprietà done
if(isset($_POST['taskDone'])) {
    $index = $_POST['taskDone'];
    $list[$index]['done'] = !$list[$index]['done'];
    file_put_contents('todo.json', json_encode($list));
}

// Modificare il file in modo che venga interpretato come JSON
header("Content-Type: application/json");

// Stampare l'elemento PHP sotto forma di stringa
echo json_encode($list);
