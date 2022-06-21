<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

    <!-- Content
    ============================================= -->
    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix ">
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-8">
                        <div class="masonry-thumbs grid-container grid-2" id="lightgallery">
                            @foreach ($photos as $photo)
                                <a href="{{Storage::disk("public")->url($photo->picture)}}">
                                    <img style="object-fit: cover; width:300px; height:500px;"
                                    src="{{Storage::disk("public")->url($photo->picture)}}" />
                                </a>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-2"></div>
                </div>
            </div>
        </div>
    </section><!-- #content end -->
</div>
