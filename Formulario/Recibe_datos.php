<?php
    $errores;
    $tieneNumeros = "/.?[0-9].?/";
    $esContraseña="/.?[A-Z].?/";


    $esCorreo = "/.[@][a-zA-Z]*[.com]/";

    switch($_POST['origen'])
    {
        case 'Raul.php':
            validacionRaul();
            break;
        case 'Judith.php':
            validacionJudith();
            break;
    }

    function soloLetras($name)
    {
        global $tieneNumeros;
        return preg_match($tieneNumeros,$_POST[$name]);
    }

    function validacionRaul()
    {
        global $errores,$tieneNumeros;

        if(soloLetras('nombre'))
            $errores[] = "El nombre solo debe incluir letras";
        if(soloLetras('pApellido'))
            $errores[] = "El primer apellido solo debe incluir letras";
        if(soloLetras('sApellido'))
            $errores[] = "El segundo apellido solo debe incluir letras";


        print_r($errores);
    }







    function validacionJudith()
    {

        global $errores,$tieneNumeros,$esContraseña;

        if(soloLetras('nombre'))
        $errores[] = "El nombre solo debe incluir letras";
        if(preg_match($esCorreo,$_POST['mail']))
        $errores[] = "El correo tiene que ser válido";
        if(preg_match($esContraseña,$_POST['contraseña']))
        $errores[] = "La contraseña tiene que tener almenos una mayuscula";
        


        print_r($errores);
    }

?>