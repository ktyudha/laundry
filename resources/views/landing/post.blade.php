<br>
<br>
<section class="Tempat mt-5" id="tempat">

    <div class="owl-informasi owl-carousel owl-theme owl-lazy my-0">
        @foreach ($posts as $post)
            <div class="item my-0">
                <img src="{{ asset('storage/images/post/' . $post->image_url) }}" class="mx-0 my-0 img-fluid"
                    alt="...">
                {{--  <p>{{ $post->name }}</p>  --}}
            </div>
        @endforeach
    </div>

</section>
