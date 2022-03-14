<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://unpkg.com/@coreui/coreui/dist/css/coreui.min.css">
    <script src="https://unpkg.com/@coreui/coreui/dist/js/coreui.bundle.min.js"></script>
    <!-- CoreUI for Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/@coreui/coreui@4.1.1/dist/css/coreui.min.css" rel="stylesheet" integrity="sha384-4RjTy+ihDlYQqAQJodVMv1QuiX0mRlR0xtuKKu1P8I2TxVdGPXaW+VxJ6PirwMm4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.5/css/perfect-scrollbar.css" integrity="sha512-2xznCEl5y5T5huJ2hCmwhvVtIGVF1j/aNUEJwi/BzpWPKEzsZPGpwnP1JrIMmjPpQaVicWOYVu8QvAIg9hwv9w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>{{ config('app.name', 'Laravel') }}</title>
    @livewireStyles
</head>
<body class="c-app">
@include('partials.sidebar')
    <header class="header header-sticky mb-4">
        <div class="container-fluid">
            <button class="header-toggler px-md-0 me-md-3" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
                <svg class="icon icon-lg">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
                </svg>
            </button><a class="header-brand d-md-none" href="#">
                <svg width="118" height="46" alt="CoreUI Logo">
                    <use xlink:href="assets/brand/coreui.svg#full"></use>
                </svg></a>

            <ul class="header-nav me-3">
                <li class="nav-item dropdown d-md-down-none"><a class="nav-link" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <svg class="icon icon-lg my-1 mx-2">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
                        </svg><span class="badge rounded-pill position-absolute top-0 end-0 bg-danger-gradient">5</span></a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-lg pt-0">
                        <div class="dropdown-header bg-light"><strong>You have 5 notifications</strong></div><a class="dropdown-item" href="#">
                            <svg class="icon me-2 text-success">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user-follow"></use>
                            </svg> New user registered</a><a class="dropdown-item" href="#">
                            <svg class="icon me-2 text-danger">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user-unfollow"></use>
                            </svg> User deleted</a><a class="dropdown-item" href="#">
                            <svg class="icon me-2 text-info">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-chart"></use>
                            </svg> Sales report is ready</a><a class="dropdown-item" href="#">
                            <svg class="icon me-2 text-success">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-basket"></use>
                            </svg> New client</a><a class="dropdown-item" href="#">
                            <svg class="icon me-2 text-warning">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-speedometer"></use>
                            </svg> Server overloaded</a>
                        <div class="dropdown-header bg-light"><strong>Server</strong></div><a class="dropdown-item d-block" href="#">
                            <div class="text-uppercase mb-1"><small><b>CPU Usage</b></small></div><span class="progress progress-thin">
<div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</span><small class="text-medium-emphasis">348 Processes. 1/4 Cores.</small>
                        </a><a class="dropdown-item d-block" href="#">
                            <div class="text-uppercase mb-1"><small><b>Memory Usage</b></small></div><span class="progress progress-thin">
<div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
</span><small class="text-medium-emphasis">11444GB/16384MB</small>
                        </a><a class="dropdown-item d-block" href="#">
                            <div class="text-uppercase mb-1"><small><b>SSD 1 Usage</b></small></div><span class="progress progress-thin">
<div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
</span><small class="text-medium-emphasis">243GB/256GB</small>
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown d-md-down-none"><a class="nav-link" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <svg class="icon icon-lg my-1 mx-2">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-list-rich"></use>
                        </svg><span class="badge rounded-pill position-absolute top-0 end-0 bg-warning-gradient">5</span></a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-lg pt-0">
                        <div class="dropdown-header bg-light"><strong>You have 5 pending tasks</strong></div><a class="dropdown-item d-block" href="#">
                            <div class="small mb-1">Upgrade NPM &amp; Bower<span class="float-end"><strong>0%</strong></span></div><span class="progress progress-thin">
<div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
</span>
                        </a><a class="dropdown-item d-block" href="#">
                            <div class="small mb-1">ReactJS Version<span class="float-end"><strong>25%</strong></span></div><span class="progress progress-thin">
<div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</span>
                        </a><a class="dropdown-item d-block" href="#">
                            <div class="small mb-1">VueJS Version<span class="float-end"><strong>50%</strong></span></div><span class="progress progress-thin">
<div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</span>
                        </a><a class="dropdown-item d-block" href="#">
                            <div class="small mb-1">Add new layouts<span class="float-end"><strong>75%</strong></span></div><span class="progress progress-thin">
<div class="progress-bar bg-info" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
</span>
                        </a><a class="dropdown-item d-block" href="#">
                            <div class="small mb-1">Angular 8 Version<span class="float-end"><strong>100%</strong></span></div><span class="progress progress-thin">
