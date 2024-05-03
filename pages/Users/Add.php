<?php

require('../../includes/init.php');

$query="SELECT * FROM `roles`";

$row=select($query);

include pathOf('includes/header.php');
include pathOf('includes/navbar.php');

?>


<div class="page-wrapper">
			<div class="page-content">

            <div class="row">
					<div class="col-xl-7 mx-auto">
						<h6 class="mb-0 text-uppercase">Basic Form</h6>
						<hr/>
						<div class="card border-top border-0 border-4 border-white">
							<div class="card-body p-5">
								<div class="card-title d-flex align-items-center">
									<div><i class="bx bxs-user me-1 font-22 text-white"></i>
									</div>
									<h5 class="mb-0 text-white">User Registration</h5>
								</div>
								<hr>
								<form class="row g-3">
                                <div class="col-md-4">
										<label for="inputState" class="form-label">RoleName</label>
										<select id="roleid" class="form-select">
											<option selected>Choose Role...</option>
                                            <?php foreach($row as $data) {?>
											<option value="<?= $data['Id'] ?>"><?= $data['Name'] ?></option>
                                            <?php } ?>
										</select>
									</div>	
									<div class="col-md-6">
										<label for="inputLastName" class="form-label">Name</label>
										<input  class="form-control" id="name" placeholder="Enter UserName">
									</div>
                                    <div class="col-md-6">
										<label for="inputLastName" class="form-label">Salary</label>
										<input  class="form-control" id="salary" placeholder="Enter Salary">
									</div>
									<div class="col-md-6">
										<label for="inputEmail" class="form-label">Email</label>
										<input type="email" class="form-control" id="email" placeholder="Enter E-mail">
									</div>
									<div class="col-md-6">
										<label  class="form-label">Mobile No.</label>
										<input  class="form-control" id="mobile"placeholder="Enter Mobile No.">
									</div>
									<div class="col-12">
										<label for="inputAddress" class="form-label">Address</label>
										<textarea class="form-control" id="address" placeholder="Address..." rows="3"></textarea>
									</div>
									
									<div class="col-md-6">
										<label for="inputCity" class="form-label">City</label>
										<input type="text" class="form-control" id="city" placeholder="Enter City">
									</div>
									<div class="col-md-6">
										<label for="inputState" class="form-label">State</label>
										<input type="text" class="form-control" id="state" placeholder="Enter State">
									</div>
									<div class="col-12">
										<button type="submit" class="btn btn-light px-5" onclick="sendData()">Register</button>
									</div>
								</form>
							</div>
						</div>
                        
                        <?php

include pathOf('includes/footer.php');
include pathOf('includes/scripts.php');
?>
<script>
function sendData(){
	// window.alert($('#roleid').val());check data jay chhe ke nai with jquery..
	$.ajax({
		url:'../../api/Users/insert.php',
		type:'POST',
		data: {
			roleid:$('#roleid').val(),
			name:$('#name').val(),
			salary:$('#salary').val(),
			email:$('#email').val(),
			mobile:$('#mobile').val(),
			address:$('#address').val(),
			city:$('#city').val(),
			state:$('#state').val()
		},
		success:function(response){
			if(response==0)
			// return window.location='../../pages/Users'; 

			window.alert("User Added........");
			window.location.href='../../pages/Users';
		}
	})
}
</script>
<?php
include pathOf('includes/pageEnd.php');
?>
