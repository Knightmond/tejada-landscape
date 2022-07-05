<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix" style="background-color: rgb(186, 219, 182)">
    <nav style="background-color:#212529;" class="navbar navbar-expand-md tm-navbar" id="tmNav">
        <div class="container">
            <div class="tm-next">
                <a href="/" class="navbar-brand">Tejada Landscape</a>
            </div>
        </div>
    </nav>
    <!-- Content
    ============================================= -->
    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix ">
                <div style="display: grid; row-gap:20px; grid-template-columns: auto auto auto; padding:3rem 0 3rem 0;" id="lightgallery">
                    @foreach ($photos as $photo)
                        <a href="{{Storage::disk("public")->url($photo->picture)}}">
                            <img style="border-radius:30px; object-fit: cover; width:300px; height:400px;"
                            src="{{Storage::disk("public")->url($photo->picture)}}" />
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section><!-- #content end -->
</div>
