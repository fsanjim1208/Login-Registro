<?php
    include '../acceso_datos/metodos.php';
    $usuario=$_POST["usuario"];
    $password=$_POST["password"];
    $rutafichero="../acceso_datos/usuarios.csv";
    
    $asoc=leeUsuarios($rutafichero);
    $nusuario=array_search($password ,$asoc);

    if ($asoc[$usuario][0]==$password){

        if ((buscaUsu($usuario,$rutafichero)[1])=="Mindundi"){
            echo "Bienvenido";
        }
        else{
            header('Location: '.$uri.'http://localhost/formulario_acceso/control/procesaregistro.php');
        }


    }
    else if ((empty($usuario) || empty($password)) && (empty($usuario) && empty($password))){
    
        echo "Faltan datos";
        
        
    }

?>