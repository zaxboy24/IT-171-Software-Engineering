<form action="insert_delivery.php" method="post">
<?php  
 if(isset($_POST["Pur_ord_id"]))  
 {  
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "it 171");  
      $query ="SELECT DISTINCT D.Supp_ID, D.Supp_name, D.Supp_address, A.Date_approved, A.Approved_by, A.Estemated_cost from purchase_order A, purchase_order_product B, ware_house_product C, supplier D
      WHERE A.Pur_ord_id = B.Pur_ord_id and B.Product_ID = C.Product_ID AND A.Supp_ID = D.Supp_ID AND A.Pur_ord_id = '".$_POST["Pur_ord_id"]."'";  
      $query2 = "SELECT * from purchase_order A, purchase_order_product B, ware_house_product C, supplier D
      WHERE A.Pur_ord_id = B.Pur_ord_id and B.Product_ID = C.Product_ID AND A.Supp_ID = D.Supp_ID AND A.Pur_ord_id = '".$_POST["Pur_ord_id"]."'";  
      $result = mysqli_query($connect, $query);
      $results = mysqli_query($connect, $query2);  
      $output .= '  
      <div class="table-responsive">';
      while($rows= mysqli_fetch_array($result))  
      {  
          $Supp_id = $rows['Supp_ID'];
          $Approved_by = $rows['Approved_by'];
          $Estemated_cost =$rows['Estemated_cost'];
          $output .= '
          <div class="container">
          <div class="row">
          <div class="col">
               <label><b>Supplier Details</b></label>
               <p class="float-right"><b>Date Approved:</b> '.$rows['Date_approved'].'</p>
          <div>
               <p class="float-left"><b>Name: </b></p><p>'.$rows['Supp_name'].'</p>
               <p class="float-left"><b>Address: </b></p> <p>'.$rows['Supp_address'].'</p>
          </div>
               </div>
            
          <div class="w-100"></div>   
          
              
          </div>
          
          </div>
          </div>' ;
      }
          $output .= '  
          <table class="table table-bordered table-hover table-m">
               <thead class="thead-dark">
                    <tr>
                         <th class="text-center"><label>Product Name</label></th>
                         <th class="text-center"><label>Quantity</label></th>
                         <th class="text-center"><label>Estimated Amount</label></th>
                    </tr>
               </thead>';  
      while($row = mysqli_fetch_array($results))  
      {  
          $pur_ord_id = $row['Pur_ord_id'];
          $output .= '       
               <tr>  
                    <td>'.$row['Product_name'].'</td>
                    <td>'.$row['Quantity'].' pcs</td> 
                    <td>₱'.$row['Estimated_amount'].'</td>
                       
               </tr>  
                ';
                  
      }  
      $output .= '</table></div>
          <div class=""> 
               <p class="float-left text-success"><b>Approved by:</b> '.$Approved_by.'</p>
               <p class="float-right text-primary"><b>Estimated Cost:</b>₱'.$Estemated_cost.'</p>
          </div>
          <br>
          <br>

     
          ';  
      echo $output;
      echo "
      <input type='hidden' name='pur_ord_id' value='$pur_ord_id'>
      <input type='hidden' name='Supp_ID' value='$Supp_id'>";  
      //echo $Supp_id;
 }  
?>



<div class="row">
          <div class="form-group col-md-3 col-lg-3">
	          <label><b>Terms</b></label>
		          <select name="Term" class="form-control" required>
                         <option value="" disabled selected>Days</option>
                         <option value='10'>10 Days</option>
                         <option value='20'>20 Days</option>
                         <option value='25'>25 Days</option>
                         <option value='30'>30 Days</option>
                         <option value='35'>35 Days</option>
		          </select>
          </div>
          <div class="col-md-2 col-lg-2"></div>
          <div class="col-md-2 col-lg-2"></div>
          <div class="form-group col-md-5 col-lg-5">
               <label><b>Delivery Address</b></label>
                    <input type="text" name="del_address" id="del_address" class="form-control" placeholder="Address" required>
          </div>
</div>
<div class="row">          
          <div class="col-md-4 col-lg-4
          " >
               <label><b>Delivery Staff:</b></label>
                    <select name="Del_staff" class="form-control" required>
                         <option value="" disabled selected>Staff</option>
                         <option value='Naruto Uzumaki'>Naruto Uzumaki</option>
                         <option value='Uchiha Sasuke'>Uchiha Sasuke</option>
                         <option value='Manny Pacquio'>Manny Pacquio</option>
                    </select>     
               <br>
          <div>
               <button type="submit" class="btn btn-default btn-success " name="save" id="save">Create Delivery <i class="fas fa-plus"></i></button>
          </div>
     </div>
</div>
</form>