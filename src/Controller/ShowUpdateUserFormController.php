<?php


namespace Src\Controller;

use Src\Model\ContactListModel;
use Src\Model\ContactModel;
use Src\Model\UserModel;
use Src\View\ShowContactListView;
use Src\View\ShowUpdateContactFormView;
use Src\View\ShowUpdateUserFormView;

class ShowUpdateUserFormController
{

    public function processRequest(){
        if(isset($_REQUEST['id'])){
            $userId = $_REQUEST['id'];
        }else{
            header("Location: index.php");
            die();
        }

        $userModel = new UserModel();
        $user = $userModel->getUser($userId);

        $view = new ShowUpdateUserFormView();
        $view->render($user);
    }

}