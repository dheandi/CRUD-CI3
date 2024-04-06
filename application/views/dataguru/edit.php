<form method="post" id="form">
    <div class="form-group">
        <label for="email">NamaGuru:</label>
        <input type="text" class="form-control" value="<?php echo $hasil->nama_guru; ?>" name="id_guru_baru" placeholder="Masukan NIM">
    </div>
    <div class="form-group">
         <label for="email">NIP:</label>
        <input type="text" class="form-control" value="<?php echo $hasil->nip; ?>" name="id_guru" placeholder="Masukan nama" >
    </div>
    <div class="form-group">
            <label>Kelas:</label>
        <select class="form-control" name="Kelas">
        <?php
            $jur[0]="";
            $jur[1]="";
            $jur[2]="";
            $jur[3]="";
            switch ($hasil->Kelas){
                case "TI" : $jur[0]="selected"; break;
                case 'SI' : $jur[1]="selected"; break;
                case 'TK' : $jur[2]="selected"; break;
                case 'MI' : $jur[3]="selected"; break;
            }
        ?>
            <option value="TI" <?php echo $jur[0]; ?>>kelas 1</option>
            <option value="SI" <?php echo $jur[1]; ?>>Kelas 2</option>
            <option value="TK" <?php echo $jur[2]; ?>>Kelas 3</option>
            <option value="MI" <?php echo $jur[3]; ?>>Kelas 4</option>
        </select>
    </div>
    <input type="hidden" name="ig_guru_lama" value="<?php echo $hasil->id_guru;?>">
    <button id="tombol_edit" type="button" class="btn btn-warning" data-dismiss="modal" >Edit</button>
</form>
<script type="text/javascript">
        $(document).ready(function(){
            $("#tombol_edit").click(function(){
                var data = $('#form').serialize();
                $.ajax({
                    type	: 'POST',
                    url	: "<?php echo base_url(); ?>/guru/editGuru",
                    data: data,
                    cache	: false,
                    success	: function(data){
                        $('#tampil').load("<?php echo base_url(); ?>/guru/tampilGuru");    
                    }
                });
            });
        });
</script> 