<?php

namespace Staditek\App\Controller\cars;

use Staditek\App\Core\Router;
use Staditek\App\Core\View;
use Staditek\App\Model\cars\dataCars;

class CarsController
{
  private static $model;
  public function __construct()
  {
    self::$model = new dataCars();
  }
  public function cars()
  {
    $tampiDatalCars = self::$model->cars();
    echo json_encode($tampiDatalCars = self::$model->cars());
    die();
    View::render('cars/Cars', $tampiDatalCars);
  }

  public function viewOneCars($id_cars)
  {
    $OneCars = self::$model->findCars($id_cars);
    echo json_encode($tampiDatalCars = self::$model->cars());
    die();
    View::render('cars/editCars', $OneCars);
  }

  public function addCarsDisplay()
  {
    View::render('cars/addCars');
  }
  public function saveAddCars()
  {
    $saveCars = [
      'brand_car' => "CHEVROLET",
      'series_car' => "CV1",
      'car_price' => 20000,
      'car_stock' => 7,
      'created_at' => '2022-13-12 14:19:10',
      'updated_at' => null
    ];
    // var_dump($saveCars, "data cars");
    print_r(self::$model->saveCars($saveCars));

    // self::$model->saveCars($saveCars);
    // var_dump(self::$model->saveCars($saveCars));
    // die();
    // Router::redirect('GITHUB/CARDEALER-MINIFRAMEWORK/Public/cars');
  }

  public function updateAddCars($id_cars)
  {
    // $updateCars = [
    //   'brand_car' => $_POST['brand_car'],
    //   'series_car' => $_POST['series_car'],
    //   'cars_price' => $_POST['cars_price'],
    //   'cars_stock' => $_POST['cars_stock'],
    //   'updated_at' => $_POST['updated_at']
    // ];
    $updateCars2 = [
      'brand_car' => "CHEVROLET",
      'series_car' => "CV2",
      'car_price' => 2100000000,
      'car_stock' => 5,
      'updated_at' => '2022-13-12 14:19:10'
    ];
    self::$model->updateCars($updateCars2, $id_cars);
    // echo json_encode(self::$model->updateCars($updateCars, $id_cars));
    // die();
    Router::redirect('GITHUB/CARDEALER-MINIFRAMEWORK/Public/cars');
  }

  public function deleteCars($id_cars)
  {
    self::$model->deleteCars($id_cars);
    var_dump(self::$model->deleteCars($id_cars));
    die();
    Router::redirect('GITHUB/CARDEALER-MINIFRAMEWORK/Public/cars');
  }
}
