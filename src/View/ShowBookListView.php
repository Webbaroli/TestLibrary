<?php


namespace Src\View;

use Src\View\Component\MenuComponent;

class ShowBookListView
{

    public function render($bookList){

        $menuComponent = new MenuComponent();
        $menuComponent->render();

        if(count($bookList) > 0){
            echo "<table style=\"width:100%\">";

            echo $this->getTableHeader();

            foreach($bookList as $book){
                echo $this->getTableRow($book['id'], $book['title'], $book['isbn']);
            }

            echo "</table>";
        }else{
            echo "empty table!";
        }

        echo "<br>";
        echo "<br>";

        echo "<a href=\"index.php?action=showInsertBookForm\">insert new book</a>";
    }

    private function getTableHeader(){
        $string = <<<STRING
        <tr>
            <th>title</th>
            <th>isbn</th>
            <th>action</th>
        </tr>
STRING;
        return $string;
    }

    private function getTableRow($id, $title, $isbn){
        $string = "
            <tr>
                <td>".$title."</td>
                <td>".$isbn."</td>
                <td>
                    <a href=\"index.php?action=showUpdateBookForm&id=".$id."\">update</a>
                </td>
            </tr>";
        return $string;
    }

}