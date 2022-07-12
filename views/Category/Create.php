<?php
require(view_path . 'layouts/header.php');
?>
<main>
    <form method="post" action="<?php echo Helper::htmlRoute('Category' , 'store'); ?>">
        <label for="name">name:</label>
        <input type="text" name="name" id="name"> <br>
       
        <div class="button">
            <input type="submit" value="add">
            <input type="reset" value="Cancel">
        </div>
    </form>
</main>

<?php
require(view_path . 'layouts/footer.php');
?>