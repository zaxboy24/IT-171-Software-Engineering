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
		<link rel="stylesheet" type="text/css" href="fontawesome-free-5.8.1-web\css\all.css">
		<link rel="stylesheet" type="text/css" href="css\sample.css">
		<link rel="stylesheet" type="text/css" href="css\bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css\preloader.css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Baloo+Chettan" rel="stylesheet">
	 </head>
	<body>
	
		<!-- <div class="loader">
			<img src="images\preloader.gif" alt="Loading..." />
		</div> -->
	
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
						<a href="manage_supply.php"><span style="color: #FFD700"><i class="fas fa-box-open"></i> Manage Supply</span></a>
					</li>
					<li class="nav-item custom-3 dropdown">
						<a href="#l" class="dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span ><i class="fas fa-clipboard-list"></i> Purchasing</span></a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item text-dark" href="purchase-request.php">Purchase Request</a>
							<a class="dropdown-item text-dark" href="purchase-order.php">Purchase Orders</a>
						</div>
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
						<a class= href="#" class="custom-button"><button type="button" class=" btn-sm rounded-pill btn-outline-info" data-toggle="modal" data-target=".bd-example-modal-lg"><span><i class="fas fa-cart-plus"></i>  Add Supply</span></button></a>
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
	<script src="jquery\jquery-3.3.1.min.js"></script>
    <script src="popper-js\popper.min.js"></script>
    <script src="js\bootstrap.min.js"></script>
	<script src="js\JavaScript.js"></script>
	<script src="js\preloader.js"></script>
		
	</body>
</html>
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