<nav class="navbar-default navbar-static-side" role="navigation">
	<div class="sidebar-collapse">
		<ul class="nav metismenu" id="side-menu">
			<li class="nav-header">
				<div class="dropdown profile-element">
					<img alt="image" class="rounded-circle"
						src="<?= base_url(); ?>static_files/img/profile_small.jpg" />
					<a data-toggle="dropdown" class="dropdown-toggle" href="#">
						<span class="block m-t-xs font-bold"><?php echo $this->fungsi->user_login()->name ?></span>
						<span class="text-muted text-xs block"><?php echo $this->fungsi->user_login()->username ?> <b
								class="caret"></b></span>
					</a>
					<ul class="dropdown-menu animated fadeInRight m-t-xs">
						<li><a class="dropdown-item" href="profile.html">Profile</a></li>
						<li><a class="dropdown-item" href="contacts.html">Contacts</a></li>
						<li><a class="dropdown-item" href="mailbox.html">Mailbox</a></li>
						<li class="dropdown-divider"></li>
						<li><a class="dropdown-item" href="<?= site_url('auth/logout'); ?>">Logout</a></li>
					</ul>
				</div>
				<div class="logo-element">
					IN+
				</div>
			</li>
			<li class="active">
				<a href="<?= site_url('dashboard'); ?>"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span></a>
			</li>
			<li>
				<a href="<?= site_url('supplier'); ?>"><i class="fa fa-truck"></i> <span class="nav-label">Suppliers</span></a>
			</li>
			<li>
				<a href="layouts.html"><i class="fa fa-users"></i> <span class="nav-label">Customers</span></a>
			</li>

			<li>
				<a href="#"><i class="fa fa-list"></i> <span class="nav-label">Products</span><span
						class="fa arrow"></span></a>
				<ul class="nav nav-second-level collapse">
					<li><a href="ecommerce_products_grid.html">Products grid</a></li>
					<li><a href="ecommerce_product_list.html">Products list</a></li>
					<li><a href="ecommerce_product.html">Product edit</a></li>
					<li><a href="ecommerce_product_detail.html">Product detail</a></li>
					<li><a href="ecommerce-cart.html">Cart</a></li>
					<li><a href="ecommerce-orders.html">Orders</a></li>
					<li><a href="ecommerce_payments.html">Credit Card form</a></li>
				</ul>
			</li>
			<li>
				<a href="#"><i class="fa fa-list-alt"></i> <span class="nav-label">Categories</span><span
						class="fa arrow"></span></a>
				<ul class="nav nav-second-level collapse">
					<li><a href="ecommerce_products_grid.html">Products grid</a></li>
					<li><a href="ecommerce_product_list.html">Products list</a></li>
					<li><a href="ecommerce_product.html">Product edit</a></li>
					<li><a href="ecommerce_product_detail.html">Product detail</a></li>
					<li><a href="ecommerce-cart.html">Cart</a></li>
					<li><a href="ecommerce-orders.html">Orders</a></li>
					<li><a href="ecommerce_payments.html">Credit Card form</a></li>
				</ul>
			</li>
			<li>
				<a href="#"><i class="fa fa-shopping-cart"></i> <span class="nav-label">Transaction</span><span
						class="fa arrow"></span></a>
				<ul class="nav nav-second-level collapse">
					<li><a href="ecommerce_products_grid.html">Sales</a></li>
					<li><a href="ecommerce_product_list.html">Stock In</a></li>
					<li><a href="ecommerce_product.html">Stock Out</a></li>
				</ul>
			</li>
			<li>
				<a href="#"><i class="fa fa-file-pdf-o"></i> <span class="nav-label">Reports</span><span
						class="fa arrow"></span></a>
				<ul class="nav nav-second-level collapse">
					<li><a href="ecommerce_products_grid.html">Sales</a></li>
					<li><a href="ecommerce_product_list.html">Stock</a></li>
				</ul>
			</li>
			<li>
				<?php if ($this->session->userdata('level') == 1) { ?>
				<a href="layouts.html"><i class="fa fa-diamond"></i> <span class="nav-label">Users</span></a>
				<?php } ?>

			</li>

		</ul>

	</div>
</nav>
