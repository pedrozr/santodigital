<?php
define('HOST', '10.24.176.3');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', 'techeducation');

$connection = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');