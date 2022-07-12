<?php
require_once(view_path . '/layouts/header.php');
?>
<main>
    <div class="manage">
        <div class="addButton">
            <a href="<?php echo Helper::htmlRoute('Category', 'create'); ?>">
                <h3> Add Category</h3>
            </a> <br>
        </div>

        <table>
            <tr>
                <th>name</th>
            </tr>
            <?php
            foreach ($categories as $category) {
                echo "          
    <tr>
        <td>$category->name</td>      
        <td><a href='#'> edit </a><a href=" . Helper::htmlRoute('Category', 'destroy') . "&id=$category->id> delete </a></td>

    </tr>";
            }
            ?>
        </table>
    </div>
</main>
<?php
require_once(view_path . '/layouts/footer.php');
?>