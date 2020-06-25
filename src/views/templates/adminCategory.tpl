{include file="src/views/templates/adminHeader.tpl"}

<div class="container py-2">
    
    <div class="row py-3 justify-content-between">
        <div class="col">
            <h3>

                {$category['name']}
                
            </h3>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <dl class="row">
                <dt class="col-4">Código</dt>
                <dd class="col-8">{$category['cod_category']}</dd>
                
                <dt class="col-4">Descripción</dt>
                <dd class="col-8">{$category['description']}</dd>
            </dl>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <a class="btn btn-primary" 
                href="admin/editar_categoria/{$category['cod_category']}" role="button">Editar</a>
            <a class="btn btn-danger"
                href="admin/borrar_categoria/{$category['cod_category']}" role="button">Borrar</a>
            <a class="btn btn-secondary" href="admin/categorias">Volver</a>
        </div>
    </div>



</div>


{include file="src/views/templates/adminFooter.tpl"}