<?php
var_dump($_POST);

    $servername = "localhost"; 
    $username = "root"; 
    $password = ""; 
    $dbname = "formulario_qa"; 

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = isset($_POST["nombre"]) ? $_POST["nombre"] : "";
        $apellido = isset($_POST["apellido"]) ? $_POST["apellido"] : "";
        $email = isset($_POST["email"]) ? $_POST["email"] : "";
        $fechaNacimiento = isset($_POST["fechaNacimiento"]) ? $_POST["fechaNacimiento"] : "";
        $edad = isset($_POST["edad"]) ? $_POST["edad"] : "";
        $nacionalidad = isset($_POST["nacionalidad"]) ? $_POST["nacionalidad"] : "";
        $dni = isset($_POST["dni"]) ? $_POST["dni"] : "";
        $genero = isset($_POST["genero"]) ? $_POST["genero"] : "";
        $estadoCivil = isset($_POST["estadoCivil"]) ? $_POST["estadoCivil"] : "";
        $telefono = isset($_POST["telefono"]) ? $_POST["telefono"] : "";
        $celular = isset($_POST["celular"]) ? $_POST["celular"] : "";
        $direccion = isset($_POST["direccion"]) ? $_POST["direccion"] : "";
        $provincia = isset($_POST["provincia"]) ? $_POST["provincia"] : "";
        $codigoPostal = isset($_POST["codigoPostal"]) ? $_POST["codigoPostal"] : "";
        $pais = isset($_POST["pais"]) ? $_POST["pais"] : "";
        $nivelEstudio = isset($_POST["nivelEstudio"]) ? $_POST["nivelEstudio"] : "";
        $trabajaActualmente = isset($_POST["trabajaActualmente"]) ? $_POST["trabajaActualmente"] : "";
        $buscaTrabajo = isset($_POST["buscaTrabajo"]) ? $_POST["buscaTrabajo"] : "";
    
        $sql = "INSERT INTO form_qa (nombre, apellido, email, fechaNacimiento, edad, nacionalidad, dni, genero, estadoCivil, telefono, celular, direccion, provincia, codigoPostal, pais, nivelEstudio, trabajaActualmente, buscaTrabajo)
                VALUES ('$nombre', '$apellido', '$email', '$fechaNacimiento', '$edad', '$nacionalidad', '$dni', '$genero', '$estadoCivil', '$telefono', '$celular', '$direccion', '$provincia', '$codigoPostal', '$pais', '$nivelEstudio', '$trabajaActualmente', '$buscaTrabajo')";
    
        if ($conn->query($sql) === TRUE) {
            echo "Los datos se han guardado correctamente.";
        } else {
            echo "Error al guardar los datos: " . $conn->error;
        }
    
        $conn->close();
    } else {
        header("Location: index.html");
        exit();
    }
?>