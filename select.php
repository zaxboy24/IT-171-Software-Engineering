<?php  

 include_once 'dbconnector.php'
 if(isset($_POST["Pur_ord_id"]))  
 {  
      $output = '';   
      $query = "SELECT * FROM purchase_order A, purchase_order_product B, ware_house_product C
       WHERE B.product_id = C.product_id AND A.pur_ord_id = B.pur_ord_id and A.pur_ord_id = '".$_POST["Pur_ord_id"]."'";  
      $result = mysql_query($query);  
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';  
      while($row = mysql_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td width="30%"><label>Purchase Order ID</label></td>  
                     <td width="70%">'.$row["Pur_ord_id"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Product names</label></td>  
                     <td width="70%">'.$row["product_name"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Estimated Cost</label></td>  
                     <td width="70%">'.$row["Estemated_cost"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Quantity</label></td>  
                     <td width="70%">'.$row["Quantity"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Estimated amount</label></td>  
                     <td width="70%">'.$row["Estimated_amount"].' Year</td>  
                </tr>
                <tr>  
                    <td width="30%"><label>Prepared by</label></td>  
                    <td width="70%">'.$row["Prepared_by"].' Year</td>  
                </tr>    
                <tr>  
                    <td width="30%"><label>Approved by</label></td>  
                    <td width="70%">'.$row["Approved_by"].' Year</td>  
                </tr>  
                ';  
      }  
      $output .= "</table></div>";  
      echo $output;  
 }  
 ?>
