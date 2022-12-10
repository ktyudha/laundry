<section class="content" id="add carousel">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements disabled -->
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">Edit Carousel</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="../assets/db/authentication.php" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="image">Image</label>
                                        <input type="file" class="form-control-file" name="image" id="image">
                                    </div>
                                    <!-- Data -->
                                    <div class="form-group">
                                        <label for="tagline">Judul</label>
                                        <input type="text" class="form-control" id="tagline" name="tagline"
                                            placeholder="Judul" required>
                                    </div>
                                </div>

                                <div class="col-sm-6">

                                    <div class="form-group">
                                        <label for="deskripsi">Deskripsi</label>
                                        <textarea class="form-control" name="deskripsi" type="text" id="deskripsi" rows="4" placeholder="deskripsi"
                                            required></textarea>
                                    </div>
                                    <!-- checkbox -->
                                    <div class="form-group text-right">
                                        <button class="btn btn-primary" type="submit" id="addCarousel"
                                            name="addCarousel">Simpan</button>
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
