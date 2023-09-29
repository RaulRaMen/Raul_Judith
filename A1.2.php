<?php
/*
    Implementa un script en PHP que almacene en un array el horario del grupo 2º DAM, teniendo en cuenta los siguientes detalles:

    Se debe registrar, para actividad (cada hora de clase) qué módulo se imparte, qué docente lo hace y en qué taller.
    El array debe estar indexado de forma que se facilite el acceso a los detalles (módulo, docente y tutor) de la actividad de un día y hora determinados. La elección de los índices la puedes hacer según el criterio que estimes oportuno.
    Al ejecutar el script se debe proporcionar al usuario la siguiente información: 

    Versión 1: Todos los detalles de la actividad que se esté impartiendo en el día y la hora especificados por el usuario (tú escoges el formato en que se obtienen esos datos).
    Versión 2: Además de la información anterior, mostrar también todos los detalles de la actividad que se esté impartiendo en el momento de la ejecución del script.
    Si no se está impartiendo ninguna actividad en un momento determinado, se debe informar de ello al usuario. En caso de que estemos en el recreo, deberemos indicárselo también al usuario.
*/

    $asig = array(
                    1 =>"Desarrollo web en entorno cliente(DEW)",
                    "Despliegue de aplicacion web(DPL)",
                    "Desarrollo web en entorno servidor(DSW)",
                    "Diseñño de intefaces web(DOR) impartida",
                    "Empresa e iniciativa emprendedora(EMR)",
                );

    $pro = array(
                    1 =>"Marisol",
                    "Toñi",
                    "Maricarmen",
                    "Lourdes",
                    "Sergio"
                );

    $tal = array(
                    1 =>"201",
                    "202",
                    "203",
                    "204"
                );
                
    

                //El array de cada dia se estructura asig,pro,tal
    $horario = array(   "lunes" => array(1 => array(1,3,1), array(1,3,1), array(2,2,1), 5 => array(3,5,1), array(4,4,1), array(4,4,1)),
                        "martes" => array(1 => array(1,3,1), array(1,3,1), array(4,4,1), 5 => array(4,4,1), array(3,5,1), array(3,5,1)),
                        "miercoles" => array(1 => array(1,3,1), array(1,3,1), array(1,3,1), 5 => array(2,2,1), array(2,2,1), array(2,2,1)),
                        "jueves" => array(1 => array(4,4,1), array(4,4,1), array(5,1,1), 5 => array(3,5,1), array(3,5,1), array(3,5,1)),
                        "viernes" => array(1 => array(5,1,1), array(5,1,1), array(3,5,1), 5 => array(3,5,1), array(2,2,1), array(2,2,1))
                    );
    function indiceHora($hora)
    {
        if($hora >= "8:00" && $hora < "8:55")
        {
            return 1;
        }elseif($hora >= "8:55" && $hora < "9:50")
        {
            return 2;
        }elseif($hora >= "9:50" && $hora < "10:45")
        {
            return 3;
        }elseif($hora >= "10:45" && $hora < "11:15")
        {
            return 4;
        }elseif($hora >= "11:15" && $hora < "12:10")
        {
            return 5;
        }elseif($hora >= "12:10" && $hora < "13:05")
        {
            return 6;
        }elseif($hora >= "13:05" && $hora < "14:00")
        {
            return 7;
        }else{
            return -1;
        }
    }

    $salir = false;
    while(!$salir)
    {
        echo("1-Buscar una hora\n");
        echo("2-Indicar hora actual\n");
        echo("3-Salir\n");
        echo("Elija una opcion: ");
        $entrada = readline();

        switch($entrada)
        {
            case 1:
                echo("De que dia quiere saber la hora: ");
                $dia = strtolower(trim(readline()));
                echo("A que hora es la asignatura: ");
                $hora = trim(readline());
                $indice=indiceHora($hora);
                if($indice == -1)
                    echo("La hora no pertenece al horario lectivo\n");
                elseif($indice == 4)
                    echo("Es la hora del recreo\n");
                else{
                    $datos = $horario[$dia][$indice];
                    echo("La asignatura es ".$asig[$datos[0]]." el profesor es ".$pro[$datos[1]]." y se imparte en la clase ".$tal[$datos[2]]."\n");
                }
                break;

            case 2:
                date_default_timezone_set("Europe/London");
                $dia = traducirDia(date("l"));
                $indice = indiceHora(date("G:i"));
                if($indice == -1)
                    echo("La hora no pertenece al horario lectivo\n");
                elseif($indice == 4)
                    echo("Es la hora del recreo\n");
                else{
                    $datos = $horario[$dia][$indice];
                    echo("La asignatura es ".$asig[$datos[0]]." el profesor es ".$pro[$datos[1]]." y se imparte en la clase ".$tal[$datos[2]]."\n");
                }
                break;

            case 3:
                $salir =true;
                break;

            default:
                echo("Introduzca una respuesta valida\n");
                break;
        }

        echo("-------------------------------------------------------------\n");
    }


    function traducirDia($ingles)
    {
        switch ($ingles) {
            case "Monday":
                return "lunes";

            case "Tuesday":
                return "martes";
            
            case "Wednesday":
                return "miercoles";

            case "Thursday":
                return "jueves";

            case "Friday":
                return "viernes";

            case "Saturday":
                return "sabado";

            case "Sunday":
                return "domingo";
        }
    }
?>