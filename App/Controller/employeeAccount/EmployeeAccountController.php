<?php

namespace Staditek\App\Controller\employeeAccount;

use Staditek\App\Core\Router;
use Staditek\App\Core\View;
use Staditek\App\Model\employeeAccount\dataEmployeeAccount;

class EmployeeAccountController
{
  private static $model;
  public function __construct()
  {
    self::$model = new dataEmployeeAccount();
  }
  public function employeeAccount()
  {
    $tampiDatalEmployeeAccount = self::$model->employeeAccount();
    echo json_encode($tampiDatalEmployeeAccount = self::$model->employeeAccount());
    die();
    View::render('useraccount/UserAccount', $tampiDatalEmployeeAccount);
  }

  public function viewOneEmployeeAccount($id_employee_account)
  {
    $OneEmployeeAccount = self::$model->findEmployeeAccount($id_employee_account);
    echo json_encode($OneEmployeeAccount = self::$model->findEmployeeAccount($id_employee_account));
    die();
    View::render('useraccount/editUserAccount', $OneEmployeeAccount);
  }

  public function addEmployeeAccountDisplay()
  {
    View::render('useraccount/addUserAccount');
  }
  public function saveAddEmployeeAccount()
  {
    $saveEmployeeAccount = [
      'id_employe_data' => "3",
      'email' => "Thomas@gmail.com",
      'avatar' => "//upload.wikimedia.org/wikipedia/commons/thumb/7/79/Tesla_circa_1890.jpeg/220px-Tesla_circa_1890.jpeg",
      'password' =>  password_hash("thomas", PASSWORD_DEFAULT),
      'created_at' => '2022-12-12 15:43:53',
      'updated_at' => null
    ];
    self::$model->saveEmployeeAccount($saveEmployeeAccount);
  }

  public function updateAddEmployeeAccount($id_employee_account)
  {
    $updateEmployeeAccount = [
      'id_employe_data' => "3",
      'email' => "edison@gmail.com",
      'avatar' => "//upload.wikimedia.org/wikipedia/commons/thumb/9/9d/Thomas_Edison2.jpg/220px-Thomas_Edison2.jpg",
      'password' =>  password_hash("edison", PASSWORD_DEFAULT),
      'updated_at' => '2022-15-12 21:43:53',
    ];
    self::$model->updateEmployeeAccount($updateEmployeeAccount, $id_employee_account);
    die();
    Router::redirect('GITHUB/CARDEALER-MINIFRAMEWORK/Public/useraccount');
  }

  public function deleteEmployeeAccount($id_employe_account)
  {
    self::$model->deleteEmployeeAccount($id_employe_account);
    var_dump(self::$model->deleteEmployeeAccount($id_employe_account));
    die();
    Router::redirect('GITHUB/CARDEALER-MINIFRAMEWORK/Public/useraccount');
  }
}
