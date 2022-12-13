<?php

namespace Staditek\App\Model\shipment;

use Staditek\App\config\Database;

class dataShipment extends Database
{
  public function shipment()
  {
    $statement = self::$conn->prepare("select * from shipment");
    $statement->execute();
    return $statement->fetchAll(\PDO::FETCH_OBJ);
  }

  public function findShipment($id_shipment)
  {
    $statement = self::$conn->prepare("select * from shipment where id_shipment=$id_shipment");
    $statement->execute();
    return $statement->fetch(\PDO::FETCH_OBJ);
  }

  public function saveShipment($data)
  {
    $statement = self::$conn->prepare("INSERT INTO shipment(id_employe_account,id_payment_confirmation,shipment_date, estimated_time, created_at, updated_at)
    values
    (
    :id_employe_account,
    :id_payment_confirmation,
    :shipment_date,
    :estimated_time,
    :created_at,
    :updated_at)
    ");
    die(var_dump($statement->execute($data)));
    return $statement->execute($data);
  }

  public function updateShipment($data, $id_shipment)
  {

    $statement = self::$conn->prepare("UPDATE shipment
    SET
    id_employe_account=:id_employe_account,
    id_payment_confirmation=:id_payment_confirmation,
    shipment_date=:shipment_date,
    estimated_time=:estimated_time,
    updated_at=:updated_at
    where id_shipment =$id_shipment
    ");
    die(var_dump($statement->execute($data)));
    return $statement->execute($data);
  }

  public function deleteShipment($id_shipment)
  {
    $statement = self::$conn->prepare("DELETE FROM shipment where id_shipment=$id_shipment");
    die(var_dump($statement->execute()));
    $statement->execute();
  }
}
