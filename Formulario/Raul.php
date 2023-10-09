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
                <input type="radio" name="modulo" value="DAW">
                <label>DAW (Desarrollo de aplicaciones web)</label><br>
                <input type="radio"  name="modulo" value="DAM">
                <label>DAM (Desarrollo de aplicaciones multiplataforma)</label><br>
                <input type="radio"  name="modulo" value="ASIR">
                <label>ASIR (Administracion de sistemas informaticos y redes)</label>
            </fieldset>

            <fieldset>
                <label >Que asignaturas quiere convalidar:</label><br>
                <input type="checkbox" name="DSW" value="DSW">
                <label > DSW</label><br>
                <input type="checkbox" name="DEW" value="DEW">
                <label >DEW</label><br>
                <input type="checkbox" name="DOR" value="DOR">
                <label > DOR</label>
            </fieldset>
        </form>
    </body>
</html>