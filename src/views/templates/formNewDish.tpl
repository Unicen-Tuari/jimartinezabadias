{include file="src/views/templates/adminHeader.tpl"}

<div class="container py-2">
    
    <div class="row py-3 justify-content-between">
        <div class="col-8">
            <h5>Nuevo Plato</h5>
        </div>
    </div>

    <div class="row">
        <div class="col">
            
            <form action="admin_agregar_plato" method="GET">
                <div class="form-group">
                    <label for="dish_name">Nombre</label>
                    <input type="text" class="form-control" id="dish_name" name="dish_name" placeholder="Nombre" required>
                </div>
                <div class="form-group">
                    <label for="description">Descripción</label>
                    <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                </div>
                <div class="form-row">
                    <div class="col">
                        <div class="form-group">
                            <label for="id_category">Categoría</label>
                            <select class="custom-select" id="id_category" name="id_category">
                                {foreach from=$categories item=category}
                                    <option value="{$category['id_category']}">{$category['name']}</option>
                                {/foreach}
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="price">Precio</label>
                            <input type="number" class="form-control" id="price" name="price" required>
                        </div>    
                    </div>
                </div>

                <div class="form-row">
                    <div class="col">
                        
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="in_menu" id="publicado" value="P">
                            <label class="form-check-label" for="publicado">Publicado</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="in_menu" id="archivado" value="A" checked>
                            <label class="form-check-label" for="archivado">Archivado</label>
                        </div>
      
                    </div>
                </div>

                <hr>
                
                <div class="form-group py-1">
                    <input class="btn btn-primary" type="submit" value="Agregar">
                    <a class="btn btn-secondary" href="admin_platos">Cancelar</a>
                </div>

            </form>

        </div>
    </div>

</div>


{include file="src/views/templates/adminFooter.tpl"}