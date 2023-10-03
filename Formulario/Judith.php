<html>
    <body>

        <form>

        <fieldset>
    <hr>
        <label style=> Nombre : </label>
        <input type="text" value="Introduce tu nombre" id="nombre"/>
        
    </hr> 

    
    <hr>
        <label for="mail">  Correo electrónico:  </label>
        <input type="email" value="Introduce tu correo"  id="mail" name="user_mail" />
    </hr>




    <hr>
        <label style=> Contraseña : </label>
        <input type="text" value="Introduce contraseña" id="contraseña"/>
        
    </hr> 
       



    <hr>
        <label>  Selecciona el idioma que hablas: </label>
   
            <input type="radio" name="idioma" value="español">
            <label> Español </label>
            <input type="radio" name="idioma" value="ingles">
            <label> Inglés </label>
            <input type="radio" name="idioma" value="Italiano">
            <label> Italiano </label>
            <input type="radio" name="idioma" value="Frances">
            <label> Francés </label>

     </hr>

     
       
        <hr>
        
        <label>  Selecciona los módulos que has cursado </label>
        <select name="modulo" id="modulo" multiple>
      
        <option>1º de Daw</option>
        <option  >1º de ASIR </option>
        <option>2º de DAW</option>
        <option>2º de ASIR</option>
   
    
        </select>

        </hr>

        <hr>
        <label> Selecciona el turno que has estado: </label>

        <label><input type="checkbox" id="cbox1" value="first_checkbox" /> Turno de mañana</label>
        <input type="checkbox" id="cbox2" value="second_checkbox" />
        <label for="cbox2">Turno de tarde</label>

        </hr>

        </fieldset>

        <?php
        
        
        
        ?>

        </form>

    </body>


</html>