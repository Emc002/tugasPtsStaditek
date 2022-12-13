<?php

namespace Staditek\App\Model\paymentConfirmation;

use Staditek\App\config\Database;

class dataPaymentConfirmation extends Database
{
  public function paymentConfirmation()
  {
    $statement = self::$conn->prepare("select * from payment_confirmation");
    $statement->execute();
    return $statement->fetchAll(\PDO::FETCH_OBJ);
  }

  public function findPaymentConfirmation($id_payment_confirmation)
  {
    $statement = self::$conn->prepare("select * from payment_confirmation where id_payment_confirmation=$id_payment_confirmation");
    $statement->execute();
    return $statement->fetch(\PDO::FETCH_OBJ);
  }

  public function savePaymentConfirmation($data)
  {
    $statement = self::$conn->prepare("INSERT INTO payment_confirmation(id_employees_account,id_online_payment, date_confirmation, created_at, updated_at)
    values
    (
    :id_employees_account,
    :id_online_payment,
    :date_confirmation,
    :created_at,
    :updated_at)
    ");
    die(var_dump($statement->execute($data)));
    return $statement->execute($data);
  }

  public function updatePaymentConfirmation($data, $id_payment_confirmation)
  {

    $statement = self::$conn->prepare("UPDATE payment_confirmation
    SET
    id_employees_account=:id_employees_account,
    id_online_payment=:id_online_payment,
    date_confirmation=:date_confirmation,
    updated_at=:updated_at
    where id_payment_confirmation =$id_payment_confirmation
    ");
    die(var_dump($statement->execute($data)));
    return $statement->execute($data);
  }

  public function deletePaymentConfirmation($id_payment_confirmation)
  {
    $statement = self::$conn->prepare("DELETE FROM payment_confirmation where id_payment_confirmation=$id_payment_confirmation");
    die(var_dump($statement->execute()));
    $statement->execute();
  }
}
