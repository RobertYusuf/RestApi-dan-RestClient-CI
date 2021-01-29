<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data Aksesoris Dekorasi
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $roomdeco['nama']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted">Kategori : <?= $roomdeco['kategori']; ?></h6>
                    <p class="card-text"> Harga : Rp.<?= $roomdeco['harga']; ?></p>
                    <img src="<?= $roomdeco['gambar']; ?>" height="200px" class="img-thumbnail" >
                    <a href="<?= base_url(); ?>roomdeco" class="btn btn-primary">Kembali</a>
                </div>
            </div>

        </div>
    </div>
</div>
