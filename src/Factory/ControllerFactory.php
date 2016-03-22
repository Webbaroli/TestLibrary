<?php

namespace Src\Factory;


use Src\Controller\ShowUserListController;

class ControllerFactory
{

    public static function getController(){
        $controller = new ShowUserListController();

        if(isset($_REQUEST['action'])) {
            switch ($_REQUEST['action']) {
                case 'showContactList': $controller = new ShowUserListController(); break;
            }
        }

        return $controller;
    }

}