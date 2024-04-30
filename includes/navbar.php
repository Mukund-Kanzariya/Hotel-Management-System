
<div class="header-wrapper">
    <header>
			<div class="topbar d-flex align-items-center">
				<nav class="navbar navbar-expand gap-3">
					<div class="topbar-logo-header d-none d-lg-flex">
						<div class="">
							<img src="<?=urlOf('assets/images/logo-icon.png')?>" class="logo-icon" alt="logo icon">
						</div>
						<div class="">
							<h4 class="logo-text">Hotelogix</h4>
						</div>
					</div>
					
					  <div class="top-menu ms-auto">
						<ul class="navbar-nav align-items-center gap-1">
							<li class="nav-item mobile-search-icon d-flex d-lg-none" data-bs-toggle="modal" data-bs-target="#SearchModal">
								<a class="nav-link" href="avascript:;"><i class='bx bx-search'></i>
								</a>
							</li>
						</ul>
					</div>	
					<div class="user-box dropdown px-3">
						<a class="d-flex align-items-center nav-link dropdown-toggle gap-3 dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							<img src="<?=urlOf('assets/images/avatars/avatar-2.png')?>" class="user-img" alt="user avatar">
							<div class="user-info">
								<p class="user-name mb-0">Pauline Seitz</p>
								<p class="designattion mb-0">Web Designer</p>
							</div>
						</a>
						<ul class="dropdown-menu dropdown-menu-end">
							<li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i class="bx bx-user fs-5"></i><span>Profile</span></a>
							</li>
							<li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i class="bx bx-cog fs-5"></i><span>Settings</span></a>
							</li>
							<li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i class="bx bx-home-circle fs-5"></i><span>Dashboard</span></a>
							</li>
							<li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i class="bx bx-dollar-circle fs-5"></i><span>Earnings</span></a>
							</li>
							<li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i class="bx bx-download fs-5"></i><span>Downloads</span></a>
							</li>
							<li>
								<div class="dropdown-divider mb-0"></div>
							</li>
							<li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i class="bx bx-log-out-circle"></i><span>Logout</span></a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
          </header>

		
		<div class="primary-menu">
			   <nav class="navbar navbar-expand-lg align-items-center">
				  <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
					 <div class="offcanvas-header border-bottom">
						<div class="d-flex align-items-center">
							<div class="">
								<img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
							</div>
							<div class="">
								<h4 class="logo-text">Dashtrans</h4>
							</div>
						</div>
					  <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
					 </div>
					<div class="offcanvas-body">
					  <ul class="navbar-nav align-items-center flex-grow-1">
							<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="<?=urlOf('pages/Roles')?>" >
								<div class="menu-title d-flex align-items-center">Roles</div>
								<div class="ms-auto dropy-icon"></div>
							</a>
							<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="<?=urlOf('pages/Users')?>">
								<div class="menu-title d-flex align-items-center">Users</div>
								<div class="ms-auto dropy-icon"></div>
							</a>
							<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="<?=urlOf('pages/Modules')?>" >
								<div class="menu-title d-flex align-items-center">Modules</div>
								<div class="ms-auto dropy-icon"></div>
							</a>
							<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="<?=urlOf('pages/Guests')?>" >
								<div class="menu-title d-flex align-items-center">Guests</div>
								<div class="ms-auto dropy-icon"></div>
							</a>
							<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="<?=urlOf('pages/Rooms')?>" >
								<div class="menu-title d-flex align-items-center">Rooms</div>
								<div class="ms-auto dropy-icon"></div>
							</a>
							<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="<?=urlOf('pages/RoomTypes')?>" >
								<div class="menu-title d-flex align-items-center">RoomTypes</div>
								<div class="ms-auto dropy-icon"></div>
							</a>
						  <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="<?=urlOf('pages/Expenses')?>" >
								<div class="menu-title d-flex align-items-center">Expenses</div>
								<div class="ms-auto dropy-icon"></div>
							</a>
							<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="<?=urlOf('pages/Permissions')?>" >
								<div class="menu-title d-flex align-items-center">Permissions</div>
								<div class="ms-auto dropy-icon"></div>
							</a>
					  </ul>
					</div>
				</nav>
			</div>
		</div>
	