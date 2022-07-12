<?php
require_once(view_path . '/layouts/header.php');
?>
<main>
    <div class="manage">
        <a href="<?php echo Helper::htmlRoute('Meal', 'create'); ?>">
            <h3>Add Meal</h3>
        </a> <br>
        <table>
            <tr>
                <th>name</th>
                <th>price</th>
                <th>size</th>
                <th>note</th>
                <th>action</th>
            </tr>
            <?php
            foreach ($meals as $meal) {
                echo "          
    <tr>
        <td>$meal->name</td>
        <td>$meal->price</td>
        <td>$meal->size</td>   
        <td>$meal->note</td>   
        <td><a href='#'> edit </a><a href=" . Helper::htmlRoute('Meal', 'destroy') . "&id=$meal->id> delete </a></td>
    </tr>";
            }
            ?>
        </table>
    </div>
</main>
<?php
require_once(view_path . '/layouts/footer.php');
?>