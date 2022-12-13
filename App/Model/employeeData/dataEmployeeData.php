<?php

namespace Staditek\App\Model\employeeData;

use Staditek\App\config\Database;

class dataEmployeeData extends Database
{
  public function employeeData()
  {
    $statement = self::$conn->prepare("select * from employees_data");
    $statement->execute();
    return $statement->fetchAll(\PDO::FETCH_OBJ);
  }

  public function findEmployeeData($id_employee)
  {
    $statement = self::$conn->prepare("select * from employees_data where id_employee=$id_employee");
    $statement->execute();
    return $statement->fetch(\PDO::FETCH_OBJ);
  }



  public function saveEmployeeData($data)
  {
    $statement = self::$conn->prepare("INSERT INTO employees_data(employee_name,employee_address,employee_telp, employee_as, created_at, updated_at)
    values
    (
    :employee_name,
    :employee_address,
    :employee_telp,
    :employee_as,
    :created_at,
    :updated_at)
    ");
    die(var_dump($statement->execute($data)));
    return $statement->execute($data);
  }

  public function updateEmployeeData($data, $id_employee)
  {
    $statement = self::$conn->prepare("UPDATE employees_data
    SET
    employee_name=:employee_name,
    employee_address=:employee_address,
    employee_telp=:employee_telp,
    employee_as=:employee_as,
    updated_at=:updated_at
    where id_employee =$id_employee
    ");
    die(var_dump($statement->execute($data)));
    return $statement->execute($data);
  }

  public function deleteEmployeeData($id_employee)
  {
    $statement = self::$conn->prepare("DELETE FROM employees_data where id_employee=$id_employee");
    die(var_dump($statement->execute()));
    $statement->execute();
  }
}
