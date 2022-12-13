<?php 

namespace Staditek\App\Core;

class ViewLogin
{
  public static function renderLogin(string $view)
  {
    // die(var_dump($data));
    require_once __DIR__. '/../View/template/headerLogin.php';
    require_once __DIR__. '/../View/'.$view.'.php';
    require_once __DIR__. '/../View/template/footer.php';
  } 
}