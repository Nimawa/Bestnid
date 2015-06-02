
<form  class="form-inline" role="form" action="ordenador.php" method="post">
    <input class="btn-sm btn-danger" type="submit" value="Ordenar">
    <select class="form-control input-sm" name="ordenar">
       <option value="porCategoria"> por Categoria </option>
       <option value="porFechaInicio">por Fecha Inicio</option>
       <option value="porFechaFin"> por Fecha Fin</option>
       <option value="porTitulo">  por Titulo</option>
       <option value="porDescripcion">por Descripcion</option>
    </select>
    
    <div class="radio">
        <label>
           <input type="radio" name="radio2" value="creciente" checked="true" > 
          Creciente
        </label>
    </div>
    <div class="radio">
        <label>
           <input type="radio" name="radio2" value="decreciente" > 
          Decreciente
        </label>
    </div>
</form> <br>                         
