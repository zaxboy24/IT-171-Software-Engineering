<form action="insert_PO.php" method="POST">
<?php
     $productIdOne = $productQtyOne = $productNameOne = "";
     $productIdTwo = $productQtyTwo = $productNameTwo = "";
     $productIdThree = $productQtyThree = $productNameThree = "";
     $productIdFour = $productQtyFour = $productNameFour = "";
     $productIdFive = $productQtyFive = $productNameFive = "";

      
     
     if(isset($_POST["Pur_req_id"]))  
     {  
          $output = '';  
          $connect = mysqli_connect("localhost", "root", "", "it 171");
          $item = "SELECT A.Pur_req_id, B .Product_ID, C.Product_name, B.Qty_requested from purchase_request A, purchase_request_product B, ware_house_product C
          WHERE A.Pur_req_id = B.Pur_req_id and B.Product_ID = C.Product_ID AND A.Pur_req_id = '".$_POST["Pur_req_id"]."'"; 

          $itemOne = "SELECT A.Pur_req_id, B .Product_ID, C.Product_name, B.Qty_requested from purchase_request A, purchase_request_product B, ware_house_product C
          WHERE A.Pur_req_id = B.Pur_req_id and B.Product_ID = C.Product_ID AND A.Pur_req_id = '".$_POST["Pur_req_id"]."
          LIMIT 0,1'";  
          
          $itemTwo = "SELECT A.Pur_req_id, B .Product_ID, C.Product_name, B.Qty_requested from purchase_request A, purchase_request_product B, ware_house_product C
          WHERE A.Pur_req_id = B.Pur_req_id 
          and B.Product_ID = C.Product_ID 
          AND A.Pur_req_id = '".$_POST["Pur_req_id"]."
          LIMIT 1,1'";  
          
          $itemThree = "SELECT A.Pur_req_id, B .Product_ID, C.Product_name, B.Qty_requested from purchase_request A, purchase_request_product B, ware_house_product C
          WHERE A.Pur_req_id = B.Pur_req_id 
          and B.Product_ID = C.Product_ID 
          AND A.Pur_req_id = '".$_POST["Pur_req_id"]."
          LIMIT 2,1'";  

          $itemFour = "SELECT A.Pur_req_id, B .Product_ID, C.Product_name, B.Qty_requested from purchase_request A, purchase_request_product B, ware_house_product C
          WHERE A.Pur_req_id = B.Pur_req_id 
          and B.Product_ID = C.Product_ID 
          AND A.Pur_req_id = '".$_POST["Pur_req_id"]."
          LIMIT 3,1'";  

          $itemFive = "SELECT A.Pur_req_id, B .Product_ID, C.Product_name, B.Qty_requested from purchase_request A, purchase_request_product B, ware_house_product C
          WHERE A.Pur_req_id = B.Pur_req_id 
          and B.Product_ID = C.Product_ID 
          AND A.Pur_req_id = '".$_POST["Pur_req_id"]."
          LIMIT 4,1'";  

          if($itemResult = mysqli_query($connect, $item)){
               while($row = mysqli_fetch_assoc($itemResult)){
                    $product_id = $row['Product_ID'];
                    $product_qty = $row['Qty_requested'];
               }
          } 

          if($itemOneResult = mysqli_query($connect, $itemOne)){
               while($row1 = mysqli_fetch_assoc($itemOneResult)){
                    
                    $productIdOne = $row['Product_ID'];
                    $productQtyOne = $row['Qty_requested'];
               }
          }  
          
          if($itemTwoResult = mysqli_query($connect, $itemTwo)){
               while($row = mysqli_fetch_assoc($itemTwoResult)){
                    $productIdTwo = $row['Product_ID'];
                    $productQtyTwo = $row['Qty_requested'];
               }
          }  

          if($itemThreeResult = mysqli_query($connect, $itemThree)){
               while($row = mysqli_fetch_assoc($itemThreeResult)){
                    $productIdThree = $row['Product_ID'];
                    $productQtyThree = $row['Qty_requested'];
               }
          }  

          if($itemFourResult = mysqli_query($connect, $itemFour)){
               while($row = mysqli_fetch_assoc($itemFourResult)){
                    $productIdFour = $row['Product_ID'];
                    $productQtyFour = $row['Qty_requested'];
               }
          }  

          if($itemFiveResult = mysqli_query($connect, $itemFive)){
               while($row = mysqli_fetch_assoc($itemFiveResult)){
                    $productIdFive = $row['Product_ID'];
                    $productQtyFive = $row['Qty_requested'];
               }
          }  

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
          $Estimated_amount =''; 
          $item_query = mysqli_query($connect, $itemOne);
          while($rows = mysqli_fetch_assoc($item_query))  
          {
               $productId = $rows['Product_ID'];
               $productQty = $rows['Qty_requested'];
               $productName = $rows['Product_name'];

               $output .= '
                    <tr>
                         <td class="product_id">P- '.$productId.'</td>
                         <td class="product_name"> '.$productName.'</td>
                         <td class="product_qty">'.$productQty.'pcs</td>
                    </tr>
                    '; 

          }  
          echo "
          <input type='hidden' name='productIdOne' value='$productIdOne'>
          <input type='hidden' name='productQtyOne' value='$productQtyOne'>
          <input type='hidden' name='productIdTwo' value='$productIdTwo'>
          <input type='hidden' name='productQtyTwo' value='$productQtyTwo'>
          <input type='hidden' name='productIdThree' value='$productIdThree'>
          <input type='hidden' name='productQtyThree' value='$productQtyThree'>
          <input type='hidden' name='productIdFour' value='$productIdFour'>
          <input type='hidden' name='productQtyFour' value='$productQtyFour'>
          <input type='hidden' name='productIdFive' value='$productIdFive'>
          <input type='hidden' name='productQtyFive' value='$productQtyFive'>
          ";
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
			<select name="Suppname" class="form-control" required>
				<option value="" disabled selected>Supplier</option>
				<option value='1'>Chester Segovia</option>
				<option value='2'>Kobe Atinen</option>
				<option value='3'>Paring Benoor</option>
			</select>
		
          <br>
          <div>
               <input type="submit" class="btn btn-default btn-success" name="save" id="save" value="Create PO">
          </div>
     
     </div>
</form>

<script>
// $(document).ready(function(){
//      $('#save').click(function(){
//           var product_id = [];
//           var product_qty = [];
//           var prepname  = $('.Prepname')
//           var appname  = $('.Appname')
//           var suppname  = $('.Suppname')

//           $('.product_id').each(function(){
//                product_id.push($(this).text());
//           });
//           $('.product_qty').each(function(){
//                product_qty.push($(this).text());
//           });
//           $.ajax({
//                url:"insert.php",
//                method:"POST",
//                data:{product_id:product_id, product_qty:product_qty,
//                     prepname:prepname, appname:appname, suppname:suppname}
//                success:function(data){
//                     $('#dataModal').modal('hide');
//                     $('#success_modal').modal('show');
                    
//                }

//           });
          
//      });
// });
// </script>