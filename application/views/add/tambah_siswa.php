<div class="page-heading">
    <h3><?= $title ?></h3>
</div> 
<section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" action="<?= base_url('siswa/tambah_aksi')?>" method="POST">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" class="form-control" placeholder="Masukan Nama Siswa" name="nama_siswa">
                                        <?= form_error('nama_siswa', '<div class="text-small text-danger">', '</div>'); ?>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <textarea class="form-control" name="alamat_siswa" placeholder="Masukan Alamat Siswa"></textarea>
                                        <?= form_error('alamat', '<div class="text-small text-danger">', '</div>'); ?>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input type="date" class="form-control" placeholder="Masukan Tanggal Lahir Siswa" name="tgl_lahir">
                                            <?= form_error('tgl_lahir', '<div class="text-small text-danger">', '</div>'); ?>
                                        </div>
                                    </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label>Nomor HP</label>
                                        <input type="text" class="form-control" placeholder="Masukan Nomor HP Siswa" name="no_hp">
                                        <?= form_error('no_hp', '<div class="text-small text-danger">', '</div>'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-end">
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