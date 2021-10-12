<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm border-bottom-primary">
            <div class="card-header bg-white py-3">
                <div class="row">
                    <div class="col">
                        <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                            Tambah Data Pasien
                        </h4>
                    </div>
                    <div class="col-auto">
                        <a href="<?= base_url('barangkeluar') ?>" class="btn btn-sm btn-secondary btn-icon-split">
                            <span class="icon">
                                <i class="fa fa-arrow-left"></i>
                            </span>
                            <span class="text">
                                Kembali
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <?= $this->session->flashdata('pesan'); ?>
                <?= form_open('', [], ['id_barang_keluar' => $id_barang_keluar, 'user_id' => $this->session->userdata('login_session')['user']]); ?>
                				<div class="row form-group">
                    <label class="col-md-4 text-md-right" for="id_barang_masuk">Nama</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control">
                        <?= form_error('id_barang_masuk', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
								<div class="row form-group">
                    <label class="col-md-4 text-md-right" for="id_barang_masuk">Tanggal Lahir</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control">
                        <?= form_error('id_barang_masuk', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
								<div class="row form-group">
                    <label class="col-md-4 text-md-right" for="id_barang_masuk">Jenis Kelamin</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control">
                        <?= form_error('id_barang_masuk', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
								<div class="row form-group">
                    <label class="col-md-4 text-md-right" for="id_barang_masuk">Panjang Badan</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control">
                        <?= form_error('id_barang_masuk', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
								<div class="row form-group">
                    <label class="col-md-4 text-md-right" for="id_barang_masuk">Berat Badan</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control">
                        <?= form_error('id_barang_masuk', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
								<div class="row form-group">
                    <label class="col-md-4 text-md-right" for="id_barang_masuk">Nama Orang Tua</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control">
                        <?= form_error('id_barang_masuk', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col offset-md-4">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </div>
                <?= form_close(); ?>
            </div>
        </div>
    </div>
</div>