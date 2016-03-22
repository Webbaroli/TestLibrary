<?php


namespace Src\View;

class ShowUserListView
{

    public function render($userList){

        if(count($userList) > 0){
            echo "<table style=\"width:100%\">";

            echo $this->getTableHeader();

            foreach($userList as $user){
                echo $this->getTableRow($user['id'], $user['name'], $user['email']);
            }

            echo "</table>";
        }else{
            echo "empty table!";
        }

        echo "<br>";
        echo "<br>";

        echo "<a href=\"index.php?action=showInsertContactForm\">insert new contact</a>";
    }

    private function getTableHeader(){
        $string = <<<STRING
        <tr>
            <th>name</th>
            <th>email</th>
            <th>action</th>
        </tr>
STRING;
        return $string;
    }

    private function getTableRow($id, $name, $email){
        $string = "
            <tr>
                <td>".$name."</td>
                <td>".$email."</td>
                <td>
                    <a href=\"index.php?action=showUpdateContactForm&id=".$id."\">update</a>
                    <a href=\"index.php?action=deleteContact&id=".$id."\">delete</a>
                </td>
            </tr>";
        return $string;
    }

}