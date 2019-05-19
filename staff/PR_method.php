<form action="insert_PO.php" method="post">
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
                    <th class="text-center"><label>PR ID</label></th>
                    <th class="text-center"><label>Product Name</label></th>
                    <th class="text-center"><label>Quantity Requested</label></th>
                </tr>
                </thead>';  
      while($row = mysqli_fetch_array($result))  
      {  
          $pur_req_id = $row["Pur_req_id"];
           $output .= '
                <tr>      
                    <td><input type="checkbox" id= '.$row['Product_ID'].' name='.$row['Product_ID'].' values='.$row['Product_ID'].'></td>  
                     <td>'.$row['Product_name'].'</td>
                     <td>'.$row['Qty_requested'].'pcs</td>
                     
                </tr>
                ';  
      }  
      echo "
      <input type='hidden' name='pur_req_id' value='$pur_req_id'>";
      $output .= "</table></div>";  
      echo $output;  
 }       
?>
 <div>
	
     <label><b>Prepared by:</b></label> 
          <select name="Prepname" class="form-control" required>
               <option value="" disabled selected>Staff</option>
               <option value='Monkey D Lufy'>Monkey D Lufy</option>
               <option value='Ronoa Zoro'>Ronoa Zoro</option>
               <option value='Nico Robin'>Nico Robin</option>
          </select>
     <label><b>Approved by:</b></label>
          <select name="Appname" class="form-control" required>
               <option value="" disabled selected>Manager</option>
               <option value='Edward Newgate'>Edward Newgate</option>
               <option value='Gol D Roger'>Gol D Roger</option>
               <option value='Senguoko Duddha'>Senguoko Duddha</option>
          </select>

     <label><b>Select Supplier:</b></label>
	     <select name="Suppname" id="Suppname" class="form-control" required>
			<option value="" disabled selected>Supplier</option>
			<?php
                    $option .='';
				$query1 = "SELECT * from Supplier";
				$result1 = mysqli_query($connect, $query1);
				while($row = mysqli_fetch_assoc($result1))
				{
					$option .='<option value='.$row['Supp_ID'].'>'.$row['Supp_name'].'</option>';
				}
			     echo $option;
			?>
		</select>
     
     <br>
     <div>
          <input type="submit" class="btn btn-default btn-success" name="save" id="save" value="Create PO">
     </div>

</div>

</form>