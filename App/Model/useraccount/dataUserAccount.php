<?php

namespace Staditek\App\Model\useraccount;

use Staditek\App\config\Database;

class dataUserAccount extends Database
{
  public function userAccount()
  {
    $statement = self::$conn->prepare("select * from user_account");
    $statement->execute();
    return $statement->fetchAll(\PDO::FETCH_OBJ);
  }

  public function findUserAccount($id_user_account)
  {
    $statement = self::$conn->prepare("select * from user_account where id_user_account=$id_user_account");
    $statement->execute();
    return $statement->fetch(\PDO::FETCH_OBJ);
  }

  public function saveUserAccount($data)
  {
    $statement = self::$conn->prepare("INSERT INTO user_account(id_user_regis,email,avatar, password, created_at, updated_at)
    values
    (
    :id_user_regis,
    :email,
    :avatar,
    :password,
    :created_at,
    :updated_at)
    ");
    die(var_dump($statement->execute($data)));
    return $statement->execute($data);
  }

  public function updateUserAccount($data, $id_user_account)
  {
    $statement = self::$conn->prepare("UPDATE user_account
    SET
    id_user_regis=:id_user_regis,
    email=:email,
    avatar=:avatar,
    password=:password,
    updated_at=:updated_at
    where id_user_account =$id_user_account
    ");
    die(var_dump($statement->execute($data)));
    return $statement->execute($data);
  }

  public function deleteUserAccount($id_user_account)
  {
    $statement = self::$conn->prepare("DELETE FROM user_account where id_user_account=$id_user_account");
    die(var_dump($statement->execute()));
    $statement->execute();
  }
}
