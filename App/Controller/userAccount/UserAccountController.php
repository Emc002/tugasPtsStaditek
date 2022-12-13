<?php

namespace Staditek\App\Controller\userAccount;

use Staditek\App\Core\Router;
use Staditek\App\Core\View;
use Staditek\App\Model\useraccount\dataUserAccount;

class UserAccountController
{
  private static $model;
  public function __construct()
  {
    self::$model = new dataUserAccount();
  }
  public function userAccount()
  {
    $tampiDatalUserAccount = self::$model->userAccount();
    echo json_encode($tampiDatalUserAccount = self::$model->userAccount());
    die();
    View::render('useraccount/UserAccount', $tampiDatalUserAccount);
  }

  public function viewOneUserAccount($id_user_account)
  {
    $OneUserAccount = self::$model->findUserAccount($id_user_account);
    echo json_encode($OneUserAccount = self::$model->findUserAccount($id_user_account));
    die();
    View::render('useraccount/editUserAccount', $OneUserAccount);
  }

  public function addUserAccountDisplay()
  {
    View::render('useraccount/addUserAccount');
  }
  public function saveAddUserAccount()
  {
    $saveUserAccount = [
      'id_user_regis' => "5",
      'email' => "nicola@gmail.com",
      'avatar' => "//upload.wikimedia.org/wikipedia/commons/thumb/7/79/Tesla_circa_1890.jpeg/220px-Tesla_circa_1890.jpeg",
      'password' =>  password_hash("nicola", PASSWORD_DEFAULT),
      'created_at' => '2022-12-12 15:43:53',
      'updated_at' => null
    ];

    self::$model->saveUserAccount($saveUserAccount);
    // Router::redirect('GITHUB/CARDEALER-MINIFRAMEWORK/Public/useraccount');
  }

  public function updateAddUserAccount($id_user_account)
  {
    // $updateCars = [
    //   'brand_car' => $_POST['brand_car'],
    //   'series_car' => $_POST['series_car'],
    //   'cars_price' => $_POST['cars_price'],
    //   'cars_stock' => $_POST['cars_stock'],
    //   'updated_at' => $_POST['updated_at']
    // ];
    $updateUserAccount = [
      'id_user_regis' => "5",
      'email' => "tesla@gmail.com",
      'avatar' => "//upload.wikimedia.org/wikipedia/commons/thumb/7/79/Tesla_circa_1890.jpeg/220px-Tesla_circa_1890.jpeg",
      'password' =>  password_hash("tesla", PASSWORD_DEFAULT),
      'updated_at' => '2022-15-12 21:43:53',
    ];
    self::$model->updateUserAccount($updateUserAccount, $id_user_account);
    // echo json_encode(self::$model->updateCars($updateCars, $id_cars));
    die();
    Router::redirect('GITHUB/CARDEALER-MINIFRAMEWORK/Public/useraccount');
  }

  public function deleteUserAccount($id_user_account)
  {
    self::$model->deleteUserAccount($id_user_account);
    var_dump(self::$model->deleteUserAccount($id_user_account));
    die();
    Router::redirect('GITHUB/CARDEALER-MINIFRAMEWORK/Public/useraccount');
  }
}
