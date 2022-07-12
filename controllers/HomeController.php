<?php
class HomeController {
  public function index()
  {
    require_once(view_path . 'Home/index.php');  
  }  
  public function error()
    {
        require_once(view_path . 'Home/error.php');
    }
}
?>