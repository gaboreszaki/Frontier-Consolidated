<div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 border-end shadow">
    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
        <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <span class="fs-5 d-none d-sm-inline">FRCN Site admin</span>
        </a>
        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
            <li class="nav-item">
                <a href="#" class="nav-link">
                    Dashboard
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#staticPageItems" role="button" aria-expanded="false" aria-controls="staticPageItems">Static Pages</a>
                <div class="collapse multi-collapse" id="staticPageItems">
                    <ul>
                        <li class="nav-item"><a href="#" class="nav-link">Community</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Organisation</a></li>
                    </ul>
                </div>

            </li>

            <li>
                <a href="{{route('admin.news.index')}}" class="nav-link">News & Announcements</a>
            </li>

            <li>
                <a href="#" class="nav-link">Activities </a>
            </li>
        </ul>
        <hr>
        <div class="dropdown pb-4">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                <span class="d-none d-sm-inline mx-1">user</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>

            </ul>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </div>
</div>