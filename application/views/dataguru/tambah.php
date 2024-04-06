<form method="post" id="form">
    <div class="form-group">
        <label for="email">Nama Guru :</label>
        <input type="text" class="form-control"  name="nama_guru" placeholder="Masukan NIM">
    </div>
    <div class="form-group">
         <label for="email">NIP:</label>
        <input type="text" class="form-control"  name="nip" placeholder="Masukan nama" >
    </div>
    <div class="form-group">
            <label>Kelas:</label>
        <select class="form-control" name="jurusan">
            <option value="TI">Kelas 1</option>
            <option value="SI">Kelas 2</option>
            <option value="TK">Kelas 3</option>
            <option value="MI">Kelas 4</option>
        </select>
    </div>
    <button id="tombol_tambah" type="button" class="btn btn-primary" data-dismiss="modal" >Tambah</button>
</form>
<script type="text/javascript">
        $(document).ready(function(){
            $("#tombol_tambah").click(function(){
                var data = $('#form').serialize();
                $.ajax({
                    type	: 'POST',
                    url	: "<?php echo base_url(); ?>/guru/simpanGuru",
                    data: data,
                    cache	: false,
                    success	: function(data){
                        $('#tampil').load("<?php echo base_url(); ?>/guru/tampilGuru");
                    }
                });
            });
        });
</script> 