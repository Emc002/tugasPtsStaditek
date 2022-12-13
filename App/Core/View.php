<?php 
namespace Staditek\App\Core;
class View{
  public static function render(string $view, $data = [], $data1 = [])
  {
    require_once __DIR__. '/../View/template/header.php';
    require_once __DIR__. '/../View/template/sidebarleft.php';
    require_once __DIR__. '/../View/'.$view.'.php';
    require_once __DIR__. '/../View/template/footer.php';
  }
    public static function renderRegistration(string $view, $data)
  {
    // die(var_dump($data));
    require_once __DIR__. '/../View/header.php';
    require_once __DIR__. '/../View/'.$view.'.php';
    require_once __DIR__. '/../View/footer.php';
  }

  public static function renderLogin(string $view)
  {
    // die(var_dump($data));
    require_once __DIR__. '/../View/template/headerLogin.php';
    require_once __DIR__. '/../View/'.$view.'.php';
    require_once __DIR__. '/../View/template/footer.php';
  } 

  
}