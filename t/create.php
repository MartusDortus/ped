<!--
	Zakomentovano .. nemazat, dokud nebude doresen formular /view/ticketCreate.phtml
<html>
<head>
</head>
<body>
	<form method="POST" action="/t/create.php" id="createTicket">
		<input type="text" placeholder="Název ticketu" id="tName" name="tName">
		<textarea name="tDescription" id="tDescription" placeholder="Popisek ticketu">
		</textarea>
		<input type="date" id="tDeadline" name="tDeadline">
		<input type="submit" value="save" id="tSave" name="save">
	</form>
</body>
</html>
-->
<?php

ini_set("display_errors", 1);

$db_server = "192.168.89.3";
$db_port  = 3306;
$db_charset = "utf8mb4";
$db_pass = "VS0lBuHrwFBsGa4f";
$db_user = "ped_databazor";
$db_name = "ped_ticket";


$pdo_p = "mysql:host={$db_server};port={$db_port};dbname={$db_name};charset={$db_charset}";

$pdo = new PDO($pdo_p, $db_user, $db_pass, NULL);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if(isset($_POST["save"])) {
	$name = $_POST["tName"];
	$deadline = $_POST["tDeadline"];
	$descr = $_POST["tDescription"];
	$sql = "INSERT INTO `ticket`(`name`, `description`, `deadline`) VALUES ('{$name}','{$descr}','{$deadline}');";
	echo $sql;
	$query = $pdo->prepare($sql);
	$query->execute();

}

?>