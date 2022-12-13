<?php

namespace Staditek\App\Model\deliveryStatus;

use Staditek\App\config\Database;

class dataDeliveryStatus extends Database
{
  public function deliveryStatus()
  {
    $statement = self::$conn->prepare("select * from delivery_status");
    $statement->execute();
    return $statement->fetchAll(\PDO::FETCH_OBJ);
  }

  public function findDeliveryStatus($id_delivery)
  {
    $statement = self::$conn->prepare("select * from delivery_status where id_delivery=$id_delivery");
    $statement->execute();
    return $statement->fetch(\PDO::FETCH_OBJ);
  }

  public function saveDeliveryStatus($data)
  {
    $statement = self::$conn->prepare("INSERT INTO delivery_status(id_shipment,id_confirm_item_arrived, created_at, updated_at)
    values
    (
    :id_shipment,
    :id_confirm_item_arrived,
    :created_at,
    :updated_at)
    ");
    die(var_dump($statement->execute($data)));
    return $statement->execute($data);
  }

  public function updateDeliveryStatus($data, $id_delivery)
  {
    $statement = self::$conn->prepare("UPDATE delivery_status
    SET
    id_shipment=:id_shipment,
    id_confirm_item_arrived=:id_confirm_item_arrived,
    updated_at=:updated_at
    where id_delivery =$id_delivery
    ");
    die(var_dump($statement->execute($data)));
    return $statement->execute($data);
  }

  public function deleteDeliveryStatus($id_delivery)
  {
    $statement = self::$conn->prepare("DELETE FROM delivery_status where id_delivery=$id_delivery");
    die(var_dump($statement->execute()));
    $statement->execute();
  }
}
