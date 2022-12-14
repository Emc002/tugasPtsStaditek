<?php

namespace Staditek\App\Controller\confirmItem;

use Staditek\App\Core\Router;
use Staditek\App\Core\View;
use Staditek\App\Model\confirmItem\dataConfirmItem;

class ConfirmItemController
{
  private static $model;
  public function __construct()
  {
    self::$model = new dataConfirmItem();
  }
  public function confirmItem()
  {
    $tampiDatalConfirmItem = self::$model->confirmItem();
    echo json_encode($tampiDatalConfirmItem = self::$model->confirmItem());
    die();
    View::render('confirmItem/Manager', $tampiDatalConfirmItem);
  }

  public function viewOneConfirmItem($id_confirm_item)
  {
    $OneConfirmItem = self::$model->findConfirmItem($id_confirm_item);
    echo json_encode($OneConfirmItem = self::$model->findConfirmItem($id_confirm_item));
    die();
    View::render('confirmItem/editManager', $OneConfirmItem);
  }

  public function addConfirmItemDisplay()
  {
    View::render('confirmItem/addCars');
  }


  public function saveAddConfirmItem()
  {
    $saveConfirmItem = [
      'id_shipment' => 1,
      'date_confirm' => "2022-12-12 15:43:53",
      'created_at' => '2022-12-12 15:43:53',
      'updated_at' => null
    ];
    print_r(self::$model->saveConfirmItem($saveConfirmItem));
  }

  public function updateAddConfirmItem($id_confirm_item)
  {
    $updateConfirmItem = [
      'id_shipment' => 1,
      'date_confirm' => "2022-12-16 15:43:53",
      'updated_at' => '2022-12-16 14:19:10'
    ];
    self::$model->updateConfirmItem($updateConfirmItem, $id_confirm_item);
    die();
    Router::redirect('GITHUB/CARDEALER-MINIFRAMEWORK/Public/confirmItem');
  }

  public function deleteConfirmItem($id_confirm_item)
  {
    self::$model->deleteConfirmItem($id_confirm_item);
    var_dump(self::$model->deleteConfirmItem($id_confirm_item));
    die();
    Router::redirect('GITHUB/CARDEALER-MINIFRAMEWORK/Public/confirmItem');
  }
}
