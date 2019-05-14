<?php 
$connector = mysqli_connect("localhost", "root", "", "it 171");
$Purchase_request_id = $_POST["pur_req_id"]; 
$prepname = $_POST["Prepname"]; 
$appname = $_POST["Appname"];
$suppname = $_POST["Suppname"];

if (!empty($_POST)) {
    $select1 =  "SELECT sum(B.Qty_requested * C.Product_price ) as Estimated_cost 
    FROM ware_house_product A, purchase_request_product B, supplier_product C, purchase_request D, supplier E 
    WHERE A.Product_ID = B.Product_ID AND A.Product_ID=C.Product_ID AND C.Supp_ID=E.Supp_ID 
    AND E.Supp_ID='$suppname' AND D.Pur_req_id='$Purchase_request_id'";
    $resultToquery1 = mysqli_query($connector, $select1);
        while ($row1 = mysqli_fetch_assoc($resultToquery1)) {
            $total_cost = $row1['Estimated_cost'];
            
        }
        if ($total_cost > 0) {
            $insert1 = "INSERT INTO purchase_order
            (Supp_ID, Approved_by, Prepared_by, Estemated_cost)
            VALUES ($suppname, '$appname', '$prepname', $total_cost)";
            // $resultToinsert1 = mysqli_query($connector, $insert1);
            // header('location: purchase-order_staff.php');
            if (mysqli_query($connector, $insert1)) {
                $lastInsertedId = mysqli_insert_id($connector);

                $insert2 = "INSERT INTO purchase_order_product
                (Pur_ord_id, Product_ID, Quantity, Estimated_amount)
                SELECT  $lastInsertedId, A.Product_ID, B.Qty_requested as Quantity, (B.Qty_requested * C.Product_price ) as Estimated_amount from 
                ware_house_product A, purchase_request_product B, supplier_product C, purchase_request D, supplier E 
                WHERE A.Product_ID = B.Product_ID and A.Product_ID=C.Product_ID AND C.Supp_ID=E.Supp_ID 
                AND E.Supp_ID='$suppname' AND D.Pur_req_id='$Purchase_request_id'";

                $resultToinsert2 = mysqli_query($connector, $insert2);
                if ($resultToinsert2 == TRUE) {
                    header('location: purchase-order_staff.php');
                    
                   }else {
                       echo "Data is not inserted";
                   }
                }else {
                    echo ("Error : ". mysqli_error($connector));
                }
            }
}
?>