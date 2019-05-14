<?php  
 if(isset($_POST["Pur_ord_id"]))  
 {  
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "it 171");  
      $query ="SELECT DISTINCT D.Supp_name, A.Date_approved, A.Approved_by, A.Estemated_cost from purchase_order A, purchase_order_product B, ware_house_product C, supplier D
      WHERE A.Pur_ord_id = B.Pur_ord_id and B.Product_ID = C.Product_ID AND A.Supp_ID = D.Supp_ID AND A.Pur_ord_id = '".$_POST["Pur_ord_id"]."'";  
      $query2 = "SELECT * from purchase_order A, purchase_order_product B, ware_house_product C, supplier D
      WHERE A.Pur_ord_id = B.Pur_ord_id and B.Product_ID = C.Product_ID AND A.Supp_ID = D.Supp_ID AND A.Pur_ord_id = '".$_POST["Pur_ord_id"]."'";  
      $result = mysqli_query($connect, $query);
      $results = mysqli_query($connect, $query2);  
      $output .= '  
      <div class="table-responsive">';
      while($rows= mysqli_fetch_array($result))  
      {  
          $output .= '
          <div class="d-flex justify-content-between">
               <label><b>Supplier name:</b></label><p>'.$rows['Supp_name'].'</p> 
               <label><b>Approved by:</b></label><p>'.$rows['Approved_by'].'</p>
          </div>     
          <div class="d-flex justify-content-between">
              <label><b>Date Approved:</b></label><p>'.$rows['Date_approved'].'</p>
              <label><b>Estimated Cost:</b></label><p>'.$rows['Estemated_cost'].'</p>
          </div>' ;
      }
          $output .= '  
          <table class="table table-bordered table-hover table-m">
               <thead class="thead-dark">
                    <tr>
                         <th class="text-center"><label>Product ID</label></th>
                         <th class="text-center"><label>Product Name</label></th>
                         <th class="text-center"><label>Quantity</label></th>
                         <th class="text-center"><label>Estimated Amount</label></th>
                    </tr>
               </thead>';  
      while($row = mysqli_fetch_array($results))  
      {  
           $output .= '
                 
               <tr>  
                    <td>P-'.$row['Product_ID'].'</td>
                    <td>'.$row['Product_name'].'</td>
                    <td>'.$row['Quantity'].' pcs</td> 
                    <td>₱'.$row['Estimated_amount'].'</td>
                       
               </tr>  
                ';
                  
      }  
      $output .= "</table></div>";  
      echo $output;  
 }  
?>