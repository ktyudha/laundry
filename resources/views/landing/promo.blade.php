<br>
<br>
<section class="promo my-5" id="promo">
    <div class="container">
        <div class="row">
            <h1 class="text-center fw-bold">Promo Menarik</h1>
            <div class="owl-carousel owl-theme owl-lazy">
                @foreach ($promos as $promo)
                    <button type="button" class="border-0 bg-white text-dark"
                        data-bs-target="#myModal-{{ $promo->id }}" data-bs-toggle="modal">
                        <div class="item">
                            <div class="card border-0 mx-1 my-3" onmouseover="onMouseOver(this)"
                                onmouseout="onMouseOut(this)">
                                <div class="mt-3 mx-3">
                                    <img src="{{ asset('/storage/images/promo/' . $promo->image_url) }}"
                                        class="card-img-top rounded" alt="...">
                                </div>
                                <div class="card-body text-start">
                                    <h5 class="card-title fw-bold">{{ $promo->title }}</h5>
                                    <p class="card-text text-muted">{{ $promo->tagline }}</p>
                                    <p class="card-text fs-6 text-muted"><i class="fas fa-calendar-alt"></i> Status
                                        {{ $promo->status }}</p>
                                </div>
                            </div>
                        </div>
                    </button>
                @endforeach
            </div>
            @foreach ($promos as $promo)
                <div class="modal" id="myModal-{{ $promo->id }}">
                    <div class="modal-dialog modal-xl modal-dialog-centered">
                        <div class="modal-content">
                            <!-- Modal body -->
                            <div class="modal-body">
                                <button type="button" class="btn bg-white border-0 text-uppercase fw-bold"
                                    data-bs-dismiss="modal"><i class="fas fa-chevron-left"></i> Promo</button>
                                <div class="card border-0 my-3 me-3">
                                    <div class="row">
                                        <!-- IMAGE -->
                                        <div class="col-md-5">
                                            <img src="{{ asset('/storage/images/promo/' . $promo->image_url) }}"
                                                class="img-fluid rounded mt-2" alt="...">
                                            <span class="badge bg-light text-dark mt-3">
                                                <div class="row">
                                                    <div class="col-auto my-auto">
                                                        <span class="fs-5 text-primary">
                                                            <i class="fas fa-calendar-alt"></i>
                                                        </span>
                                                    </div>
                                                    <div class="col-auto text-start">
                                                        <span class="fw-normal text-uppercase">Status</span><br>
                                                        <span class="fw-semibold fs-6"> {{ $promo->status }}</span>
                                                    </div>
                                                </div>
                                            </span>
                                        </div>
                                        <!-- body -->
                                        <div class="col-md-7">
                                            <h3 class="fw-bold">{{ $promo->tagline }}</h3>
                                            <p>{!! $promo->body !!}</p>
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
            <div class="text-center">
                <a href="promo/">
                    <button class="btn btn-primary text-center mt-3 fw-semibold" type="submit" name="btnPromo"
                        id="btnPromo">Lihat Semua Promo</button>
                </a>
            </div>
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
