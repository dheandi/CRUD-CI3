<div class="page-heading">
    <h3><?= $title ?></h3>
</div> 
<section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" action="<?= base_url('guru/tambah_aksi')?>" method="POST">
                            <div class="row">
                                <div class="col-12 mt-2">
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" class="form-control" placeholder="Masukan Nama Guru" name="nama_guru">
                                        <?= form_error('nama_guru', '<div class="text-small text-danger">', '</div>'); ?>
                                    </div>
                                </div>
                                <div class="col-12 mt-4">
                                    <div class="form-group">
                                        <label>NIP</label>
                                        <input type="text" class="form-control" placeholder="Masukan NIP" name="nip">
                                        <?= form_error('nip', '<div class="text-small text-danger">', '</div>'); ?>
                                    </div>
                                </div>
                                <div class="col-12 mt-4">
                                <div class="form-group">
                                    <label for="kelas">Kelas</label>
                                    <select class="form-control" id="kelas" name="kelas">
                                        <option value="" disabled selected>-- Pilih Kelas --</option>    
                                        <option value="Kelas 1">Kelas 1</option>
                                        <option value="Kelas 2">Kelas 2</option>
                                        <option value="Kelas 3">Kelas 3</option>
                                    </select>
                                    <?= form_error('kelas', '<div class="text-small text-danger">', '</div>'); ?>
                                </div>
                            </div>
                            <div class="col-12 d-flex mt-4 ">
                                <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>