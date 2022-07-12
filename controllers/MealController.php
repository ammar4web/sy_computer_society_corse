<?php
class MealController
{
    public function __construct()
    {
        require_once('Models/Meal.php');
    }

    public function index()
    {
        $meals = Meal::all();
        require_once('views/meal/index.php');
    }

    public function Create()
    {
        include_once(view_path . 'Meal/create.php');
    }

    public function store()
    {
        include_once('Models/Meal.php');
        $meal = new Meal(null, $_POST['name'], $_POST['price'], $_POST['size'], $_POST['note'], $_POST['categoryID']);
        $count = Meal::add($meal);
        if ($count == 1)
            Helper::redirect('Meal', 'index');
        else
            Helper::redirect('Home', 'error');
    }

    public function destroy()
    {
        $id = $_GET['id'];
        include_once('Models/Meal.php');
        $count = Meal::delete($id);
        if ($count == 1)
            Helper::redirect('Meal', 'index');
        else
            Helper::redirect('Home', 'error');
    }
}
