<?php


namespace Src\View;


use Src\View\Component\MenuComponent;

class ShowUpdateUserFormView
{

    public function render($contact){
        $menuComponent = new MenuComponent();
        $menuComponent->render();

        echo $this->getUpdateUserForm($contact['id'], $contact['name'], $contact['email']);

        echo "<br><br>";
        echo "<a href=\"index.php\">back</a>";
    }

    private function getUpdateUserForm($id, $name, $email){
        $string = "
         <form action=\"index.php\">
          Name:<br>
          <input type=\"text\" name=\"name\" value=\"".$name."\"><br>
          Email:<br>
          <input type=\"text\" name=\"email\" value=\"".$email."\"><br>
          <input type=\"hidden\" name=\"id\" value=\"".$id."\">
          <input type=\"hidden\" name=\"action\" value=\"updateUser\">
          <input type=\"submit\" name=\"submit\" value=\"Submit\">
        </form>
        ";
        return $string;
    }
}