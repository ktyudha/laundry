<br>
<br>
<section class="servis my-5" id="servis">
    <div class="container">
        <div class="row">
            <h1 class="text-center fw-bold">Tipe</h1>
            <div class="owl-servis owl-carousel owl-theme owl-lazy">
                @foreach ($categories as $category)
                    <button type="button" class="border-0 bg-white text-dark"
                        data-bs-target="#myModalCategory-{{ $loop->iteration }}" data-bs-toggle="modal">
                        <div class="item">
                            <div class="card border-0 mx-1 my-3" onmouseover="onMouseOver(this)"
                                onmouseout="onMouseOut(this)">
                                <div class="mt-3 mx-3">
                                    <img src="{{ asset('storage/images/category/' . $category->image_url) }}"
                                        class="card-img-top rounded" alt="...">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title text-capitalize fw-bold">{{ $category->name }}</h5>
                                    <!-- <p class="card-text"><i class="fas fa-calendar-alt"></i> Berlaku hingga</p> -->
                                </div>
                            </div>
                        </div>
                    </button>
                @endforeach
            </div>

            @foreach ($categories as $category)
                <div class="modal" id="myModalCategory-{{ $loop->iteration }}">
                    <div class="modal-dialog modal-xl modal-dialog-centered">
                        <div class="modal-content">

                            <!-- Modal body -->
                            <div class="modal-body">
                                <button type="button" class="btn bg-white border-0 text-uppercase fw-bold"
                                    data-bs-dismiss="modal"><i class="fas fa-chevron-left"></i> servis</button>
                                <div class="card border-0 my-3 me-3">
                                    <div class="row">
                                        <!-- IMAGE -->
                                        <div class="col-md-5">
                                            <img src="{{ asset('storage/images/category/' . $category->image_url) }}"
                                                class="img-fluid rounded mt-2" alt="...">
                                            <span class="badge bg-light text-dark mt-3">
                                                <div class="row">
                                                </div>
                                            </span>
                                        </div>
                                        <!-- body -->
                                        <div class="col-md-7 my-auto">
                                            <h3 class="fw-bold">{{ $category->name }}</h3>
                                            <p>{{ $category->price }}</p>
                                            <a href="users-signin/">
                                                <button class="btn btn-primary text-center fw-bold mt-3"
                                                    type="submit">Pesan Sekarang</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<script>
    function onMouseOver(element) {
        element.classList.add("shadow");
    }

    function onMouseOut(element) {
        element.classList.remove("shadow");
    }
</script>
