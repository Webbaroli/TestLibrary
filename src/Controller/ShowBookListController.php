<?php


namespace Src\Controller;

use Src\Model\BookModel;
use Src\Model\UserModel;
use Src\View\ShowBookListView;
use Src\View\ShowUserListView;

class ShowBookListController
{

    public function processRequest(){
        $bookModel = new BookModel();
        $bookList = $bookModel->getBookList();

        $view = new ShowBookListView();
        $view->render($bookList);
    }

}