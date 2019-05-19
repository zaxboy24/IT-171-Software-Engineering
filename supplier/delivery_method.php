<form action="update.php" method="post">
<?php  
 if(isset($_POST["Delivery_ID"]))  
 {  
    $deliver_id = $_POST["Delivery_ID"];
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "it 171");  
      $query = "SELECT DISTINCT D.Supp_name, C.Delivered_by, C.Delivered_date  FROM ware_house_product A,delivery_product B, delivery C, supplier D
      WHERE A.product_id = B.product_id AND B.Delivery_id = C.Delivery_id and C.Supp_ID = D.Supp_ID and C.Delivery_ID='".$_POST["Delivery_ID"]."'";  
      $query2 = "SELECT * FROM ware_house_product A,delivery_product B, delivery C, supplier D
      WHERE A.product_id = B.product_id AND B.Delivery_id = C.Delivery_id and C.Supp_ID = D.Supp_ID and C.Delivery_ID='".$_POST["Delivery_ID"]."'";  
      $result = mysqli_query($connect, $query);
      $results = mysqli_query($connect, $query2);  
      $output .= '
      <div class="table-responsive">';
      while($rows= mysqli_fetch_array($result))  
      {  
          $output .= '
        <div class="d-flex justify-content-between">
            <label><b>Supplier name:</b></label><p>'.$rows['Supp_name'].'</p> 
            <label><b>Delivered by:</b></label><p>'.$rows['Delivered_by'].'</p>    
            <label><b>Date Delivered:</b> </label><p>'.$rows['Delivered_date'].'</p>
        </div>' ;
      }
          $output .='
           <table class="table table-bordered table-hover table-m">
               <thead class="thead-dark">
               <tr>
                    <th class="text-center"><label>Product Name</label></th>
                    <th class="text-center"><label>Quantity Delivered</label></th>
                    <th class="text-center"><label>Quantity Accepted</label></th>
                    <th class="text-center"><label>Accepted by</label></th>
                </tr>
                </thead>';  
      while($row = mysqli_fetch_array($results))  
      {  
           $output .= '  
               <tr>  
                    <td colspan="1">'.$row['Product_name'].'</td>
                    <td>'.$row['Qty_delivered'].'</td>
                    <td><div contenteditable>'.$row['Qty_accepted'].'</div><input type="hidden" name="qty_acc" value='.$row['Qty_accepted'].'/></td>
                    <td colspan="1">
                    <select name="Del_staff" class="form-control" required>
                        <option value="" disabled selected>Staff</option>
                        <option value="Naruto Uzumaki">Naruto Uzumaki</option>
                        <option value="Uchiha Sasuke">Uchiha Sasuke</option>
                        <option value="Manny Pacquio">Manny Pacquio</option>
                    </select>    
                    </td>
                ';  
      }  
      $output .= "</table></div>";  
      echo $output;  
 }  
?>
<div>
    <input type="submit" value="Confirm" name="multi_update" id="multi_update" class="btn btn-success ">
</div>
</form>


