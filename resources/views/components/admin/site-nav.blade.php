
    <div class="flex-shrink-0 p-3 admin-site-nav shadow" style="width: 280px;">
        <a href="/" class="navbar-brand d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none ">
            <img src="{{ asset('images/frcn_main_logo.png') }}" height="24" class="mx-3" alt="FRCN Logo">
            <span class="fs-5 d-none d-sm-inline">FRCN Site admin</span>

        </a>






        <ul class="nav flex-column">
            <li class="nav-item">
                <button class="nav-link collapsed" data-bs-toggle="collapse" data-bs-target="#activities" aria-expanded="true">
                    Activities
                </button>
                <div class="collapse show multi-collapse" id="activities">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li class="nav-item"><a href="{{route('admin.reports.index')}}" class="nav-link">Reports</a></li>
                        <li class="nav-item "><a href="#" class="nav-link disabled">Regular Events</a></li>

                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.community.index')}}">Community</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.community.index')}}" aria-disabled="true">Community</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
            </li>
        </ul>











        <ul class="navbar">
            <li class="mb-1">

            </li>


            <li class="nav-item"><a href="{{route('admin.community.index')}}" class="nav-link">Community</a></li>


        <ul class="list-unstyled ps-0">
            <li class="mb-1">
                <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#staticPageItems" aria-expanded="true">
                    Pages &amp; Content
                </button>
                <div class="collapse show multi-collapse" id="staticPageItems">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li class="nav-item"><a href="{{route('admin.community.index')}}" class="nav-link">Community</a></li>
                        <li class="nav-item text-muted"><a href="#" class="nav-link disabled">Organisation</a></li>

                        <li class="nav-item"><a href="{{route('admin.news.index')}}" class="nav-link">News</a></li>
                        <li class="nav-item"><a href="{{route('admin.reports.index')}}" class="nav-link">Reports</a></li>
                        <li class="nav-item "><a href="#" class="nav-link disabled">Regular Events</a></li>

                    </ul>
                </div>
            </li>



            <li class="mb-1">
                <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#staticPageItems" aria-expanded="true">
                    Info Services
                </button>
                <div class="collapse show multi-collapse" id="staticPageItems">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li class="nav-item"><a href="{{route('admin.news.index')}}" class="nav-link">News</a></li>
                        <li class="nav-item"><a href="{{route('admin.reports.index')}}" class="nav-link">Reports</a></li>
                        <li class="nav-item "><a href="#" class="nav-link disabled">Regular Events</a></li>

                    </ul>
                </div>
            </li>
            <li class="border-top my-3"></li>
            <li class="mb-1">
                <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#admin_items" aria-expanded="false">
                    Admin
                </button>
                <div class="collapse" id="admin_items">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li class="nav-item"><a href="#" class="nav-link disabled">Users</a></li>
                        <li class="nav-item"><a href="#" class="nav-link disabled">Files</a></li>
                    </ul>
                </div>
            </li>
            <li class="border-top my-3"></li>

            <li class="mb-1">
                <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
                    Account
                </button>
                <div class="collapse" id="account-collapse">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Profile</a></li>
                        <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Settings</a></li>
                        <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Sign out</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>










