<header class="main-header-top hidden-print">
	<a href="" class="logo"><img src="<?= site_url('assets/images/logo-jkt.png') ?>" alt="" class="ing-fluid able-logo" style="width: 40px;"></a>
	<nav class="navbar navbar-static-top">
		<a href="#!" data-toggle="offcanvas" class="sidebar-toggle"></a>
		<div class="navbar-custom-menu f-right">
			<ul class="top-nav">
				<li class="dropdown">
					<a href="#!" role="button">
						<!-- <span><img class="img-circle " src="assets/images/avatar-1.png" style="width:40px;" alt="User Image"></span> -->
						<?php if($this->session->userdata('tipe_user') == 'admin' || $this->session->userdata('tipe_user') == 'sekre') { ?>
						<span><b><?= $this->session->userdata('nama_user') ?></b> </span>
						<?php } else { ?>
							<span><b><?= $this->session->userdata('nama') ?></b> </span>
						<?php } ?>
					</a>
					<?php if ($this->session->userdata('tipe_user') == 'admin' || $this->session->userdata('tipe_user') == 'sekre') { ?>
						<a href="<?= base_url('admin/logout') ?>" role="button">
							<span><i class="icon-logout"></i> Logout</span>
						</a>
					<?php } else { ?>
						<a href="<?= base_url('user/logout') ?>" role="button">
							<span><i class="icon-logout"></i> Logout</span>
						</a>
					<?php } ?>
					<ul class="dropdown-menu settings-menu">
						<!-- <li><a href="#!"><i class="icon-settings"></i> Settings</a></li> -->
						<li><a href="#"><i class="icon-user"></i> Profile</a></li>
						<!-- <li><a href="#"><i class="icon-envelope-open"></i> My Messages</a></li> -->
						<li class="p-0">
							<div class="dropdown-divider m-0"></div>
						</li>
						<!-- <li><a href="#"><i class="icon-lock"></i> Lock Screen</a></li> -->
						<li><a href=""><i class="icon-logout"></i> Logout</a></li>

					</ul>
				</li>
			</ul>
		</div>
	</nav>
</header>
