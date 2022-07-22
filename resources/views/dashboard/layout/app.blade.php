
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crypo</title>
    <link rel="icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body id="dark">
<header>
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="{{ route('index') }}"><img src="{{ asset('assets/img/logo-light.svg') }}" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#headerMenu"
                aria-controls="headerMenu" aria-expanded="false" aria-label="Toggle navigation">
            <i class="icon ion-md-menu"></i>
        </button>

        <div class="collapse navbar-collapse" id="headerMenu">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        Landing Page
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="landing-page-dark.html">Landing One</a>
                        <a class="dropdown-item" href="landing-page-dark-two.html">Landing Two</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        Exchange
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="exchange-dark.html">Exchange</a>
                        <a class="dropdown-item" href="exchange-dark-live-price.html">Exchange Live Price</a>
                        <a class="dropdown-item" href="exchange-dark-ticker.html">Exchange Ticker</a>
                        <a class="dropdown-item" href="exchange-dark-fluid.html">Exchange Fluid</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        Markets
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="markets-dark.html">Markets</a>
                        <a class="dropdown-item" href="market-capital-dark.html">Markets Line</a>
                        <a class="dropdown-item" href="market-capital-bar-dark.html">Markets Bar</a>
                        <a class="dropdown-item" href="market-overview-dark.html">Market Overview</a>
                        <a class="dropdown-item" href="market-screener-dark.html">Market Screener</a>
                        <a class="dropdown-item" href="market-crypto-dark.html">Market Crypto</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        Dashboard
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="settings-profile-dark.html">Profile</a>
                        <a class="dropdown-item" href="settings-wallet-dark.html">Wallet</a>
                        <a class="dropdown-item" href="settings-dark.html">Settings</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        Others
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="technical-analysis-dark.html">Technical Analysis</a>
                        <a class="dropdown-item" href="cross-rates-dark.html">Cross Rates</a>
                        <a class="dropdown-item" href="symbol-info-dark.html">Symbol Info</a>
                        <a class="dropdown-item" href="heat-map-dark.html">Heat Map</a>
                        <a class="dropdown-item" href="signin-dark.html">Sign in</a>
                        <a class="dropdown-item" href="signup-dark.html">Sign up</a>
                        <a class="dropdown-item" href="404-dark.html">404</a>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item header-custom-icon">
                    <a class="nav-link" href="#" id="clickFullscreen">
                        <i class="icon ion-md-expand"></i>
                    </a>
                </li>
                <li class="nav-item dropdown header-custom-icon">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        <i class="icon ion-md-notifications"></i>
                        <span class="circle-pulse"></span>
                    </a>
                    <div class="dropdown-menu">
                        <div class="dropdown-header d-flex align-items-center justify-content-between">
                            <p class="mb-0 font-weight-medium">6 New Notifications</p>
                            <a href="#!" class="text-muted">Clear all</a>
                        </div>
                        <div class="dropdown-body">
                            <a href="#!" class="dropdown-item">
                                <div class="icon">
                                    <i class="icon ion-md-lock"></i>
                                </div>
                                <div class="content">
                                    <p>Account password change</p>
                                    <p class="sub-text text-muted">5 sec ago</p>
                                </div>
                            </a>
                            <a href="#!" class="dropdown-item">
                                <div class="icon">
                                    <i class="icon ion-md-alert"></i>
                                </div>
                                <div class="content">
                                    <p>Solve the security issue</p>
                                    <p class="sub-text text-muted">10 min ago</p>
                                </div>
                            </a>
                            <a href="#!" class="dropdown-item">
                                <div class="icon">
                                    <i class="icon ion-logo-android"></i>
                                </div>
                                <div class="content">
                                    <p>Download android app</p>
                                    <p class="sub-text text-muted">1 hrs ago</p>
                                </div>
                            </a>
                            <a href="#!" class="dropdown-item">
                                <div class="icon">
                                    <i class="icon ion-logo-bitcoin"></i>
                                </div>
                                <div class="content">
                                    <p>Bitcoin price is high now</p>
                                    <p class="sub-text text-muted">2 hrs ago</p>
                                </div>
                            </a>
                            <a href="#!" class="dropdown-item">
                                <div class="icon">
                                    <i class="icon ion-logo-usd"></i>
                                </div>
                                <div class="content">
                                    <p>Payment completed</p>
                                    <p class="sub-text text-muted">4 hrs ago</p>
                                </div>
                            </a>
                        </div>
                        <div class="dropdown-footer d-flex align-items-center justify-content-center">
                            <a href="#!">View all</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown header-img-icon">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        <img src="assets/img/avatar.svg" alt="avatar">
                    </a>
                    <div class="dropdown-menu">
                        <div class="dropdown-header d-flex flex-column align-items-center">
                            <div class="figure mb-3">
                                <img src="assets/img/avatar.svg" alt="">
                            </div>
                            <div class="info text-center">
                                <p class="name font-weight-bold mb-0">Tony Stark</p>
                                <p class="email text-muted mb-3">tonystark@gmail.com</p>
                            </div>
                        </div>
                        <div class="dropdown-body">
                            <ul class="profile-nav">
                                <li class="nav-item">
                                    <a href="settings-profile-dark.html" class="nav-link">
                                        <i class="icon ion-md-person"></i>
                                        <span>Profile</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="settings-wallet-dark.html" class="nav-link">
                                        <i class="icon ion-md-wallet"></i>
                                        <span>My Wallet</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="settings-dark.html" class="nav-link">
                                        <i class="icon ion-md-settings"></i>
                                        <span>Settings</span>
                                    </a>
                                </li>
                                <li class="nav-item" id="changeThemeDark">
                                    <a href="#!" class="nav-link">
                                        <i class="icon ion-md-moon"></i>
                                        <span>Theme</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="exchange-dark.html" class="nav-link red">
                                        <i class="icon ion-md-power"></i>
                                        <span>Log Out</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>

@yield('content')

<script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/amcharts-core.min.js') }}"></script>
<script src="{{ asset('assets/js/amcharts.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.mCustomScrollbar.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>
<script>
    $('tbody, .market-news ul').mCustomScrollbar({
        theme: 'minimal',
    });
</script>
</body>


<!-- Mirrored from crypo.netlify.app/exchange-dark-fluid.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Jul 2022 03:06:32 GMT -->
</html>
