@extends('frontend')
<div class="container">
    <div class="row justify-content-between mt-5">
        <div class="col-auto">
            <a href="/">
                <button type="button" class="bg-white border-0 text-uppercase fw-bold"><i class="fas fa-chevron-left"></i>
                    Promo</button>
            </a>
        </div>
        <div class="col-md-4">
            <form class="d-flex" role="search">
                <input class="form-control me-2" placeholder="Search" id="myPromo">
                <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>

    </div>
    <div class="row mt-3" id="container-promo">
        @foreach ($promos as $promo)
            <div class="col-md-4 myPromoCard" id="myPromoBody-{{ $promo->id }}">
                <button type="button" class="border-0 bg-white text-dark"
                    data-bs-target="#myModalPromo-{{ $promo->id }}" data-bs-toggle="modal">
                    <div class="card border-0 my-3" onmouseover="onMouseOver(this)" onmouseout="onMouseOut(this)">
                        <div class="mt-3 mx-3">
                            <img src="{{ asset('storage/images/promo/' . $promo->image_url) }}"
                                class="card-img-top rounded" alt="...">
                        </div>
                        <div class="card-body text-start">
                            <h5 class="card-title fw-bold">{{ $promo->title }}</h5>
                            <p class="card-text"><i class="fas fa-calendar-alt"></i> Berlaku hingga
                            </p>
                        </div>
                    </div>
                </button>
            </div>
        @endforeach
    </div>

    @foreach ($promos as $promo)
        <div class="modal" id="myModalPromo-{{ $promo->id }}">
            <div class="modal-dialog modal-xl modal-dialog-centered">
                <div class="modal-content">

                    <!-- Modal body -->
                    <div class="modal-body">
                        <button type="button" class="bg-white border-0 text-uppercase fw-bold"
                            data-bs-dismiss="modal"><i class="fas fa-chevron-left"></i>
                            Promo</button>
                        <div class="card border-0 my-3 me-3">
                            <div class="row">
                                <!-- IMAGE -->
                                <div class="col-md-5">
                                    <img src="{{ asset('storage/images/promo/' . $promo->image_url) }}"
                                        class="img-fluid rounded mt-2" alt="...">
                                    <span class="badge bg-light text-dark mt-3">
                                        <div class="row">
                                            <div class="col-auto my-auto">
                                                <span class="fs-5 text-primary">
                                                    <i class="fas fa-calendar-alt"></i>
                                                </span>
                                            </div>
                                            <div class="col-auto text-start">
                                                <span class="fw-normal text-uppercase">Berlaku
                                                    hingga</span><br>
                                                <span class="fw-semibold fs-6">{{ $promo->status }}</span>
                                            </div>
                                        </div>
                                    </span>
                                </div>
                                <!-- body -->
                                <div class="col-md-7">
                                    <h3 class="fw-bold">{{ $promo->tagline }}</h3>
                                    <p>{!! $promo->body !!}</p>
                                    <a href="../users-signin/">
                                        <button class="btn btn-primary text-center fw-bold mt-3" type="submit">Pesan
                                            Sekarang</button>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
    const promos = <?php echo json_encode($promos); ?>;

    function filterPromo(keyword) {
        {{--  console.log(promos.length);  --}}
        const filteredPromos = promos.filter(promo => promo.title.toLowerCase().indexOf(keyword) > -1);

        $(".myPromoCard").hide();
        for (const promo of filteredPromos) {
            {{--  console.log(promo.title);  --}}
            $("#myPromoBody-" + promo.id).show();
        }
        {{--  console.log(filteredPromos);  --}}
    }
    //hover card
    function onMouseOver(element) {
        element.classList.add("shadow");
    }

    function onMouseOut(element) {
        element.classList.remove("shadow");
    }

    $(document).ready(function() {
        $("#myPromo").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            if (value.length >= 3) {
                filterPromo(value);
            } else {
                $(".myPromoCard").show();
            }
            {{--  $("#myPromoBody button").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });  --}}
        });
    });
</script>
