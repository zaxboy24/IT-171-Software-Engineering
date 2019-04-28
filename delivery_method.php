<?php  
 if(isset($_POST["Delivery_ID"]))  
 {  
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "it 171");  
      $query = "SELECT * FROM ware_house_product A,delivery_product B, delivery C, supplier D
      WHERE A.product_id = B.product_id AND B.Delivery_id = C.Delivery_id and C.Supp_ID = D.Supp_ID and C.Delivery_ID='".$_POST["Delivery_ID"]."'";  
      $result = mysqli_query($connect, $query);  
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered table-padding="5" table-m">
               <tr>
                    <th class="text-center"><label>Product ID</label></th>
                    <th class="text-center"><label>Delivery ID</label></th>
                    <th class="text-center"><label>Product Name</label></th>
                    <th class="text-center"><label>Quantity Delivered</label></th>
                    <th class="text-center"><label>Quantity Accepted</label></th>
                    <th class="text-center"><label>Accepted by</label></th>
                </tr>';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
               <tr>  
                    <td>'.$row['Product_ID'].'</td>
                    <td>'.$row['Delivery_ID'].'</td>
                    <td colspan="1">'.$row['Product_name'].'</td>
                    <td>'.$row['Qty_delivered'].'</td>
                    <td>'.$row['Qty_accepted'].'</td>
                    <td colspan="1">'.$row['Accepted_by'].'</td>
                ';  
      }  
      $output .= "</table></div>";  
      echo $output;  
 }  
?>