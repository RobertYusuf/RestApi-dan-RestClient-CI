<div class="container">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if ($this->session->flashdata('flash')) : ?>

    <?php endif; ?>

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>roomdeco/tambah" class="btn btn-primary">Tambah
                Data Aksesoris Dekorasi</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <h3>Data Aksesoris Dekorasi</h3>
            <?php if (empty($roomdeco)) : ?>
                <div class="alert alert-danger" role="alert">
                    data Aksesoris Dekorasi tidak ditemukan.
                </div>
            <?php endif; ?>
            <ul class="list-group">
                <?php foreach ($roomdeco as $rd) : ?>
                    <li class="list-group-item">
                        <p ><?= $rd['nama'];?></p>
                        <img src="<?= $rd['gambar']; ?>" height="150dp" alt="">
                        <div class="btn-group float-right " role="group" aria-label="Basic example">
                          <a href="<?= base_url(); ?>roomdeco/hapus/<?= $rd['id']; ?>" class="btn btn-danger btn-sm float-right tombol-hapus">Hapus Data</a>
                          <a href="<?= base_url(); ?>roomdeco/ubah/<?= $rd['id']; ?>" class="btn btn-success btn-sm float-right">Ubah Data</a>
                          <a href="<?= base_url(); ?>roomdeco/detail/<?= $rd['id']; ?>" class="btn btn-info btn-sm float-right">Detail Data</a>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

</div>
