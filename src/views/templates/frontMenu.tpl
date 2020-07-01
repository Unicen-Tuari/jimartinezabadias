{include file="src/views/templates/frontHeader.tpl"}

    <div class="main">

        {foreach from=$categories item=category}

            <section class="section">
                
                <h2 class="section-main-title">
                    {$category['name']}
                </h2>
                
                <div class="section-body">

                    <table>

                        <tbody>

                            {foreach from=$dishes item=dish}
                                {if $dish['id_category'] eq $category['id_category']}
                                    <tr>
                                        <td class="dish-name">
                                            {$dish['dish_name']}
                                        </td>
                                        <td>$ {$dish['price']}</td>
                                    </tr>
                                    <tr>
                                        <td class="dish-info">{$dish['description']}</td>
                                    </tr>
                                {/if}
                            {/foreach}

                        </tbody>
                    </table>

                </div>

            </section>
        {/foreach}

    </div>

{include file="src/views/templates/frontFooter.tpl"}