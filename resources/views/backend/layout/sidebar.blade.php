<div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark sticky-top" style="width: 280px; height: 100vh">
    <a href="/" class="d-flex align-items-center ms-3 text-white text-decoration-none">
        <h4 class="m-0">BLOG. ADMIN</h4>
    </a>
    <hr />
    <ul class="nav nav-pills flex-column mb-auto sidebar-links">
        <p>Dashboard</p>
        <li>
            <a href="/admin" class="nav-link text-white">
                <span>
                    <i class="bi bi-speedometer2"></i>
                    Overview
                </span>
            </a>
        </li>
        <hr>
        <p>Pages</p>

        <li>
            <a href="/admin/blog" class="nav-link text-white">
                <span>
                    <i class="bi bi-table"></i>
                    Blog
                </span>
            </a>
        </li>

        <li>
            <a href="/admin/contact" class="nav-link text-white">
                <span>
                    <i class="fa-regular fa-address-card"></i>
                    Contact
                </span>
            </a>
        </li>

    </ul>
    <hr />
    <div class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }}
        </a>

        <div class="dropdown-menu dropdown-menu-dark dropdown-menu-end" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>
</div>
