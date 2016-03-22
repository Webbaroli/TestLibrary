<?php


namespace Src\View;


use Src\View\Component\MenuComponent;

class ShowInsertUserFormView
{

    public function render(){
        $menuComponent = new MenuComponent();
        $menuComponent->render();

        echo $this->getInsertUserForm();

        echo "<br><br>";
        echo "<a href=\"index.php\">back</a>";
    }

    private function getInsertUSerForm(){
        $string = "
         <form action=\"index.php\">
          Name:<br>
          <input type=\"text\" name=\"name\"><br>
          Email:<br>
          <input type=\"text\" name=\"email\"><br>
          <input type=\"hidden\" name=\"action\" value=\"insertUser\">
          <input type=\"submit\" name=\"submit\" value=\"Submit\">
        </form>
        ";
        return $string;
    }
}