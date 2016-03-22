<?php


namespace Src\Model;

use Src\Database\DatabaseManager;

class BookModel
{
    public function getBookList(){
        $conn = DatabaseManager::getConnection();

        $stmt = $conn->prepare("
          SELECT *
          FROM `book`
        ");

        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
    public function getBook($id){
        $conn = DatabaseManager::getConnection();

        $stmt = $conn->prepare("
          SELECT *
          FROM `book`
          WHERE id = :id
        ");
        $stmt->bindParam(':id',$id);

        $stmt->execute();

        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public function insertBook($title, $isbn){
        $conn = DatabaseManager::getConnection();

        $stmt = $conn->prepare("
          INSERT
          INTO `book`
          (`title`, `isbn`)
          VALUES (:title, :isbn);

        ");
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':isbn', $isbn);

        $stmt->execute();

        if($stmt->rowCount() == 0){
            throw new \Exception();
        }

    }

    public function updateBook($id, $title, $isbn){
        $conn = DatabaseManager::getConnection();

        $stmt = $conn->prepare("
            UPDATE `book`
            SET title = :title , isbn = :isbn
            WHERE id = :id
        ");
        $stmt->bindParam(':id',$id);
        $stmt->bindParam(':title',$title);
        $stmt->bindParam(':isbn',$isbn);

        $stmt->execute();

        if($stmt->rowCount() == 0){
            throw new \Exception();
        }
    }

    public function deleteBook($id){
        $conn = DatabaseManager::getConnection();

        $stmt = $conn->prepare("
          DELETE
          FROM `book`
          WHERE `id`= :id
        ");
        $stmt->bindParam(':id', $id);

        $stmt->execute();

        if($stmt->rowCount() == 0){
            throw new \Exception();
        }
    }
}