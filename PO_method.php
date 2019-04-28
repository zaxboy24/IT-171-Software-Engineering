<<<<<<< HEAD
<?php  
 if(isset($_POST["Pur_ord_id"]))  
 {  
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "it 171");  
      $query = "SELECT * from purchase_order A, purchase_order_product B, ware_house_product C
      WHERE A.Pur_ord_id = B.Pur_ord_id and B.Product_ID = C.Product_ID AND A.Pur_ord_id = '".$_POST["Pur_ord_id"]."'";  
      $result = mysqli_query($connect, $query);  
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered table-padding="5"">';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '
                 
               <tr>  
                    <td><label>Product Name</label></td>  
                    <td colspan="5">'.$row['Product_name'].'</td>  
               </tr>  
                <tr>  
                     <td colspan="1"><label>Product ID</label></td>
                     <td>'.$row['Product_ID'].'</td>
                     <td colspan="1"><label>PO ID</label></td>
                     <td>'.$row['Pur_ord_id'].'</td>
                </tr>  
    
                <tr>  
                     <td colspan="1"><label>Quantity</label></td>  
                     <td>'.$row['Quantity'].' pcs</td>
                     <td colspan="1"><label>Estimated Amount</label></td>  
                     <td>₱'.$row['Estimated_amount'].'</td>  
                </tr>  
                ';
                  
      }  
      $output .= "</table></div>";  
      echo $output;  
 }  
=======
<?php
if (isset($_POST['submit'])){

    include_once 'dbconnector.php';

    $prepareBy =mysqli_real_escape_string($conn, $_POST['Req_by']);
    $ApproveBy=mysqli_real_escape_string($conn, $_POST['Qty_req']);



    $sql = "INSERT INTO purchase_request (requested_by) VALUES ('$requestedBy');";
    mysqli_query($conn, $sql);
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();

} else {
    echo "<h2>Not inserted bobo</h2>";
    exit();
}

>>>>>>> a99da293826c109c5792783f1b4258a299f28b46
?>