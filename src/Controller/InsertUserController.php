<?php


namespace Src\Controller;

use Src\Model\ContactListModel;
use Src\Model\ContactModel;
use Src\Model\UserModel;
use Src\View\ShowContactListView;

class InsertUserController
{

    public function processRequest(){
        if(isset($_REQUEST['name']) && isset($_REQUEST['email'])){
            $userModel = new UserModel();
            try{
                $userModel->insertUser($_REQUEST['name'], $_REQUEST['email']);
            }catch(\Exception $e){
            }
        }

        header("Location: index.php");
        die();
    }

}