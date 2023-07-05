// todo este codigo corre en el backend (server side)
<?php
$nombre = $_POST['empnombre'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$direccion = $_POST['direccion'];
$user = $_POST['user'];
$password = $_POST['password'];

// validacion de backend ---valida datos -- seguridad

// Establishing Connection with Server..
$conn = new mysqli('localhost', 'root', '', 'empresa');  // establece una conexion con una base de datos 

//Check for connection error
if($conn->connect_error){
  die("Error in DB connection: ".$conn->connect_errno." : ".$conn->connect_error);    
}
 
$db = mysql_select_db("empresa", $connection); 

if (isset($_POST['empnombre'])) {

//Query 
$insert= "insert into empleados(emp_id, emp_nombre , email,tel, direccion, user, password) 
values ('','$nombre', '$email', '$tel', '$direccion','$user', '$password')"; 

if($conn->query($insert)){
 echo 'Dato insertado correctamente';
}
else{
 echo 'Error '.$conn->error;  
}
}
mysql_close($connection); // Connection Closed
?>    