<?php

    include_once ('dbconnector.php');
    $query = "SELECT A.Pur_ord_id, C.product_name, A.prepared_by from purchase_order A, purchase_order_product B, ware_house_product C
		WHERE A.Pur_ord_id = B.Pur_ord_id and B.Product_ID = C.Product_ID";
    $result = mysql_query($query);
?> 
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Bootstrap Modal with Dynamic MySQL Data using Ajax & PHP</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:700px;">  
                <h3 align="center">Bootstrap Modal with Dynamic MySQL Data using Ajax & PHP</h3>  
                <br />  
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="20%">Purchase order ID</th>
                               <th width="50%">Product Name</th>
                               <th width="40%">Prepared by</th>  

                               <th width="30%">View</th>  
                          </tr>  
                          <?php  
                          while($row = mysql_fetch_array($result))  
                          {  
                          ?>  
                          <tr>  
                               <td>PO-<?php echo $row["Pur_ord_id"]; ?></td>
                               <td><?php echo $row["product_name"]; ?></td>
                               <td><?php echo $row["prepared_by"]; ?></td> 
                               <td><input type="button" name="view" value="view" id="<?php echo $row["Pur_ord_id"]; ?>" class="btn btn-info btn-xs view_data" /></td>  
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <div id="dataModal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Employee Details</h4>  
                </div>  
                <div class="modal-body" id="purchase_detail">  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>  
 <script>  
 $(document).ready(function(){ 
      $('.view_data').click(function(){  
           var po_id = $(this).attr("Pur_ord_id");  
           $.ajax({  
                url:"select.php",  
                method:"post",  
                data:{purchase_id:purchase_id},  
                success:function(data){  
                     $('#purchase_detail').html(data);  
                     $('#dataModal').modal("show");  
                }  
           });  
      });  
 });  
 </script>
