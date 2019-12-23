<div class="page-header">
	<h3 class="page-title"> Users</h3>
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Tables</a></li>
			<li class="breadcrumb-item active" aria-current="page">Basic tables</li>
		</ol>
	</nav>
</div>
<div class="row">
    <?php echo validation_errors(); ?>
	<div class="col-md-6 grid-margin stretch-card">
		<div class="card">
			<div class="card-header">
				Add User
                <button type="submit" class="btn btn-success float-right">save</button>
                <a href="<?php echo site_url('user'); ?>" class="btn btn-warning float-right mr-2"> back </a>
                <!-- <button type="submit" class="btn btn-success float-right">Back To List</button> -->
			</div>
			<div class="card-body">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <textarea name="addreaa" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="level">Level</label>
                    <select name="level" id="level" class="form-control">
                        <option value="">- Pilih -</option>
                        <option value="1">Admin</option>
                        <option value="2">Kasir</option>
                    </select>
                </div>
				
			</div>
		</div>
	</div>
</div>
