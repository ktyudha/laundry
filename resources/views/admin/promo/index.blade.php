<x-app-layout>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">DataTable with default features</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <a href="" class="btn btn-primary mb-3"><i class="nav-icon fas fa-plus"></i> Add</a>
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($promos as $promo)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td class="text-center"><img src="images/" style="width:200px;"></td>
                            <td class="font-weight-bold">{{ $promo->title }}</td>
                            <td class="text-center">{{ $promo->status }}</td>
                            <td>
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                    action="{{ route('promo.destroy', $promo) }}" method="POST">

                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('promo.show', $promo) }}" class="btn btn-warning">Details</a>

                                    <a href="{{ route('promo.edit', $promo) }}" class="btn btn-dark">Edit</a>

                                    <button type="submit" class="btn btn-danger">Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
    </div>

    <!-- /.card -->



    <script>
        function onChangePromolStatus(element) {
            var elementId = element.id;
            var isChecked = $("#" + elementId).prop('checked');
            var promoStatus = isChecked ? 1 : 0;

            const elementIdStrArray = elementId.split("-");
            var carouselId = elementIdStrArray[1];

            $.get("promo/isshow.php?promoId=" + promoId + "&promoStatus=" + promoStatus, function(data, status) {
                // alert(data + " " + status);
            });

        }
    </script>
</x-app-layout>
