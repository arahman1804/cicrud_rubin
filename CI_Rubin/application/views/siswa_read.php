<main role="main" class="container">
		<div class="card">
			<div class="card-header">Data Siswa</div>
			<div class="card-body">
				
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createModal">
				  Create
				</button>
				</br>
				</br>
				<table class="table table-bordered">
					<tr>
						<th width="5%">No</th>
						<th>Nama</th>
						<th>Jenis Kelamin</th>
						<th>Tanggal Lahir</th>
						<th>Tempat Lahir</th>
						<th>Telp</th>
						<th>Alamat</th>
						<th>Action</th>
					</tr>
					<?php 
					$no = 1;
					foreach($siswa as $row)
					{
						?>
						<tr>
							<td widtd="5%"><?php echo $no++; ?></td>
							<td><?php echo $row->nama; ?></td>
							<td><?php echo $row->jenis_kelamin; ?></td>
							<td><?php echo $row->tanggal_lahir; ?></td>
							<td><?php echo $row->tempat_lahir; ?></td>
							<td><?php echo $row->no_telp; ?></td>
							<td><?php echo $row->alamat; ?></td>
                            <td>
                            <a href="<?php echo base_url(); ?>index.php/siswa/edit/<?php echo $row->kd_siswa; ?>" class="btn btn-warning">Edit</a>
							<a href="<?php echo base_url(); ?>index.php/siswa/delete/<?php echo $row->kd_siswa; ?>" class="btn btn-danger">Hapus</a>
							</td>
						</tr>
						<?php
					}
					?>
				</table>
			</div>
		</div>
</main>
<?php $this->load->view('siswa_create'); ?>
