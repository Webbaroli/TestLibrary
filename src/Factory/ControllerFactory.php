<?php

namespace Src\Factory;


use Src\Controller\InsertUserController;
use Src\Controller\ShowBookListController;
use Src\Controller\ShowInsertUserFormController;
use Src\Controller\ShowUpdateUserFormController;
use Src\Controller\ShowUserListController;
use Src\Controller\UpdateUserController;

class ControllerFactory
{

    public static function getController(){
        $controller = new ShowUserListController();

        if(isset($_REQUEST['action'])) {
            switch ($_REQUEST['action']) {
                //user
                case 'showContactList': $controller = new ShowUserListController(); break;
                case 'showInsertUserForm': $controller = new ShowInsertUserFormController(); break;
                case 'insertUser': $controller = new InsertUserController(); break;
                case 'showUpdateUserForm': $controller = new ShowUpdateUserFormController(); break;
                case 'updateUser': $controller = new UpdateUserController(); break;
                //book
                case 'showBookList': $controller = new ShowBookListController(); break;
                //loan
            }
        }

        return $controller;
    }

}