<?php   session_start();?>
<main>
    <aside>
        <?

        foreach ($category as $item) {
            echo "<ul>
        <li>"; ?>
            <form method='post' action='<?= Url::local('Products') ?>'>
                <input type="hidden" name="IdCat" value="<? echo $item['Id']; ?>">
                <input type="submit" class="category" name="cat" value="<? echo $item['Name']; ?>">
            </form>
            <? echo "</li>
    </ul>";
        } ?>

    </aside>

    <div class="Products">
        <span>
            <?= $cat ?>
        </span>
        <table class="table table-bordered table-hover" id="filter-table">
            <tr>
                <th>Name</th>
                <th>Description</th>
            </tr>
            <tr class="table-filters bg-danger">
                <td><input type="text" class="form-control"></td>
                <td><input type="text" class="form-control"></td>
            </tr>
            <?
            foreach ($products as $item) {
                echo "<tr class='table-data'><td>{$item['Name']}
                    <button class='addToBasket'>+</button></td>
                    <td>{$item['Description']}<button class='addToBasket'>+</button></td></tr>";
            }
            ?>
        </table>

    </div>
</main>
<div class="pagination">
    <?= $pagination ?>
</div>
<script src="../../js/juery.js"></script>
<script>$('.table-filters input').on('input', function () {
        filterTable($(this).parents('table'));
    });

    function filterTable($table) {
        console.log("jkjhk");
        var $filters = $table.find('.table-filters td');
        var $rows = $table.find('.table-data');
        $rows.each(function (rowIndex) {
            var valid = true;
            $(this).find('td').each(function (colIndex) {
                if ($filters.eq(colIndex).find('input').val()) {
                    if ($(this).html().toLowerCase().indexOf(
                        $filters.eq(colIndex).find('input').val().toLowerCase()) == -1) {
                        valid = valid && false;
                    }
                }
            });
            if (valid === true) {
                $(this).css('display', '');
            } else {
                $(this).css('display', 'none');
            }
        });
    }
</script>







