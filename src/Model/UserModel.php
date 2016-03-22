<?php


namespace Src\Model;

use Src\Database\DatabaseManager;

class UserModel
{
    public function getUserList(){
        $conn = DatabaseManager::getConnection();

        $stmt = $conn->prepare("
          SELECT *
          FROM `user`
        ");

        $stmt->execute();

        $list =  $stmt->fetchAll(\PDO::FETCH_ASSOC);

        return $list;
    }
    public function getUser($id){
        $conn = DatabaseManager::getConnection();

        $stmt = $conn->prepare("
          SELECT *
          FROM `user`
          WHERE id = :id
        ");
        $stmt->bindParam(':id',$id);

        $stmt->execute();

        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public function insertUser($name, $email){
        $conn = DatabaseManager::getConnection();

        $stmt = $conn->prepare("
          INSERT
          INTO `user`
          (`name`, `email`)
          VALUES (:name, :email);

        ");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);

        $stmt->execute();

        if($stmt->rowCount() == 0){
            throw new \Exception();
        }

    }

    public function updateUser($id, $name, $email){
        $conn = DatabaseManager::getConnection();

        $stmt = $conn->prepare("
            UPDATE `user`
            SET name = :name , email = :email
            WHERE id = :id
        ");
        $stmt->bindParam(':id',$id);
        $stmt->bindParam(':name',$name);
        $stmt->bindParam(':email',$email);

        $stmt->execute();

        if($stmt->rowCount() == 0){
            throw new \Exception();
        }
    }

    public function deleteUser($id){
        $conn = DatabaseManager::getConnection();

        $stmt = $conn->prepare("
          DELETE
          FROM `user`
          WHERE `id`= :id
        ");
        $stmt->bindParam(':id', $id);

        $stmt->execute();

        if($stmt->rowCount() == 0){
            throw new \Exception();
        }
    }
}