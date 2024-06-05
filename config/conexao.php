<?php 
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('BASE', 'comercialStore');

    $conn = new MySQLi(HOST,USER,PASS,BASE);

    if ($conn->error) {
        die("Erro na conexão DB:" . $conn->error);
    };