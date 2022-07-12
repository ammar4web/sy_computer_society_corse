<?php
require_once('include/database.php');
class Category
{
    public $id;
    public $name;

    public static function all()
    {
        $allMeals = [];
        $sql = "select * from categories";
        $db = Database::getInstance();
        $query_result =  $db->query($sql);
        while ($row = $query_result->fetch_assoc()) {
            $category = new Category();
            $category->id =  $row['id'];
            $category->name =  $row['name'];           
            $allMeals[] =$category;                     
        }
        return $allMeals;
    }

    public function add()
    {
        $sql = "INSERT INTO categories ( name)
                        VALUES ('$this->name')";
        $db = Database::getInstance();
        $result = $db->query($sql);
        if ($result)
            return  $db->affected_rows;
        else
            die("Error in executing " .
                "<br> sql= $sql");
    }
    public function delete()
    {
        $sql = "delete from categorIES where id = $this->id";
        $db = Database::getInstance();
        $result = $db->query($sql);
        if ($result)
            return  $db->affected_rows;
        else
            die("Error in executing " .
                "<br> sql= $sql");
    }
}
