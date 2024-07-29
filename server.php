<?php

// Prendere il file JSON e salvalo come stringa
$string = file_get_contents('todo.json');

// Trasformare la stringa in elemento PHP
$list = json_decode($string, true);

// Modificare il file in modo che venga interpretato come JSON
header("Content-Type: application/json");

// Stampare l'elemento PHP sotto forma di stringa
echo json_encode($list);
