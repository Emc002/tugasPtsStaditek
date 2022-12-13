<?php

namespace Staditek\App\Model\manager;

use Staditek\App\config\Database;

class dataManager extends Database
{
  public function manager()
  {
    $statement = self::$conn->prepare("select * from manager");
    $statement->execute();
    return $statement->fetchAll(\PDO::FETCH_OBJ);
  }

  public function findManager($id_manager)
  {
    $statement = self::$conn->prepare("select * from manager where id_manager=$id_manager");
    $statement->execute();
    return $statement->fetch(\PDO::FETCH_OBJ);
  }

  public function saveManager($data)
  {
    $statement = self::$conn->prepare("INSERT INTO manager(username,email,avatar, password, created_at, updated_at)
    values
    (
    :username,
    :email,
    :avatar,
    :password,
    :created_at,
    :updated_at)
    ");
    die(var_dump($statement->execute($data)));
    return $statement->execute($data);
  }

  public function updateManager($data, $id_manager)
  {
    $statement = self::$conn->prepare("UPDATE manager
    SET
    username=:username,
    email=:email,
    avatar=:avatar,
    password=:password,
    updated_at=:updated_at
    where id_manager =$id_manager
    ");
    die(var_dump($statement->execute($data)));
    return $statement->execute($data);
  }

  public function deleteManager($id_manager)
  {
    $statement = self::$conn->prepare("DELETE FROM manager where id_manager=$id_manager");
    die(var_dump($statement->execute()));
    $statement->execute();
  }
}
