<?php

require('../../includes/init.php');
include pathOf('includes/header.php');
include pathOf('includes/navbar.php');

?>

	<div class="page-wrapper">
			<div class="page-content">
		<div class="section-authentication-cover">
			<div class="">
				<div class="row g-0">

					<div class="col-12 col-xl-7 col-xxl-8 auth-cover-left align-items-center justify-content-center d-none d-xl-flex">

                        <div class="card shadow-none bg-transparent shadow-none rounded-0 mb-0">
							<div class="card-body">
                                 <img src="<?= urlOf('assets/images/login-images/roomtype.jpg') ?>" class="img-fluid auth-img-cover-login" width="1000" alt=""/>
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
										<h5 class="">Update RoomType</h5>
									</div>
									<div class="form-body">
										<form class="row g-3">
											<div class="col-12">
												<label for="inputEmailAddress" class="form-label">Sr.No</label>
												<input type="text" class="form-control" id="id" >
											</div>
                                            <div class="col-12">
												<label for="inputEmailAddress" class="form-label">Name</label>
												<input type="text" class="form-control" id="name" >
											</div>
                                            <div class="col-12">
												<div class="d-grid">
													<button type="submit" class="btn btn-light">UPDATE</button>
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
include pathOf('includes/pageEnd.php');

?>
