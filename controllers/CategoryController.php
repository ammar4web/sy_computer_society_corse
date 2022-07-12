<?php
class CategoryController
{

    public function __construct()
    {
        require_once('Models/Category.php');
    }

    public function index()
    {
        $categories = Category::all();
        // Helper::view('category/index');
        require_once(view_path . 'category/index.php');
    }

    public function Create()
    {
        // Helper::view('category/create');
        include_once(view_path . 'Category/create.php');
    }

    public function store()
    {
        $category = new Category();
        $category->name = $_POST['name'];
        $count = $category->add();
        if ($count == 1)
            Helper::redirect('Category', 'index');
        else
            Helper::redirect('Home', 'error');
    }

    public function destroy()
    {
        $category = new Category();
        $category->id = $_GET['id'];
        $count = $category->delete();
        if ($count == 1)
            Helper::redirect('Category', 'index');
        else
            Helper::redirect('Home', 'error');
    }
}
