<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledbly="createModalLabel" arial-hidden="true">
<div class="model-dialog" role="document">
    <div class="model-content">
        <div class="model-header">
         <h5 class="modal-title" id="exampleModalLabel">Create Siswa</h5>
        </div>

        <div class="modal-body">

            <div class="card-body">
        
            <form action="<?php echo base_url(); ?>index.php/siswa/save" method="post">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama" >
                </div>

                <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                        <option value="pria">Pria</option>
                        <option value="wanita">Wanita</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="tempat_lahir">Tempat Lahir</label>
                    <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir">
                </div>
                
                <div class="form-group">
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input type="date" class="form-control datepicker" id="tanggal_lahir" name="tanggal_lahir">
                </div>

                <div class="form-group">
                    <label for="no_telp">No Telp</label>
                    <input type="number" class="form-control" name="no_telp" id="no_telp">               
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea class="form-control" name="alamat" id="alamat"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>

            </form>

            </div>
        </div>
    </div>
</div>
</div>
