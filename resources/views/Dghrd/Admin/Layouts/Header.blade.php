<header class="main-header">
    <div class="d-flex align-items-center logo-box justify-content-start">
        <!-- Logo -->
        <a href="{{ url('dashboard') }}" class="logo">
            <!-- logo-->
            <div class="logo-mini w-40">
                <span class="light-logo"><img src="{{asset('images/logo.png')}}" alt="logo"></span>
                <span class="dark-logo"><img src="{{asset('images/logo.png')}}" alt="logo"></span>
            </div>
            <div class="logo-lg">
                <span class="light-logo" style="color: white;">DGHRD</span>
                <span class="dark-logo">DGHRD</span>
            </div>
        </a>
    </div>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <div class="app-menu">
            <ul class="header-megamenu nav">
                <li class="btn-group nav-item">
                    <a href="#" class="waves-effect waves-light nav-link push-btn btn-primary-light"
                        data-toggle="push-menu" role="button">
                        <i data-feather="menu"></i>
                    </a>
                </li>
                <li class="btn-group d-lg-inline-flex d-none">
                    <div class="app-menu">
                        <div class="search-bx mx-5">
                            <form>
                                <div class="input-group">
                                    <input type="search" class="form-control" placeholder="Search">
                                    <div class="input-group-append">
                                        <button class="btn" type="submit" id="button-addon3"><i
                                                class="icon-Search"><span class="path1"></span><span
                                                    class="path2"></span></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

        <div class="navbar-custom-menu r-side">
            <ul class="nav navbar-nav">
                <li class="btn-group d-md-inline-flex d-none">
                    <a href="javascript:void(0)" title="skin Change"
                        class="waves-effect skin-toggle waves-light">
                        <label class="switch">
                            <input type="checkbox" data-mainsidebarskin="toggle" id="toggle_left_sidebar_skin">
                            <span class="switch-on"><i data-feather="moon"></i></span>
                            <span class="switch-off"><i data-feather="sun"></i></span>
                        </label>
                    </a>
                </li>
               

                <li class="btn-group nav-item d-xl-inline-flex d-none">
                    <a href="#" data-provide="fullscreen"
                        class="waves-effect waves-light nav-link btn-primary-light svg-bt-icon"
                        title="Full Screen">
                        <i data-feather="maximize"></i>
                    </a>
                </li>
               

                <!-- User Account-->
                <li class="dropdown user user-menu">
                    <a href="#"
                        class="waves-effect waves-light dropdown-toggle w-auto l-h-12 bg-transparent p-0 no-shadow"
                        title="User" data-bs-toggle="dropdown">
                        <img src="../../../images/avatar/avatar-13.png"
                            class="avatar rounded-circle bg-primary-light h-40 w-40" alt="" />
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item my-5" href="extra_profile.html">My Profile</a>
                        <a class="dropdown-item my-5" href="mailbox.html">Inbox</a>
                        <a class="dropdown-item my-5" href="setting.html">Setting</a>
                        <a class="dropdown-item my-5" href="{{url('logout')}}">Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>