<?php

require ('../../includes/init.php');

include pathOf('includes/header.php');
include pathOf('includes/navbar.php');

$id = $_POST['id'];
$permissions = select("SELECT modules.Name,permissions.AddPermission, permissions.EditPermission, permissions.DeletePermission, permissions.ViewPermission FROM permissions INNER JOIN users ON users.Id = permissions.UserId INNER JOIN modules ON modules.Id = permissions.ModuleId WHERE permissions.UserId = ?", [$id]);
$index = 0;

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
                                            <th>Sr No.</th>
                                            <th>Modules</th>
                                            <th>Add Permission</th>
                                            <th>Edit Permission</th>
                                            <th>View Permission</th>
                                            <th>Delete Permission</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($permissions as $permission): ?>
                                            <tr>
                                                <td><?= $index += 1 ?></td>
                                                <td><?= $permission['Name'] ?></td>
                                                <td><input class="form-check-input me-1" <?= $permission['AddPermission'] == 1 ? 'checked' : '' ?> type="checkbox" id="firstCheckbox">
                                                </td>
                                                <td><input class="form-check-input me-1" <?= $permission['EditPermission'] == 1 ? 'checked' : '' ?> type="checkbox" id="firstCheckbox">
                                                </td>
                                                <td><input class="form-check-input me-1" <?= $permission['ViewPermission'] == 1 ? 'checked' : '' ?> type="checkbox" id="firstCheckbox">
                                                </td>
                                                <td><input class="form-check-input me-1" <?= $permission['DeletePermission'] == 1 ? 'checked' : '' ?> type="checkbox" id="firstCheckbox">
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
								<tfoot>
								       <tr>
                                             <th>Sr No.</th>
                                             <th>Modules</th>
                                             <th>Add Permission</th>
                                             <th>Edit Permission</th>
                                             <th>View Permission</th>
                                             <th>Delete Permission</th>
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
