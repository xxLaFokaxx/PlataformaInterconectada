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
      $LastName = $_POST["APaterno"];
      $Email = $_POST["Correro"];
      $Variable1 = $_POST['FechaNacimiento'];

      //Prueba  datos que llegan
      /*  echo "Tu variable nombre es: ", $Name;
        echo "Tu variable Apellido Paterno es: ", $LastName;
        echo "Tu variable Apellido Paterno es: ", $Email;
      */
      //Se insertan los valores en la base de Datos 
      $Insertar = "INSERT INTO datos VALUES (' ','$Nombre','$LastName','$Email',)";

      $Ejecutar = @mysqli_query(sconectar.$Insertar):
      if (!$Ejecutar) {
        echo "Error en SOL"
          }else{
            echo "¡Registro exitoso!"
            echo "<a href=Formulario2.html> Regresar al formulario </a>";
        }

    }
?>