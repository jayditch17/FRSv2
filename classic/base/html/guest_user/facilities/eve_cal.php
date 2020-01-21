<?php 

$connect = new PDO('mysql:host=localhost;dbname=database_itproject2', 'root', '');

$data = array();
 $evePlace = 'Devesse Plaza';

$query = "SELECT * FROM events WHERE evePlace = '$evePlace' and expire >= CURDATE()  ORDER BY eventID";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

foreach($result as $row){
	$data[] = array(

		'id'		=> $row["eventID"],
		'title'		=> $row["eveName"],
		'start'		=> $row["startDate"],
		'end'		=> $row["endDate"],
		'color'		=> $row["color"]
	);
}

echo json_encode($data);
 ?>