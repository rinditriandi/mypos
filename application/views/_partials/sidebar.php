<nav class="sidebar sidebar-offcanvas" id="sidebar">
	<div class="text-center sidebar-brand-wrapper d-flex align-items-center">
		<a class="sidebar-brand brand-logo" href="../../index.html"><img
				src="<?php echo base_url(); ?>assets/images/logo.svg" alt="logo" /></a>
		<a class="sidebar-brand brand-logo-mini pl-4 pt-3" href="../../index.html"><img
				src="../../../assets/images/logo-mini.svg" alt="logo" /></a>
	</div>
	<ul class="nav">
		<li class="nav-item mt-4">
			<a class="nav-link" href="<?php echo site_url('dashboard'); ?>">
				<i class="mdi mdi-home menu-icon"></i>
				<span class="menu-title">Dashboard</span>
			</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#">
				<i class="mdi mdi-truck menu-icon"></i>
				<span class="menu-title">Suppliers</span>
				<!-- <i class="menu-arrow"></i> -->
			</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" data-toggle="collapse" href="#sidebar-layouts" aria-expanded="false"
				aria-controls="sidebar-layouts">
				<i class="mdi mdi-account-search menu-icon"></i>
				<span class="menu-title">Customers</span>
				<!-- <i class="menu-arrow"></i> -->
			</a>
			<!-- <div class="collapse" id="sidebar-layouts">
						<ul class="nav flex-column sub-menu">
							<li class="nav-item"> <a class="nav-link"
									href="../../pages/layout/compact-menu.html">Compact menu</a></li>
							<li class="nav-item"> <a class="nav-link"
									href="../../pages/layout/sidebar-collapsed.html">Icon menu</a></li>
							<li class="nav-item"> <a class="nav-link"
									href="../../pages/layout/sidebar-hidden.html">Sidebar Hidden</a></li>
							<li class="nav-item"> <a class="nav-link"
									href="../../pages/layout/sidebar-hidden-overlay.html">Sidebar Overlay</a></li>
							<li class="nav-item"> <a class="nav-link"
									href="../../pages/layout/sidebar-fixed.html">Sidebar Fixed</a></li>
						</ul>
					</div> -->
		</li>
		<li class="nav-item">
			<a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
				<i class="mdi mdi-bulletin-board menu-icon"></i>
				<span class="menu-title">Products</span>
				<i class="menu-arrow"></i>
			</a>
			<div class="collapse" id="ui-basic">
				<ul class="nav flex-column sub-menu">
					<li class="nav-item"> <a class="nav-link"
							href="../../pages/ui-features/accordions.html">Categories</a></li>
					<li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/buttons.html">Units</a></li>
					<li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/badges.html">Items</a></li>
				</ul>
			</div>
		</li>
		<li class="nav-item">
			<a class="nav-link" data-toggle="collapse" href="#ui-advanced" aria-expanded="false"
				aria-controls="ui-advanced">
				<i class="mdi mdi-cart menu-icon"></i>
				<span class="menu-title">Transaction</span>
				<i class="menu-arrow"></i>
			</a>
			<div class="collapse" id="ui-advanced">
				<ul class="nav flex-column sub-menu">
					<li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/dragula.html">Sales</a></li>
					<li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/clipboard.html">Stock In</a>
					</li>
					<li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/context-menu.html">Stock
							Out</a></li>
				</ul>
			</div>
		</li>
		<li class="nav-item">
			<a class="nav-link" data-toggle="collapse" href="#reports" aria-expanded="false" aria-controls="reports">
				<i class="mdi mdi-file menu-icon"></i>
				<span class="menu-title">Reports</span>
				<i class="menu-arrow"></i>
			</a>
			<div class="collapse" id="reports">
				<ul class="nav flex-column sub-menu">
					<li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/dragula.html">Sales</a></li>
					<li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/clipboard.html">Stock</a>
					</li>
				</ul>
			</div>
		</li>
		<?php if ($this->session->userdata('level') == 1) { ?>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo site_url('user'); ?>">
					<i class="mdi mdi-account menu-icon"></i>
					<span class="menu-title">Users</span>
				</a>
			</li>
		<?php } ?>

		<li class="nav-item sidebar-actions">
			<div class="nav-link">
				<div class="mt-4">
					<!-- <div class="border-none">
								<p class="text-black">Notification</p>
							</div> -->
					<ul class="mt-2 pl-0">
                    <a class="nav-link" href="../../pages/apps/gallery.html">
				<i class="mdi mdi-logout menu-icon"></i>
				<span class="menu-title">Logout</span>
			</a>
					</ul>
				</div>
			</div>
		</li>
	</ul>
</nav>
