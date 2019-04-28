<<<<<<< HEAD
<?php

    include_once ('dbconnector.php');
    $query = "SELECT DISTINCT C.Delivery_ID, D.Supp_ID, C.Delivered_amount, C.Delivered_date, C.Term, C.Delivered_by FROM ware_house_product A,delivery_product B, delivery C, supplier D
=======
<<<<<<< HEAD
<?php

    include_once ('dbconnector.php');
    $query = "SELECT C.Delivery_ID, D.Supp_ID, C.Delivered_amount, C.Delivered_date, C.Term, C.Delivered_by FROM ware_house_product A,delivery_product B, delivery C, supplier D
>>>>>>> b2aeef3b87025563810122c83efdfde58f42a3b3
		WHERE A.product_id = B.product_id AND B.delivery_id = C.delivery_id and C.Supp_ID = D.Supp_ID ";
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
						<a href="manage_supply.php"><span><i class="fas fa-box-open"></i> Manage Supply</span></a>
					</li>
					<li class="nav-item custom-3">
						<a href="purchase-order.php"><span><i class="fas fa-clipboard-list"></i> Purchase Orders</span></a>
					</li>
					<li class="nav-item custom-3">
						<a href="delivery.html"><span style="color: #FFD700"><i class="fas fa-truck"></i> Deliveries</span></a>
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
<<<<<<< HEAD
          			<th class="text-center header-color">Delivery ID</th>
					<th class="text-center header-color">Supplier ID</th>
					<th class="text-center header-color">Delivered amount</th>
					<th class="text-center header-color">Delivered Date</th>
					<th class="text-center header-color">Term</th>
          			<th class="text-center header-color">Delivered by</th>
          			<th class="text-center header-color">Action</th>
=======
          <th class="text-center">Delivery ID</th>
					<th class="text-center">Supplier ID</th>
					<th class="text-center">Delivered amount</th>
					<th class="text-center">Delivered Date</th>
					<th class="text-center">Term</th>
          <th class="text-center">Delivered by</th>
          <th class="text-center">Action</th>
>>>>>>> b2aeef3b87025563810122c83efdfde58f42a3b3
        </tr>
        <tr>

	<?php
			while($rows = mysql_fetch_assoc($result))
			{
	?>
			<tr>
				<td>D-<?php echo $rows['Delivery_ID'] ?></td>
				<td>D-<?php echo $rows['Supp_ID'] ?></td>
				<td><?php echo $rows['Delivered_amount'] ?>pcs</td>
				<td><?php echo $rows['Delivered_date'] ?></td>
				<td><?php echo $rows['Term'] ?> Days</td>
				<td><?php echo $rows['Delivered_by'] ?></td>
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
	<script src="jquery\jquery-3.3.1.min.js"></script>
    <script src="popper-js\popper.min.js"></script>
    <script src="js\bootstrap.min.js"></script>
	<script src="js\JavaScript.js"></script>
	<script src="js\preloader.js"></script>
		
	</body>
</html>
<div id="dataModal" class="modal fade">  
<<<<<<< HEAD
      <div class="modal-dialog modal-lg">  
=======
      <div class="modal-dialog">  
>>>>>>> b2aeef3b87025563810122c83efdfde58f42a3b3
           <div class="modal-content">  
                <div class="modal-header">   
                    <h4 class="modal-title text-center">Delivery Details</h4>  
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
<<<<<<< HEAD
=======
=======
<?php

    include_once ('dbconnector.php');
    $query = "SELECT * FROM Delivery";
    $result = mysql_query($query);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Title</title>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" type="text/css" href="font-awesome\fontawesome-free-5.8.1-web\css\all.css">
		<link rel="stylesheet" type="text/css" href="css\sample.css">
		<link rel="stylesheet" type="text/css" href="css\bootstrap.min.css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Baloo+Chettan" rel="stylesheet">
	 </head>
	<body>
	
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
						<a href="purchase-order.php"><span><i class="fas fa-clipboard-list"></i> Purchase Orders</span></a>
					</li>
					<li class="nav-item custom-3">
						<a href="#"><span><i class="fas fa-truck"></i> Deliveries</span></a>
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
					<li class="custom-8">
						<a href="#"><span><i class="fas fa-history custom-7"></i>History</span></a>
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
    <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Deliveries</h3>
    <div class="card-body">
        <div id="table" class="table-editable">
            <span class="table-add float-right mb-3 mr-2"><a href="#!" class="text-success"><i class="fas fa-plus fa-2x"
                aria-hidden="true"></i></a>
            </span>
            <table class="table table-bordered table-responsive-md table-striped text-center">
                <tr>
                    <th class="text-center">Delivery ID</th>
                    <th class="text-center">Supplier by</th>
                    <th class="text-center">Delivered date</th>
                    <th class="text-center">Delivered by</th>
                    <th class="text-center">Delivered amount</th>
                    <th class="text-center">Term</th>
                    <th class="text-center">Action</th>
                </tr>
            <?php
                while($rows = mysql_fetch_assoc($result))
                {
            ?>
                <tr>
                    <td><?php echo $rows['Delivery_ID'] ?></td>
                    <td><?php echo $rows['Supp_ID'] ?></td>
                    <td><?php echo $rows['Delivered_date'] ?></td>
                    <td><?php echo $rows['Delivered_by'] ?></td>
                    <td><?php echo $rows['Delivered_amount'] ?></td>
                    <td><?php echo $rows['Term'] ?></td>
                    <td>
                        <span class="table-remove"><button type="button" class="btn btn-primary btn-rounded btn-sm my-0">View</button></span>
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
		
	</body>
</html>
>>>>>>> a99da293826c109c5792783f1b4258a299f28b46
>>>>>>> b2aeef3b87025563810122c83efdfde58f42a3b3
