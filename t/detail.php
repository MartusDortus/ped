<?php

header("Content-Type: application/json");

ini_set("display_errors", 0);

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

$idt = $_GET["idt"];	// parent ticket ID
$result = array();

$pdo_p = "mysql:host={$db_server};port={$db_port};dbname={$db_name};charset={$db_charset}";

$pdo = new PDO($pdo_p, $db_user, $db_pass, NULL);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//	Nacteni "hlavicky" ticketu

$sql = "SELECT * FROM ticket WHERE id_t = " . $idt;

$query = $pdo->prepare($sql);
$query->execute();
$result["parent"] = array_shift($query->fetchAll(PDO::FETCH_OBJ));

//	Nacteni poznamek v ticketu

$sql = "SELECT * FROM notes WHERE parent = " . $idt;

$query = $pdo->prepare($sql);
$query->execute();
$result["notes"] = $query->fetchAll(PDO::FETCH_OBJ);

var_dump($result);

?>
