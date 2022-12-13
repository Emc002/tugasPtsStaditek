<?php

namespace Staditek\App\Controller\manager;

use Staditek\App\Core\Router;
use Staditek\App\Core\View;
use Staditek\App\Model\manager\dataManager;

class ManagerController
{
  private static $model;
  public function __construct()
  {
    self::$model = new dataManager();
  }
  public function manager()
  {
    $tampiDatalManager = self::$model->manager();
    echo json_encode($tampiDatalManager = self::$model->manager());
    die();
    View::render('manager/Manager', $tampiDatalManager);
  }

  public function viewOneManager($id_manager)
  {
    $OneManager = self::$model->findManager($id_manager);
    echo json_encode($OneManager = self::$model->findManager($id_manager));
    die();
    View::render('manager/editManager', $OneManager);
  }

  public function addManagerDisplay()
  {
    View::render('cars/addCars');
  }


  public function saveAddManager()
  {
    $saveManager = [
      'username' => "ALIF NAFIS",
      'email' => "alif@gmail.com",
      'avatar' => "//upload.wikimedia.org/wikipedia/commons/thumb/a/ab/Abraham_Lincoln_O-77_matte_collodion_print.jpg/220px-Abraham_Lincoln_O-77_matte_collodion_print.jpg",
      'password' =>  password_hash("alif", PASSWORD_DEFAULT),
      'created_at' => '2022-12-12 15:43:53',
      'updated_at' => null
    ];
    print_r(self::$model->saveManager($saveManager));
  }

  public function updateAddManager($id_manager)
  {
    $updateManger = [
      'username' => "ALGHANY",
      'email' => "alghany@gmail.com",
      'avatar' => "//upload.wikimedia.org/wikipedia/commons/thumb/a/ab/Abraham_Lincoln_O-77_matte_collodion_print.jpg/220px-Abraham_Lincoln_O-77_matte_collodion_print.jpg",
      'password' =>  password_hash("alghany", PASSWORD_DEFAULT),
      'updated_at' => '2022-14-12 14:19:10'
    ];
    self::$model->updateManager($updateManger, $id_manager);
    die();
    Router::redirect('GITHUB/CARDEALER-MINIFRAMEWORK/Public/manager');
  }

  public function deleteManager($id_manager)
  {
    self::$model->deleteManager($id_manager);
    var_dump(self::$model->deleteManager($id_manager));
    die();
    Router::redirect('GITHUB/CARDEALER-MINIFRAMEWORK/Public/manager');
  }
}
