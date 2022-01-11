<?php

header("Content-Type: application/json");

ini_set("display_errors", 0);

/*
 * Potrebujeme $_GET parametr, ktery nam reknce, zda-li chceme vystup jako json, pole nebo objekty
 */
$pattern = "/^json$|^obj$|^arr$/";
if( ! isset($_GET["format"]) || preg_match($pattern, $_GET["format"]) == 0) {
	echo "FUCK YOU";
	exit;
}

$rootPath = $_SERVER["DOCUMENT_ROOT"];
require_once $rootPath . "/t/tridy/ticketCollection.php";

$format = $_GET["format"];

$db_server = "192.168.89.3";
$db_port  = 3306;
$db_charset = "utf8mb4";
$db_pass = "VS0lBuHrwFBsGa4f";
$db_user = "ped_databazor";
$db_name = "ped_ticket";

$pdo_p = "mysql:host={$db_server};port={$db_port};dbname={$db_name};charset={$db_charset}";

$pdo = new PDO($pdo_p, $db_user, $db_pass, NULL);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "SELECT * FROM ticket";

$query = $pdo->prepare($sql);
$query->execute();
$result = $query->fetchAll(PDO::FETCH_OBJ);

if($format == "json") {
	echo json_encode($result);
} elseif($format == "obj") {
	$retVal = new TicketCollection($result);
	var_dump ($retVal);
	return $result;
} elseif($format == "arr") {
        
	return $result;
}

?>
