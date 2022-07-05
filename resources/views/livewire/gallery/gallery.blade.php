<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

    <!-- Content
    ============================================= -->
    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix ">
                <div style="display: grid; row-gap:20px; grid-template-columns: auto auto auto; margin:3rem 0 3rem 0;" id="lightgallery">
                    @foreach ($photos as $photo)
                        <a href="{{Storage::disk("public")->url($photo->picture)}}">
                            <img style="object-fit: cover; width:300px; height:500px;"
                            src="{{Storage::disk("public")->url($photo->picture)}}" />
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section><!-- #content end -->
</div>
