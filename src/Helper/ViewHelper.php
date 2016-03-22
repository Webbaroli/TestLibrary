<?php


namespace Src\Helper;


class ViewHelper
{

    public static function renderHtmlTopPart(){
        $string= <<<TEXT
<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
TEXT;
        echo $string;
    }

    public static function renderHtmlBottomPart(){
        $string= <<<TEXT

    </body>
</html>
TEXT;
        echo $string;
    }

}