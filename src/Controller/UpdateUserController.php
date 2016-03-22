<?php


namespace Src\Controller;

use Src\Model\UserModel;

class UpdateUserController
{

    public function processRequest(){
        if(isset($_REQUEST['id']) && isset($_REQUEST['name']) && isset($_REQUEST['email'])){
            $userModel = new UserModel();
            try {
                $userModel->updateUser($_REQUEST['id'], $_REQUEST['name'], $_REQUEST['email']);
            }catch (\Exception $e){
            }
        }

        header("Location: index.php");
        die();
    }

}