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
                            <form action="{{ route('promo.update', $promo) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="col-sm-12" id="ckeditor">
                                            <label for="body" class="text-capitalize">body</label>
                                            <textarea id="summernote" class="summernote" name="body">{{ $promo->body }}</textarea>
                                            <div class="form-group text-left">
                                                <button class="btn btn-primary" type="submit" id="addPromo"
                                                    name="addPromo">Simpan</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <!-- Data -->
                                        <div class="form-group">
                                            <label for="image">Image</label>
                                            <input type="file" class="form-control-file" name="image_url"
                                                id="image_url" onchange="previewImage()">
                                            @if ($promo->image_url)
                                                <img src="{{ asset('storage/images/' . $promo->image_url) }}"
                                                    class="img-preview img-fluid w-50 mt-3">
                                            @else
                                                <img class="img-preview img-fluid w-50 mt-3">
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <input type="text" class="form-control" id="title" name="title"
                                                placeholder="Title" value="{{ $promo->title }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="tagline">Tagline</label>
                                            <textarea type="text" class="form-control" rows="3" id="tagline" name="tagline" required>{{ $promo->tagline }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="status" class="text-capitalize">status</label>
                                            <div>
                                                <div class="form-check form-check-inline">
                                                    <input {{ $promo->status == 'publish' ? 'checked' : '' }}
                                                        class="form-check-input" type="radio" name="status"
                                                        id="inlineRadio1" value="publish">
                                                    <label class="form-check-label" for="inlineRadio1">Publish</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input {{ $promo->status == 'archive' ? 'checked' : '' }}
                                                        class="form-check-input" type="radio" name="status"
                                                        id="inlineRadio2" value="archive">
                                                    <label class="form-check-label" for="inlineRadio2">Archive</label>
                                                </div>
                                            </div>
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
