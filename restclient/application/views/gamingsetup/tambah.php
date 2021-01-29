<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Tambah Data Peralatan Hardware
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="kategori">Kategori</label>
                            <select class="form-control" id="kategori" name="kategori">
                                <option value="Motherboard">Motherboard</option>
                                <option value="Processor">Processor</option>
                                <option value="GPU">GPU</option>
                                <option value="RAM">RAM</option>
                                <option value="Memory">Memory</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga Peralatan</label>
                            <input type="text" name="harga" class="form-control" id="harga">
                            <small class="form-text text-danger"><?= form_error('harga'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="gambar">Link Gambar</label>
                            <input type="text" name="gambar" class="form-control" id="gambar">
                            <small class="form-text text-danger"><?= form_error('gambar'); ?></small>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>
