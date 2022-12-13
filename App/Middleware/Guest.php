<?php 

namespace Staditek\App\Middleware;
error_reporting(0);
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
use Staditek\App\Core\Router;

class Guest
{
  function before(): void
  {
    if ($_SESSION['auth'])
    {
      Router::redirect('GITHUB/LIBRARY-FRAMEWORK2/Public/librarian');
    }
  }
}