<?php 
$result = $this->mysqli->query($query);

$data = array();

while ($row = $result->fetch_assoc()) {
 
    $data[] = $row;
}
?>