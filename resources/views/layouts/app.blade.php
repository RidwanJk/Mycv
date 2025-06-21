<!doctype html>
<html lang="en">

<head>
    <script>
        (function () {
            const savedTheme = localStorage.getItem('theme') || 'light';
            document.documentElement.setAttribute('data-theme', savedTheme);
        })();
    </script>


    <title>@yield('title', 'My Website')</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/logos/icons/favicon.svg') }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Quintessential&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container">
                <a href="{{ url('/') }}" class="brand" title="Home"></a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                    aria-label="Toggle navigation">
                </button>

                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}"
                                aria-current="page">
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('skills') ? 'active' : '' }}" href="{{ url('/skills') }}">
                                Skills
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="{{ url('/about') }}">
                                About
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle 
                        {{ Request::is('projects/*') ? 'active' : '' }}" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Projects
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item {{ Request::is('projects/game-dev') ? 'active' : '' }}"
                                        href="{{ url('/projects/game-dev') }}">
                                        Game Dev
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item {{ Request::is('projects/web-dev') ? 'active' : '' }}"
                                        href="{{ url('/projects/web-dev') }}">
                                        Web Dev
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item {{ Request::is('projects/data-science') ? 'active' : '' }}"
                                        href="{{ url('/projects/data-science') }}">
                                        Data Science
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>

                    <button id="theme-toggle" class="btn btn-outline-secondary ms-3" title="Toggle theme">
                        <span id="theme-icon">🌞</span>
                    </button>
                </div>
            </div>
        </nav>

    </header>



    {{-- Main Content --}}
    <main class="flex-fill container mt-4">
        @yield('content')
    </main>




    <footer class="text-center mt-5 py-3">
        <!-- You can add footer content here -->
        <small>© 2025 Ridwan Jauhar. All rights reserved.</small>
    </footer>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
        </script>

    <!-- Theme Toggle Script -->
    <script>
        const themeToggle = document.getElementById('theme-toggle');
        const themeIcon = document.getElementById('theme-icon');

        const savedTheme = localStorage.getItem('theme') || 'light';
        document.body.setAttribute('data-theme', savedTheme);
        themeIcon.textContent = savedTheme === 'dark' ? '🌙' : '🌞';

        themeToggle.addEventListener('click', () => {
            const currentTheme = document.body.getAttribute('data-theme');
            const newTheme = currentTheme === 'light' ? 'dark' : 'light';

            document.body.setAttribute('data-theme', newTheme);
            document.documentElement.setAttribute('data-theme', newTheme);
            localStorage.setItem('theme', newTheme);
            themeIcon.textContent = newTheme === 'dark' ? '🌙' : '🌞';
        });
    </script>
</body>

</html>