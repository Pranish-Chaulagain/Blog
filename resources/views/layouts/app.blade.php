<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <style>
        ::-moz-selection {
            /* Code for Firefox */
            color: #fff;
            background: #000;
        }

        ::selection {
            color: #fff;
            background: #000;
        }

        .login-button {
            outline: none;
            border: none;
        }

        .banner .banner-image img {
            width: 100%;
            height: 600px;
            -o-object-fit: cover;
            object-fit: cover;
        }

        .blog-post-section .blog-posts-wrapper .blogs-post {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 20px;
        }

        .blog-post-section .blog-posts-wrapper .blogs-post .post-img img {
            width: 100%;
            height: 170px;
            -o-object-fit: cover;
            object-fit: cover;
        }

        .blog-post-section .blog-posts-wrapper .blogs-post .post-desc .user-desc {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .blog-post-section .blog-posts-wrapper .blogs-post .post-desc .user-desc .profile-pic img {
            width: 25px;
            aspect-ratio: 1;
            object-fit: cover;
            border-radius: 5px;
        }

        .blog-post-section .blog-posts-wrapper .blog-posts {
            width: 100%
        }

        .about-wrapper,
        .contact-wrapper {
            width: 700px;
            margin: 0 auto;
        }

        .about-wrapper img {
            width: 100%;
            height: 400px;
            object-fit: cover;
        }

        .contact-wrapper iframe {
            width: 100%;
            height: 300px;
            border: none;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
        }

        @media (max-width: 767px) {
            .banner .banner-image img {
                height: 300px;
            }

            .blog-post-section .blog-posts-wrapper .blogs-post {
                grid-template-columns: 1fr;
            }

            .about-wrapper,
            .contact-wrapper {
                width: 100%;
                margin: 0 auto;
            }

            .about-wrapper img {
                width: 100%;
                height: 300px;
                object-fit: cover;
            }

            .blog-post-section .blog-posts-wrapper .blogs-post .post-img img {
                height: 200px;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg py-3 border-bottom" aria-label="Offcanvas navbar large">
        <div class="container">
            <a class="navbar-brand mb-0 me-4" href="/">
                <h2 class="mb-0">BLOG.</h2>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar2" aria-labelledby="offcanvasNavbar2Label">
                <div class="offcanvas-header border-bottom">
                    <a class="navbar-brand mb-0 me-4" href="/">
                        <h2 class="mb-0">BLOG.</h2>
                    </a>
                    <button type="button" class="btn-close me-1" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav flex-grow-1">
                        <li class="nav-item">
                            <a class="nav-link active text-center" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-center" href="/about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-center" href="/contact">Contact</a>
                        </li>
                    </ul>

                    <div class="btn-container d-flex gap-3 align-items-center justify-content-center mt-md-0 mt-3">
                        @guest
                            @if (Route::has('login'))
                                <a style="color: #000;" href="{{ route('login') }}" type="button" class="btn login-button">{{ __('Login') }}</a>
                                <span style="color: #dee2e6;">|</span>
                            @endif

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" type="button" class="btn btn-dark">{{ __('Register') }}</a>
                            @endif

                        @else
                            <div class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
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
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </nav>

    @yield('content')


    <div class="footer pt-4">
        <div class="container">
            <footer class="py-3 my-4">
                <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                    <li class="nav-item"><a href="/" class="nav-link px-2 text-muted">Home</a></li>
                    <li class="nav-item"><a href="/about" class="nav-link px-2 text-muted">About</a></li>
                    <li class="nav-item"><a href="/contact" class="nav-link px-2 text-muted">Contact</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Privacy policy</a></li>
                </ul>
                <p class="text-center text-muted">&copy; 2023 BLOG, Inc</p>
            </footer>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
