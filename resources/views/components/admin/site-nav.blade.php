<div class="flex-shrink-0 p-3" id="admin-site-nav">
    <a href="/" class="navbar-brand d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none ">
        <img src="{{ asset('images/frcn_main_logo.png') }}" height="24" class="mx-3" alt="FRCN Logo">
        <span class="fs-5 d-none d-sm-inline">FRCN Site admin</span>

    </a>
    <ul class="nav flex-column">
        <li class="nav-item">
            <button class="btn btn-toggle d-inline-flex align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#activities" aria-expanded="true">
                <i class="bi bi-calendar-date me-2"></i> Activities
            </button>
            <div class="collapse multi-collapse" id="activities">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li class="nav-item "><a href="{{route('admin.reports.index')}}" class="nav-link">Reports</a></li>
                    <li class="nav-item "><a href="#" class="nav-link disabled">Regular Events</a></li>

                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.community.index')}}"><i class="bi bi-person-arms-up me-2"></i> Community</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#" aria-disabled="true"><i class="bi bi-buildings me-2"></i> Organisation</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.news.index')}}"><i class="bi bi-megaphone me-2"></i>News</a>
        </li>
        <li class="nav-item">
            <button class="btn btn-toggle d-inline-flex align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#guides" aria-expanded="true">
                <i class="bi bi-map me-2"></i> Guides & Resources
            </button>
            <div class="collapse multi-collapse" id="guides">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li class="nav-item"><a href="{{route('admin.guides.index')}}" class="nav-link">Guides</a></li>
                    <li class="nav-item "><a href="#" class="nav-link disabled">Game Versions</a></li>
                    <li class="nav-item "><a href="#" class="nav-link disabled">Tags</a></li>
                    <li class="nav-item "><a href="#" class="nav-link disabled">Categories</a></li>
                    <li class="nav-item "><a href="#" class="nav-link disabled">Attachments</a></li>

                </ul>
            </div>
        </li>
        <li class="border-top my-3"></li>
        <li class="nav-item">
            <button class="btn btn-toggle d-inline-flex align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#admin_items" aria-expanded="false">
                <i class="bi bi-person-badge me-2"></i> Admin
            </button>
            <div class="collapse" id="admin_items">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li class="nav-item"><a href="#" class="nav-link disabled">Users</a></li>
                    <li class="nav-item"><a href="#" class="nav-link disabled">File Manager</a></li>
                </ul>
            </div>
        </li>
        <li class="border-top my-3"></li>
        <li class="nav-item">
            <button class="btn btn-toggle d-inline-flex align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
                <i class="bi bi-person-circle me-2"></i> Account
            </button>
            <div class="collapse" id="account-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="#" class="nav-link disabled">Profile</a></li>
                    <li><a href="#" class="nav-link disabled">Settings</a></li>
                    <li><a href="#" class="nav-link disabled">Sign out</a></li>
                </ul>
            </div>
        </li>
    </ul>

</div>










