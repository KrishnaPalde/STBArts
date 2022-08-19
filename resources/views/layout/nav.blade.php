<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light hidden-xs fixed-top" style="-webkit-backdrop-filter: blur(4px);backdrop-filter: blur(4px);">
    <!-- Container wrapper -->
    <div class="container-fluid">
        <!-- Toggle button -->
        <button
            class="navbar-toggler"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left links -->
            <div class="d-md-flex d-block flex-row mx-md-auto justify-content-center">
                <ul class="navbar-nav mb-2 mb-lg-0" style="margin-right: -38%">
                    <li class="nav-item px-3">
                        <a class="nav-link" href="{{ route('home') }}#landingPage">Home</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#">|</a></li>
                    <li class="nav-item px-3">
                        <a class="nav-link" href="{{ route('home') }}#popGanesh">Plaster Of Paris (POP)</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#">|</a></li>
                    <li class="nav-item px-3">
                        <a class="nav-link" href="{{ route('home') }}#shaduGanesh">Shadu Mati</a>
                    </li>
                </ul>
            </div>
            <!-- Left links -->
        </div>
        <!-- Collapsible wrapper -->

        <!-- Right elements -->
        <div class="d-md-flex d-block flex-row ">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item px-5">
                    <a class="text-reset" href="{{ route('cart.index') }}">
                        <i class="fa fa-shopping-cart" style="font-size:36px"></i>
                    </a>

                </li>
            </ul>
            <!-- Cart -->
        </div>
        <!-- Right elements -->
    </div>
    <!-- Container wrapper -->
</nav>
<!-- Navbar -->