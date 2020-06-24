{include file="src/views/templates/adminHeader.tpl"}

<div class="container py-2">
    
    <div class="row py-3 justify-content-between">
        <div class="col-7">
            <h3>Platos</h3>
        </div>
        <div class="col-5">
            <a class="btn btn-info" href="admin/nuevo_plato" role="button">Nuevo Plato</a>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Categoria</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Precio</th>
                        </tr>
                    </thead>
                    <tbody>
                        {foreach from=$dishes item=dish}
                        <tr>
                            <td>{$dish['category_name']}</td>
                            <td>
                                <a href="admin/plato/{$dish['cod_category']}_{$dish['id_dish']}">
                                    {$dish['dish_name']}
                                </a>
                                {if $dish['in_menu'] eq 'P'}
                                    <span class="badge badge-success">En el menú</span>
                                {elseif $dish['in_menu'] eq 'A'}
                                    <span class="badge badge-secondary">Archivado</span>
                                {/if}
                            </td>
                            <td>$ {$dish['price']}</td>
                        </tr>
                        {/foreach}
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    
    {* <div class="row">
    

    </div> *}

</div>


{include file="src/views/templates/adminFooter.tpl"}