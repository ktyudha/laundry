<x-app-layout>
    <section class="content" id="add carousel">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <a href="{{ route('carousel.create') }}" class="btn btn-primary mb-3"><i
                                    class="nav-icon fas fa-plus"></i> Add</a>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($carousels as $carousel)
                                        <tr class="text-center">
                                            <td>{{ $loop->iteration }}</td>
                                            <td class="text-center"><img
                                                    src="/storage/images/carousel/{{ $carousel->image_url }}"
                                                    style="width:200px;"></td>
                                            <td>{{ $carousel->name }}</td>
                                            <td class="text-center text-capitalize">{{ $carousel->status }}</td>
                                            <td>
                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                    action="{{ route('carousel.destroy', $carousel) }}" method="POST">

                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="button" class="btn btn-warning" data-toggle="modal"
                                                        data-target="{{ '#exampleModalCenter' . $carousel->id }}">
                                                        Details
                                                    </button>

                                                    <a href="{{ route('carousel.edit', $carousel) }}"
                                                        class="btn btn-dark">Edit</a>

                                                    <button type="submit" class="btn btn-danger">Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        <div class="modal fade" id="{{ 'exampleModalCenter' . $carousel->id }}"
                                            tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered " role="document">
                                                <div class="modal-content">

                                                    {{--  modal body  --}}
                                                    <div class="modal-body">
                                                        <a href="{{ route('carousel.index') }}"
                                                            class="text-uppercase text-dark font-weight-semibold"
                                                            data-bs-dismiss="modal"><i class="fa fa-chevron-left"></i>
                                                            carousel</a>
                                                        <div class="border-0 my-3 me-3">
                                                            <img src="{{ 'storage/images/carousel/' . $carousel->image_url }}"
                                                                class="img-fluid rounded mt-2" alt="$carousel->title">
                                                            <div>
                                                                <p class="mt-3 text-capitalize">{{ $carousel->name }}
                                                                </p>
                                                                <span
                                                                    class="btn {{ $carousel->status == 'show' ? 'btn-success' : 'btn-danger' }} text-capitalize">
                                                                    {{ $carousel->status }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
