<?php
declare(strict_types = 1);

namespace App;

require_once("src/Utils/debug.php");
require_once("src/view.php");

const DEFAULT_ACTION = "list";

$action = $_GET["action"] ?? DEFAULT_ACTION;

$view = new View();

$vievParams = [];
if($action === "create"){
    $vievParams["resultCreate"] = "udalo sie";
}
else{
    $vievParams["resultList"] = "wyswietlamy notatki";
}

$view->render($action, $vievParams);







