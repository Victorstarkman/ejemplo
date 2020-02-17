<?php
include 'config.php';

if(!isset($_POST['searchTerm'])){ 
  $fetchData = mysqli_query($con,"select * from servicios ");
}else{ 
  $search = $_POST['searchTerm']; 
  $fetchData = mysqli_query($con,"select * from servicios where servicio like '%".$search."%' ");
} 

$data = array();
while ($row = mysqli_fetch_array($fetchData)) {    
  $data[] = array("id"=>$row['Indice'], "text"=>$row['tipo']);
}
echo json_encode($data);
?>