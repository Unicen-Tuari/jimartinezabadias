{include file="src/views/templates/adminHeader.tpl"}

<div class="container py-2">
    
    <div class="row py-3 justify-content-between">
        <div class="col-7">
            <h3>Categorías</h3>
        </div>
        <div class="col-5">
            <a class="btn btn-info" href="admin/nueva_categoria" role="button">Nueva Categoría</a>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Descripción</th>
                        </tr>
                    </thead>
                    <tbody>
                        {foreach from=$categories item=category}
                        <tr>
                            <td>
                                <a href="admin/categoria/{$category['id_category']}">
                                    {$category['name']}
                                </a>
                            </td>
                            <td>{$category['description']}</td>
                        </tr>
                        {/foreach}
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>


{include file="src/views/templates/adminFooter.tpl"}