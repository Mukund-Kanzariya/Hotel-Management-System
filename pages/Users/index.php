<?php

require ('../../includes/init.php');

$row=select("SELECT users.Id,users.Name,users.Salary,users.Email,users.Mobile,users.Address,users.City,users.State,roles.Name AS 'RoleId' FROM `users` INNER JOIN roles ON users.RoleId =roles.Id");
// $query="SELECT * FROM `users`";
// $row=select($query);
$index=1;
include pathOf('includes/header.php');
include pathOf('includes/navbar.php');

?>

		   <!--end header wrapper-->
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Tables</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Data Table</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
							<button type="button" class="btn btn-light"><a href="Add.php">ADD USER</a></button>
					</div>
					
				</div>
				<!--end breadcrumb-->
				<h6 class="mb-0 text-uppercase">USERS DATA</h6>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>Sr.No</th>
										<th>RoleName</th>
										<th>Name</th>
										<th>Salary</th>
										<th>E-mail</th>
										<th>Mobile</th>
										<th>Address</th>
										<th>City</th>
										<th>State</th>
										<th>Modify</th>
										<th>Permission</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach($row as $data) {?>
									<tr>
										<td><?= $index++ ?></td>
										<td><?= $data['RoleId'] ?></td>
										<td><?= $data['Name'] ?></td>
										<td><?= $data['Salary'] ?></td>
										<td><?= $data['Email'] ?></td>
										<td><?= $data['Mobile'] ?></td>
										<td><?= $data['Address'] ?></td>
										<td><?= $data['City'] ?></td>
										<td><?= $data['State'] ?></td>
										<td><a href="Update.php?updateid=<?= $data['Id']?>" class="btn btn-primary active" aria-current="page">Update</a></td>
										<form action="<?= urlOf('pages/Users/Permission') ?>" method="post">
											<input type="hidden" name="id" value="<?= $data['Id'] ?>">
											<td><button class="btn btn-primary" type="submit">Permission</button></td>									</tr>
										</form>
									<?php  }?>
								<tfoot>
								<tr>
										<th>Sr.No</th>
										<th>RoleName</th>
										<th>Name</th>
										<th>Salary</th>
										<th>E-mail</th>
										<th>Mobile</th>
										<th>Address</th>
										<th>City</th>
										<th>State</th>
										<th>Modify</th>
										<th>Permission</th>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>
	
<?php

include pathOf('includes/footer.php');
include pathOf('includes/scripts.php');
?>

<script>
	function deleteData(Id){
		if(confirm("Are you sure you want to delete this data......??"));

		$.post('../../api/Users/delete.php',{
			id:Id,
			response:function(response){

				window.alert("User Delete Successfully......!!!");
				window.location.href='../../pages/Users';

			}
		});
	}
</script>

<?php
include pathOf('includes/pageEnd.php');

?>
