<?php

require ('../../includes/init.php');


$id = $_POST['id'];
$permissions = select("SELECT modules.Name,permissions.ModuleId,permissions.AddPermission, permissions.EditPermission, permissions.DeletePermission, permissions.ViewPermission FROM permissions INNER JOIN users ON users.Id = permissions.UserId INNER JOIN modules ON modules.Id = permissions.ModuleId WHERE permissions.UserId = ?", [$id]);

$index = 0;

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
					<!-- <div class="ms-auto">
							<button type="button" class="btn btn-light"><a href="Add.php">ADD USER</a></button>
					</div> -->
					
				</div>
				<!--end breadcrumb-->
				<h6 class="mb-0 text-uppercase">PERMISSIONS </h6>
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
                                                <input type="hidden" id="UserId" value="<?= $id ?>">
                                                <td><?= $index += 1 ?></td>
                                                <td><?= $permission['Name'] ?></td>
                                                <td><input class="form-check-input me-1" <?= $permission['AddPermission'] == 1 ? 'checked' : '' ?> type="checkbox" id="addpermission" onchange="addPermission(<?= $permission['ModuleId'] ?>,<?= $permission['AddPermission'] ?>)">
                                                </td>
                                                <td><input class="form-check-input me-1" <?= $permission['EditPermission'] == 1 ? 'checked' : '' ?> type="checkbox" id="editpermission" onchange="editPermission(<?= $permission['ModuleId']?>,<?= $permission['DeletePermission'] ?>)">
                                                </td>
                                                <td><input class="form-check-input me-1" <?= $permission['ViewPermission'] == 1 ? 'checked' : '' ?> type="checkbox" id="viewpermission" onchange="viewPermission(<?= $permission['ModuleId']?> , <?= $permission['ViewPermission'] ?>)">
                                                </td>
                                                <td><input class="form-check-input me-1" <?= $permission['DeletePermission'] == 1 ? 'checked' : '' ?> type="checkbox" id="deletepermission" onchange="deletePermission(<?= $permission['ModuleId'] ?> , <?= $permission['DeletePermission'] ?>)">
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
        function addPermission(moduleId, permission) {
            let addPermission = permission == 1 ? 0 : 1;

            let data = {
                userId: $('#UserId').val(),
                moduleId: moduleId,
                addPermission: addPermission
            }

            $.post('../../api/updatePermission.php?action=addPermission', data, function (response) {
                console.log(response.success);
                if (response.success !== true)
                    return;

                window.location.reload();
            });
        }

        function editPermission(moduleId, permission) {
            let editPermission = permission == 1 ? 0 : 1;
            
            let data = {
                userId: $('#UserId').val(),
                moduleId: moduleId,
                editPermission: editPermission
            }

            $.post('../../api/updatePermission.php?action=editPermission', data, function (response) {
                console.log(response.success);
                if (response.success !== true)
                    return;

                window.location.reload();
            });
        }

        function deletePermission(moduleId, permission) {
            let deletePermission = permission == 1 ? 0 : 1;

            let data = {
                userId: $('#UserId').val(),
                moduleId: moduleId,
                deletePermission: deletePermission
            }

            $.post('../../api/updatePermission.php?action=deletePermission', data, function (response) {
                console.log(response.success);
                if (response.success !== true)
                    return;

                window.location.reload();
            });
        }

        function viewPermission(moduleId, permission) {
            let viewPermission = permission == 1 ? 0 : 1;

            let data = {
                userId: $('#UserId').val(),
                moduleId: moduleId,
                viewPermission: viewPermission
            }

            $.post('../../api/updatePermission.php?action=viewPermission', data, function (response) {
                console.log(response.success);
                if (response.success !== true)
                    return;

                window.location.reload();
            });
        }
    </script><?php
include pathOf('includes/pageEnd.php');

?>
