<?php

namespace Staditek\App\Controller\deliveryStatus;

use Staditek\App\Core\Router;
use Staditek\App\Core\View;
use Staditek\App\Model\deliveryStatus\dataDeliveryStatus;

class DeliveryStatusController
{
  private static $model;
  public function __construct()
  {
    self::$model = new dataDeliveryStatus();
  }
  public function deliveryStatus()
  {
    $tampiDatalManager = self::$model->deliveryStatus();
    echo json_encode($tampiDatalManager = self::$model->deliveryStatus());
    die();
    View::render('deliveryStatus/Manager', $tampiDatalManager);
  }

  public function viewOneDeliveryStatus($id_delivery)
  {
    $OneManager = self::$model->findDeliveryStatus($id_delivery);
    echo json_encode($OneManager = self::$model->findDeliveryStatus($id_delivery));
    die();
    View::render('deliveryStatus/editManager', $OneManager);
  }

  public function addDeliveryStatusDisplay()
  {
    View::render('deliveryStatus/addDeliveryStatus');
  }


  public function saveAddDeliveryStatus()
  {
    $saveDeliveryStatus = [
      'id_shipment' => 1,
      'id_confirm_item_arrived' => 1,
      'created_at' => '2022-12-12 15:43:53',
      'updated_at' => null
    ];
    print_r(self::$model->saveDeliveryStatus($saveDeliveryStatus));
  }

  public function updateAddDeliveryStatus($id_delivery)
  {
    $updateDeliveryStatus = [
      'id_shipment' => 1,
      'id_confirm_item_arrived' => 1,
      'updated_at' => '2022-12-17 11:11:11'
    ];
    self::$model->updateDeliveryStatus($updateDeliveryStatus, $id_delivery);
    die();
    Router::redirect('GITHUB/CARDEALER-MINIFRAMEWORK/Public/deliveryStatus');
  }

  public function deleteDeliveryStatus($id_delivery)
  {
    self::$model->deleteDeliveryStatus($id_delivery);
    var_dump(self::$model->deleteDeliveryStatus($id_delivery));
    die();
    Router::redirect('GITHUB/CARDEALER-MINIFRAMEWORK/Public/deliveryStatus');
  }
}
