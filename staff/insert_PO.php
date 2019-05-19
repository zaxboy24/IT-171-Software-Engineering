<?php 
$connector = mysqli_connect("localhost", "root", "", "it 171");
$Purchase_request_id = $_POST["pur_req_id"]; 
$prepname = $_POST["Prepname"]; 
$appname = $_POST["Appname"];
$suppname = $_POST["Suppname"];

// ----------------------------------------- Get the TOTAL COST -----------------------------
if (!empty($_POST)) {
    $select1 =  "SELECT sum(B.Qty_requested * C.Product_price ) as Estimated_cost 
    FROM ware_house_product A, purchase_request_product B, supplier_product C, purchase_request D, supplier E 
    WHERE A.Product_ID = B.Product_ID AND A.Product_ID=C.Product_ID AND C.Supp_ID=E.Supp_ID 
    AND E.Supp_ID='$suppname' AND D.Pur_req_id='$Purchase_request_id'";
    $resultToquery1 = mysqli_query($connector, $select1);
        while ($row1 = mysqli_fetch_assoc($resultToquery1)) {
            $total_cost = $row1['Estimated_cost'];
            
        }
// ---------------------------------------Insert to PO ----------------------
        if ($total_cost > 0) {
            $insert1 = "INSERT INTO purchase_order
            (Supp_ID, Approved_by, Prepared_by, Estemated_cost)
            VALUES ($suppname, '$appname', '$prepname', $total_cost)";
// ------------------------------------------ Get the last ID -----------------------
            if (mysqli_query($connector, $insert1)) {
// ------------------------------------------ Transfer the product -------------------------------------
                $insert2 = "INSERT INTO purchase_order_product
                (Pur_ord_id, Product_ID, Quantity, Estimated_amount)
                SELECT last_insert_id(), A.Product_ID, B.Qty_requested as Quantity, (B.Qty_requested * C.Product_price ) as Estimated_amount from 
                ware_house_product A, purchase_request_product B, supplier_product C, purchase_request D, supplier E 
                WHERE A.Product_ID = B.Product_ID and A.Product_ID=C.Product_ID AND C.Supp_ID=E.Supp_ID 
                AND E.Supp_ID='$suppname' AND D.Pur_req_id='$Purchase_request_id'";

                $resultToinsert2 = mysqli_query($connector, $insert2);
                if ($resultToinsert2 == TRUE) {
                    header('location: purchase-order_staff.php');
                    
                   }else {
                       echo ("Data is not inserted : ".mysqli_error($connector));
                   }
                }else {
                    echo ("Error : ". mysqli_error($connector));
                }
            }
}
?>