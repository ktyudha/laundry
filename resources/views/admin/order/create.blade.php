<x-app-layout>
    <section class="content" id="bookform">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements disabled -->
                    <div class="card card-secondary">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="{{ route('order.store') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <!-- Data -->
                                        <div class="form-group">
                                            <label for="exampleInputNama">Nama</label>
                                            <input type="text" class="form-control" id="exampleInputNama"
                                                name="name" placeholder="Nama" required>
                                        </div>
                                        <div class="row">
                                            <div class="col-md">
                                                <div class="form-group">
                                                    <label for="jumlah">Jumlah</label>
                                                    <input type="number" class="form-control" id="jumlah"
                                                        name="jumlah" placeholder="Berat minimal 3 Kg"
                                                        onchange="sumOfPrice()" required>
                                                </div>
                                            </div>
                                            <div class="col-md">
                                                <div class="form-group">
                                                    <label for="no_hp">No. Whatsapp</label>
                                                    <input type="text" class="form-control" id="no_hp"
                                                        name="no_hp" placeholder="085xxx" required>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="form-group text-left">
                                            <button class="btn btn-primary" type="submit" id="simpan"
                                                name="simpan">Simpan</button>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md">
                                                <div class="form-group">
                                                    <label for="category">Kategori</label>
                                                    <select class="form-control" id="category_id" name="category_id"
                                                        onchange="sumOfPrice()" required>
                                                        <option selected disabled>-- pilih kategori --
                                                        </option>
                                                        @foreach ($categories as $category)
                                                            <option value="{{ $category->id }}" class="text-capitalize">
                                                                {{ $category->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="category">Status</label>
                                                    <select class="form-control" id="status" name="status" required>
                                                        <option value="queue" class="text-capitalize" selected>Queue
                                                        </option>
                                                        <option value="proccess" class="text-capitalize">proccess
                                                        </option>
                                                        <option value="finish" class="text-capitalize">finish</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md">
                                                <div class="form-group">
                                                    <label for="paket">Paket</label>
                                                    <select class="form-control" id="paket_id" name="paket_id"
                                                        required>
                                                        <option selected disabled>-- pilih paket --</option>
                                                        @foreach ($pakets as $paket)
                                                            <option class="text-capitalize" value="{{ $paket->id }}">
                                                                {{ $paket->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="sumofprice">Total harga</label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">Rp</span>
                                                        </div>
                                                        <input type="text" class="form-control" id="sumofprice"
                                                            name="sumofprice" placeholder="0" disabled readonly>
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
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>

    <script>
        var categories = <?php echo json_encode($categories); ?>;
        console.log(categories);

        function sumOfPrice() {
            var price = 0;
            var categoryId = $('#category_id option:selected').val();
            var category = categories.find(obj => {
                return obj.id == categoryId
            });
            if (category != null) {
                price = category.price;
            }

            var jumlah = $('#jumlah').val() || 0;
            var total = price * jumlah;

            $('#sumofprice').val(total);
        }
    </script>
</x-app-layout>
