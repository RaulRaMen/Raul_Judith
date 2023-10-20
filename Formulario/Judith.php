<html>
    <?php
        $porDefecto = array("Nombre"=>"Juan ",
                            "Correo" => "ejemplo@hotmail.com ",
                            "Contraseña" => "Secreto ",
                            "Idioma" => "ingles",
                            "Modulo" => array("1asir","2asir"),
                            "Turno" => array("mañana","tarde"))
    ?>
    <body>

        <form method="POST" action="Recibe_datos.php" method="post">
            <input type="text" name="origen" value="Judith.php" style="display:none">
        <fieldset>
    <hr>
        <label style=> Nombre : </label>
        <input type="text" name="nombre"<?php echo('value='.$porDefecto["Nombre"])?>/>
        
    </hr> 

    
    <hr>
        <label for="mail">  Correo electrónico:  </label>
        <input type="email" name="mail" <?php echo('value='.$porDefecto["Correo"])?>/>
    </hr>




    <hr>
        <label > Contraseña : </label>
        <input type="text"  name="contraseña" <?php echo('value='.$porDefecto["Contraseña"])?>/>
        
    </hr> 
       



    <hr>
        <label >  Selecciona el idioma que hablas: </label>
    
            <input type="radio" name="idioma" value="español" <?php if($porDefecto["Idioma"]=="español") echo("checked") ?>>
            <label > Español </label>
            <input type="radio" name="idioma" value="ingles" <?php if($porDefecto["Idioma"]=="ingles") echo("checked") ?>>
            <label> Inglés </label>
            <input type="radio" name="idioma" value="Italiano" <?php if($porDefecto["Idioma"]=="italiano") echo("checked") ?>>
            <label> Italiano </label>
            <input type="radio" name="idioma" value="Frances" <?php if($porDefecto["Idioma"]=="frances") echo("checked") ?>>
            <label> Francés </label>

     </hr>

     
       
        <hr>
        
        <label>  Selecciona los módulos que has cursado </label>
        <select multiple name="modulo[]" >
      
        <option <?php if(in_array("1daw",$porDefecto["Modulo"])) echo("selected") ?>>1º de Daw</option>
        <option <?php if(in_array("1asir",$porDefecto["Modulo"])) echo("selected") ?>>1º de ASIR </option>
        <option <?php if(in_array("2daw",$porDefecto["Modulo"])) echo("selected") ?>>2º de DAW</option>
        <option <?php if(in_array("2asir",$porDefecto["Modulo"])) echo("selected") ?>>2º de ASIR</option>
    
        </select>

        </hr>

        <hr>
        <label> Selecciona el turno que has estado: </label>

        <label>
        <input type="checkbox" name="turno[]" value="mañana" <?php if(in_array("mañana",$porDefecto["Turno"])) echo("checked") ?>/> Turno de mañana</label>
        <input type="checkbox" name="turno[]" id="cbox2" value="tarde" <?php if(in_array("tarde",$porDefecto["Turno"])) echo("checked") ?> />
        <label for="cbox2">Turno de tarde</label>

        </hr>
        <hr>

            <input type="submit" value="Enviar este formulario" />


            </hr>
        </fieldset>



        </form>

    </body>


</html>