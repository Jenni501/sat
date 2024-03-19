<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>GENERADOR DE RFC</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="./style.css">
  <link rel="shortcut icon" href="logo.png">

</head>
<body>


 <script>// Deshabilitar tanto el botón de retroceso como el de avance en el navegador
history.pushState(null, null, document.URL);
window.addEventListener('popstate', function () {
    history.pushState(null, null, document.URL);
});
</script> 

<!-- partial:index.partial.html -->
<div class="contenedor">
    <h1>GENERADOR DE RFC</h1>
    <form method="POST" id="formulario">
      <!-- Lista de campos -->
      <ul>
        <li class="fila">
          <!-- nombre -->
          <input type="text" id="nombre" name="nombre" maxlength="30" size="30" placeholder="Nombre" required="required"/>
          <label for="nombre" class="propiedad">Nombre</label>
        </li>
        <!-- apellido_paterno -->
        <li class="fila">
          <input type="text" id="apellido_paterno" name="apellido_paterno" size="30" placeholder="Apellido paterno" required="required" />
          <label for="apellido_paterno" class="propiedad">Apellido paterno</label>
        </li>
        <!-- apellido_materno -->
        <li class="fila">
          <input type="text" id="apellido_materno" name="apellido_materno" maxlength="30" size="30" placeholder="Apellido materno" required="required"/>
          <label for="apellido_materno" class="propiedad">Apellido materno</label>
        </li>
        <!-- Estado_nacimiento -->
        <li class="fila">
          <input type="text" id="estado_nacimiento" name="estado_nacimiento" maxlength="30" size="30" placeholder="Estado nacimiento" />
          <label for="estado_nacimiento" class="propiedad">Estado de nacimiento</label>
        </li>
        <!-- fecha_nacimiento -->
        <li class="fila">
          <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" maxlength="30" size="30" placeholder="Fecha de nacimiento" required="required" />
          <label for="fecha_nacimiento" class="propiedad">Fecha de nacimiento</label>
        </li>
        <!-- sexo -->
         <li class="fila">
          <input type="radio" id="sexo" name="sexo" value="hombre" />
          <label for="sexo" class="de-radio">Hombre</label>
          <input type="radio" id="sexo" name="sexo" value="mujer"  />
          <label for="sexo" class="de-radio">Mujer</label>
          <label for="sexo" class="propiedad">Género</label>
        </li>
        
        <!-- Botonera -->
        <li class="fila botonera">
          <button type="submit" name="guardar">Guardar</button>
          <button type="reset">Reiniciar</button>  
          <button type="submit" onclick="generarRFC()">Generar RFC</button>  
        </li>
            <!-- rfc -->
          
            <li class="fila">
          <!-- <label for="rfc" class="rfc">Tu RFC es</label> -->
            <!-- <p id="resultado"></p> -->
        </li> 
      </ul>
    </form>
  </div>
  
  
<?php
if (isset($_POST['guardar'])){
// Obtener los datos del formulario
$matricula='';
$nombre = $_POST['nombre'];
$apellido_paterno = $_POST['apellido_paterno'];
$apellido_materno = $_POST['apellido_materno'];
$estado_nacimiento = $_POST['estado_nacimiento'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$sexo = $_POST['sexo'];
$rfc= '';
$contraseña= '';

include('conexion.php');
// Insertar los datos en la base de datos
$sql = "INSERT INTO alumnos (matricula,nombre, apellido_paterno,apellido_materno,estado_nacimiento,fecha_nacimiento,sexo,rfc,contraseña)
VALUES ('$matricula','$nombre', '$apellido_paterno','$apellido_materno ','$estado_nacimiento','$fecha_nacimiento','$sexo','$rfc','$contraseña')";
$resultado=mysqli_query($Conexion,$sql);
if (!$resultado) {
    echo"<script type='text/javascript'>alert('ERROR AL GUARDAR EL REGISTRO');</script>";
  }else{
    echo"<script type='text/javascript'>alert('REGISTRO EXITOSO');</script>";
  }
mysqli_close($Conexion);

}
?>
<script src="generadorderfc.js"></script>
</body>
</html>
