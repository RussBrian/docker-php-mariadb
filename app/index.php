<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba docker 2</title>
</head>
<body>

    <h2>Hola Russel Martinez</h2>
    
<?php

        $servername = "mariadb"; 
        $username = "miapp";
        $password = "mi@pp";
        $database = "miapp";


        $conn = new mysqli($servername, $username, $password, $database);

        if ($conn->connect_error) {
        die("Hubo un error de conexión: " . $conn->connect_error);
        }

        echo "Conexion exitosa";

        $conn->Close();
?>

</body>
</html>