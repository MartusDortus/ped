<?php

ini_set("display_errors", 1);

$rootPath = $_SERVER["DOCUMENT_ROOT"];

var_dump(require($rootPath."/t/get.php"));

require_once($rootPath."/view/ticketDetail.phtml");
