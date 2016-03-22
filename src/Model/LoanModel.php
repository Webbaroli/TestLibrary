<?php


namespace Src\Model;

use Src\Database\DatabaseManager;

class LoanModel
{
    public function getLoanList(){
        $conn = DatabaseManager::getConnection();

        $stmt = $conn->prepare("
          SELECT *
          FROM `loan`
        ");

        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
    public function getLoan($id){
        $conn = DatabaseManager::getConnection();

        $stmt = $conn->prepare("
          SELECT *
          FROM `loan`
          WHERE id = :id
        ");
        $stmt->bindParam(':id',$id);

        $stmt->execute();

        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public function insertLoan($userId, $bookId){
        $conn = DatabaseManager::getConnection();

        $stmt = $conn->prepare("
          INSERT
          INTO `loan`
          (`user_id`, `book_id`)
          VALUES (:user_id, :book_id);

        ");
        $stmt->bindParam(':user_id', $userId);
        $stmt->bindParam(':book_id', $bookId);

        $stmt->execute();

        if($stmt->rowCount() == 0){
            throw new \Exception();
        }

    }

    public function endLoan($id){
        $conn = DatabaseManager::getConnection();

        $stmt = $conn->prepare("
            UPDATE `loan`
            SET loan_end = CURRENT_TIMESTAMP
            WHERE id = :id
        ");
        $stmt->bindParam(':id',$id);

        $stmt->execute();

        if($stmt->rowCount() == 0){
            throw new \Exception();
        }
    }
}