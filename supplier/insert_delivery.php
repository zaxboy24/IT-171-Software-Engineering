<?php 
$connector = mysqli_connect("localhost", "root", "", "it 171");
$Purchase_order_id = $_POST["pur_ord_id"]; 
$term = $_POST["Term"]; 
$delivery_address = $_POST["del_address"];
$Delivery_staff = $_POST["Del_staff"];
$Supp_id = $_POST['Supp_ID'];
//echo "$Purchase_order_id";
// ----------------------------------------- Get the TOTAL COST -----------------------------
if (!empty($_POST)) {
    $select1 =  "SELECT sum(A.Quantity) as total_deliverd FROM purchase_order_product A
    WHERE A.pur_ord_id = '$Purchase_order_id'";
    $resultToquery1 = mysqli_query($connector, $select1);
        while ($row1 = mysqli_fetch_assoc($resultToquery1)) {
            $total_deliverd = $row1['total_deliverd'];         
        }
// ---------------------------------------Insert to PO ----------------------
        if ($total_deliverd > 0) {
            $insert1 = "INSERT INTO delivery
            (Supp_ID, Delivered_by, Delivered_amount, Term)
            VALUES ($Supp_id, '$Delivery_staff', $total_deliverd, $term)";
// ------------------------------------------ Get the last ID -----------------------
            if (mysqli_query($connector, $insert1)) {
            //    $lastInsertedId = mysqli_insert_id($connector);
            //    last_insert_id()
// ------------------------------------------ Transfer the product -------------------------------------
                $insert2 = "INSERT INTO delivery_product
                (Delivery_ID, Product_ID, Qty_delivered)
                SELECT last_insert_id(), A.Product_ID, A.Quantity as Qty_delivered FROM 
                purchase_order_product A
                WHERE pur_ord_id = '$Purchase_order_id'";

                $resultToinsert2 = mysqli_query($connector, $insert2);
                if ($resultToinsert2 == TRUE) {
                    header('location: delivery_supplier.php');
                    
                   }else {
                       echo ("Data is not inserted : ".mysqli_error($connector));
                   }
                }else {
                    echo ("Error : ". mysqli_error($connector));
                }
            }
}
?>