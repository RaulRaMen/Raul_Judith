<html>
    <body>

        <form method="POST" action="Recibe_datos.php" method="post">
            <input type="text" name="origen" value="Judith.php" style="display:none">
        <fieldset>
    <hr>
        <label style=> Nombre : </label>
        <input type="text" value="Introduce tu nombre" name="nombre"/>
        
    </hr> 

    
    <hr>
        <label for="mail">  Correo electrónico:  </label>
        <input type="email" value="Introduce tu correo"  name="mail" />
    </hr>




    <hr>
        <label style=> Contraseña : </label>
        <input type="text"  name="contraseña"/>
        
    </hr> 
       



    <hr>
        <label >  Selecciona el idioma que hablas: </label>
    
            <input type="radio" name="idioma" value="español" checked>
            <label > Español </label>
            <input type="radio" name="idioma" value="ingles">
            <label> Inglés </label>
            <input type="radio" name="idioma" value="Italiano">
            <label> Italiano </label>
            <input type="radio" name="idioma" value="Frances">
            <label> Francés </label>

     </hr>

     
       
        <hr>
        
        <label>  Selecciona los módulos que has cursado </label>
        <select multiple name="modulo[]" >
      
        <option >1º de Daw</option>
        <option  >1º de ASIR </option>
        <option>2º de DAW</option>
        <option>2º de ASIR</option>
   
    
        </select>

        </hr>

        <hr>
        <label> Selecciona el turno que has estado: </label>

        <label>
        <input type="checkbox" name="turno[]" value="mañana" /> Turno de mañana</label>
        <input type="checkbox" name="turno[]" id="cbox2" value="tarde" />
        <label for="cbox2">Turno de tarde</label>

        </hr>
        <hr>

            <input type="submit" value="Enviar este formulario" />


            </hr>
        </fieldset>



        </form>

    </body>


</html>