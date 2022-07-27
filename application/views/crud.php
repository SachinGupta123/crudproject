<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form</title>
		<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>


<div class="container">
	
<div class="col-md-12 grid-margin stretch-card mt-3">
						<div class="card">
							<div class="card-body">

								<h6 class="card-title">Form</h6>

								<form class="sub">
									<div class="row mb-3">
										<label for="exampleInputUsername2" class="col-sm-3 col-form-label">Username</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="exampleInputUsername2" placeholder="Email">
										</div>
									</div>
									<div class="row mb-3">
										<label for="exampleInputEmail2" class="col-sm-3 col-form-label">Email</label>
										<div class="col-sm-9">
											<input type="email" class="form-control" id="exampleInputEmail2" autocomplete="off" placeholder="Email">
										</div>
									</div>
									<div class="row mb-3">
										<label for="exampleInputMobile" class="col-sm-3 col-form-label">Mobile</label>
										<div class="col-sm-9">
											<input type="number" class="form-control" id="exampleInputMobile" placeholder="Mobile number">
										</div>
									</div>
									<div class="row mb-3">
										<label for="exampleInputPassword2" class="col-sm-3 col-form-label">Password</label>
										<div class="col-sm-9">
											<input type="password" class="form-control" id="exampleInputPassword2" autocomplete="off" placeholder="Password">
										</div>
									</div>

									<div class="row mb-3">
										<label for="exampleFormControlSelect1" class="col-sm-3 col-form-label form-label">Select Input</label>
										<div class="col-sm-9">
												<select class="form-select " id="exampleFormControlSelect1">
											<option selected="" disabled="">Select your age</option>
											<option>12-18</option>
											<option>18-22</option>
											<option>22-30</option>
											<option>30-60</option>
											<option>Above 60</option>
										</select>
										</div>
									
									</div>

									<div class="row mb-3">
										<label class="form-label col-sm-3 col-form-label" for="formFile">File upload</label>
										<div class="col-sm-9">
											<input class="form-control col-sm-9" type="file" id="formFile">
										</div>
										
									</div>

									<div class="row mb-3">
												<label for="exampleFormControlSelect1" class="col-sm-3 col-form-label form-label">Select Payment Option</label>
											<div class="d-block my-3 col-sm-9">
								          <div class="custom-control custom-radio">
								            <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked="" required="">
								            <label class="custom-control-label" for="credit">Credit card</label>
								          </div>
								          <div class="custom-control custom-radio">
								            <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required="">
								            <label class="custom-control-label" for="debit">Debit card</label>
								          </div>
								          <div class="custom-control custom-radio">
								            <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required="">
								            <label class="custom-control-label" for="paypal">PayPal</label>
								          </div>
								        </div>

									</div>

									<div class="row mb-3">
										<div class="col-sm-3"></div>
										<div class="custom-control custom-checkbox col-sm-9">
          <input type="checkbox" class="custom-control-input" id="same-address">
          <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
          <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="save-info">
          <label class="custom-control-label" for="save-info">Save this information for next time</label>
        </div>
        </div>
									</div>


									<div class="row mb-3">
										<div class="col-sm-3"></div>
										<div class="col-sm-9">
											<div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
										<label class="form-check-label" for="exampleCheck1">
											Remember me
										</label>
									</div>
										</div>
									</div>


									
									<button type="submit" class="btn btn-primary me-2">Submit</button>
									<button class="btn btn-secondary">Cancel</button>
								</form>

							</div>
						</div>
					</div>

</div>

<hr>
<div class="card container mt-5">
	<div class="card-body">
		<div class="table-responsive">
										<table class="table table-hover" id='empTable'>
											<thead>
												<tr>
													
													<th>Name</th>
													<th>Address</th>
													<th>contact_no</th>
													<th>sp_type</th>
													<th>socety_id</th>
													<th>action</th>
												</tr>
											</thead>
											<tbody>
											
											</tbody>
										</table>
								</div>
	</div>
</div>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<!-- Datatable CSS -->
<link href='//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css' rel='stylesheet' type='text/css'>

<!-- jQuery Library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Datatable JS -->
<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

	  <!-- Script -->
	  <script type="text/javascript">
     $(document).ready(function(){
        $('#empTable').DataTable({
          'processing': true,
          'serverSide': true,
          'serverMethod': 'post',
          'ajax': {
             'url':'<?=base_url()?>CrudController/empList'
          },
          'columns': [
             { data: 'name' },
             { data: 'address' },
             { data: 'contact_no' },
             { data: 'sp_type' },
             { data: 'society_id' },
			 { data: 'action' },
          ]
        });
     });

	 $(".sub").submit(function(event) {
			event.preventDefault();
			
			var table = $('#empTable').DataTable();
            table.ajax.reload();

			$.ajax({
	            url: "<?php echo base_url('CrudController/add_edit'); ?>",
	            data: $(".sub").serialize(),
	            type: "post",
	            async: false,
	            dataType: 'json',
	            success: function(response){
	              
	               
	                $('#empTable').DataTable().ajax.reload();
	              },
	           error: function()
	           {
	            alert("error");
	           }
          });
		});


		$(document).on("click",".edit",function() {

			var table = $('#empTable').DataTable();
    table.ajax.reload();

			//let a=$(this).attr("data-id")
       		// alert(a);
    	});

     </script>
</body>
</html>