{include file="src/views/templates/adminHeader.tpl"}

<div class="container py-2">
    
    <div class="row py-3 justify-content-between">
        <div class="col-3">
            <h3>Menú</h3>
        </div>
        {* <div class="col-9">
            <a class="btn btn-info" href="admin/nueva_categoria" role="button">Nueva cat.</a>
            <a class="btn btn-info" href="admin/nuevo_plato" role="button">Nuevo plato</a>
        </div> *}
    </div>

    <div class="row">
        <div class="col">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Cat.</th>
                            <th scope="col">Plato</th>
                            <th scope="col">Precio</th>
                        </tr>
                    </thead>
                    <tbody>
                        {foreach from=$menu item=dish}
                        <tr>
                            <td>{$dish['category_name']}</td>
                            <td>
                                <a href="admin/plato/{$dish['id_dish']}">
                                    {$dish['dish_name']}
                                </a>
                            </td>
                            <td>$ {$dish['price']}</td>
                        </tr>
                        {/foreach}
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>


{include file="src/views/templates/adminFooter.tpl"}