<?php

namespace Staditek\App\Controller\paymentConfirmation;

use Staditek\App\Core\Router;
use Staditek\App\Core\View;
use Staditek\App\Model\paymentConfirmation\dataPaymentConfirmation;

class PaymentConfirmationController
{
  private static $model;
  public function __construct()
  {
    self::$model = new dataPaymentConfirmation();
  }
  public function paymentConfirmation()
  {
    $tampiDatalPaymentConfirmation = self::$model->paymentConfirmation();
    echo json_encode($tampiDatalPaymentConfirmation = self::$model->paymentConfirmation());
    die();
    View::render('paymentConfirmation/PaymentConfirmation', $tampiDatalPaymentConfirmation);
  }

  public function viewOnePaymentConfirmation($id_payment_confirmation)
  {
    $OnePaymentConfirmation = self::$model->findPaymentConfirmation($id_payment_confirmation);
    echo json_encode($OnePaymentConfirmation = self::$model->findPaymentConfirmation($id_payment_confirmation));
    die();
    View::render('paymentConfirmation/editPaymentConfirmation', $OnePaymentConfirmation);
  }

  public function addPaymentConfirmationDisplay()
  {
    View::render('paymentConfirmation/addPaymentConfirmation');
  }


  public function saveAddPaymentConfirmation()
  {
    $savePaymentConfirmation = [
      'id_employees_account' => 2,
      'id_online_payment' => 1,
      'date_confirmation' => "2023-12-12 15:43:53",
      'created_at' => '2025-12-12 15:43:53',
      'updated_at' => null
    ];
    // var_dump($saveCars, "data cars");
    print_r(self::$model->savePaymentConfirmation($savePaymentConfirmation));

    // self::$model->saveCars($saveCars);
    // var_dump(self::$model->saveCars($saveCars));
    // die();
    // Router::redirect('GITHUB/CARDEALER-MINIFRAMEWORK/Public/cars');
  }

  public function updateAddPaymentConfirmation($id_payment_confirmation)
  {
    // $updateCars = [
    //   'brand_car' => $_POST['brand_car'],
    //   'series_car' => $_POST['series_car'],
    //   'cars_price' => $_POST['cars_price'],
    //   'cars_stock' => $_POST['cars_stock'],
    //   'updated_at' => $_POST['updated_at']
    // ];
    $updatePaymentConfirmation = [
      'id_employees_account' => 2,
      'id_online_payment' => 1,
      'date_confirmation' => "2025-12-17 15:43:53",
      'updated_at' => '2022-12-13 14:19:10'
    ];
    self::$model->updatePaymentConfirmation($updatePaymentConfirmation, $id_payment_confirmation);
    // echo json_encode(self::$model->updateCars($updateCars, $id_cars));
    die();
    Router::redirect('GITHUB/CARDEALER-MINIFRAMEWORK/Public/paymentConfirmation');
  }

  public function deletePaymentConfirmation($id_payment_confirmation)
  {
    self::$model->deletePaymentConfirmation($id_payment_confirmation);
    var_dump(self::$model->deletePaymentConfirmation($id_payment_confirmation));
    die();
    Router::redirect('GITHUB/CARDEALER-MINIFRAMEWORK/Public/paymentConfirmation');
  }
}
