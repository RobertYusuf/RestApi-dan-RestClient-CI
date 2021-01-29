<div class="container">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>


    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>gamingsetup/tambah" class="btn btn-primary">Tambah
                Data Peralatan Hardware</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <h3>Data Peralatan Hardware</h3>
            <?php if (empty($gamingsetup)) : ?>
                <div class="alert alert-danger" role="alert">
                    data peralatan tidak ditemukan.
                </div>
            <?php endif; ?>
            <ul class="list-group">
                <?php foreach ($gamingsetup as $gs) : ?>
                    <li class="list-group-item">
                        <p><?= $gs['nama'];?></p>
                        <img src="  <?= $gs['gambar']; ?>" height="150dp" alt="">
                        <div class="btn-group float-right " role="group" aria-label="Basic example">
                          <a href="<?= base_url(); ?>gamingsetup/hapus/<?= $gs['id']; ?>" class="btn btn-danger btn-sm float-right tombol-hapus">Hapus Data</a>
                          <a href="<?= base_url(); ?>gamingsetup/ubah/<?= $gs['id']; ?>" class="btn btn-success btn-sm float-right">Ubah Data</a>
                          <a href="<?= base_url(); ?>gamingsetup/detail/<?= $gs['id']; ?>" class="btn btn-info btn-sm float-right">Detail Data</a>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

</div>
