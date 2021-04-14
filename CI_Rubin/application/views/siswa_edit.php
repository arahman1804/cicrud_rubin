<div class="modal_fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Siswa</h5>
            </div>

            <div class="modal-body">
                <div class="card-body">
                    <form method="post" action="<?php echo base_url(); ?>index.php/siswa/update">
                        <input type="hidden" class="form-control" id="kd_siswa" name="kd_siswa" value="<?php echo $siswa[0]["kd_siswa"]; ?>">

                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $siswa[0]["nama"]; ?>">
                        </div>

                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                <option value="pria" <?php echo ($siswa[0]["jenis_kelamin"] ? 'pria':'selected'); ?>>Pria</option>
                                <option value="wanita" <?php echo ($siswa[0]["jenis_kelamin"] ? 'wanita':'selected'); ?>>Wanita</option>
                            </select>
                        </div>    

                        <div class="form-group">
                            <label for="tempat_lahir">Tempat Lahir</label>
                            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?php echo $siswa[0]["tempat_lahir"]; ?>">
                        </div>                        
                        
                        <div class="form-group">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input type="date" class="form-control datepicker" id="tanggal_lahir" name="tanggal_lahir" value="<?php echo $siswa[0]["tanggal_lahir"]; ?>">
                        </div>   
                        
                        <div class="form-group">
                            <label for="no_telp">No Telp</label>
                            <input type="number" class="form-control" id="no_telp" name="no_telp" value="<?php echo $siswa[0]["no_telp"]; ?>">
                        </div>       
                        
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea class="form-control" id="alamat" name="alamat"><?php echo $siswa[0]["alamat"]; ?></textarea>
                        </div>  
                        
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="<?php echo base_url() ?>index.php/siswa/" class="btn btn-danger">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>