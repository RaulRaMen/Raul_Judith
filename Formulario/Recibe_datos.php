<?php
    $errores = array();
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

        //Funciones locales
        function comprobarConvalidacion($modulo)
        {
            global $errores;
            $modulo = array( "DAW" => array("DSW","DEW","DOR","EMR","DPL"),
                            "DAM" => array("EMR","","","",""),
                            "ASIR" => array("EMR","DPL","","","")
            );

            foreach($_POST['convalidar'] as &$asignatura)
            {
                if(!in_array($asignatura, $modulo[$_POST['modulo']]))
                    $errores[] = "La asignatura " .$asignatura." no pertenece al modulo ".$_POST['modulo'];
            }

        }
        

        //Campo nombre
        if(soloLetras('nombre'))
            $errores[] = "El nombre solo debe incluir letras";
        if(soloLetras('pApellido'))
            $errores[] = "El primer apellido solo debe incluir letras";
        if(soloLetras('sApellido'))
            $errores[] = "El segundo apellido solo debe incluir letras";

        //Elejir convalidacion
        if(comprobarConvalidacion($_POST['modulo']))
            $errores[] = "Debe modificar las convalidaciones";

        visualizacionErrores();
    }


    function validacionJudith()
    {

        global $errores,$tieneNumeros,$esContraseña,$esCorreo;

        if(soloLetras('nombre'))
        $errores[] = "El nombre solo debe incluir letras";
        if(!preg_match($esCorreo,$_POST['mail']))
        $errores[] = "El correo tiene que ser válido";
        if(!preg_match($esContraseña,$_POST['contraseña']))
        $errores[] = "La contraseña tiene que tener almenos una mayuscula";
        


        

        visualizacionErrores();
    }



    function elegirUno()
    {
      
        

        
    }

    function visualizacionErrores()
    {
        global $errores;

        if(count($errores) == 0)
            echo "No hubo ningun fallo, very good manueh";
        else{
            $i = 1;
            echo "HAZ FALLADO, los fallos son:<br>";

            foreach($errores as &$salida){
                echo $i."- ".$salida."<br>";
                $i++;
            }
            echo "Si quieres volver al formulario pincha => <a href=".$_POST['origen'].">AQUI</a>";
        }
    }
?>