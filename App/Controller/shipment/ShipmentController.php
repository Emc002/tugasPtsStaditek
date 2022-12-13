<?php

namespace Staditek\App\Controller\shipment;

use Staditek\App\Core\Router;
use Staditek\App\Core\View;
use Staditek\App\Model\shipment\dataShipment;

class ShipmentController
{
  private static $model;
  public function __construct()
  {
    self::$model = new dataShipment();
  }
  public function shipment()
  {
    $tampiDatalShipment = self::$model->shipment();
    echo json_encode($tampiDatalShipment = self::$model->shipment());
    die();
    View::render('shipment/Shipment', $tampiDatalShipment);
  }

  public function viewOneShipment($id_shipment)
  {
    $OneShipment = self::$model->findShipment($id_shipment);
    echo json_encode($OneShipment = self::$model->findShipment($id_shipment));
    die();
    View::render('shipment/editShipment', $OneShipment);
  }

  public function addShipmentDisplay()
  {
    View::render('shipment/addShipment');
  }


  public function saveAddShipment()
  {
    $saveShipment = [
      'id_employe_account' => 2,
      'id_payment_confirmation' => 1,
      'shipment_date' => "2022-12-12 15:43:53",
      'estimated_time' => 3,
      'created_at' => '2022-12-12 15:43:53',
      'updated_at' => null
    ];
    // var_dump($saveCars, "data cars");
    print_r(self::$model->saveShipment($saveShipment));

    // self::$model->saveCars($saveCars);
    // var_dump(self::$model->saveCars($saveCars));
    // die();
    // Router::redirect('GITHUB/CARDEALER-MINIFRAMEWORK/Public/cars');
  }

  public function updateAddShipment($id_shipment)
  {
    // $updateCars = [
    //   'brand_car' => $_POST['brand_car'],
    //   'series_car' => $_POST['series_car'],
    //   'cars_price' => $_POST['cars_price'],
    //   'cars_stock' => $_POST['cars_stock'],
    //   'updated_at' => $_POST['updated_at']
    // ];
    $updateShipment = [
      'id_employe_account' => 2,
      'id_payment_confirmation' => 1,
      'shipment_date' => "2025-12-12 15:43:53",
      'estimated_time' => 5,
      'updated_at' => '2022-13-12 14:19:10'
    ];
    self::$model->updateShipment($updateShipment, $id_shipment);
    // echo json_encode(self::$model->updateCars($updateCars, $id_cars));
    die();
    Router::redirect('GITHUB/CARDEALER-MINIFRAMEWORK/Public/shipment');
  }

  public function deleteShipment($id_shipment)
  {
    self::$model->deleteShipment($id_shipment);
    var_dump(self::$model->deleteShipment($id_shipment));
    die();
    Router::redirect('GITHUB/CARDEALER-MINIFRAMEWORK/Public/shipment');
  }
}
