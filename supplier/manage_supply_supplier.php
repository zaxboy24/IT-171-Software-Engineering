<?php

    include_once ('dbconnector.php');
    $query = "SELECT * from Supplier";
    $result = mysql_query($query);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Supply Hub</title>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" type="text/css" href="..\fontawesome-free-5.8.1-web\css\all.css">
		<link rel="stylesheet" type="text/css" href="..\css\sample.css">
		<link rel="stylesheet" type="text/css" href="..\css\bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="..\css\preloader.css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Baloo+Chettan" rel="stylesheet">
	 </head>
	<body>
	
		<div class="loader">
			<img src="images\preloader.gif" alt="Loading..." />
		</div>
	
		<div class="container-fluid custom-0">
			<div class="navbar navbar-default custom-1">
				<a class="text-dark navbar-brand" href="#"><span><img class="custom-12" src="..\images\icon-2.png"> Supply Hub</span></a>
				<ul class="nav li list-unstyled">
					<li class="nav-item pl-4 pr-4">
						<a href="..\profile.html" >Profile</a>
					</li >
					<li class="nav-item pl-4-pr-4">
						<a href="#">Sign-out</a>
					</li>
				</ul>
			</div>
			
			<div class= "custom-1 custom-2">
				<ul class="nav li list-unstyled d-flex justify-content-center custom-3">
					<li class="nav-item custom-3">
						<a href="#"><span style="color: #FFD700"><i class="fas fa-box-open"></i> Manage Supply</span></a>
					</li>
					<li class="nav-item custom-3">
						<a href="purchase-order_supplier.php"><span ><i class="fas fa-list-alt"></i> Purchase Order</span></a>
					</li>
					<li class="nav-item custom-3">
					<a href="delivery_supplier.php"><span><i class="fas fa-truck"></i> Deliveries</span></a>
					</li>
				</ul>
			</div>
		</div>
		
		<div class="container-fluid d-flex custom-4">
			<div class="custom-5">
				<ul class="list-unstyled">
					<li class="custom-8">
						<a class= href="#" class="custom-button"><button type="button" class=" btn-sm rounded-pill btn-outline-info" data-toggle="modal" data-target="#add_datamodal"><span><i class="fas fa-cart-plus"></i>  Add Supply</span></button></a>
						<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
							<div class="modal-dialog modal-lg">
								<div class="modal-content">
									...
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="custom-6 container-fluid">
				<div class="d-flex justify-content-between custom-9">
					<div class="dropdown">
						<form action="/action_page.php">
							<select size="1" placeholder="Sort by" name="" class="rounded-pill">
								<option value="" disabled selected>Sort by</option>
								<option value=''>Latest</option>
								<option value=''>Oldest</option>
							</select>
						</form>
					</div>
					<form action="/action_page.php">
						<input class="rounded-pill" type="search" id="site-search" name="q" placeholder="  Search">
					</form>
				</div>
			</div>
        </div>	
    <div class="card-body">
    <div id="table" class="">
      <table class="table table-bordered table-responsive-md table-striped text-center custom-14" width="200%">
        <thead class="thead-dark">
			<tr>
				<th class="text-center">Supplier ID</th>
				<th class="text-center" id="product-name">Supplier Name</th>
				<th class="text-center">Supplier Address</th>
				<th class="text-center">Action</th>
        	</tr>
		</thead>
        <?php
            while($rows = mysql_fetch_assoc($result))
            {
        ?>
            <tr>
				<td>S-<?php echo $rows['Supp_ID'] ?></td>
				<td><?php echo $rows['Supp_name'] ?></td>
                <td><?php echo $rows['Supp_address'] ?></td>
                <td>
					<input type="button" class="btn btn-info btn-xs btn primary view_data" name="view" id="<?php echo $rows["Supp_ID"]; ?>" value = "View items">
          		</td>
            </tr>
        <?php
            }
        ?>
		
	</table>
				</div>
			</div>
			</div>	
			</div>
		</div>	
		
	<!--Jquery, PopperJS and BootstrapJS-->	
	<script src="..\jquery\jquery-3.3.1.min.js"></script>
    <script src="..\popper-js\popper.min.js"></script>
    <script src="..\js\bootstrap.min.js"></script>
	<script src="..\js\JavaScript.js"></script>
	<script src="..\js\preloader.js"></script>
		
	</body>
</html>

<!-- <----------------------------------------- ADD PRODUCT ----------------------->
<div id="add_datamodal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title text-center">Create Delivery</h4><button type="button" class="close" data-dismiss="modal">&times;</button> 
			</div>
			<div class="modal-body">
				<form method="post" id="insert_form">
				<label><b>Product name</b></label>
					<input type="text" name="product_name" id="product_name" class="form-control" required>
					<br>
				<label><b>Product Price</b></label>
					<input type="text" name="price" id="price" class="form-control" required>
					<br>
				<label><b>Description</b></label>
					<input type="text" name="description" id="description" class="form-control" required>
					<br>
					<label><b>Supplier</b></label>
					<select name="supp_name" id="supp_name" class="form-control" required>
									<option value="" disabled selected>Supplier</option>
									<option value='1'>Chester Segovia</option>
									<option value='2'>Kobe Atinen</option>
									<option value='3'>Paring Benoor</option>
					</select>
					<br>
					<input type="submit" name="insert" id="insert" value="ADD" class="btn-success btn-default"/>
				</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default btn-danger" data-dismiss="modal">Close</button>  
				</div>
		</div>
	</div>
</div>

<!-- ------------------------------------------------- SHOW PRODUCT -------------------------------------------- -->
<div id="dataModal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">   
                    <h4 class="modal-title text-center">Supplier Item Details</h4><button type="button" class="close" data-dismiss="modal">&times;</button> 
                </div>  
                	<div class="modal-body" id="supplier_detail">
                </div>  
                <div class="modal-footer">  
                    <button type="button" class="btn btn-default btn-danger" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>	

 <script>  
    $(document).ready(function(){ 
		$('#insert_form').on('insert', function(event){
			event.preventDefault();
			if($('#product_name').val() ==''){
				alert("Product name is required")
			}
			else if($('#price').val() ==''){
				alert("Product price is required")
			}
			else if($('#description').val() ==''){
				alert("Product description is required")
			}
			else if($('#supp_name').val() ==''){
				alert("Specify the supplier")
			}
			else{
					$.ajax({
						url:"insert_product.php",
						method:"POST",
						data:$('#insert_form').serialize(),
						success:function(data)
						{
							$('#insert_form')[0].reset();
							$('add_datamodal').modal("hide");
							$('success_modal').modal("show");
							$('#supplier_detail').html(data);
						}
					});
			}
		}); 
        $('.view_data').click(function(){  
            var Supp_ID = $(this).attr("id");  
            $.ajax({  
                url:"supplier_method.php",  
                method:"post",
                data:{Supp_ID:Supp_ID},  
                success:function(data){  
                     $('#supplier_detail').html(data);  
                     $('#dataModal').modal("show");  
                }  
           });  
      });  
 });  
 </script>