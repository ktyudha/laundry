<section class="content" id="bookform">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements disabled -->
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">Custom Elements</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="../assets/db/authentication.php" method="post">
                            <div class="row">
                                <div class="col-sm-6">
                                    <!-- Data -->
                                    <div class="form-group">
                                        <label for="exampleInputNama">Nama</label>
                                        <input type="text" class="form-control" id="exampleInputNama" name="nama"
                                            placeholder="Nama" required>
                                    </div>
                                    <label for="exampleInputPaket">Paket</label>
                                    <!-- radio -->
                                    <div class="form-group">
                                        <div class="custom-control custom-radio">
                                            <input class="custom-control-input" type="radio" id="customRadio1"
                                                name="paket" value="Cuci basah">
                                            <label for="customRadio1" class="custom-control-label">Cuci Basah</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input class="custom-control-input" type="radio" id="customRadio2"
                                                name="paket" value="Cuci kering" checked>
                                            <label for="customRadio2" class="custom-control-label">Cuci Kering</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input class="custom-control-input" type="radio" id="customRadio3"
                                                name="paket" value="Setrika">
                                            <label for="customRadio3" class="custom-control-label">Setrika</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input class="custom-control-input" type="radio" id="customRadio4"
                                                name="paket" value="Cuci + Setrika">
                                            <label for="customRadio4" class="custom-control-label">Cuci +
                                                Setrika</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputCatatan">Catatan</label>
                                        <textarea class="form-control" name="catatan" id="exampleInputCatatan" cols="30" rows="3"
                                            placeholder="Catatan"></textarea>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="exampleInputBerat">Berat</label>
                                        <input type="number" class="form-control" id="exampleInputBerat" name="berat"
                                            placeholder="Berat" required>
                                    </div>
                                    <!-- checkbox -->
                                    <label for="exampleInputJenis">Jenis</label>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="custom-control custom-radio">
                                                    <input class="custom-control-input" type="radio"
                                                        id="customRadio11" name="jenis" value="Pakaian" checked>
                                                    <label for="customRadio11"
                                                        class="custom-control-label">Pakaian</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input class="custom-control-input" type="radio"
                                                        id="customRadio12" name="jenis" value="Bed Cover">
                                                    <label for="customRadio12" class="custom-control-label">Bed
                                                        Cover</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input class="custom-control-input" type="radio"
                                                        id="customRadio13" name="jenis" value="Seprei">
                                                    <label for="customRadio13"
                                                        class="custom-control-label">Seprei</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input class="custom-control-input" type="radio"
                                                        id="customRadio14" name="jenis" value="Selimut">
                                                    <label for="customRadio14"
                                                        class="custom-control-label">Selimut</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="custom-control custom-radio">
                                                    <input class="custom-control-input" type="radio"
                                                        id="customRadio15" name="jenis" value="Karpet">
                                                    <label for="customRadio15"
                                                        class="custom-control-label">Karpet</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input class="custom-control-input" type="radio"
                                                        id="customRadio16" name="jenis" value="Dll">
                                                    <label for="customRadio16" class="custom-control-label">Jenis
                                                        lain</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputTglAmbil">Tanggal Ambil</label>
                                        <input type="date" class="form-control" id="exampleInputTglAmbil"
                                            name="tgl_ambil" placeholder="Tanggal Ambil">
                                    </div>
                                    <div class="form-group text-right">
                                        <button class="btn btn-primary" type="submit" id="simpan"
                                            name="simpan"><i class="fas fa-save"></i> Simpan</button>
                                    </div>
                                </div>
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
