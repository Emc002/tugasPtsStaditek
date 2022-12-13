<?php

namespace Staditek\App\Model\employeeAccount;

use Staditek\App\config\Database;

class dataEmployeeAccount extends Database
{
  public function employeeAccount()
  {
    $statement = self::$conn->prepare("select * from employees_account");
    $statement->execute();
    return $statement->fetchAll(\PDO::FETCH_OBJ);
  }

  public function findEmployeeAccount($id_employee_account)
  {
    $statement = self::$conn->prepare("select * from employees_account where id_employee_account=$id_employee_account");
    $statement->execute();
    return $statement->fetch(\PDO::FETCH_OBJ);
  }

  public function saveEmployeeAccount($data)
  {
    $statement = self::$conn->prepare("INSERT INTO employees_account(id_employe_data,avatar, email, password, created_at, updated_at)
    values
    (
    :id_employe_data,
    :avatar,
    :email,
    :password,
    :created_at,
    :updated_at)
    ");
    die(var_dump($statement->execute($data)));
    return $statement->execute($data);
  }

  public function updateEmployeeAccount($data, $id_employe_account)
  {
    $statement = self::$conn->prepare("UPDATE employees_account
    SET
    id_employe_data=:id_employe_data,
    avatar=:avatar,
    email=:email,
    password=:password,
    updated_at=:updated_at
    where id_employe_account =$id_employe_account
    ");
    die(var_dump($statement->execute($data)));
    return $statement->execute($data);
  }

  public function deleteEmployeeAccount($id_employe_account)
  {
    $statement = self::$conn->prepare("DELETE FROM employees_account where id_employe_account=$id_employe_account");
    die(var_dump($statement->execute()));
    $statement->execute();
  }
}
