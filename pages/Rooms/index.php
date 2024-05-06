<?php

require ('../../includes/init.php');

$query="SELECT rooms.Id,rooms.RoomNumber,rooms.Price,rooms.IsAvailable,roomtypes.Name AS RoomTypeId FROM `rooms` INNER JOIN  `roomtypes` ON rooms.RoomTypeId = roomtypes.Id";
$row=select($query);

// $query="SELECT * FROM `rooms`";
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
							<button type="submit" class="btn btn-light"><a href="Add">ADD ROOM</a></button>
					</div>
					
				</div>
				<!--end breadcrumb-->
				<h6 class="mb-0 text-uppercase">ROOMS DATA</h6>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>Sr.No</th>
										<th>RoomTypeId</th>
										<th>RoomNumber</th>
										<th>Price</th>
										<th>IsAvailable</th>
										<th>Modify</th>
										<th>Delete</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach($row as $data) {?>
									<tr>
										<td><?= $index++ ?></td>
										<td><?= $data['RoomTypeId'] ?></td>
										<td><?= $data['RoomNumber'] ?></td>
										<td><?= $data['Price'] ?></td>
										<td><?php if($data['IsAvailable']===1)
										echo "yes";
										else
										echo "no"
										?></td>
										<td><a href="Update.php?updateid=<?= $data['Id']?>" class="btn btn-primary active" aria-current="page">Update</a></td>
										<td><button class="btn btn-danger active" aria-current="page" onclick="deleteData(<?= $data['Id']?>)">Delete</button></td>
									</tr>
									<?php } ?>
								<tfoot>
								<tr>
										<th>Sr.No</th>
										<th>RoomTypeId</th>
										<th>RoomNumber</th>
										<th>Price</th>
										<th>IsAvailable</th>
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
		if(confirm("Are you sure you want to delete this Data...??"));

		$.post('../../api/Rooms/delete.php',{
			id:id,
			success:function(response){
				if(response==0)
				return window.location='../../pages/Rooms';

				window.alert("Data Deleted....!!");
				window.location.href='../../pages/Rooms';
			}
		})
	}
</script>

<?php

include pathOf('includes/pageEnd.php');

?>
