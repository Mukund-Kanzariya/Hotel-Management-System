<?php

require('../../includes/init.php');

$permissions = authenticate('Guests', 1);
if ($permissions['AddPermission'] != 1)
    header('Location: ./index');


$query="SELECT Id,RoomNumber FROM `rooms`";
$row=select($query);

include pathOf('includes/header.php');
include pathOf('includes/navbar.php');

?>

	<!--wrapper-->
	<div class="page-wrapper">
			<div class="page-content">
		<div class="section-authentication-cover">
			<div class="">
				<div class="row g-0">

					<div class="col-12 col-xl-7 col-xxl-8 auth-cover-left align-items-center justify-content-center d-none d-xl-flex">

                        <div class="card shadow-none bg-transparent shadow-none rounded-0 mb-0">
							<div class="card-body">
                                 <img src="<?= urlOf('assets/images/login-images/guest.jpg') ?>" class="img-fluid auth-img-cover-login" width="1000" alt=""/>
							</div>
						</div>
						
					</div>

					<div class="col-12 col-xl-5 col-xxl-4 auth-cover-right bg-light align-items-center justify-content-center">
						<div class="card rounded-0 m-3 shadow-none bg-transparent mb-0">
							<div class="card-body p-sm-5">
								<div class="">
									<div class="mb-3 text-center">
										<img src="<?= urlOf('assets/images/logo-icon.png') ?>" width="60" alt="">
									</div>
									<div class="text-center mb-4">
										<h5 class="">Add Guest</h5>
									</div>
									<div class="form-body">
										<form class="row g-3">
											<div class="col-md-12">
											<label  class="form-label">AllotedRoomNo</label>
											<select id="allotedroomno" class="form-select" autofocus>
												<option selected>Choose RoomNumber...</option>
                                        	    <?php foreach($row as $data) {?>
												<option value="<?= $data['Id']?>"><?= $data['RoomNumber'] ?></option>
                                        	    <?php } ?>
											</select>
									    	</div>
                
											<div class="col-12">
												<label  class="form-label">Name</label>
													<input type="text" class="form-control border-end-0" id="name"  placeholder="Enter Name">
											</div>
                                            <div class="col-12">
												<label  class="form-label">Mobile No</label>
													<input type="text" class="form-control border-end-0" id="mobile"  placeholder="Enter Mobile No">
											</div>
                                            <div class="col-12">
												<label  class="form-label">Address</label>
													<input type="text" class="form-control border-end-0" id="address"  placeholder="Enter Address">
											</div>
                                            <div class="col-12">
												<label  class="form-label">E-mail</label>
													<input type="text" class="form-control border-end-0" id="email"  placeholder="Enter E-mail">
											</div>
											<div class="col-12">
												<label  class="form-label">CheckInDate</label>
													<input type="date" class="form-control border-end-0" id="intime" >
											</div> <div class="col-12">
												<label  class="form-label">CheckOutDate</label>
													<input type="date" class="form-control border-end-0" id="outtime"  >
											</div>
											<div class="col-12">
												<label  class="form-label">TotalPrice</label>
													<input type="text" class="form-control border-end-0" id="price"  placeholder="Enter TotalPrice">
											</div>
											<div class="col-12">
												<label  class="form-label">IdentityImageFile</label>
													<input type="file" class="form-control border-end-0" id="image"  placeholder="Enter IdentityImageFile">
											</div>
											
											
											<div class="col-12">
												<div class="d-grid">
												<button type="button" class="btn btn-light" onclick="sendData()">ADD </button>
												</div>
											</div>
											
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
				<!--end row-->
			</div>
		</div>
	</div>
	<!--end wrapper-->
	<!--start switcher-->
<?php

include pathOf('includes/footer.php');
include pathOf('includes/scripts.php');

?>

<script>
	function sendData() {
            var form = new FormData();
            form.append('allotedroomno', $('#allotedroomno').val());
            form.append('name', $('#name').val());
            form.append('mobile', $('#mobile').val());
            form.append('address', $('#address').val());
            form.append('email', $('#email').val());
            form.append('intime', $('#intime').val());
            form.append('outtime', $('#outtime').val());
            form.append('price', $('#price').val());
            form.append('image', $('#image')[0].files[0]);

            $.ajax({
                url: '../../api/Guests/insert.php',
                type: 'POST',
                data: form,
                processData: false,
                contentType: false,
                success: function(response) {
					// console.log(response.success);
                    if (response.success !== true)
                        return;

					window.alert("Guests Added.....");
					window.location.href='./index.php';
					
                }
            })
        }

</script>

<?php

include pathOf('includes/pageEnd.php');

?>
 