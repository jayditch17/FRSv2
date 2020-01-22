<?php
  include('DBConnector.php');
  //include_once("db_connect.php");
$sql_query = "SELECT * FROM events";
$resultset = mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));
$developer_records = array();
while( $rows = mysqli_fetch_assoc($resultset) ) {
$developer_records[] = $rows;
}

	// if(isset($_POST['export'])){

 //    Export_Database($servername,$dBUsername,$dBPassword,$dBName,  $tables=false, $backup_name=false );
 //   }

 //       function Export_Database($host,$user,$pass,$name,  $tables=false, $backup_name=false )
 //    {
 //        $mysqli = new mysqli($host,$user,$pass,$name); 
 //        $mysqli->select_db($name); 
 //        $mysqli->query("SET NAMES 'utf8'");

 //        $queryTables    = $mysqli->query('SHOW TABLES'); 
 //        while($row = $queryTables->fetch_row()) 
 //        { 
 //            $target_tables[] = $row[0]; 
 //        }   
 //        if($tables !== false) 
 //        { 
 //            $target_tables = array_intersect( $target_tables, $tables); 
 //        }
 //        foreach($target_tables as $table)
 //        {
 //            $result         =   $mysqli->query('SELECT * FROM '.$table);  
 //            $fields_amount  =   $result->field_count;  
 //            $rows_num=$mysqli->affected_rows;     
 //            $res            =   $mysqli->query('SHOW CREATE TABLE '.$table); 
 //            $TableMLine     =   $res->fetch_row();
 //            $content        = (!isset($content) ?  '' : $content) . "\n\n".$TableMLine[1].";\n\n";

 //            for ($i = 0, $st_counter = 0; $i < $fields_amount;   $i++, $st_counter=0) 
 //            {
 //                while($row = $result->fetch_row())  
 //                { //when started (and every after 100 command cycle):
 //                    if ($st_counter%100 == 0 || $st_counter == 0 )  
 //                    {
 //                            $content .= "\nINSERT INTO ".$table." VALUES";
 //                    }
 //                    $content .= "\n(";
 //                    for($j=0; $j<$fields_amount; $j++)  
 //                    { 
 //                        $row[$j] = str_replace("\n","\\n", addslashes($row[$j]) ); 
 //                        if (isset($row[$j]))
 //                        {
 //                            $content .= '"'.$row[$j].'"' ; 
 //                        }
 //                        else 
 //                        {   
 //                            $content .= '""';
 //                        }     
 //                        if ($j<($fields_amount-1))
 //                        {
 //                                $content.= ',';
 //                        }      
 //                    }
 //                    $content .=")";
 //                    //every after 100 command cycle [or at last line] ....p.s. but should be inserted 1 cycle eariler
 //                    if ( (($st_counter+1)%100==0 && $st_counter!=0) || $st_counter+1==$rows_num) 
 //                    {   
 //                        $content .= ";";
 //                    } 
 //                    else 
 //                    {
 //                        $content .= ",";
 //                    } 
 //                    $st_counter=$st_counter+1;
 //                }
 //            } $content .="\n\n\n";
 //        }
 //        //$backup_name = $backup_name ? $backup_name : $name."___(".date('H-i-s')."_".date('d-m-Y').")__rand".rand(1,11111111).".sql";
 //        $backup_name = $backup_name ? $backup_name : $name.".xlsx";
 //        header('Content-Type: application/octet-stream');   
 //        header("Content-Transfer-Encoding: Binary"); 
 //        header("Content-disposition: attachment; filename=\"".$backup_name."\"");  
 //        echo $content; exit;
 //    }
  if(isset($_POST["export"])) {
$filename = "Backup_FRS_".date('Ymd') . ".xls";
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=\"$filename\"");
$show_coloumn = false;
if(!empty($developer_records)) {
foreach($developer_records as $record) {
if(!$show_coloumn) {
// display field/column names in first row
echo implode("\t", array_keys($record)) . "\n";
$show_coloumn = true;
}
echo implode("\t", array_values($record)) . "\n";
}
}
exit;
}
?>