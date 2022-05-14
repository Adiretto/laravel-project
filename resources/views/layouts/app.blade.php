<!DOCTYPE html>
<html  lang="eng">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <title>full project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src = "/js/app.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/746fcb21ce.js" crossorigin="anonymous"></script>

    <script src="https://maps.api.2gis.ru/2.0/loader.js?pkg=full"></script>
    <script type="text/javascript">
        var map;

        DG.then(function () {
            map = DG.map('map', {
                center: [51.091062, 71.418284],
                zoom: 13
            });

            DG.marker([51.091062, 71.418284]).addTo(map).bindPopup('We are here !');
        });
    </script>
</head>

<body>
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
                            <a class="nav-link nav_link active" href="home"  id="nav_link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav_link" href="workouts"  id="nav_link">Workouts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav_link" href="pricing" id="nav_link">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav_link" href="community"  id="nav_link">Community</a>
                        </li>
                    </ul>
                            <button class="btn btn_sign_in ms-5 border-white text-white" type="login" onclick="location.href='login';">log in</button>


                            <button class="btn btn-success ms-3" type="button" onclick="location.href='registration';">Register</button>

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

@yield("login")
@yield("register")
@yield("our_mission")
@yield('training_programs')
@yield("body")
@yield("box")
@yield("pump")
@yield("yoga")
@yield("full")
@yield("pricing_plan")
@yield("community")
@include("blocks.footer")
</body>
</html>
