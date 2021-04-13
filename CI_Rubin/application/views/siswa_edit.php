<div class="container">
    <div class="card">
        <div class="card-header">Edit Siswa</div>

            <form action="<?php echo base_url(); ?>index.php/siswa/update" method="post">
                <input type="hidden" name="kd_siswa" id="kd_siswa" value="<?php echo $siswa->kd_siswa; ?>">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control" value="<?php echo $siswa->nama; ?>">
                </div>

                <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                        <option value="pria" <?php echo ($siswa->jenis_kelamin ? 'pria' : 'selected' ); ?>>Pria</option>
                        <option value="wanita" <?php echo ($siswa->jenis_kelamin ? 'wanita' : 'selected' ); ?>>Wanita</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="tempat_lahir">Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" value="<?php echo $siswa->tempat_lahir; ?>">
                </div>
                
                <div class="form-group">
                    <label for="tgl_lahir">Tanggal Lahir</label>
                    <input type="text" class="form-control datepicker" readonly name="tanggal_lahir" id="tanggal_lahir" value="<?php echo $siswa->tanggal_lahir; ?>">
                </div>

                <div class="form-group">
                    <label for="no_telp">No Telp</label>
                    <input type="number" name="no_telp" id="no_telp" class="form-control" value="<?php echo $siswa->no_telp; ?>">               
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" id="alamat" cols="30" rows="10" class="form-control"><?php echo $siswa->alamat; ?></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>

            </form>

            </div>
        </div>
    </div>
</div>
</div>
