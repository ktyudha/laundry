<br>
<br>
{{--  <br>  --}}
<section class="home" id="home">
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach ($carousels as $carousel)
                <div class="carousel-item {{ $loop->iteration == 1 ? 'active' : '' }}" id="carousel-{{ $carousel->id }}"
                    data-bs-interval="2000">
                    <img src="{{ asset('/storage/images/carousel/' . $carousel->image_url) }}" class="d-block w-100"
                        alt="...">
                </div>
            @endforeach
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    </div>
</section>
