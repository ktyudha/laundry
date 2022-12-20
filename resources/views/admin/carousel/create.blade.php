<x-app-layout>
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
                            <form action="{{ route('carousel.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <!-- Data -->
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" id="name" name="name"
                                                placeholder="Judul" required>
                                        </div>
                                        <div class="d-flex layout-flex">
                                            <div class="form-group mr-5">
                                                <label for="status" class="text-capitalize">status</label>
                                                <div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="status"
                                                            id="inlineRadio1" value="show">
                                                        <label class="form-check-label" for="inlineRadio1">Show</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input checked class="form-check-input" type="radio"
                                                            name="status" id="inlineRadio2" value="archive">
                                                        <label class="form-check-label"
                                                            for="inlineRadio2">Archive</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="image_url">Image</label>
                                                <input type="file" class="form-control-file" name="image_url"
                                                    id="image_url" onchange="previewImage()">
                                                <img class="img-preview img-fluid w-50 mt-3">
                                            </div>
                                        </div>
                                        <div class="form-group">
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
    <script>
        function previewImage() {

            const image = document.querySelector('#image_url');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
</x-app-layout>
