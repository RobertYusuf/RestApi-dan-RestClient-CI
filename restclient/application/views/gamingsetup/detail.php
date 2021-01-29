<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data Hardware Komputer
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $gamingsetup['nama']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted">Kategori = <?= $gamingsetup['kategori']; ?></h6>
                    <p class="card-text">Harga : Rp. = <?= $gamingsetup['harga']; ?></p>
                      <img src=" <?= $gamingsetup["gambar"]?>" class="img-thumbnail" height="200px" >
                    <a href="<?= base_url(); ?>gamingsetup" class="btn btn-primary">Kembali</a>
                </div>
            </div>

        </div>
    </div>
</div>
