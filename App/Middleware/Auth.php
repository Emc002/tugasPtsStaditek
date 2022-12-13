<?php 

namespace Staditek\App\Middleware;

use Staditek\App\Core\Router;

class Auth
{
  function before(): void
  {
    if ($_SESSION['auth'] == null)
    {
      Router::redirect('GITHUB/LIBRARY-FRAMEWORK2/Public/login');
    }
  }
}