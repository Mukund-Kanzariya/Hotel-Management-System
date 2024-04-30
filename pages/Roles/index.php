<?php

require ('../../includes/init.php');
include pathOf('includes/header.php');
include pathOf('includes/navbar.php');

$query="SELECT * FROM `roles`";
$row = select($query);

$index=0;
$userPermission;

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
							<button type="button" class="btn btn-light"><a href="Add.php">ADD ROLE</a></button>
					</div>
					
				</div>
				<!--end breadcrumb-->
				<h6 class="mb-0 text-uppercase">ROLES DATA</h6>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>Sr.No</th>
										<th>Role Name</th>
										<th>Modify</th>
										<th>Delete</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach($row as $data) {?>
									<tr>
										<td><?= $index++ ?></td>
										<td><?= $data['Name'] ?></td>
										<td><a href="Update.php" class="btn btn-primary active" aria-current="page">Update</a></td>
										<?php  if($userPermission['DeletePermission'] == 1) {?>
										<td><a href="../../api/Roles/delete.php?deleteid=<?= $data['Id']?>" class="btn btn-danger active" aria-current="page" onclick="deleteData(<?= $data['Id']?>)">Delete</a></td>
										<?php } ?>
									</tr>
									<?php }?>
								<tfoot>
								<tr>
										<th>Sr.No</th>
										<th>Role Name</th>
										<th>Modify</th>
										<th>Delete</th>
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
	function deleteData(id){
		confirmation = confirm("Are you sure you want to delte thid Role....????");
		if(!confirmation)
		return;

		$.post('../../api/Roles/delete.php'){
			id : id
		},
		success:function(response){
			if(response == 0)
			return window.location = '../../pages/Roles/index.php';

			window.alert("Role Deleted....!!!");
                window.location.href = '../../pages/Roles/index.php';

		}
	}
</script>


<?php

include pathOf('includes/pageEnd.php');

?>
