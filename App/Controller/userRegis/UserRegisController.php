<?php

namespace Staditek\App\Controller\userRegis;

use Staditek\App\Core\Router;
use Staditek\App\Core\View;
use Staditek\App\Model\userregis\dataUserRegis;

class UserRegisController
{
  private static $model;
  public function __construct()
  {
    self::$model = new dataUserRegis();
  }
  public function userRegis()
  {
    $tampiDatalUserRegis = self::$model->userregis();
    echo json_encode($tampiDatalUserRegis = self::$model->userregis());
    die();
    View::render('manager/Manager', $tampiDatalUserRegis);
  }

  public function viewOneUserRegis($id_user_regis)
  {
    $OneUserRegis = self::$model->findUserRegis($id_user_regis);
    echo json_encode($OneUserRegis = self::$model->findUserRegis($id_user_regis));
    die();
    View::render('manager/editManager', $OneUserRegis);
  }

  public function addUserRegisDisplay()
  {
    View::render('cars/addCars');
  }
  public function saveAddUserRegis()
  {
    $saveUserRegis = [
      'nik' => "33221547898665851",
      'full_name' => "ALIF NAFIS ALGHANY",
      'address' => "BINTARO, TANGSEL",
      'phone' => 123412134,
      'gender' => "male",
      'born_date' => "2001-26-09",
      'nationality' => "WNI",
      'created_at' => '2022-12-12 15:43:53',
      'updated_at' => null
    ];
    print_r(self::$model->saveUserRegis($saveUserRegis));
  }

  public function updateAddUserRegis($id_user_regis)
  {
    // $updateCars = [
    //   'brand_car' => $_POST['brand_car'],
    //   'series_car' => $_POST['series_car'],
    //   'cars_price' => $_POST['cars_price'],
    //   'cars_stock' => $_POST['cars_stock'],
    //   'updated_at' => $_POST['updated_at']
    // ];
    $updateUserRegis = [
      'nik' => "33221547898665851",
      'full_name' => "NICOLA",
      'address' => "CROATIA",
      'phone' => 369369369,
      'gender' => "male",
      'born_date' => "1856-10-07",
      'nationality' => "WNA",
      'updated_at' => '2022-13-12 14:19:10'
    ];
    self::$model->updateUserRegis($updateUserRegis, $id_user_regis);
    // echo json_encode(self::$model->updateCars($updateCars, $id_cars));
    die();
    Router::redirect('GITHUB/CARDEALER-MINIFRAMEWORK/Public/manager');
  }

  public function deleteUserRegis($id_user_regis)
  {
    self::$model->deleteUserRegis($id_user_regis);
    var_dump(self::$model->deleteUserRegis($id_user_regis));
    die();
    Router::redirect('GITHUB/CARDEALER-MINIFRAMEWORK/Public/manager');
  }
}
