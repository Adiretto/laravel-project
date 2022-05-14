@section('header')
    <div class= "container1 container-fluid" id = "container1">
    <header class="header" id ="header">
        <nav class="navbar nav_bar navbar-expand-lg p-3 " id = "nav_bar">
            <div class="container nav">
                <a href="#" class="navbar-brand text-light pe-5 me-5" data-scroll="#container1"style="font-size: 24px;"><b>gymme</b><i class="fa fa-heartbeat" aria-hidden="true"></i></a>
                <span id="audio_icon">
							<i class="audio_icon fa fa-volume-off" aria-hidden="true" style="color: white;font-size: 28px;cursor: pointer;" id="audio_icon_1"></i>
							<i class="fa fa-volume-up" aria-hidden="true" style="color: white;font-size: 28px;cursor: pointer;display: none;" id="audio_icon_2"></i>
						</span>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar" id="collapse">
                    <i class="fa fa-bars" aria-hidden="true" style="color: white;font-size: 30px;"></i>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav navigation ms-5 auto me-auto">
                        <li class="nav-item">
                            <a class="nav-link nav_link active" href="#" data-scroll="#container1" id="nav_link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav_link" href="workouts" data-scroll="#container3" id="nav_link">Workouts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav_link" href="#" data-scroll="#container4" id="nav_link">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav_link" href="#" data-scroll="#container5" id="nav_link">Community</a>
                        </li>
                    </ul>
                    <button class="btn btn-success" type="button">Sign in</button>
                    <button class="btn btn-success ms-5" type="button">Sign up</button>
                </div>
            </div>
        </nav>
    </header>
    <div class="title_1">
        <h1 class="h1 text-light">Get the best part of your day</h1>
        <h2 class="h2">-your fit here.</h2>
        <p class="p">We provide serious fitness but within a fun and friendly, safe space.</p>
        <button class="btn btn-lg btn_joinNow text-dark bg-light"> <dt>Join now</dt> </button>
    </div>
    @yield("hero-img")
    </div>
