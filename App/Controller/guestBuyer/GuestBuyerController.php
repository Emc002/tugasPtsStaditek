<?php

namespace Staditek\App\Controller\guestBuyer;

use Staditek\App\Core\Router;
use Staditek\App\Core\View;
use Staditek\App\Model\guestBuyer\dataGuestBuyer;

class GuestBuyerController
{
  private static $model;
  public function __construct()
  {
    self::$model = new dataGuestBuyer();
  }
  public function guestBuyer()
  {
    $tampiDatalGuestBuyer = self::$model->guestBuyer();
    echo json_encode($tampiDatalGuestBuyer = self::$model->guestBuyer());
    die();
    View::render('guestBuyer/Manager', $tampiDatalGuestBuyer);
  }

  public function viewOneGuestBuyer($id_guest)
  {
    $OneGuestBuyer = self::$model->findGuestBuyer($id_guest);
    echo json_encode($OneGuestBuyer = self::$model->findGuestBuyer($id_guest));
    die();
    View::render('guestBuyer/editManager', $OneGuestBuyer);
  }

  public function addGuestBuyerDisplay()
  {
    View::render('guestBuyer/addGuestBuyer');
  }
  public function saveAddGuestBuyer()
  {
    $saveGuestBuyer = [
      'guest_name' => "HERACLITUS",
      'guest_address' => "ATHENA",
      'guest_telp' => 2558796025,
      'guest_email' => "heraclitus@gmail.com",
      'created_at' => '2022-12-13 11:11:11',
      'updated_at' => null
    ];
    // var_dump($saveCars, "data cars");
    print_r(self::$model->saveGuestBuyer($saveGuestBuyer));

    // self::$model->saveCars($saveCars);
    // var_dump(self::$model->saveCars($saveCars));
    // die();
    // Router::redirect('GITHUB/CARDEALER-MINIFRAMEWORK/Public/cars');
  }

  public function updateAddGuestBuyer($id_guest)
  {
    // $updateCars = [
    //   'brand_car' => $_POST['brand_car'],
    //   'series_car' => $_POST['series_car'],
    //   'cars_price' => $_POST['cars_price'],
    //   'cars_stock' => $_POST['cars_stock'],
    //   'updated_at' => $_POST['updated_at']
    // ];
    $updateGuestBuyer = [
      'guest_name' => "Camus",
      'guest_address' => "USA",
      'guest_telp' => 12548965876,
      'guest_email' => "Camus@gmail.com",
      'updated_at' => '2022-12-14 22:22:22'
    ];
    self::$model->updateGuestBuyer($updateGuestBuyer, $id_guest);
    // echo json_encode(self::$model->updateCars($updateCars, $id_cars));
    die();
    Router::redirect('GITHUB/CARDEALER-MINIFRAMEWORK/Public/guestBuyer');
  }

  public function deleteGuestBuyer($id_guest)
  {
    self::$model->deleteGuestBuyer($id_guest);
    var_dump(self::$model->deleteGuestBuyer($id_guest));
    die();
    Router::redirect('GITHUB/CARDEALER-MINIFRAMEWORK/Public/guestBuyer');
  }
}
