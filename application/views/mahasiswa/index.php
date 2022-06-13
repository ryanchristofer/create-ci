<div class="container">
    <?php if ( $this->session->flashdata('flash') ) : ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data mahasiswa <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>mahasiswa/tambah" class="btn btn-primary">Tambah Data</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <h3>Daftar Mahasiswa<h>
            <ul class="list-group">
                <?php foreach( $mahasiswa as $mhs ) : ?>
                    <li class="list-group-item">
                        <?= $mhs['nama']; ?>
                        <a href="<?= base_url(); ?>mahasiswa/hapus/<?= $mhs['npm']; ?>" class="btn btn-danger float-end" onclick="return confirm('yakin?');">hapus</a>
                        <a href="<?= base_url(); ?>mahasiswa/detail/<?= $mhs['npm']; ?>" class="btn btn-primary float-end">detail</a>
                        <a href="<?= base_url(); ?>mahasiswa/update/<?= $mhs['npm']; ?>" class="btn btn-success float-end">update</a>
                    </li>
                <?php endforeach; ?>    
            </ul>
        </div>
    </div>
</div>