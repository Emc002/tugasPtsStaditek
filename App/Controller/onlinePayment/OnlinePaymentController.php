<?php

namespace Staditek\App\Controller\onlinePayment;

use Staditek\App\Core\Router;
use Staditek\App\Core\View;
use Staditek\App\Model\onlinePayment\dataOnlinePayment;

class OnlinePaymentController
{
  private static $model;
  public function __construct()
  {
    self::$model = new dataOnlinePayment();
  }
  public function onlinePayment()
  {
    $tampiDatalUserRegis = self::$model->onlinePayment();
    echo json_encode($tampiDatalUserRegis = self::$model->onlinePayment());
    die();
    View::render('onlinePaymnet/onlinePaymnet', $tampiDatalUserRegis);
  }

  public function viewOneOnlinePayment($id_payment)
  {
    $OneUserRegis = self::$model->findOnlinePayment($id_payment);
    echo json_encode($OneUserRegis = self::$model->findOnlinePayment($id_payment));
    die();
    View::render('onlinePaymnet/editOnlinePaymnet', $OneUserRegis);
  }

  public function addOnlinePaymentDisplay()
  {
    View::render('cars/addCars');
  }
  public function saveAddOnlinePayment()
  {
    $saveOnlinePayment = [
      'id_user_account' => 1,
      'id_cars' => 3,
      'number_bank_account' => "1175879685",
      'shipment_address' => "JAKARTA SELATAN",
      'shipment_price' => 2500000,
      'total_payment' => 1902500000,
      'payment_date' => "2022-12-12 15:43:53",
      'created_at' => '2022-12-12 15:43:53',
      'updated_at' => null
    ];
    // var_dump($saveCars, "data cars");
    print_r(self::$model->saveOnlinePayment($saveOnlinePayment));

    // self::$model->saveCars($saveCars);
    // var_dump(self::$model->saveCars($saveCars));
    // die();
    // Router::redirect('GITHUB/CARDEALER-MINIFRAMEWORK/Public/cars');
  }

  public function updateAddOnlinePayment($id_payment)
  {
    // $updateCars = [
    //   'brand_car' => $_POST['brand_car'],
    //   'series_car' => $_POST['series_car'],
    //   'cars_price' => $_POST['cars_price'],
    //   'cars_stock' => $_POST['cars_stock'],
    //   'updated_at' => $_POST['updated_at']
    // ];
    $updateOnlinePayment = [
      'id_user_account' => 1,
      'id_cars' => 4,
      'number_bank_account' => "1175879685",
      'shipment_address' => "JAKARTA BARAT",
      'shipment_price' => 2500000,
      'total_payment' => 2102500000,
      'payment_date' => "2022-12-12 15:43:53",
      'updated_at' => '2022-12-12 14:19:10'
    ];
    self::$model->updateOnlinePayment($updateOnlinePayment, $id_payment);
    // echo json_encode(self::$model->updateCars($updateCars, $id_cars));
    die();
    Router::redirect('GITHUB/CARDEALER-MINIFRAMEWORK/Public/onlinePaymnet');
  }

  public function deleteOnlinePayment($id_payment)
  {
    self::$model->deleteOnlinePayment($id_payment);
    var_dump(self::$model->deleteOnlinePayment($id_payment));
    die();
    Router::redirect('GITHUB/CARDEALER-MINIFRAMEWORK/Public/onlinePaymnet');
  }
}
