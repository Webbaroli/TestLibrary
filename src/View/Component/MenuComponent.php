<?php


namespace Src\View\Component;


class MenuComponent
{
    public function render(){
        echo "<a href='index.php?action=showUserList'>Users</a> ";
        echo "<a href='index.php?action=showBookList'>Books</a> ";
        echo "<a href='index.php?action=showLoanList'>Loans</a> ";
        echo "<br><br>";
    }

}