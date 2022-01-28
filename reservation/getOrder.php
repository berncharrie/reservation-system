<?php 
$conn = new mysqli('localhost','root','','test_db');

$query = "SELECT * FROM order_list WHERE customer_id='".$_GET['customer_id']."' AND product_id='".$_GET['product_id']."' ORDER BY id DESC LIMIT 1";

$result = $conn->query($query);
$row =  $result->fetch_assoc();

echo json_encode($row);
?>