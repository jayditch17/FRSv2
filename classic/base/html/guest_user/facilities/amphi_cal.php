<?php 

$connect = new PDO('mysql:host=localhost;dbname=database_itproject2', 'root', '');

$data = array();
 $evePlace = 'Amphi Theater';

$query = "SELECT * FROM events WHERE evePlace = '$evePlace' and expire >= CURDATE()";
//$query2 = "SELECT * FROM request_su WHERE evePlace = '$evePlace' ORDER BY eventID";

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

// $data2 = array();
// $query2 = "SELECT * FROM request_su WHERE evePlace = '$evePlace' ORDER BY eventID";
// $statement2 = $connect->prepare($query2);
// $statement2->execute();
// $result2 = $statement2->fetchAll();
// foreach($result2 as $row2){
// 	$data2[] = array(

// 		'id'		=> $row2["eventID"],
// 		'title'		=> $row2["eveName"],
// 		'start'		=> $row2["startDate"],
// 		'end'		=> $row2["endDate"]
		
// 	);
// }
// echo json_encode($data2);
 ?>