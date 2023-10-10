<html>
    <body>
        <form action="Recibe_datos.php" method="post">
            <input type="text" name="origen" value="Raul.php" style="display:none">
            <fieldset>
                <br>
                <label>Nombre:<label>
                <input type="text" name="nombre"/>
                <label>Primer Apellido:<label>
                <input type="text" name="pApellido"/>
                <label>Segundo Apellido:<label>
                <input type="text" name="sApellido"/><br><br>
            </fieldset>

            <fieldset>
                <label >Elija su modulo:</label><br>
                <input type="radio" name="modulo" value="DAW" checked>DAW (Desarrollo de aplicaciones web)</input><br>
                <input type="radio"  name="modulo" value="DAM">DAM (Desarrollo de aplicaciones multiplataforma)</input><br>
                <input type="radio"  name="modulo" value="ASIR">ASIR (Administracion de sistemas informaticos y redes)</input>
            </fieldset>

            <fieldset>
                <label >Que asignaturas quiere convalidar:</label><br>
                <input type="checkbox" name="convalidar[]" value="DSW">DSW</input><br>
                <input type="checkbox" name="convalidar[]" value="DEW">DEW</input><br>
                <input type="checkbox" name="convalidar[]" value="DOR">DOR</input><br>
                <input type="checkbox" name="convalidar[]" value="EMR">EMR</input><br>
                <input type="checkbox" name="convalidar[]" value="DPL">DPL</input>
            </fieldset>

            <fieldset>
                <label >Otros estudios cursados:</label><br>
                <select name="estudios[]" multiple>
                <option value="DAW" selected="selected">DAW</option>
                <option value="DAM">DAM</option>
                <option value="ASIR">ASIR</option>
                </select> <br>
            </fieldset>

            <fieldset style="text-align:center">
            
                <input type="submit" value="Mandar">
            </fieldset>
        </form>
    </body>
</html>