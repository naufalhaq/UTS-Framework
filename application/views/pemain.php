<?php include('header.php'); ?>
	<div class="container-fluid">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<h1>Daftar Pemain</h1>	
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Nama Klub</th>
							<th>Nama Pemain</th>
							<th>Posisi</th>
							<th>Tanggal Lahir</th>
							<th>Action</th>
							</tr>
					</thead>
					<tbody>
	
					<?php foreach ($pemain_list as $key) { ?>
						<tr>
							<td><?php echo $key->namaKlub ?></td>
							<td><?php echo $key->nama ?></td>
							<td><?php echo $key->posisi ?></td>
							<td><?php echo $key->tanggal_lahir ?></td>
							</tr>

					<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
