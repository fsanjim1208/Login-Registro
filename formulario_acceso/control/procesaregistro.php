<?php

$rutafichero="../acceso_datos/usuarios.csv";
include '../acceso_datos/metodos.php';
$arrayusuarios = leeUsuarios($rutafichero);


echo "<table border='1px'>";
    echo "<tr>";
        echo "<th>Usuario</th>";
        echo "<th>Contraseña</th>";
        echo "<th>Rol</th>";
    echo "</tr>";
foreach($arrayusuarios as $key => $value){
    echo "<tr>";
        echo "<th>".$key."</th>";
        echo "<th>".$value[0]."</th>";
        echo "<th>".$value[1]."</th>";
}
echo "</table>";
echo "<a href='http://localhost/formulario_acceso/vista/registro.html'>Añade Usuarios</a> <br>";
echo "<a href='http://localhost/formulario_acceso/vista/formulario.html'>Log Out</a>";

if (empty($_HEADER["usuario"]) || empty($_HEADER["password"]) ||empty($_HEADER["rol"]) ){    
    header('Location: '.$uri.'http://localhost/formulario_acceso/vista/registro.html');
}
else{
    $usuario=$_POST["usuario"];
    $password=$_POST["password"];
    $rol=$_POST["rol"];
    registrausu($usuario, $password, $rol, $rutafichero);
}


/*


$usuarios=leeUsuarios($ruta);

var_dump($asoc);
*/
?>

