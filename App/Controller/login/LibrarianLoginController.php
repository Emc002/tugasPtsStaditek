<?php 

namespace Staditek\App\Controller\login;

use Staditek\App\Core\Router;
use Staditek\App\Core\View;
use Staditek\App\Model\librarian\dataLibrarian;

class LibrarianLoginController{


  private static $model;
  public function __construct()
  {
    self::$model= new dataLibrarian();
  }
  public function login(){
    View::renderLogin('login');
  }

  public function logout(){
   session_destroy();
   View::renderLogin('login');
  }
  public function postLogin()
  {
    $user = self::$model->findEmail($_POST['email']);
    if($user &&  $user->password){
      $_SESSION['auth'] = $user;

      Router::redirect('GITHUB/LIBRARY-FRAMEWORK2/Public/librarian');
      return;
    }

    Router::redirect('GITHUB/LIBRARY-FRAMEWORK2/Public/login');
  }

  // password_verify($_POST['password'],
}
