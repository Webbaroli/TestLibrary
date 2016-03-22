<?php


namespace Src\Controller;

use Src\Model\UserModel;
use Src\View\ShowUserListView;

class ShowUserListController
{

    public function processRequest(){
        $userModel = new UserModel();
        $userList = $userModel->getUserList();

        $view = new ShowUserListView();
        $view->render($userList);
    }

}