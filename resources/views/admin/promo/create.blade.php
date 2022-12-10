<x-app-layout>
    <section class="content" id="add promo">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements disabled -->
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title">Promo - LaundryKu</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="../assets/db/authentication.php" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-auto">
                                        <!-- Data -->
                                        <div class="form-group">
                                            <label for="image">Image</label>
                                            <input type="file" class="form-control-file" name="image"
                                                id="image">
                                        </div>
                                        <div class="form-group">
                                            <label for="tagline">Judul</label>
                                            <input type="text" class="form-control" id="tagline" name="tagline"
                                                placeholder="Judul" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="tagline">Note</label>
                                            <textarea type="text" class="form-control" rows="3" id="note" name="note" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="masaberlaku">Masa berlaku</label>
                                            <input type="date" class="form-control" id="masaberlaku"
                                                name="masaberlaku" placeholder="masaberlaku" required>
                                        </div>
                                    </div>

                                    <div class="col-md-8">
                                        <div class="col-sm-12" id="ckeditor">
                                            <label for="deskripsi">Deskripsi</label>
                                            <textarea id="summernote" class="summernote" name="summernote"></textarea>
                                            <div class="form-group text-right">
                                                <button class="btn btn-primary" type="submit" id="addPromo"
                                                    name="addPromo">Simpan</button>
                                            </div>
                                        </div>
                                    </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col right -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>

</x-app-layout>
