<?php
require_once('include/database.php');
class Meal
{
    public $id;
    public $name;
    public $price;
    public $size;
    public $categoryID;
    public $note;

    public function __construct($id ,$name, $price, $size, $note, $categoryID)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->size = $size;
        $this->note = $note;
        $this->categoryID = $categoryID;
    }

    public static function all()
    {
        $allMeals = [];
        $sql = "select * from meals";
        $db = Database::getInstance();
        $query_result =  $db->query($sql);
        while ($row = $query_result->fetch_assoc()) {
            $allMeals[] = new Meal(
                $row['id'],
                $row['name'],
                $row['price'],
                $row['size'],
                $row['note'],
                $row['category-id']
            );
        }
        return $allMeals;
    }

    public static function add(Meal $meal)
    {
        $sql = "INSERT INTO meals ( name, price, size, note, `category-id`)
                        VALUES ('$meal->name', $meal->price,'$meal->size',  '$meal->note',$meal->categoryID )";
        $db = Database::getInstance();
        $result = $db->query($sql);
        if ($result)
            return  $db->affected_rows;
        else
            die("Error in executing " .
                "<br> sql= $sql");
    }
    public static function delete($id)
    {
        $sql = "delete from meals where id = $id";
        $db = Database::getInstance();
        $result = $db->query($sql);
        if ($result)
            return  $db->affected_rows;
        else
            die("Error in executing " .
                "<br> sql= $sql");
    }
}
