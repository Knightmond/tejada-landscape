<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tejada Landscape Inc.</title>
    @livewireStyles
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="fontawesome-5.5/css/all.min.css" />
    <link rel="stylesheet" href="slick/slick.css">
    <link rel="stylesheet" href="slick/slick-theme.css">
    <link rel="stylesheet" href="magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/tooplate-infinite-loop.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" integrity="sha512-rqQltXRuHxtPWhktpAZxLHUVJ3Eombn3hvk9PHjV/N5DMUYnzKPC1i3ub0mEXgFzsaZNeJcoE0YHq0j/GFsdGg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.min.css">

    <link type="text/css" rel="stylesheet" href="lg-css/lightgallery.css" />
    <!-- lightgallery plugins -->
    <link type="text/css" rel="stylesheet" href="lg-css/lg-zoom.css" />
    <link type="text/css" rel="stylesheet" href="lg-css/lg-video.css" />
    <link type="text/css" rel="stylesheet" href="lg-css/lg-thumbnail.css" />
    <script src="lg-js/lightgallery.min.js"></script>
    <!-- lightgallery plugins -->
    <script src="lg-js/plugins/thumbnail/lg-thumbnail.min.js"></script>
    <script src="lg-js/plugins/video/lg-video.min.js"></script>
    <script src="lg-js/plugins/zoom/lg-zoom.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert"></script>

</head>

<body class="stretched">
    {{ $slot }}
    @livewireScripts
    <!-- Go To Top
 ============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>

    <!-- JavaScripts
 ============================================= -->
    <script src="js/jquery.js"></script>
    <script src="js/plugins.min.js"></script>


    <script src="lg-js/lightgallery.min.js"></script>

    <!-- lg scripts-->
    <script>
        lightGallery(document.getElementById('lightgallery'), {
            plugins: [lgZoom, lgThumbnail, ],
            download: true,
            licenseKey: "3915-1023-129-9512",
            speed: 200,
        });
    </script>

    <script>
        lightGallery(document.getElementById('lightgallery2'), {
            plugins: [lgZoom, lgThumbnail, ],
            download: true,
            licenseKey: "3915-1023-129-9512",
            speed: 200,
        });
    </script>

    <!-- Footer Scripts ============================================= -->
    <script src="js/functions.js"></script>
    <script src="slick/slick.min.js"></script>
    <script src="magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="js/easing.min.js"></script>
    <script src="js/jquery.singlePageNav.min.js"></script>
    <script>
        livewire.on("created", function() {
            $(':input','#form')
            .not(':button, :submit, :reset, :hidden')
            .val('')
            swal({
                title: "The appointment was created",
                text: "Now you can close the modal",
                icon: "success",
            });
        });
    </script>
</body>

<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/assets/css/chat.min.css">
<script>
    var botmanWidget = {
        aboutText: 'Tejada Landscape Inc',
        introMessage: "✋ Hello!"
    };
</script>

<script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>

</html>