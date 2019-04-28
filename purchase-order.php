<<<<<<< HEAD
<?php

    include_once ('dbconnector.php');
    $query = "SELECT * from purchase_order A, purchase_order_product B, ware_house_product C
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
						<a href="manage_supply.php"><span><i class="fas fa-box-open"></i> Manage Supply</span></a>
					</li>
					<li class="nav-item custom-3">
						<a href="purchase-order.php"><span style="color: #FFD700"><i class="fas fa-clipboard-list"></i> Purchasing</span></a>
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
          <th class="text-center">Approved by</th>
          <th class="text-center">Prepared by</th>
					<th class="text-center">Estimated Cost</th>
					<th class="text-center">Date Approve</th>
		  <th class="text-center">Status</th>
          <th class="text-center">Action</th>
        </tr>
        <?php
            while($rows = mysql_fetch_array($result))
            {
        ?>
            <tr>
								<td>P0-<?php echo $rows['Pur_ord_id'] ?></td>
								<td><?php echo $rows['Approved_by'] ?></td>
                <td><?php echo $rows['Prepared_by'] ?></td>
								<td>₱<?php echo $rows['Estemated_cost'] ?></td>
								<td><?php echo $rows['Date_approved'] ?></td>
								<td class="pt-3-half custom-13"><span class="badge badge-pill badge-success">Confirmed</span></td>
								<td>
									<input type="button" class="btn btn-info btn-s btn primary view_data" name="view" id="<?php echo $rows["Pur_ord_id"]; ?>" value = "View">
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
                    <h4 class="modal-title text-center">Purchase Order Details</h4>  
                </div>  
                <div class="modal-body" id="purchase_order_detail">  
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
            var Pur_ord_id = $(this).attr("id");  
            $.ajax({  
                url:"PO_method.php",  
                method:"post",  
                data:{Pur_ord_id:Pur_ord_id},  
                success:function(data){  
                     $('#purchase_order_detail').html(data);  
                     $('#dataModal').modal("show");  
                }  
           });  
      });  
 });  
 </script>
=======
<?php

    include_once ('dbconnector.php');
    $query = "SELECT * FROM purchase_order";
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
				<a class="text-white navbar-brand" href="#"><span><img class="custom-12" src="images\icon-2.png">  Supply Hub</span></a>
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
					<li class="custom-8">
						<a href="#"><span><i class="fas fa-history custom-7"></i>History</span></a>
					</li>
				</ul>
			</div>
			<div class="custom-6 container-fluid">
				<div class="d-flex justify-content-between custom-9">
					<div class="dropdown">
						<form class="form-class" action="/action_page.php">
							<select size="1" placeholder="Sort by" name="" class="rounded-pill">
								<option value="" disabled selected>Sort by</option>
								<option value=''>Latest</option>
								<option value=''>Oldest</option>
							</select>
						</form>
					</div>
					<form class="form-class" action="/action_page.php">
						<input class="rounded-pill" type="search" id="site-search" name="" placeholder="  Search" autocomplete="off">
					</form>
				</div>
					<!-- Editable table -->
				<div class="card custom-11 d-flex">

  <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Purchase Order</h3>
  <div class="card-body">
    <div id="table" class="table-editable">
      <span class="table-add float-right mb-3 mr-2"><a href="#!" class="text-success"><i class="fas fa-plus fa-2x"
            aria-hidden="true"></i></a></span>
      <table class="table table-bordered table-responsive-md table-striped text-center">
        <tr>
          <th class="text-center">PO ID</th>
          <th class="text-center">Approved by</th>
          <th class="text-center">Prepared by</th>
          <th class="text-center">Estimated cost</th>
          <th class="text-center">Date approved</th>
          <th class="text-center">Supplier ID</th>
          <th class="text-center">Action</th>
        </tr>
        <?php
            while($rows = mysql_fetch_assoc($result))
            {
        ?>
            <tr>
                <td><?php echo $rows['Pur_ord_id'] ?></td>
                <td><?php echo $rows['Approved_by'] ?></td>
                <td><?php echo $rows['Prepared_by'] ?></td>
                <td><?php echo $rows['Estemated_cost'] ?></td>
                <td><?php echo $rows['Date_approved'] ?></td>
                <td><?php echo $rows['Supp_ID'] ?></td>
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

<!-- Editable table -->
			</div>
		</div>
		
	<!--Jquery, PopperJS and BootstrapJS-->	
	<script src="jquery\jquery-3.3.1.min.js"></script>
    <script src="popper-js\popper.min.js"></script>
    <script src="js\bootstrap.min.js"></script>
	<script src="js\JavaScript.js"></script>
	<script src="js\bootstrap-grid.css"></script>
		
	</body>
</html>
>>>>>>> a99da293826c109c5792783f1b4258a299f28b46
