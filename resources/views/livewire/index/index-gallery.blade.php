<section id="gallery" class="tm-section-gallery" >
    <div class="container">
        <div class="row">
            <div class="text-center col-12">
                <h2 class="tm-text-primary tm-section-title mb-4">Gallery</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="mx-auto tm-gallery-container">
                    <div class="grid tm-galler">
                        @foreach ($photos as $photo)
                            <figure class="effect-honey tm-gallery-item">
                                <img style="object-fit: cover; width:250px; height:300px;" src="{{Storage::disk("public")->url($photo->picture)}}" class="img-fluid">
                                <figcaption>
                                    <h2><i> <span></span></i></h2>
                                </figcaption>
                            </figure>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="{{ route('landscape.gallery') }}" type="button" class=" btn-gallery mt-4">View full gallery</a>
</section>

