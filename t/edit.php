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

$id=$_GET["id"];

//	Vybere ticket
$sql = "SELECT * FROM ticket WHERE ticket.id_t = ${id}";
$query = $pdo->prepare($sql);
$query->execute();
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$data = array_shift($res);

//	Vybere data k ticketu napárovaná
$sql = "SELECT * FROM notes WHERE parent = {$id}";
$query = $pdo->prepare($sql);
$query->execute();
$notes = $query->fetchAll(PDO::FETCH_ASSOC);

if(isset($_POST["editSave"])) {
	echo "editSave";
	$referer = $_SERVER["HTTP_REFERER"];
	header("Localtion: ${referer}");
	exit;
} else if (isset($_POST["contribSave"])) {
	echo "contribSave";
	$referer = $_SERVER["HTTP_REFERER"];
	$typ = $_POST["typ"];
	$data = $_POST["note"];
	$sql = "INSERT INTO notes (`note`,`parent`, `typ`) VALUES (\"${data}\", {$id}, {$typ})";
	$query = $pdo->prepare($sql);
	$query->execute();
	header("Localtion: ${referer}");
}

?>

<html>
<head>

<link rel="stylesheet" href="https://unpkg.com/purecss@2.0.6/build/pure-min.css" integrity="sha384-Uu6IeWbM+gzNVXJcM9XV3SohHtmWE+3VGi496jvgX1jyvDTXfdK+rfZc8C1Aehk5" crossorigin="anonymous">


<style>
div.ticketEdit {
	background-color: cyan;
	width: 100%;
	padding: 1em;
}
div.ticketNewContrib {
	background-color:orange;
	width: 100%;
	padding: 1em;
}
div.ticketnote {
	background-color:yellow;
	border-bottom: 1px black dotted;
}
div.skryte {
	display: none;
}
textarea.tDescription {
	width: 100%;
	height: 5em;
}
div.dates>span.created {
	font-weight: bold;
}
</style>
</head>
<body>
<div class="ticketEdit pure-g">
<div class="pure-u-1-3">
	<h2><?= $data["name"] ?></h2>
	<form method="post" action="">
	<div class="dates">
		Vytvořeno: <span class="created"><?= $data["created"] ?></span>
		<br>
		Deadline: <input type="datetime-local" value="<?= date('Y-m-d\TH:i:s', strtotime($data['deadline']))?>">
	</div>
	<textarea class="tDescription" name="tDescription"><?= $data["description"] ?> </textarea>
	<br>
	<input type="submit" value="Ulož" name="editSave">
	</form>
</div>
<div class="pure-u-2-3">
	<button class="pure-button pure-button-primary btnTicketNewContrib" id="btnPoznamka" data-db="0">Poznámka</button>
	<button class="pure-button pure-button-primary btnTicketNewContrib" id="btnPokrok" data-db="1">Pokrok</button>
	<button class="pure-button pure-button-primary btnTicketNewContrib" id="btnZdrzeni" data-db="2">Zdržení</button>
	<button class="pure-button pure-button-primary btnTicketNewContrib" id="btnDilciUkol" data-db="3">Dílčí úkol</button>
</div>
</div>
<div class="ticketNewContrib pure-g skryte">
	<div class="pure-u-2-3">
		<h3 id="ticketNewContribH"></h3>
		<div class="ticketNewContribPoznamka">
			<form method="post" action="">
				<input type="hidden" name="typ" id="inputTyp">
				<textarea class="tDescription" name="note">Tady nastavit, aby to ukládalo</textarea>
				<input type="submit" name="contribSave" value="Uložit">
			</form>
		</div>
	</div>
</div>
<?php
foreach($notes as $x) :
?>
<div class="pure-g ticketNote">
	<div class="pure-u-4-5">
		<p><?= $x["note"] ?></p>
	</div>
	<div class="pure-u-1-5">
		<p><?= $x["created"] ?></p>
	</div>
</div>

<?php endforeach; ?>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
$(".btnTicketNewContrib").click(function(e) {
	var db = $(e.target).data("db");
	$(".ticketNewContrib").removeClass("skryte");
	$("#ticketNewContribH").text(db);
	$("#inputTyp").val(db);
});

</script>
</html>
