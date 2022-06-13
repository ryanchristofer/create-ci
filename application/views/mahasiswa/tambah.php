<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Tambah Data Mahasiswa
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="npm">NPM</label>
                            <input type="number" name="npm" class="form-control" id="nrp">
                            <div class="form-text text-danger"><?= form_error('npm'); ?></div>
                        </div>
                        <div class="mb-3">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama">
                            <div class="form-text text-danger"><?= form_error('nama'); ?></div>
                        </div>
                        <div class="mb-3">
                            <label for="jurusan">Jurusan</label>
                            <input type="text" name="jurusan" class="form-control" id="jurusan">
                            <div class="form-text text-danger"><?= form_error('jurusan'); ?></div>
                        </div>
                        <div class="mb-3">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" class="form-control" id="alamat">
                            <div class="form-text text-danger"><?= form_error('alamat'); ?></div>
                        </div>
                        <div class="mb-3">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control" id="email">
                            <div class="form-text text-danger"><?= form_error('email'); ?></div>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-end">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>