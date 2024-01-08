<div id="layoutSidenav_content">
	<div class="container-fluid">
		<div class="container-fluid px-4">
			<h1 class="mt-4">Admin</h1>
			<ol class="breadcrumb mb-4">
				<li class="breadcrumb-item"><a href="<?= base_url('Stock') ?>">Dashboard</a></li>
				<li class="breadcrumb-item active">Profile</li>
			</ol>
			<h1 class="h3 mb-4 text-gray-800">
				<?php echo $judul; ?>
			</h1>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6"><a href="<?= base_url('Profil/edit') ?>" class="btn btn-info mb-2">Edit Profile</a>
				</div>
			</div>
			<div class="card mb-3" style="max-width: 900px;">
				<div class="row no-gutters">
					<div class="col-md-4">
						<img src="<?= base_url('assets/img/profile/default.JPG'); ?>" alt=""
							style="max-width: 100%">
					</div>
					<div class="col-md-8">
						<div class="card-body">
							<h5 class="card-title">
								<?= $user['nama'] ?>
							</h5>
							<p class="card-text">
								<?= $user['email'] ?>
							</p>
							<p class="card-text"><small class="text-muted">Bergabung Sejak
									<?= date('Y-m-d', $user['date_created']) ?>
								</small></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
