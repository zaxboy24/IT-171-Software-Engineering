<?php  
 if(isset($_POST["Pur_req_id"]))  
 {  
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "it 171");  
      $query = "SELECT A.Pur_req_id, B .Product_ID, C.Product_name, B.Qty_requested from purchase_request A, purchase_request_product B, ware_house_product C
      WHERE A.Pur_req_id = B.Pur_req_id and B.Product_ID = C.Product_ID AND A.Pur_req_id = '".$_POST["Pur_req_id"]."'";  
      $result = mysqli_query($connect, $query);  
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered table-hover">
               <thead class="thead-dark">
                <tr>
                    <th class="text-center"><label>Product ID</label></th>
                    <th class="text-center"><label>Product Name</label></th>
                    <th class="text-center"><label>Quantity Requested</label></th>
                </tr>
                </thead>';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '
                <tr>
                     <td>P-'.$row['Product_ID'].'</td>
                     <td>'.$row['Product_name'].'</td>
                     <td>'.$row['Qty_requested'].'pcs</td>
                </tr>
                ';  
      }  
      $output .= "</table></div>";  
      echo $output;  
 }  
?>