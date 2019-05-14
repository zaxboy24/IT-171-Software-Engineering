<?php

    include_once ('dbconnector.php');
    $query = "SELECT DISTINCT C.Delivery_ID, D.Supp_ID, C.Delivered_amount, C.Delivered_date, C.Term, C.Delivered_by FROM ware_house_product A,delivery_product B, delivery C, supplier D
		WHERE A.product_id = B.product_id AND B.delivery_id = C.delivery_id and C.Supp_ID = D.Supp_ID ";
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
	
		<!-- <div class="loader">
			<img src="images\preloader.gif" alt="Loading..." />
		</div> -->
	
		<div class="container-fluid custom-0">
			<div class="navbar navbar-default custom-1">
				<a class="text-dark navbar-brand" href="#"><span><img class="custom-12" src="..\images\icon-2.png"> Supply Hub</span></a>
				<ul class="nav li list-unstyled">
					<li class="nav-item pl-4 pr-4">
						<a href="profile.html" >Profile</a>
					</li >
					<li class="nav-item pl-4-pr-4">
						<a href="#">Sign-out</a>
					</li>
				</ul>
			</div>

			<div class= "custom-1 custom-2">
				<ul class="nav li list-unstyled d-flex justify-content-center custom-3">
					<li class="nav-item custom-3">
						<a href="manage_supply_supplier.php"><span ><i class="fas fa-box-open"></i> Manage Supply</span></a>
					</li>
					<li class="nav-item custom-3">
						<a href="purchase-order_supplier.php"><span ><i class="fas fa-list-alt"></i> Purchase Order</span></a>
					</li>
					<li class="nav-item custom-3">
					<a href="delivery_supplier.php"><span style="color: #FFD700"><i class="fas fa-truck"></i> Deliveries</span></a>
					</li>
				</ul>
			</div>
		</div>
		
		<div class="container-fluid d-flex custom-4">
			<div class="custom-5">
				<ul class="list-unstyled">
					<li class="custom-8">
						<a href="#"><span><i class="far fa-clock custom-7"></i> Pending</span></a>
					</li>
					<li class="custom-8">
						<a href="#"><span><i class="far fa-check-circle custom-7"></i>Confirmed</span></a>
					</li>
				</ul>
			</div>
			<div class="custom-6 container-fluid">
			<a class= href="#" class="custom-button">
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
				
<div class="card custom-11 d-flex">
  <div class="card-body">
    <div id="table" class="table-responsive">
			<div align="right">
				<button type="button" class=" btn-sm rounded-pill btn-outline-info" data-toggle="modal" data-target="#add_datamodal" name="add" id="add"><span><i class="fas fa-cart-plus"></i>  Add Delivery</span></button>
			</div>
      <table class="table table-bordered table-responsive-md table-striped text-center custom-14" width="200%">
        <thead class="thead-dark">
		<tr>
          <th class="text-center header-color">Delivery ID</th>
					<th class="text-center header-color">Supplier ID</th>
					<th class="text-center header-color">Delivered amount</th>
					<th class="text-center header-color">Delivered Date</th>
					<th class="text-center header-color">Term</th>
          <th class="text-center header-color">Delivered by</th>
					<th class="text-center header-color">Status</th>
          <th class="text-center header-color">Action</th>
        </tr>
        </thead>

	<?php
			while($rows = mysql_fetch_assoc($result))
			{
	?>
			<tr>
				<td>D-<?php echo $rows['Delivery_ID'] ?></td>
				<td>S-<?php echo $rows['Supp_ID'] ?></td>
				<td><?php echo $rows['Delivered_amount'] ?>pcs</td>
				<td><?php echo $rows['Delivered_date'] ?></td>
				<td><?php echo $rows['Term'] ?> Days</td>
				<td><?php echo $rows['Delivered_by'] ?></td>
				<td class="pt-3-half custom-13"><span class="badge badge-pill badge-success">Accepted</span></td>
				<td>
					<input type="button" class="btn btn-info btn-s btn primary view_data" name="view" id="<?php echo $rows["Delivery_ID"]; ?>" value = "View">
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="..\jquery\jquery-3.3.1.min.js"></script>
  <script src="..\popper-js\popper.min.js"></script>
  <script src="..\js\bootstrap.min.js"></script>
	<script src="..\js\JavaScript.js"></script>
	<script src="..\js\preloader.js"></script>
	
		
	</body>
</html>
<!------------------------------- Add Data --------------------------------------- -->
<div id="add_datamodal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title text-center">Create Delivery</h4><button type="button" class="close" data-dismiss="modal">&times;</button> 
			</div>
			<div class="modal-body">
				<form method="post" id="insert_form">
				<label><b>Products</b></label>
					<select name="product name" class="form-control" required>
									<option value="" disabled selected>Products</option>
									<option value='Milo'>Milo</option>
									<option value='Sabon'>Sabon</option>
									<option value='Cellphone'>Cellphone</option>
					</select>
					<br>
				<label><b>Terms</b></label>
					<input type="text" name="term" id="term" class="form-control" placeholder="Enter Days" required>
					<br>
					<label><b>Delivered by</b></label>
					<select name="Delivered by" class="form-control" required>
									<option value="" disabled selected>Staff</option>
									<option value='Monkey D Lufy'>Monkey D Lufy</option>
									<option value='Ronoa Zoro'>Ronoa Zoro</option>
									<option value='Nico Robin'>Nico Robin</option>
					</select>
					<br>
					<input type="submit" name="insert" id="insert" value="Create" class="btn btn-success"/>
				</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default btn-danger" data-dismiss="modal">Close</button>  
				</div>
		</div>
	</div>
</div>
<!-- --------------------------------------------- Show Data ------------------------------------------- -->
<div id="dataModal" class="modal fade">  
      <div class="modal-dialog modal-lg">  
           <div class="modal-content">  
                <div class="modal-header">   
                    <h4 class="modal-title text-center">Delivery Details</h4><button type="button" class="close" data-dismiss="modal">&times;</button>  
                </div>  
                <div class="modal-body" id="delivery_detail">  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default btn-danger" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>	
 <script>  
    $(document).ready(function(){  
        $('.view_data').click(function(){  
            var Delivery_ID = $(this).attr("id");  
            $.ajax({  
                url:"delivery_method.php",  
                method:"post",  
                data:{Delivery_ID:Delivery_ID},  
                success:function(data){  
                     $('#delivery_detail').html(data);  
                     $('#dataModal').modal("show");  
                }  
           });  
      });  
 });  
 </script>
