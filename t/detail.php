<?php

/**
 * Vrati data k ticketu v zadanem formatu
 */

include $_SERVER["DOCUMENT_ROOT"] . "/t/tridy/ticket.php";

header("Content-Type: application/json");

ini_set("display_errors", 1);

$db_server = "192.168.89.3";
$db_port  = 3306;
$db_charset = "utf8mb4";
$db_pass = "VS0lBuHrwFBsGa4f";
$db_user = "ped_databazor";
$db_name = "ped_ticket";

/*
 *	TODO	Osetrit, ze $_GET["idt"] bude prirozene cislo
 */
if(!isset($_GET["idt"])) {
	echo "FUCK YOU";
	exit;
}
if(!isset($_GET["format"])) {
	echo "FUCK YOU 2";
	exit;
}

$idt = $_GET["idt"];	// parent ticket ID
$format = $_GET["format"];
$result = array();

$pdo_p = "mysql:host={$db_server};port={$db_port};dbname={$db_name};charset={$db_charset}";

$pdo = new PDO($pdo_p, $db_user, $db_pass, NULL);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//	Nacteni "hlavicky" ticketu
$sql = "SELECT * FROM ticket WHERE id_t = " . $idt;

$query = $pdo->prepare($sql);
$query->execute();
$fetch = $query->fetchAll(PDO::FETCH_OBJ);
$result["parent"] = array_shift($fetch);

//	Nacteni poznamek v ticketu
$sql = "SELECT * FROM notes WHERE parent = " . $idt;

$query = $pdo->prepare($sql);
$query->execute();
$result["notes"] = $query->fetchAll(PDO::FETCH_OBJ);

$t = new ticket($result["parent"]);
$t->notes($result["notes"]);

switch ($format) {
	case 'json':
		outputJson($t);
		break;
	case 'phpobj':
		outputPhpobj($t);
		break;
	default:
		echo "FUCK YOU 2.1"; exit;
		break;
}

function outputJson($t) {
	/**
	 * TODO:	Nejde prevest do JSONu primo objekt ? 
	 */
	echo json_encode((array) $t);
}

function outputPhpobj($t) {
	return $t;
}

?>