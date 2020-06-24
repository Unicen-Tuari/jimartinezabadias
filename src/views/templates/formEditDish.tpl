{include file="src/views/templates/adminHeader.tpl"}

<div class="container py-2">
    
    <div class="row py-3 justify-content-between">
        <div class="col-8">
            <h5>Editar Plato</h5>
        </div>
    </div>

    <div class="row">
        <div class="col">
            
            <form action="admin/guardar_plato" method="GET">

                 <input type="hidden" id="id_dish" name="id_dish" value="{$dish['id_dish']}">
                 <input type="hidden" id="cod_category" name="cod_category" value="{$dish['cod_category']}">

                <div class="form-group">
                    <label for="dish_name">Nombre</label>
                    <input type="text" class="form-control" id="dish_name" name="dish_name" value="{$dish['dish_name']}" required>
                </div>
                <div class="form-group">
                    <label for="description">Descripción</label>
                    <textarea class="form-control" id="description" name="description" rows="3" required>{$dish['description']}</textarea>
                </div>
                <div class="form-row">
                    <div class="col">
                        <div class="form-group">
                            <label for="new_cod_category">Categoría</label>
                            <select class="custom-select" id="new_cod_category" name="new_cod_category">
                                {foreach from=$categories item=category}
                                    <option value="{$category['cod_category']}"
                                        {if $category['cod_category'] eq $dish['cod_category']}
                                            selected
                                        {/if}
                                        >{$category['name']}</option>
                                {/foreach}
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="price">Precio</label>
                            <input type="number" class="form-control" id="price" name="price" value="{$dish['price']}" required>
                        </div>    
                    </div>
                </div>

                <div class="form-row">
                    <div class="col">
                        
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="in_menu" id="publicado" value="P"
                            {if $dish['in_menu'] eq 'P'}
                                checked
                            {/if}
                            >
                            <label class="form-check-label" for="publicado">Publicado</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="in_menu" id="archivado" value="A"
                            {if $dish['in_menu'] eq 'A'}
                                checked
                            {/if}
                            >
                            <label class="form-check-label" for="archivado">Archivado</label>
                        </div>
      
                    </div>
                </div>

                <hr>
                
                <div class="form-group py-1">
                    <input class="btn btn-primary" type="submit" value="Guardar">
                    <a class="btn btn-secondary" href="admin/plato/{$dish['cod_category']}_{$dish['id_dish']}">Cancelar</a>
                </div>

            </form>

        </div>
    </div>

</div>


{include file="src/views/templates/adminFooter.tpl"}