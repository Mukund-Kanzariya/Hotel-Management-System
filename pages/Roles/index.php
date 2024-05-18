<?php

require ('../../includes/init.php');

$UserId=$_SESSION['UserId'];
$permission=authenticate('Roles',$UserId);

$query="SELECT * FROM `roles`";
$row = select($query);

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
						<?php if($permission['AddPermission'] == 1) { ?>
							<button type="button" class="btn btn-light"><a href="Add">ADD ROLE</a></button>
						<?php } ?>
					</div>
					
				</div>
				<!--end breadcrumb-->
				<h6 class="mb-0 text-uppercase">ROLES DATA</h6>
				<hr/>
				<?php if($permission['ViewPermission'] == 1) {?>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>Sr.No</th>
										<th>Role Name</th>
										<?php if($permission['EditPermission'] == 1) {?>
										<th>Modify</th>
										<?php } ?>
										<?php if($permission['DeletePermission'] == 1) { ?>
										<th>Delete</th>
										<?php } ?>
									</tr>
								</thead>
								<tbody>
									<?php foreach($row as $data) {?>
									<tr>
										<td><?= $index++ ?></td>
										<td><?= $data['Name'] ?></td>
										<?php if($permission['EditPermission']==1) { ?>
										<td><a href="Update.php?updateid=<?= $data['Id']?>" class="btn btn-primary active" aria-current="page">Update</a></td>
										<?php } ?>
										<?php if($permission['DeletePermission'] == 1) { ?>
										<td><button class="btn btn-danger" type="button" onclick="deleteData(<?= $data['Id']?>)">Delete</button></td>
										<?php } ?>
									</tr>
									<?php }?>
								<tfoot>
								<tr>
								 		<th>Sr.No</th>
										<th>Role Name</th>
										<?php if($permission['EditPermission'] == 1) {?>
										<th>Modify</th>
										<?php } ?>
										<?php if($permission['DeletePermission'] == 1) { ?>
										<th>Delete</th>
										<?php } ?>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>
				<?php } ?>
	
<?php

include pathOf('includes/footer.php');
include pathOf('includes/scripts.php');

?>

<script>
    function deleteData(id){
		if(confirm("Are you sure you want to delete this data.....???"));

		$.post('../../api/Roles/delete.php',{
			id:id,
			success:function(response){
				if(response==0)
				return window.location='../../pages/Roles';

				window.alert("Data deleted Successfully.....");
				window.location.href='../../pages/Roles';
			}
		});

    }
</script>


<?php

include pathOf('includes/pageEnd.php');

?>
