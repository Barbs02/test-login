<!-- Archivo que procesa nuestro formulario -->
<?php 

$usuario = $_POST["login"];
$clave =  $_POST ["clave"];

if(($usuario !=null) && ($clave !=null)){
    if(($usuario == 'admin') && ($clave == '1234')){
        echo "<p>¡Perfecto! Tus datos son correctos :3</p>";
    }else{
        echo "<p>Te equivocaste, tus datos son incorrectos T.T</p>";
    }
    //echo "<p>Ingresaste un valor al usuario</p>"; // En caso de que ingresa un valor
}else{
    echo "<p>Debes colocar un valor</p>";
}

?>