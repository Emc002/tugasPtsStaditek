<?php

namespace Staditek\App\Model\guestBuyer;

use Staditek\App\config\Database;

class dataGuestBuyer extends Database
{
  public function guestBuyer()
  {
    $statement = self::$conn->prepare("select * from guest_buyer");
    $statement->execute();
    return $statement->fetchAll(\PDO::FETCH_OBJ);
  }

  public function findGuestBuyer($id_guest)
  {
    $statement = self::$conn->prepare("select * from guest_buyer where id_guest=$id_guest");
    $statement->execute();
    return $statement->fetch(\PDO::FETCH_OBJ);
  }

  public function saveGuestBuyer($data)
  {
    $statement = self::$conn->prepare("INSERT INTO guest_buyer(guest_name,guest_address,guest_telp, guest_email, created_at, updated_at)
    values
    (
    :guest_name,
    :guest_address,
    :guest_telp,
    :guest_email,
    :created_at,
    :updated_at)
    ");
    die(var_dump($statement->execute($data)));
    return $statement->execute($data);
  }

  public function updateGuestBuyer($data, $id_guest)
  {
    $statement = self::$conn->prepare("UPDATE guest_buyer
    SET
    guest_name=:guest_name,
    guest_address=:guest_address,
    guest_telp=:guest_telp,
    guest_email=:guest_email,
    updated_at=:updated_at
    where id_guest =$id_guest
    ");
    die(var_dump($statement->execute($data)));
    return $statement->execute($data);
  }

  public function deleteGuestBuyer($id_guest)
  {
    $statement = self::$conn->prepare("DELETE FROM guest_buyer where id_guest=$id_guest");
    die(var_dump($statement->execute()));
    $statement->execute();
  }
}
