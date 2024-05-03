<div class="form-group">
    <label>Disponibilidad</label>
    <br>
    <select class="custom-select" name="disponibilidad" required>
        
        <option value= 0  <?php
                            if (isset($disponibilidad) && $disponibilidad == true) {
                                echo " selected='selected' ";
                            }
                            ?>>Activado</option>
        <option value=1 <?php
                            if (isset($disponibilidad) && $disponibilidad == false) {
                                echo " selected='selected' ";
                            }
                            ?>>Desactivado</option>
                            
    </select>
</div>

//creo que esto no es así