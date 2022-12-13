<?php

namespace Staditek\App\Model\confirmItem;

use Staditek\App\config\Database;

class dataConfirmItem extends Database
{
  public function confirmItem()
  {
    $statement = self::$conn->prepare("select * from confirm_item_recieve");
    $statement->execute();
    return $statement->fetchAll(\PDO::FETCH_OBJ);
  }

  public function findConfirmItem($id_confirm_item)
  {
    $statement = self::$conn->prepare("select * from confirm_item_recieve where id_confirm_item=$id_confirm_item");
    $statement->execute();
    return $statement->fetch(\PDO::FETCH_OBJ);
  }

  public function saveConfirmItem($data)
  {
    $statement = self::$conn->prepare("INSERT INTO confirm_item_recieve(id_shipment,date_confirm, created_at, updated_at)
    values
    (
    :id_shipment,
    :date_confirm,
    :created_at,
    :updated_at)
    ");
    die(var_dump($statement->execute($data)));
    return $statement->execute($data);
  }

  public function updateConfirmItem($data, $id_confirm_item)
  {
    $statement = self::$conn->prepare("UPDATE confirm_item_recieve
    SET
    id_shipment=:id_shipment,
    date_confirm=:date_confirm,
    updated_at=:updated_at
    where id_confirm_item =$id_confirm_item
    ");
    die(var_dump($statement->execute($data)));
    return $statement->execute($data);
  }

  public function deleteConfirmItem($id_confirm_item)
  {
    $statement = self::$conn->prepare("DELETE FROM confirm_item_recieve where id_confirm_item=$id_confirm_item");
    die(var_dump($statement->execute()));
    $statement->execute();
  }
}
