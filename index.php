<!DOCTYPE html>
<html>

<body>
    <h1>Docker compose/php/Mysql Estefani Soto 2021-2243</h1>
    <img src="https://i.redd.it/01tuowjtld931.jpg" alt="" width="200px">
    <br><br>
<?php

$host = getenv('MYSQL_HOST'); 
$username = getenv('MYSQL_USER');
$password = getenv('MYSQL_PASSWORD');
$database = getenv('MYSQL_DATABASE');


// En esta parte se esta intentando realizar la conexion a la bd
$conne = new mysqli($host, $username, $password, $database);

if ($conne->connect_error) {
    die("Error de conexión: " . $conne->connect_error);
}

echo "La conexion fue realizada con exito";
?>

</body>
</html>