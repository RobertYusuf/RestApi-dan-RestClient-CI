<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Edit Data Peralatan Hardware
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $gamingsetup['id']; ?>">

                        <div class="form-group">
                          <label for="nama">Nama</label>
                          <input type="text" name="nama" class="form-control" id="nama" value="<?= $gamingsetup['nama']; ?>">
                          <small class="form-text text-danger"><?= form_error('nama'); ?></small>

                        </div>

                        <div class="form-group">
                            <label for="kategori">Kategori</label>
                            <select class="form-control" id="kategori" name="kategori">
                                <?php foreach ($kategori as $pr) : ?>
                                    <?php if ($pr == $gamingsetup['kategori']) : ?>
                                        <option value="<?= $pr; ?>" selected><?= $pr; ?></option>
                                    <?php else : ?>
                                        <option value="<?= $pr; ?>"><?= $pr; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="form-group">
                          <label for="harga">Harga Peralatan</label>
                          <input type="text" name="harga" class="form-control" id="harga" value="<?= $gamingsetup['harga']; ?>">
                          <small class="form-text text-danger"><?= form_error('harga'); ?></small>
                        </div>

                        <div class="form-group">
                          <label for="gambar">Link Gambar</label>
                          <input type="text" name="gambar" class="form-control" id="gambar" value="<?= $gamingsetup['gambar']; ?>">
                        </div>

                        <button type="submit" name="ubah" class="btn btn-primary float-right">Edit Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>
