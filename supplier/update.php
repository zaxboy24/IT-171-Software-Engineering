<?php

include_once('dbconnector.php');

$del_id = $_POST['deliver_id'];
$product_id = $_POST['prod_id'];
$accepted = $_POST['accepted'];
$qty_accepted = $_POST['qty_acc'];

for($count = 0; $count < count($product_id); $count++)
{
 $data = array(
    ':del_id' => $del_id[$count]
    ':prod_id'   => $product_id[$count],
    ':accepted'  => $accepted[$count],
    ':qty_accepted'  => $qty_accepted[$count]
 );

 $update_query = "UPDATE delivery_product SET Qty_accepted = :qty_accepted, Accepted_by = :accepted 
 WHERE product_id = :prod_id and Delivery_ID = :del_id";

 mysql_query($update_query);
 header('location: delivery_supplier.php')

// echo "Hello"

?>