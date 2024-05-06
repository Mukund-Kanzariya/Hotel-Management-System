<?php

require ('../../includes/init.php');



$query="SELECT guests.Id,guests.Name,guests.MobileNo,guests.Address,guests.Email,guests.InTime,guests.OutTime,guests.TotalPrice,guests.IdentityImageFile,rooms.RoomNumber AS AllotedRoomId FROM `guests` INNER JOIN `rooms` ON guests.AllotedRoomId=rooms.Id";
$row=select($query);
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
							<button type="button" class="btn btn-light"><a href="Add.php">ADD GUEST</a></button>
					</div>
					
				</div>
				<!--end breadcrumb-->
				<h6 class="mb-0 text-uppercase">GUESTS DATA</h6>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>Sr.No</th>
										<th>AllotedRoomNo</th>
										<th>Name</th>
										<th>Mobile</th>
										<th>Address</th>
										<th>E-mail</th>
										<th>CheckInTime</th>
										<th>CheckOutTime</th>
										<th>TotalPrice</th>
										<th>IdentityImageFile</th>
										<th>Modify</th>
										<th>Delete</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach($row as $data) {?>
									<tr>
										<td><?= $index++ ?></td>
										<td><?= $data['AllotedRoomId'] ?></td>
										<td><?= $data['Name'] ?></td>
										<td><?= $data['MobileNo'] ?></td>
										<td><?= $data['Address'] ?></td>
										<td><?= $data['Email'] ?></td>
										<td><?= $data['InTime'] ?></td>
										<td><?= $data['OutTime'] ?></td>
										<td><?= $data['TotalPrice'] ?></td>
										<td><?= $data['IdentityImageFile'] ?></td>
										<td><a href="Update.php?updateid=<?= $data['Id'] ?>" class="btn btn-primary active" aria-current="page">Update</a></td>
										<td><button type="submit" class="btn btn-danger active" aria-current="page" onclick="deleteData(<?= $data['Id'] ?>)">Delete</button></td>
									</tr>
									<?php } ?>
								<tfoot>
								<tr>
										<th>Sr.No</th>
										<th>AllotedRoomNo</th>
										<th>Name</th>
										<th>Mobile</th>
										<th>Address</th>
										<th>E-mail</th>
										<th>CheckInDate</th>
										<th>CheckOutDate</th>
										<th>TotalPrice</th>
										<th>IdentityImageFile</th>
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

		if(confirm("Are you sure you want to delete this data.....????"));

		$.post('../../api/Guests/delete.php',{
			id:id,
			success:function(response){
				if(response==0)
				return window.location='./index.php';

				window.alert("Guest Deleted....!!!!");
				window.location.href='./index.php';
			}
		});
	}
</script>


<?php

include pathOf('includes/pageEnd.php');

?>
