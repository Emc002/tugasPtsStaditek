<?php

namespace Staditek\App\Model\userregis;

use Staditek\App\config\Database;

class dataUserRegis extends Database
{
  public function userRegis()
  {
    $statement = self::$conn->prepare("select * from user_regis");
    $statement->execute();
    return $statement->fetchAll(\PDO::FETCH_OBJ);
  }

  public function findUserRegis($id_user_regis)
  {
    $statement = self::$conn->prepare("select * from user_regis where id_user_regis=$id_user_regis");
    $statement->execute();
    return $statement->fetch(\PDO::FETCH_OBJ);
  }

  public function saveUserRegis($data)
  {
    $statement = self::$conn->prepare("INSERT INTO user_regis(nik,full_name,address, phone, gender, born_date, nationality, created_at, updated_at)
    values
    (
    :nik,
    :full_name,
    :address,
    :phone,
    :gender,
    :born_date,
    :nationality,
    :created_at,
    :updated_at)
    ");
    die(var_dump($statement->execute($data)));
    return $statement->execute($data);
  }

  public function updateUserRegis($data, $id_user_regis)
  {
    $statement = self::$conn->prepare("UPDATE user_regis
    SET
    nik=:nik,
    full_name=:full_name,
    address=:address,
    phone=:phone,
    gender=:gender,
    born_date=:born_date,
    nationality=:nationality,
    updated_at=:updated_at
    where id_user_regis =$id_user_regis
    ");
    die(var_dump($statement->execute($data)));
    return $statement->execute($data);
  }

  public function deleteUserRegis($id_user_regis)
  {
    $statement = self::$conn->prepare("DELETE FROM user_regis where id_user_regis=$id_user_regis");
    die(var_dump($statement->execute()));
    $statement->execute();
  }
}
