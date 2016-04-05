<?php


require("reader.php");
$file = "sample.xls";
$connection=new Spreadsheet_Excel_Reader();
$connection->($file);

$startrow=2;
$endrow=3;
$col1=3;


for ($i=$startrow; $i < $endrow; $i++) { 
	echo $connection->sheets[0]["cells"][$i][$col1]."<br>";
}


?>