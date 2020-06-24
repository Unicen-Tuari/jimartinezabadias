{include file="src/views/templates/adminHeader.tpl"}

<div class="container py-2">
    
    <div class="row py-3 justify-content-between">
        <div class="col-8">
            <h5>Nueva Categoría</h5>
        </div>
    </div>

    <div class="row">
        <div class="col">
            
            <form action="admin/agregar_categoria" method="GET">
                
                <div class="form-group">
                    <label for="category_name">Nombre</label>
                    <input type="text" class="form-control" id="category_name" name="category_name" placeholder="Nombre" required>
                </div>

                <div class="form-group">
                    <label for="cod_category">Código</label>
                    <input type="text" class="form-control" id="cod_category" name="cod_category" 
                        placeholder="Código" maxlength="2" minlength="2" size="2" required
                        aria-describedby="cod_categoryHelp">
                    <small id="cod_categoryHelp" class="form-text text-muted">
                        Debe ser de 2 caracteres
                    </small>
                </div>

                <div class="form-group">
                    <label for="description">Descripción</label>
                    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                </div>


                <hr>
                
                <div class="form-group py-1">
                    <input class="btn btn-primary" type="submit" value="Agregar">
                    <a class="btn btn-secondary" href="admin/categorias">Cancelar</a>
                </div>

            </form>

        </div>
    </div>

</div>


{include file="src/views/templates/adminFooter.tpl"}