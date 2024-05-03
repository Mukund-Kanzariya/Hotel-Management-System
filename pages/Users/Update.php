<?php

require('../../includes/init.php');


$query1="SELECT * FROM `roles`";
$row=select($query1);

$id=$_GET['updateid'];

$query2="SELECT * FROM `users` WHERE Id=?";
$param=[$id];
$data=selectOne($query2,$param);

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
									<input type="text" id="id" value="<?= $id ?>"> 
                                <div class="col-md-6">
										<label for="inputState" class="form-label">RoleName</label>
										<select id="roleid" class="form-select">
											<option selected>Choose Role...</option>
                                            <?php foreach($row as $row1) {?>
											<option value="<?= $row1['Id'] ?>"><?= $row1['Name'] ?></option>
                                            <?php } ?>
										</select>
									</div>
									<div class="col-md-6">
										<label  class="form-label">Name</label>
										<input  class="form-control" id="name" value="<?= $data['Name'] ?>">
									</div>
                                    <div class="col-md-6">
										<label  class="form-label">Salary</label>
										<input  class="form-control" id="salary" value="<?= $data['Salary']?>">
									</div>
									<div class="col-md-6">
										<label for="inputEmail" class="form-label">Email</label>
										<input type="email" class="form-control" id="email" value="<?= $data['Email']?>">
									</div>
									<div class="col-md-6">
										<label  class="form-label">Mobile No.</label>
										<input  class="form-control" id="mobile" value="<?= $data['Mobile']?>">
									</div>
									<div class="col-12">
										<label  class="form-label">Address</label>
										<input class="form-control" id="address" rows="3" value="<?= $data['Address'] ?>">
									</div>
									
									<div class="col-md-6">
										<label  class="form-label">City</label>
										<input type="text" class="form-control" id="city" value="<?= $data['City']?>">
									</div>
									<div class="col-md-6">
										<label  class="form-label">State</label>
										<input type="text" class="form-control" id="state" value="<?= $data['State']?>">
									</div>
									<div class="col-12">
										<button type="submit" class="btn btn-light px-5" onclick="updateData()">Save Changes</button>
									</div>
								</form>
							</div>
						</div>
                        
                        <?php

include pathOf('includes/footer.php');
include pathOf('includes/scripts.php');
?>
<script>
function updateData(){
	// window.alert($('#state').val());
	// check data jay chhe ke nai with jquery..
	$.ajax({
		url:'../../api/Users/update.php',
		type:'POST',
		data: {
			id:$('#id').val(),
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

			window.alert("User updated successfully........");
			window.location.href='../../pages/Users';
		}
	})
}
</script>
<?php
include pathOf('includes/pageEnd.php');
?>
