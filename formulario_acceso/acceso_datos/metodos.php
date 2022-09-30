<?php
    function registrausu($usuario, $password, $rol, $ruta)
    {
        $usuarionuevo=",".$usuario.";".$password.";".$rol;
    
        $alumnos=file_get_contents($ruta);

        $alumnos = $alumnos.$usuarionuevo;

        file_put_contents($ruta,$alumnos);
    }

    function eliminausu ($usuario)
    {
        $usuarios=file_get_contents("../acceso_datos/usuarios.csv");
        $arr=explode(",",$usuarios);
        
        //eliminar el ultimo valor del array
        //array_splice($arr, count($arr)-1);

    }
    
    function leeUsuarios($ruta){
        $fichero=file_get_contents($ruta);
        $separa=explode(",",$fichero);

        foreach($separa as $v)
        {
            $asoc[explode(";",$v)[0]] = [explode(";",$v)[1],explode(";",$v)[2]];
        }
        return $asoc;
    }

    function buscaUsu($nombre, $ruta){
        $usuarios=leeUsuarios($ruta);
        $usuariobuscado= $usuarios[$nombre];
        return $usuariobuscado;
    }


?>