<div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
</span>
                        </a><a class="dropdown-item text-center border-top" href="#"><strong>View all tasks</strong></a>
                    </div>
                </li>
                <li class="nav-item dropdown d-md-down-none"><a class="nav-link" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <svg class="icon icon-lg my-1 mx-2">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
                        </svg><span class="badge rounded-pill position-absolute top-0 end-0 bg-info-gradient">7</span></a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-lg pt-0">
                        <div class="dropdown-header bg-light"><strong>You have 4 messages</strong></div><a class="dropdown-item" href="#">
                            <div class="message">
                                <div class="py-3 me-3 float-start">
                                    <div class="avatar"><img class="avatar-img" src="assets/img/avatars/7.jpg" alt="user@email.com"><span class="avatar-status bg-success"></span></div>
                                </div>
                                <div><small class="text-medium-emphasis">John Doe</small><small class="text-medium-emphasis float-end mt-1">Just now</small></div>
                                <div class="text-truncate font-weight-bold"><span class="text-danger">!</span> Important message</div>
                                <div class="small text-medium-emphasis text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
                            </div>
                        </a><a class="dropdown-item" href="#">
                            <div class="message">
                                <div class="py-3 me-3 float-start">
                                    <div class="avatar"><img class="avatar-img" src="assets/img/avatars/6.jpg" alt="user@email.com"><span class="avatar-status bg-warning"></span></div>
                                </div>
                                <div><small class="text-medium-emphasis">John Doe</small><small class="text-medium-emphasis float-end mt-1">5 minutes ago</small></div>
                                <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                                <div class="small text-medium-emphasis text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
                            </div>
                        </a><a class="dropdown-item" href="#">
                            <div class="message">
                                <div class="py-3 me-3 float-start">
                                    <div class="avatar"><img class="avatar-img" src="assets/img/avatars/5.jpg" alt="user@email.com"><span class="avatar-status bg-danger"></span></div>
                                </div>
                                <div><small class="text-medium-emphasis">John Doe</small><small class="text-medium-emphasis float-end mt-1">1:52 PM</small></div>
                                <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                                <div class="small text-medium-emphasis text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
                            </div>
                        </a><a class="dropdown-item" href="#">
                            <div class="message">
                                <div class="py-3 me-3 float-start">
                                    <div class="avatar"><img class="avatar-img" src="assets/img/avatars/4.jpg" alt="user@email.com"><span class="avatar-status bg-info"></span></div>
                                </div>
                                <div><small class="text-medium-emphasis">John Doe</small><small class="text-medium-emphasis float-end mt-1">4:03 PM</small></div>
                                <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                                <div class="small text-medium-emphasis text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
                            </div>
                        </a><a class="dropdown-item text-center border-top" href="#"><strong>View all messages</strong></a>
                    </div>
                </li>
            </ul>

            <ul class="header-nav me-4">
                <li class="nav-item dropdown d-flex align-items-center"><a class="nav-link py-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <div class="avatar avatar-md"><img class="avatar-img" src="assets/img/avatars/8.jpg" alt="user@email.com"></div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end pt-0">
                        <div class="dropdown-header bg-light py-2">
                            <div class="fw-semibold">Account</div>
                        </div><a class="dropdown-item" href="#">
                            <svg class="icon me-2">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
                            </svg> Updates<span class="badge badge-sm bg-info-gradient ms-2">42</span></a><a class="dropdown-item" href="#">
                            <svg class="icon me-2">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
                            </svg> Messages<span class="badge badge-sm badge-sm bg-success ms-2">42</span></a><a class="dropdown-item" href="#">
                            <svg class="icon me-2">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-task"></use>
                            </svg> Tasks<span class="badge badge-sm bg-danger-gradient ms-2">42</span></a><a class="dropdown-item" href="#">
                            <svg class="icon me-2">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-comment-square"></use>
                            </svg> Comments<span class="badge badge-sm bg-warning-gradient ms-2">42</span></a>
                        <div class="dropdown-header bg-light py-2">
                            <div class="fw-semibold">Settings</div>
                        </div><a class="dropdown-item" href="#">
                            <svg class="icon me-2">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user"></use>
                            </svg> Profile</a><a class="dropdown-item" href="#">
                            <svg class="icon me-2">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-settings"></use>
                            </svg> Settings</a><a class="dropdown-item" href="#">
                            <svg class="icon me-2">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-credit-card"></use>
                            </svg> Payments<span class="badge badge-sm bg-secondary-gradient text-dark ms-2">42</span></a><a class="dropdown-item" href="#">
                            <svg class="icon me-2">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-file"></use>
                            </svg> Projects<span class="badge badge-sm bg-primary-gradient ms-2">42</span></a>
                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">
                            <svg class="icon me-2">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                            </svg> Lock Account</a><a class="dropdown-item" href="#">
                            <svg class="icon me-2">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                            </svg> Logout</a>
                    </div>
                </li>
            </ul>
            <button class="header-toggler px-md-0 me-md-3" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#aside')).show()">
                <svg class="icon icon-lg">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-applications-settings"></use>
                </svg>
            </button>
        </div>

        <div class="header-divider"></div>
        <div class="container-fluid">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb my-0 ms-2">
                    <li class="breadcrumb-item">
                        <span>Home</span>
                    </li>
                    <li class="breadcrumb-item active"><span>Dashboard</span></li>
                </ol>
            </nav>
        </div>
    </header>
</div>


</body>



@yield('content')


<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: CoreUI for Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/@coreui/coreui@4.1.1/dist/js/coreui.bundle.min.js" integrity="sha384-PXOm0LjM7kBY7at2HNqu2pAJsTVQUPRzpJSwQD0V//zsjFAcv61qjiZj3ELesLb1" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and CoreUI for Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.5/perfect-scrollbar.min.js" integrity="sha512-X41/A5OSxoi5uqtS6Krhqz8QyyD8E/ZbN7B4IaBSgqPLRbWVuXJXr9UwOujstj71SoVxh5vxgy7kmtd17xrJRw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-q9CRHqZndzlxGLOj+xrdLDJa9ittGte1NksRmgJKeCV9DrM7Kz868XYqsKWPpAmn" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@coreui/coreui@4.1.1/dist/js/coreui.min.js" integrity="sha384-85mv4P1wdLGe7AOAJKs31hW8LZHApEb3/mOieV4JbvF2v99+TmYLrpvmlj9edI/C" crossorigin="anonymous"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>

@LivewireScripts
<script src="https://cdn.jsdelivr.net/gh/livewire/sortable@v0.x.x/dist/livewire-sortable.js"></script>
@yield('scripts')
</body>
</html>

{{--
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
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
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
--}}
