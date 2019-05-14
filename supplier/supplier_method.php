<?php  
 if(isset($_POST["Supp_ID"]))  
 {  
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "it 171");  
      $query = "SELECT C.Product_ID, C.Product_name, B.Product_price, B.Description from supplier A, supplier_product B, ware_house_product C
      WHERE A.Supp_ID = B.Supp_ID and B.Product_ID = C.Product_ID AND A.Supp_ID = '".$_POST["Supp_ID"]."'";  
      $result = mysqli_query($connect, $query);  
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered table-hover">
               <thead class="thead-dark">
                <tr>
                    <th class="text-center"><label>Product ID</label></th>
                    <th class="text-center"><label>Product Name</label></th>
                    <th class="text-center"><label>Price</label></th>
                    <th class="text-center"><label>Description</label></th>
                </tr>
                </thead>';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '
                <tr>
                     <td>'.$row['Product_ID'].'</td>
                     <td>'.$row['Product_name'].'</td>
                     <td>₱'.$row['Product_price'].'</td>
                     <td>'.$row['Description'].'</td>
                </tr>
                ';  
      }  
      $output .= "</table></div>";  
      echo $output;  
 }  
?>
