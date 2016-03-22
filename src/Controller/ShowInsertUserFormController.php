<?php


namespace Src\Controller;

use Src\Model\ContactListModel;
use Src\View\ShowContactListView;
use Src\View\ShowInsertContactFormView;
use Src\View\ShowInsertUserFormView;

class ShowInsertUserFormController
{

    public function processRequest(){
        $view = new ShowInsertUserFormView();
        $view->render();
    }

}