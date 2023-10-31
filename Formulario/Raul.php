<html>
    <body>
        <?php
            $porDefecto = array("Nombre"=>"Juan",
                                "PApellido" => "Martin",
                                "SApellido" => "Martin",
                                "Modulo" => "ASIR",
                                "Convalidacion" => array("DSW","EMR"),
                                "Cursados" => array("ASIR","DAM"))
        ?>
        <form action="Recibe_datos.php" method="post" enctype="multipart/form-data">
            <input type="text" name="origen" value="Raul.php" style="display:none">
            <fieldset>
                <br>
                <label>Nombre:<label>
                <input type="text" name="nombre" <?php echo('value='.$porDefecto["Nombre"])?> />
                <label>Primer Apellido:<label>
                <input type="text" name="pApellido" <?php echo('value='.$porDefecto["PApellido"])?> />
                <label>Segundo Apellido:<label>
                <input type="text" name="sApellido" <?php echo('value='.$porDefecto["SApellido"])?> /><br><br>
            </fieldset>

            <fieldset>
                <label >Elija su modulo:</label><br>
                <input type="radio" name="modulo" value="DAW" <?php if($porDefecto["Modulo"]=="DAW") echo("checked") ?> >DAW (Desarrollo de aplicaciones web)</input><br>
                <input type="radio"  name="modulo" value="DAM" <?php if($porDefecto["Modulo"]=="DAM") echo("checked") ?> >DAM (Desarrollo de aplicaciones multiplataforma)</input><br>
                <input type="radio"  name="modulo" value="ASIR" <?php if($porDefecto["Modulo"]=="ASIR") echo("checked") ?> >ASIR (Administracion de sistemas informaticos y redes)</input>
            </fieldset>

            <fieldset>
                <label >Que asignaturas quiere convalidar:</label><br>
                <input type="checkbox" name="convalidar[]" value="DSW" <?php if(in_array("DSW",$porDefecto["Convalidacion"])) echo("checked") ?> >DSW</input><br>
                <input type="checkbox" name="convalidar[]" value="DEW" <?php if(in_array("DEW",$porDefecto["Convalidacion"])) echo("checked") ?> >DEW</input><br>
                <input type="checkbox" name="convalidar[]" value="DOR" <?php if(in_array("DOR",$porDefecto["Convalidacion"])) echo("checked") ?> >DOR</input><br>
                <input type="checkbox" name="convalidar[]" value="EMR" <?php if(in_array("EMR",$porDefecto["Convalidacion"])) echo("checked") ?> >EMR</input><br>
                <input type="checkbox" name="convalidar[]" value="DPL" <?php if(in_array("DPL",$porDefecto["Convalidacion"])) echo("checked") ?> >DPL</input>
            </fieldset>

            <fieldset>
                <label >Otros estudios cursados:</label><br>
                <select name="estudios[]" multiple>
                    <option value="DAW" <?php if(in_array("DAW",$porDefecto["Cursados"])) echo("selected") ?>>DAW</option>
                    <option value="DAM" <?php if(in_array("DAM",$porDefecto["Cursados"])) echo("selected") ?>>DAM</option>
                    <option value="ASIR" <?php if(in_array("ASIR",$porDefecto["Cursados"])) echo("selected") ?>>ASIR</option>
                    <option value="NoRele" <?php if(in_array("NoRele",$porDefecto["Cursados"])) echo("selected") ?>>No relevante</option>
                </select> <br>
            </fieldset>

            <fieldset style="text-align:center">
                <input type="file" name="fichero" >
            </fieldset>

            <fieldset style="text-align:center">
                <input type="submit" value="Enviar">
            </fieldset>
        </form>
    </body>
</html>