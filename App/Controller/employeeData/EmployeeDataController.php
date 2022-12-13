<?php

namespace Staditek\App\Controller\employeeData;

use Staditek\App\Core\Router;
use Staditek\App\Core\View;
use Staditek\App\Model\employeeData\dataEmployeeData;

class EmployeeDataController
{
  private static $model;
  public function __construct()
  {
    self::$model = new dataEmployeeData();
  }
  public function employeeData()
  {
    $tampiDatalEmployeeData = self::$model->employeeData();
    echo json_encode($tampiDatalEmployeeData = self::$model->employeeData());
    die();
    View::render('employeeData/EmployeeData', $tampiDatalEmployeeData);
  }

  public function viewOneEmployeeData($id_employee)
  {
    $OneEmployeeData = self::$model->findEmployeeData($id_employee);
    echo json_encode($OneEmployeeData = self::$model->findEmployeeData($id_employee));
    die();
    View::render('employeeData/editEmployeeData', $OneEmployeeData);
  }

  public function addEmployeeDataDisplay()
  {
    View::render('cars/addCars');
  }
  public function saveAddEmployeeData()
  {
    $saveEmployeeData = [
      'employee_name' => "THOMAS",
      'employee_address' => "USA",
      'employee_telp' => "0879654852",
      'employee_as' => "sales",
      'created_at' => '2022-12-12 15:43:53',
      'updated_at' => null
    ];
    // var_dump($saveCars, "data cars");
    print_r(self::$model->saveEmployeeData($saveEmployeeData));

    // self::$model->saveCars($saveCars);
    // var_dump(self::$model->saveCars($saveCars));
    // die();
    // Router::redirect('GITHUB/CARDEALER-MINIFRAMEWORK/Public/cars');
  }

  public function updateAddEmployeeData($id_employee)
  {
    // $updateCars = [
    //   'brand_car' => $_POST['brand_car'],
    //   'series_car' => $_POST['series_car'],
    //   'cars_price' => $_POST['cars_price'],
    //   'cars_stock' => $_POST['cars_stock'],
    //   'updated_at' => $_POST['updated_at']
    // ];
    $updateEmployeeData = [
      'employee_name' => "EDISON",
      'employee_address' => "USA",
      'employee_telp' => "099965899",
      'employee_as' => "shipment",
      'updated_at' => '2022-16-12 14:19:10'
    ];
    self::$model->updateEmployeeData($updateEmployeeData, $id_employee);
    // echo json_encode(self::$model->updateCars($updateCars, $id_cars));
    die();
    Router::redirect('GITHUB/CARDEALER-MINIFRAMEWORK/Public/employeeData');
  }

  public function deleteEmployeeData($id_employee)
  {
    self::$model->deleteEmployeeData($id_employee);
    var_dump(self::$model->deleteEmployeeData($id_employee));
    die();
    Router::redirect('GITHUB/CARDEALER-MINIFRAMEWORK/Public/employeeData');
  }
}
