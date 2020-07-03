{include file="src/views/templates/frontHeader.tpl"}

    <div class="main main-category">

        {foreach from=$menu item=category}
            
            {if $category['dishes']|@count gt 0}
                
                <section class="section">
                
                    <h3 class="section-main-title category-title">
                        {$category['name']}
                    </h3>
                    
                    <div class="section-body">

                        <table style="margin:0;">

                            <tbody>

                                {foreach from=$category['dishes'] item=dish}
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

            {/if}

        {/foreach}

    </div>

{include file="src/views/templates/frontFooter.tpl"}