<x-app-layout>
    <section class="content" id="add post">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements disabled -->
                    <div class="card card-secondary">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="row">

                                    <div class="col-md-4">
                                        <!-- Data -->
                                        <div class="form-group">
                                            <label for="name">Title</label>
                                            <input type="text" class="form-control" id="name" name="name"
                                                placeholder="Name" required>
                                        </div>
                                        <div class="form-group text-left">
                                            <button class="btn btn-primary" type="submit">Simpan</button>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="image">Image</label>
                                            <input type="file" class="form-control-file" name="image_url"
                                                id="image_url" onchange="previewImage()">
                                            <img class="img-preview img-fluid w-50 mt-3">
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
