<main role="main" class="container">
		<div class="card">
			<div class="card-header">Data Siswa</div>
			<div class="card-body">
				
				<button type="button" class="btn btn-primary" onclick="add_data()">
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
                            <a href="javascript:edit_data(<?php echo $row->kd_siswa; ?>" class="btn btn-warning">Edit</a>
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

<script>
function add_data()
{
	save_method = 'add';

	$('#createModal').modal('show'); //show bootstrap modal 
}

function save(save_method)
{
	if(save_method == 'add') {
		url = "<?php echo site_url('siswa/ajax_save')?>";
	} else {
		url = "<?php echo site_url('siswa/ajax_update')?>";
	}

	//ajax adding data to database
	var formData = new FormData($('#from')[0]);
	$.ajax({
		type: "POST",
		url: "url",
		data: formData,
		dataType: "JSON",
		contentType: false,
		processData: false,
		success: function (data) {
			//alert(data);
			if(data.status) //if success close modal and reload ajax table
			{
				alert('Data berhasil ditambahkan');
			}
			else
			{
				alert('Data tidak berhasil ditambahkan');
			}

		},
		error: function(jqXHR, textStatus, errorThrown)
		{
			alert('Error adding / Update data');
		}
	});
}

function edit_data(id)
{
	save_method = 'update';

	//ajax Load data from ajax
	$.ajax({
		url : "<?php echo site_url('siswa/ajak_edit')?>/" + id,
		type : "GET",
		dataType : "JSON",
		success: function(data)
		{
			$('[name="nama"]').val(data.nama);
			$('[name="jenis_kelamin]').val(data.jenis_kelamin);
			$('[name="tempat_lahir]').val(data.tempat_lahir);
			$('[name="tanggal_lahir]').val(data.tanggal_lahir);
			$('[name="no_telp]').val(data.no_telp);
			$('[name="alamat]').val(data.alamat);
		
		#
		$('createModal').modal('show'); // show bootstrap modal when complete loaded
		// $("#modal-title').text('Edit Jadwal Rutin Rumah'); // Set title to bootstrap modal
			
		},
		error: function (jqXHR, textStatus, errorThrown)
		{
			alert('Error get data from ajax');
		}

	});
}

function ajax_edit($kd_siswa)
    {
        echo json_encode($this->m_siswa->getbyId($kd_siswa));
    }

function load_table(){
	var url = "<?= base_url()?>/siswa/load_table";
	$('#contentTable').html('<i class="fa fa-spinner fa-2x fa-spin text-info"></i> Tunggu sebentar...');
	$.get(url).done(function (data){
		$("#contentTable").html(data);

	});
}
</script>