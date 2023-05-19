 <nav class="navbar navbar-expand-lg border-bottom" style="padding: 12px 40px">
    <div class="container-fluid">
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form class="d-flex me-auto admin-search-bar input-group" role="search">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Search..."
                />
                <button class="btn btn-dark" type="button" id="button-addon2">
                  <i class="bi bi-search"></i>
                </button>
            </form>

              <div class="dropdown me-4">
                <a
                  href="#"
                  class="d-flex align-items-center text-dark text-decoration-none fs-5"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  <i class="bi bi-bell"></i>
                </a>
                <ul
                  class="dropdown-menu dropdown-menu-dark dropdown-menu-end text-small shadow"
                >
                  <li>
                    <a class="dropdown-item" href="#">
                      Lorem ipsum dolor sit amet consectetur.
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
                      Temporibus quibusdam eveniet sint sit maxime
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#"> Quasi, unde maxime?</a>
                  </li>
                </ul>
              </div>

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
          </div>
        </nav>
