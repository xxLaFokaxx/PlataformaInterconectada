<?php //Inicio del Lenguaje PHP
echo "Aqui se va a registrar";

//Se valida la conexion a la Base de datos
$conexion =mysqli_connect("localhost","root","","test");
if (!$conexion) {
    echo "No hay conexion con base de datos";
}
else{
    echo "Conexion establecidad";
}
// Se obtienen los valores del formulario HTML
if (isset($_POST['Enviar'])) {
      $Name = $_POST["Nombre"];
      $LastName = $_POST["apellido Paterno"];
      $LasNome = $_POST ["apellido materno"];
      $edad = $_POST ["edad"];
      $Email = $_POST["Correo"];
      $Variable1 = $_POST["FechaNacimiento"];
      $password = $_POST ["contraseña"];
      $telefono =$_POST ["numero de telefono"];
      $usuario = $_POST ["usuario"];

        echo "Tu variable nombre es: ", $Name;
        echo "Tu variable Apellido Paterno es: ", $LastName;
        echo "Tu variable Apellido materno es: ", $LasName;
        echo "Tu edad es:", $edad;
        echo " tu correo es:", $Email;
        echo " Tu contraseña es: ",$password;
        echo " TU numero telefono es:" ,$numero de telefono;
        echo "Tu usuario es: ",$usuario;
      */
      //Se insertan los valores en la base de Datos 
      $Insertar = "INSERT INTO datos VALUES (' ','$Nombre','$LastName','$LasName','$edad','$Email','$variableel','$password','$numerotelefono','$usuario)";

      $Ejecutar = @mysqli_query(sconectar.$Insertar):
      if (!$Ejecutar) {
        echo "Error en SOL"
          }else{
            echo "¡Registro exitoso!"
            echo "<a href=examenhtml> Regresar al formulario </a>";
        }

    }
?>