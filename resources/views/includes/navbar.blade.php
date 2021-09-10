<!-- navbar start -->
<nav class="navbar navbar-expand-lg navbar-light bg-white navbar-fixed-top">

    <div class="container-fluid">

        <!-- logo start -->
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="./images/logo_l.png" alt="" width="150" height="40">
        </a>
        <!-- logo end -->

        <!-- toggle button start -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- toggle button end -->

        <!-- navbar start -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ (request()->segment(1) == '') ? 'active' : '' }}" aria-current="page" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (request()->segment(1) == 'services') ? 'active' : '' }}" href="{{ url('services') }}">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (request()->segment(1) == 'about') ? 'active' : '' }}" href="{{ url('about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (request()->segment(1) == 'contact') ? 'active' : '' }}" href="{{ url('contact') }}">Contact</a>
                </li>
            </ul>
        </div>
        <!-- navbar end -->

    </div>
</nav>
<!-- navbar end -->