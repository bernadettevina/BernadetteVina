<?php
//Bernadette Vina - 18211019
//Stella Kurniawan - 18211046
if ($_GET["data"]=="sql")
	include "sql.php";
	
else if ($_GET["data"]=="csv")
	include "csv.php";
	
else if ($_GET["data"]=="xml")
	include "xml.php";

?>