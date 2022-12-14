<x-app-layout>
    <section class="content" id="add promo">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <a href="{{ route('promo.create') }}" class="btn btn-primary mb-3"><i
                                    class="nav-icon fas fa-plus"></i> Add</a>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($promos as $promo)
                                        <tr class="text-center">
                                            <td>{{ $loop->iteration }}</td>
                                            <td class="text-center"><img src="/storage/images/promo/{{ $promo->image_url }}"
                                                    style="width:200px;"></td>
                                            <td class="font-weight-bold">{{ $promo->title }}</td>
                                            <td class="text-center text-capitalize">{{ $promo->status }}</td>
                                            <td>
                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                    action="{{ route('promo.destroy', $promo) }}" method="POST">

                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="button" class="btn btn-warning" data-toggle="modal"
                                                        data-target="{{ '#exampleModalCenter' . $promo->id }}">
                                                        Details
                                                    </button>

                                                    <a href="{{ route('promo.edit', $promo) }}"
                                                        class="btn btn-dark">Edit</a>

                                                    <button type="submit" class="btn btn-danger">Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        <div class="modal fade" id="{{ 'exampleModalCenter' . $promo->id }}"
                                            tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                                                <div class="modal-content">

                                                    {{--  modal body  --}}
                                                    <div class="modal-body">
                                                        <a href="{{ route('promo.index') }}"
                                                            class="text-uppercase text-dark font-weight-semibold"
                                                            data-bs-dismiss="modal"><i class="fa fa-chevron-left"></i>
                                                            Promo</a>
                                                        <div class="border-0 my-3 me-3">
                                                            <div class="row">
                                                                {{--  <!-- IMAGE -->  --}}
                                                                <div class="col-md-5">
                                                                    <img src="{{ 'storage/images/promo/' . $promo->image_url }}"
                                                                        class="img-fluid rounded mt-2"
                                                                        alt="$promo->title">
                                                                    <span class="badge bg-light text-dark mt-3">
                                                                        <div class="row">
                                                                            <div class="col-auto my-auto">
                                                                                <span class="fs-5 text-primary">
                                                                                    <i class="fas fa-calendar-alt"></i>
                                                                                </span>
                                                                            </div>
                                                                            <div class="col-auto text-start">
                                                                                <span
                                                                                    class="fw-normal text-uppercase">Status</span><br>
                                                                                <span
                                                                                    class="fw-semibold fs-6 text-capitalize">{{ $promo->status }}</span>
                                                                            </div>
                                                                        </div>
                                                                    </span>
                                                                </div>
                                                                <!-- body -->
                                                                <div class="col-md-7">
                                                                    <h3 class="font-weight-bold">{{ $promo->title }}
                                                                    </h3>
                                                                    <p>{{ $promo->tagline }}</p>
                                                                    <p>{!! $promo->body !!}</p>
                                                                </div>
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
