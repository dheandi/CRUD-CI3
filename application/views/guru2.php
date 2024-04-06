<?= $this->session->flashdata('pesan'); ?>

<div class="page-heading">
    <h3><?= $Tpage ?></h3>
</div> 

<section class="section">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">
                <a href="<?= base_url('guru/tambah') ?>" class="btn btn-primary "><i class="bi bi-plus"></i> Tambah Data</a>
            </h5>
        </div>
        <div class="card-body">
            <div class="table-responsive datatable-minimal">
                <table class="table" id="table2">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Guru</th>
                            <th>NIP</th>
                            <th>Kelas</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <?php 
                    $no = 1;
                    foreach($guru as $g) :
                    ?>
                    <tbody>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $g->nama_guru ?></td>
                            <td><?= $g->nip ?></td>
                            <td><?= $g->kelas ?></td>   
                            <td class="text-center">
                                <button data-bs-toggle="modal" data-bs-target="#editModal<?= $g->id_guru ?>" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></button>
                                <a href="<?= base_url('guru/delete/' . $g->id_guru) ?>" onclick="return confirm('Apakah Anda yakin akan menghapus data ini?')" class="btn btn-danger btn-sm"><i class="bi bi-trash3-fill"></i></a>
                            </td>
                        </tr>
                    </tbody>

                    <?php endforeach ?>
                </table>
            </div>
        </div>
    </div>

<!-- Modal -->

    <?php foreach($guru as $g) { ?>
    <div class="modal fade" id="editModal<?= $g->id_guru ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="form" action="<?= base_url('guru/edit_guru/' . $g->id_guru ) ?>" method="POST">
                        <div class="row">

                        <div class="col-12 mt-2">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control" placeholder="Masukan Nama Guru" name="nama_guru" value="<?= $g->nama_guru ?>">
                                <?= form_error('nama_guru', '<div class="text-small text-danger">', '</div>'); ?>
                            </div>
                        </div>
                        <div class="col-12 mt-4">
                            <div class="form-group">
                                <label>NIP</label>
                                <input type="text" class="form-control" placeholder="Masukan NIP" name="nip" value="<?= $g->nip ?>">
                                <?= form_error('nip', '<div class="text-small text-danger">', '</div>'); ?>
                            </div>
                        </div>
                        <div class="col-12 mt-4">
                        <div class="form-group">
                            <label for="kelas">Kelas</label>
                            <select class="form-control" id="kelas" name="kelas" value="<?= $g->kelas ?>">
                                <option value="" disabled selected>-- Pilih Kelas --</option>    
                                <option value="Kelas 1">Kelas 1</option>
                                <option value="Kelas 2">Kelas 2</option>
                                <option value="Kelas 3">Kelas 3</option>
                            </select>
                            <?= form_error('kelas', '<div class="text-small text-danger">', '</div>'); ?>
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


   
