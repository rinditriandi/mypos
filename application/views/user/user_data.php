<div class="page-header">
	<h3 class="page-title"> Users</h3>
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Tables</a></li>
			<li class="breadcrumb-item active" aria-current="page">Basic tables</li>
		</ol>
	</nav>
</div>
<div class="col-md-12 mb-4">
    <div class="d-flex justify-content-center">
        <a href="<?php echo site_url('user/add'); ?>" class="btn btn-info btn-rounded btn-fw">
            Tambah
        </a>
    </div>
</div>
<div class="row">
	<div class="col-md-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<h4 class="card-title">Data User</h4>
               
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th>#</th>
								<th>Username</th>
								<th>Name</th>
								<th>Address</th>
                                <th>Level</th>
                                <th class="float-center">Actions</th>
							</tr>
						</thead>
						<tbody>
                            <?php $no = 1; 
                            foreach($row->result() as $key => $data) { ?>
							<tr>
                                <td><?= $no++ ?>.</td>
                                <td><?=$data->username ?></td>
                                <td><?=$data->name ?></td>
                                <td><?=$data->address ?></td>
                                <td><?=$data->level == 1 ? "Admin" : "Kasir" ?></td>
                                <td class="float-center">
                                    <a href="<?php echo site_url('user/edit'); ?>" class="btn btn-rounded btn-outline-info">
                                       Edit
                                    </a>
                                    <a href="<?php echo site_url('user/delete'); ?>" class="btn btn-rounded btn-outline-danger">
                                       Delete
                                    </a>
                                </td>
							</tr>
                            <?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
