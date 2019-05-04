<?php
    include_once ('dbconnector.php');
    $query = "SELECT DISTINCT A.Pur_req_id, A.PR_date, A.requested_by from purchase_request A";
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
		</div>  -->
	
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
					<li class="nav-item custom-3 dropdown">
						<a href="#l" class="dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span style="color: #FFD700"><i class="fas fa-clipboard-list"></i> Purchase Request</span></a>
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
						<div clas>
						<form action="/action_page.php">
							<select size="1" placeholder="Sort by" name="" class="rounded-pill">
								<option value="" disabled selected>Sort by</option>
								<option value=''>Latest</option>
								<option value=''>Oldest</option>
							</select>
						</form>
						</div>
					</div>
					<form action="/action_page.php">
						<input class="rounded-pill" type="search" id="site-search" name="q" placeholder="  Search">
					</form>
				</div>
				
				<div class="card custom-11 d-flex">
				<div class="card-body">
				<div id="table" class="">
				<table class="table table-bordered table-responsive-md table-striped text-center custom-14" width="200%">
				<thead class="thead-dark">
				<tr>
                    <th class="text-center">Purchase Request ID</th>
                    <th class="text-center">Purchase Request Date</th>
                    <th class="text-center">Requested by</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Action</th>
        		</tr>
				</thead>
        <?php
            while($rows = mysql_fetch_array($result))
            {
        ?>
            <tr>
				<td>PR-<?php echo $rows['Pur_req_id'] ?></td>
				<td><?php echo $rows['PR_date'] ?></td>
                <td><?php echo $rows['requested_by'] ?></td>
				<td class="pt-3-half custom-13"><span class="badge badge-pill badge-success">Confirmed</span></td>
				<td>
					<input type="button" class="btn btn-info btn-s btn primary PR_data" name="view" id="<?php echo $rows["Pur_req_id"]; ?>" value = "View">
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

<!-- <div id="add_datamodal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title text-center">Create Purchase Order</h4><button type="button" class="close" data-dismiss="modal">&times;</button> 
			</div>
				<form method="post" id="insert_form">
					<label></label>
				</form>
		</div>
	</div>
</div> -->

<div id="dataModal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">	
                    <h4 class="modal-title text-center">Purchase Request Details</h4><button type="button" class="close" data-dismiss="modal">&times;</button>  
				</div>
					
                		<div class="modal-body" id="purchase_request_detail"> 
					  
				</div>
				<div>
					<form action="insert_PO.php" method="post" name="addform">
							<label><b>Prepared by:</b></label> 
								<select name="Prepname" required>
									<option value="" disabled selected>Staff</option>
									<option value='Monkey D Lufy'>Monkey D Lufy</option>
									<option value='Ronoa Zoro'>Ronoa Zoro</option>
									<option value='Nico Robin'>Nico Robin</option>
								</select>
							<label><b>Approved by:</b></label>
									<select name="Appname" required>
										<option value="" disabled selected>Manager</option>
										<option value='Monkey D Lufy'>Edward Newgate</option>
										<option value='Ronoa Zoro'>Gol D Roger</option>
										<option value='Nico Robin'>Senguoko Duddha</option>
									</select>
				</div> 
                <div class="modal-footer">
					<button type="submit" class="btn btn-default btn-success" formtarget="addform">Create PO</button> 
                    <button type="button" class="btn btn-default btn-danger" data-dismiss="modal">Close</button>  
				</div>
				</form>  
           </div>  
      </div>  
 </div>	

<script>  
    $(document).ready(function(){  	
        $('.PR_data').click(function(){  
            var Pur_req_id = $(this).attr("id"); 
            $.ajax({  
                url:"PR_method.php",  
                method:"POST",  
                data:{Pur_req_id:Pur_req_id},  
                success:function(data){  
                     $('#purchase_request_detail').html(data);  
                     $('#dataModal').modal("show");  
                }  
           });  
      });  
 });  
 </script>
