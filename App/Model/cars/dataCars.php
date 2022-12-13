<?php

namespace Staditek\App\Model\cars;

use Staditek\App\config\Database;

class dataCars extends Database
{
  public function cars()
  {
    $statement = self::$conn->prepare("select * from cars");
    $statement->execute();
    return $statement->fetchAll(\PDO::FETCH_OBJ);
  }

  public function findCars($id_cars)
  {
    $statement = self::$conn->prepare("select * from cars where id_cars=$id_cars");
    $statement->execute();
    return $statement->fetch(\PDO::FETCH_OBJ);
  }

  public function saveCars($data)
  {
    $statement = self::$conn->prepare('INSERT INTO cars (brand_car, series_car, car_price, car_stock, created_at, updated_at) VALUES
    (
    :brand_car,
    :series_car,
    :car_price,
    :car_stock,
    :created_at,
    :updated_at
    )');
    print_r($data);
    return $statement->execute($data);
  }

  public function updateCars($data, $id_cars)
  {

    $statement = self::$conn->prepare("UPDATE cars
    SET
    brand_car=:brand_car,
    series_car=:series_car,
    car_price=:car_price,
    car_stock=:car_stock,
    updated_at=:updated_at
    where id_cars =$id_cars
    ");
    die(var_dump($statement->execute($data), "UPDATE SUCCESS"));
    return $statement->execute($data);
  }

  public function deleteCars($id_cars)
  {
    $statement = self::$conn->prepare("DELETE FROM cars where id_cars=$id_cars");
    $statement->execute();
  }
}
