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
                    <th class="text-center"><label>Product ID</label></th>
                    <th class="text-center"><label>Product Name</label></th>
                    <th class="text-center"><label>Quantity Requested</label></th>
                </tr>
                </thead>';  
      while($row = mysqli_fetch_array($result))  
      {  
          $pur_req_id = $row["Pur_req_id"];
           $output .= '
                <tr>
                     <td>P-'.$row['Product_ID'].'</td>
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
<?php
if (isset($_POST['delete'])) {
     $connects = mysqli_connect("localhost", "root", "", "it 171");  
     $PR_id = (int) $_POST['PR_id'];
     $deletors = "DELETE FROM purchase_request WHERE purchase_request.Pur_req_id ='$PR_id'";
     mysqli_query($connects, $deletors);
//      $success .= '
//      <div id="dataModal" class="modal fade">  
//       <div class="modal-dialog">  
//            <div class="modal-content">  
//                 <div class="modal-header">	
                    
// 				</div>
					
//                 		<div class="modal-body" id="purchase_request_detail"><h4 class="modal-title text-center">Succesfully Deleted</h4></div>
					  
// 				</div>
//                 <div class="modal-footer">
//                     <button type="button" class="btn btn-default btn-danger" data-dismiss="modal">Close</button>  
// 				</div>
// 				</form>  
//            </div>  
//       </div>  
//  </div>';

echo $success;
     header('location: purchase-request_staff.php');
}

?>

<!-- <script>
$(document).ready(function(){
$('#save').click(function(){
     var product_id = [];
     var product_name = [];
     var product_qty = [];
     var prepname  = $('.Prepname')
     var appname  = $('.Appname')
     var suppname  = $('.Suppname')

     $('.product_id').each(function(){
          product_id.push($(this).text());
     });
     $('.product_name').each(function(){
          product_name.push($(this).text());
     });
     $('.product_qty').each(function(){
          product_qty.push($(this).text());
     });
     $.ajax({
          url:"insert.php",
          method:"POST",
          data:{product_id:product_id, product_name:product_name, product_qty:product_qty,
               prepname:prepname, appname:appname, suppname:suppname}
          success:function(data){
               $('#dataModal').modal('hide');
               $('#success_modal').modal('show');
               
          }

     });
     
});
});
</script> -->