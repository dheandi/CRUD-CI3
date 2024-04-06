<?= $this->session->flashdata('pesan'); ?>

<div class="page-heading">
    <h3><?= $Tpage ?></h3>
</div> 
    <section class="section">
        <div class="card">
            <div class="card-header">
                <a href="<?= base_url('siswa/tambah') ?>" class="btn btn-primary "><i class="bi bi-plus"></i> Tambah Data</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Tanggal Lahir</th>
                                <th>Alamat</th>
                                <th>NO HP</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <?php 
                        $no = 1;
                        foreach($siswa as $s) :
                        ?>
                        <tbody>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $s->nama_siswa ?></td>
                                <td><?= $s->tgl_lahir ?></td>
                                <td><?= $s->alamat_siswa ?></td>
                                <td><?= $s->no_hp ?></td>
                                <td>
                                    <button data-bs-toggle="modal" data-bs-target="#edit<?= $s->id_siswa ?>" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></button>
                                    <a href="<?= base_url('siswa/delete/' . $s->id_siswa) ?>" onclick="return confirm('Apakah Anda yakin akan menghapus data ini?')" class="btn btn-danger btn-sm"><i class="bi bi-trash3-fill"></i></a>
                                </td>
                            </tr>
                        </tbody>

                        <?php endforeach ?>
                    </table>
                </div>
            </div>
        </div>

    <!-- Modal -->
    <?php foreach($siswa as $s) { ?>
    <div class="modal fade" id="edit<?= $s->id_siswa ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="form" action="<?= base_url('siswa/edit/' . $s->id_siswa ) ?>" method="POST">
                        <div class="row">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control" placeholder="Masukan Nama Siswa" name="nama_siswa" value="<?= $s->nama_siswa ?>">
                                <?= form_error('nama_siswa', '<div class="text-small text-danger">', '</div>'); ?>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date" class="form-control" placeholder="Masukan Tanggal Lahir Siswa" name="tgl_lahir" value="<?= $s->tgl_lahir ?>" >
                                <?= form_error('tgl_lahir', '<div class="text-small text-danger">', '</div>'); ?>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea class="form-control" name="alamat_siswa" placeholder="Masukan Alamat Siswa" > <?= $s->alamat_siswa ?> </textarea>
                                <?= form_error('alamat', '<div class="text-small text-danger">', '</div>'); ?>
                            </div>
                            <div class="form-group">
                                <label>Nomor HP</label>
                                <input type="text" class="form-control" placeholder="Masukan Nomor HP Siswa" name="no_hp" value="<?= $s->no_hp ?>" >
                                <?= form_error('no_hp', '<div class="text-small text-danger">', '</div>'); ?>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                            <button type="button" class="btn btn-secondary me-1 mb-1" data-bs-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>

    </section>

   