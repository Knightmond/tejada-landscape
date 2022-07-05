<nav style="background-color: grey;" class="navbar navbar-expand-md tm-navbar" id="tmNav">
    <div class="container">
        <div class="tm-next">
            <a style="color:white; text-decoration:none;" href="/" class="navbar-brand">Tejada Landscape (Admin Menu)</a>
        </div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars navbar-toggler-icon"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link tm-nav-link" href="/select">Image List</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link tm-nav-link" href="/upload">Upload Image</a>
                </li>
                <li class="nav-item">
                    @include("livewire.auth.logout")
                </li>
            </ul>
        </div>
    </div>
</nav>
