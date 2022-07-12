<?php
require(view_path . 'layouts/header.php');
?>
<main>
    <form method="post" action="index.php?controller=Meal&action=store">
        <label for="name">name:</label>
        <input type="text" name="name" id="name"> <br>

        <label for="price">price:</label>
        <input type="number" name="price" id="price"> <br>

        <label for="size">size: </label></br>
        <input type="radio" name="size" value="S" id="size" checked>small
        <input type="radio" name="size" value="M" id="size">meduim
        <input type="radio" name="size" value="F" id="size">family <br>

        <label for="size">size: </label></br>
        <input type="number" name="categoryID" value="1" >

        <label for="note">Note:</label><br>
        <textarea id="note" name=note cols=30 rows=3>    </textarea> <br>
        <div class="button">
            <input type="submit" value="add">
            <input type="reset" value="Cancel">
        </div>
    </form>
</main>

<?php
require(view_path . 'layouts/footer.php');
?>