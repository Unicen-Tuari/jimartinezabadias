{include file="src/views/templates/adminHeader.tpl"}

<div class="container py-2">
    
    <div class="row py-3 justify-content-between">
        <div class="col">
            <h3>

                {$dish['dish_name']}
                
            </h3>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <dl class="row">
                <dt class="col-4">Categoría</dt>
                <dd class="col-8">{$dish['category_name']}</dd>
                
                <dt class="col-4">Descripción</dt>
                <dd class="col-8">{$dish['description']}</dd>

                <dt class="col-4">Precio</dt>
                <dd class="col-8">$ {$dish['price']}</dd>

                <dt class="col-4">Estado</dt>
                <dd class="col-8">
                    {if $dish['in_menu'] eq 'P'}
                        <span class="badge badge-success">En el menú</span>
                    {elseif $dish['in_menu'] eq 'A'}
                        <span class="badge badge-secondary">Archivado</span>
                    {/if}
                </dd>
            </dl>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <a class="btn btn-primary" 
                href="admin_editar_plato/{$dish['id_dish']}" role="button">Editar</a>
            <a class="btn btn-danger"
                href="admin_borrar_plato/{$dish['id_dish']}" role="button">Borrar</a>
            <a class="btn btn-secondary" href="admin_platos">Volver</a>
        </div>
    </div>



</div>


{include file="src/views/templates/adminFooter.tpl"}