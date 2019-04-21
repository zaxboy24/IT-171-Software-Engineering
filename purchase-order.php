<?php

    include_once ('dbconnector.php');
    $query = "SELECT A.Pur_ord_id, C.product_name, A.prepared_by from purchase_order A, purchase_order_product B, ware_house_product C
		WHERE A.Pur_ord_id = B.Pur_ord_id and B.Product_ID = C.Product_ID";
    $result = mysql_query($query);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Supply Hub</title>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" type="text/css" href="font-awesome\fontawesome-free-5.8.1-web\css\all.css">
		<link rel="stylesheet" type="text/css" href="css\sample.css">
		<link rel="stylesheet" type="text/css" href="css\bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css\preloader.css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Baloo+Chettan" rel="stylesheet">
	 </head>
	<body>
	
		<div class="loader">
    <img src="images\preloader.gif" alt="Loading..." />
	</div>
	
		<div class="container-fluid custom-0">
			<div class="navbar navbar-default custom-1">
				<a class="text-dark navbar-brand" href="#"><span><img class="custom-12" src="images\icon-2.png"> Supply Hub</span></a>
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
						<a href="#"><span><i class="fas fa-box-open"></i> Manage Supply</span></a>
					</li>
					<li class="nav-item custom-3">
						<a href="purchase-order.html"><span style="color: #FFD700"><i class="fas fa-clipboard-list"></i> Purchase Orders</span></a>
					</li>
					<li class="nav-item custom-3">
						<a href="delivery.php"><span><i class="fas fa-truck"></i> Deliveries</span></a>
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
    <div id="table" class="">
      <table class="table table-bordered table-responsive-md table-striped text-center custom-14" width="200%">
        <tr>
          <th class="text-center">Purchase Order ID</th>
          <th class="text-center" id="product-name">Product Names</th>
          <th class="text-center">Prepared by</th>
		  <th class="text-center">Status</th>
          <th class="text-center">Action</th>
        </tr>
        <?php
            while($rows = mysql_fetch_assoc($result))
            {
        ?>
            <tr>
								<td>P0-<?php echo $rows['Pur_ord_id'] ?></td>
								<td><?php echo $rows['product_name'] ?></td>
                <td><?php echo $rows['prepared_by'] ?></td>
								<td class="pt-3-half custom-13"><span class="badge badge-pill badge-success">Confirmed</span></td>
								<td>
									<span class="table-remove"><button type="button" class="btn btn-primary btn-rounded btn-sm my-0" data-toggle="modal" data-target=".bd-example-modal-lg">View</button></span>
									<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
									<div class="modal-dialog modal-lg">
									<div class="modal-content">
								...
									</div>
									</div>
									</div>
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
	<script src="jquery\jquery-3.3.1.min.js"></script>
    <script src="popper-js\popper.min.js"></script>
    <script src="js\bootstrap.min.js"></script>
	<script src="js\JavaScript.js"></script>
	<script src="js\preloader.js"></script>
	
	</body>
</html>