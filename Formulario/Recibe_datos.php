<?php
    $errores;
    $tieneNumeros = "/.?[0-9].?/";
    $esContraseña="/.?[A-Z].?/";



    switch($_POST['origen'])
    {
        case 'Raul.php':
            validacionRaul();
            break;
        case 'Judith.php':
            validacionJudith();
            break;
    }

    function validacionRaul()
    {
        global $errores,$tieneNumeros;

        if(preg_match($tieneNumeros,$_POST['nombre']))
            $errores[] = "El nombre solo debe incluir letras";
        if(preg_match($tieneNumeros,$_POST['pApellido']))
            $errores[] = "El primer apellido solo debe incluir letras";
        if(preg_match($tieneNumeros,$_POST['sApellido']))
            $errores[] = "El segundo apellido solo debe incluir letras";

        
        print_r($errores);
    }







    function validacionJudith()
    {

        global $errores,$tieneNumeros,$esContraseña;

        if('nombre')
        $errores[] = "El nombre solo debe incluir letras";
        if(preg_match($esCorreo,$_POST['mail']))
        $errores[] = "El correo tiene que ser válido";
        if(preg_match($esContraseña,$_POST['contraseña']))
        $errores[] = "La contraseña tiene que tener almenos una mayuscula";
        


        print_r($errores);
    }

?>