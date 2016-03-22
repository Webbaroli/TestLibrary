<?php

require_once '../vendor/autoload.php';

$controller = \Src\Factory\ControllerFactory::getController();

\Src\Helper\ViewHelper::renderHtmlTopPart();

$controller->processRequest();

\Src\Helper\ViewHelper::renderHtmlBottomPart();
