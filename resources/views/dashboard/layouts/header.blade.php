<header class="navbar navbar-dark sticky-top bg-success flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 d-flex align-items-center" href="/" style="background-color: white;">
        <img src="https://upland.psp.pertanian.go.id/asset_public/img/logo/upland-color.png" alt="UPLAND" class="logo-img" style="width:90px;">
        <img src="https://upland.psp.pertanian.go.id/asset_public/img/logo/kementan.png" alt="Kementan" class="logo-img" style="width:50px; height:50px;">
    </a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
            <form action="/logout" method="post">
                @csrf
                <button type="submit" class="btn btn-success rounded-pill">
                    <span class="align-text-bottom">Logout</span>
                    <span data-feather="log-out" class="align-text-bottom"></span>
                </button>
            </form>
        </div>
    </div>
</header>
