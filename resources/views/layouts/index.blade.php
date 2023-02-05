<!DOCTYPE html>

<html class="loading dark-layout"
      lang="de"
      data-textdirection="ltr"
      data-layout="dark-layout">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="csrf-token" content="fpgljM9bHr55vI5pWVDMwkCK7YIhbGGIcC5f5sSx">
    <meta name="description"
          content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
          content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Dashboard Ecommerce - Vuexy - Bootstrap HTML & Laravel admin template</title>
    <link rel="apple-touch-icon"
          href="https://pixinvent.com/demo/vuexy-bootstrap-laravel-admin-template/demo-4/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="images/logo/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
          rel="stylesheet">


    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" href="{{ asset('vendor/vendors/css/vendors.min.css') }}"/>


    <link rel="stylesheet" href="{{ asset('vendor/vendors/css/charts/apexcharts.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/vendors/css/extensions/toastr.min.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" href="{{ asset('vendor/css/core.css') }}"/>


    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" href="{{ asset('vendor/css/base/core/menu/menu-types/vertical-menu.css') }}"/>


    <link rel="stylesheet" href="{{ asset('vendor/css/base/pages/dashboard-ecommerce.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/css/base/plugins/charts/chart-apex.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/css/base/plugins/extensions/ext-component-toastr.css') }}">

    <!-- laravel style -->
    <link rel="stylesheet" href="{{ asset('vendor/css/overrides.css') }}"/>

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" href="{{ asset('vendor/css/style.css') }}"/>

    <livewire:styles/>
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

    <body class="vertical-layout vertical-menu-modern navbar-floating    footer-static default"
          data-open="click"
          data-menu="vertical-menu-modern"
          data-col="default"
          data-framework="laravel"
          data-asset-path="https://pixinvent.com/demo/vuexy-bootstrap-laravel-admin-template/demo-4/">
    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow  ">
        @if (Route::has('login'))
                @auth
                <div class="navbar-container d-flex content">
                    <div class="bookmark-wrapper d-flex align-items-center">
                        <ul class="nav navbar-nav d-xl-none">
                            <li class="nav-item"><a class="nav-link menu-toggle" href="javascript:void(0);"><i class="ficon"
                                                                                                               data-feather="menu"></i></a>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav bookmark-icons">
                            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app/email.html"
                                                                      data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                                      title="Email"><i class="ficon"
                                                                                       data-feather="mail"></i></a></li>
                            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app/chat.html"
                                                                      data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                                      title="Chat"><i class="ficon"
                                                                                      data-feather="message-square"></i></a>
                            </li>
                            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app/calendar.html"
                                                                      data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                                      title="Calendar"><i class="ficon"
                                                                                          data-feather="calendar"></i></a></li>
                            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app/todo.html"
                                                                      data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                                      title="Todo"><i class="ficon"
                                                                                      data-feather="check-square"></i></a></li>
                        </ul>
                        <ul class="nav navbar-nav">
                            <li class="nav-item d-none d-lg-block">
                                <a class="nav-link bookmark-star">
                                    <i class="ficon text-warning" data-feather="star"></i>
                                </a>
                                <div class="bookmark-input search-input">
                                    <div class="bookmark-input-icon">
                                        <i data-feather="search"></i>
                                    </div>
                                    <input class="form-control input" type="text" placeholder="Bookmark" tabindex="0"
                                           data-search="search">
                                    <ul class="search-list search-list-bookmark"></ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <ul class="nav navbar-nav align-items-center ms-auto">
                        <li class="nav-item dropdown dropdown-language">
                            <a class="nav-link dropdown-toggle" id="dropdown-flag" href="#" data-bs-toggle="dropdown"
                               aria-haspopup="true">
                                <i class="flag-icon flag-icon-us"></i>
                                <span class="selected-language">English</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-flag">
                                <a class="dropdown-item" href="index.html" data-language="en">
                                    <i class="flag-icon flag-icon-us"></i> English
                                </a>
                                <a class="dropdown-item" href="index.html" data-language="fr">
                                    <i class="flag-icon flag-icon-fr"></i> French
                                </a>
                                <a class="dropdown-item" href="index.html" data-language="de">
                                    <i class="flag-icon flag-icon-de"></i> German
                                </a>
                                <a class="dropdown-item" href="index.html" data-language="pt">
                                    <i class="flag-icon flag-icon-pt"></i> Portuguese
                                </a>
                            </div>
                        </li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon"
                                                                                                     data-feather="sun"></i></a>
                        </li>
                        <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon"
                                                                                               data-feather="search"></i></a>
                            <div class="search-input">
                                <div class="search-input-icon"><i data-feather="search"></i></div>
                                <input class="form-control input" type="text" placeholder="Explore Vuexy..." tabindex="-1"
                                       data-search="search">
                                <div class="search-input-close"><i data-feather="x"></i></div>
                                <ul class="search-list search-list-main"></ul>
                            </div>
                        </li>
                        <li class="nav-item dropdown dropdown-cart me-25">
                            <a class="nav-link" href="javascript:void(0);" data-bs-toggle="dropdown">
                                <i class="ficon" data-feather="shopping-cart"></i>
                                <span class="badge rounded-pill bg-primary badge-up cart-item-count">6</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-end">
                                <li class="dropdown-menu-header">
                                    <div class="dropdown-header d-flex">
                                        <h4 class="notification-title mb-0 me-auto">My Cart</h4>
                                        <div class="badge rounded-pill badge-light-primary">4 Items</div>
                                    </div>
                                </li>
                                <li class="scrollable-container media-list">
                                    <div class="list-item align-items-center">
                                        <img class="d-block rounded me-1" src="images/pages/eCommerce/1.png" alt="donuts"
                                             width="62">
                                        <div class="list-item-body flex-grow-1">
                                            <i class="ficon cart-item-remove" data-feather="x"></i>
                                            <div class="media-heading">
                                                <h6 class="cart-item-title"><a class="text-body"
                                                                               href="app/ecommerce/details.html"> Apple watch
                                                        5</a></h6><small class="cart-item-by">By Apple</small>
                                            </div>
                                            <div class="cart-item-qty">
                                                <div class="input-group">
                                                    <input class="touchspin-cart" type="number" value="1">
                                                </div>
                                            </div>
                                            <h5 class="cart-item-price">$374.90</h5>
                                        </div>
                                    </div>
                                    <div class="list-item align-items-center">
                                        <img class="d-block rounded me-1" src="images/pages/eCommerce/7.png" alt="donuts"
                                             width="62">
                                        <div class="list-item-body flex-grow-1">
                                            <i class="ficon cart-item-remove" data-feather="x"></i>
                                            <div class="media-heading">
                                                <h6 class="cart-item-title"><a class="text-body"
                                                                               href="app/ecommerce/details.html"> Google Home
                                                        Mini</a></h6><small class="cart-item-by">By Google</small>
                                            </div>
                                            <div class="cart-item-qty">
                                                <div class="input-group">
                                                    <input class="touchspin-cart" type="number" value="3">
                                                </div>
                                            </div>
                                            <h5 class="cart-item-price">$129.40</h5>
                                        </div>
                                    </div>
                                    <div class="list-item align-items-center">
                                        <img class="d-block rounded me-1" src="images/pages/eCommerce/2.png" alt="donuts"
                                             width="62">
                                        <div class="list-item-body flex-grow-1">
                                            <i class="ficon cart-item-remove" data-feather="x"></i>
                                            <div class="media-heading">
                                                <h6 class="cart-item-title"><a class="text-body"
                                                                               href="app/ecommerce/details.html"> iPhone 11
                                                        Pro</a></h6><small class="cart-item-by">By Apple</small>
                                            </div>
                                            <div class="cart-item-qty">
                                                <div class="input-group">
                                                    <input class="touchspin-cart" type="number" value="2">
                                                </div>
                                            </div>
                                            <h5 class="cart-item-price">$699.00</h5>
                                        </div>
                                    </div>
                                    <div class="list-item align-items-center">
                                        <img class="d-block rounded me-1" src="images/pages/eCommerce/3.png" alt="donuts"
                                             width="62">
                                        <div class="list-item-body flex-grow-1">
                                            <i class="ficon cart-item-remove" data-feather="x"></i>
                                            <div class="media-heading">
                                                <h6 class="cart-item-title"><a class="text-body"
                                                                               href="app/ecommerce/details.html"> iMac Pro</a>
                                                </h6><small class="cart-item-by">By Apple</small>
                                            </div>
                                            <div class="cart-item-qty">
                                                <div class="input-group">
                                                    <input class="touchspin-cart" type="number" value="1">
                                                </div>
                                            </div>
                                            <h5 class="cart-item-price">$4,999.00</h5>
                                        </div>
                                    </div>
                                    <div class="list-item align-items-center">
                                        <img class="d-block rounded me-1" src="images/pages/eCommerce/5.png" alt="donuts"
                                             width="62">
                                        <div class="list-item-body flex-grow-1">
                                            <i class="ficon cart-item-remove" data-feather="x"></i>
                                            <div class="media-heading">
                                                <h6 class="cart-item-title"><a class="text-body"
                                                                               href="app/ecommerce/details.html"> MacBook
                                                        Pro</a></h6><small class="cart-item-by">By Apple</small>
                                            </div>
                                            <div class="cart-item-qty">
                                                <div class="input-group">
                                                    <input class="touchspin-cart" type="number" value="1">
                                                </div>
                                            </div>
                                            <h5 class="cart-item-price">$2,999.00</h5>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-menu-footer">
                                    <div class="d-flex justify-content-between mb-1">
                                        <h6 class="fw-bolder mb-0">Total:</h6>
                                        <h6 class="text-primary fw-bolder mb-0">$10,999.00</h6>
                                    </div>
                                    <a class="btn btn-primary w-100" href="app/ecommerce/checkout.html">Checkout</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown dropdown-notification me-25">
                            <a class="nav-link" href="javascript:void(0);" data-bs-toggle="dropdown">
                                <i class="ficon" data-feather="bell"></i>
                                <span class="badge rounded-pill bg-danger badge-up">5</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-end">
                                <li class="dropdown-menu-header">
                                    <div class="dropdown-header d-flex">
                                        <h4 class="notification-title mb-0 me-auto">Notifications</h4>
                                        <div class="badge rounded-pill badge-light-primary">4 New</div>
                                    </div>
                                </li>
                                <li class="scrollable-container media-list">
                                    <a class="d-flex" href="javascript:void(0)">
                                        <div class="list-item d-flex align-items-start">
                                            <div class="me-1">
                                                <div class="avatar">
                                                    <img src="images/portrait/small/avatar-s-15.jpg" alt="avatar" width="32"
                                                         height="32">
                                                </div>
                                            </div>
                                            <div class="list-item-body flex-grow-1">
                                                <p class="media-heading"><span class="fw-bolder">Congratulation Sam 🎉</span>winner!
                                                </p>
                                                <small class="notification-text"> Won the monthly best seller badge.</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="d-flex" href="javascript:void(0)">
                                        <div class="list-item d-flex align-items-start">
                                            <div class="me-1">
                                                <div class="avatar">
                                                    <img src="images/portrait/small/avatar-s-3.jpg" alt="avatar" width="32"
                                                         height="32">
                                                </div>
                                            </div>
                                            <div class="list-item-body flex-grow-1">
                                                <p class="media-heading"><span class="fw-bolder">New message</span>&nbsp;received
                                                </p>
                                                <small class="notification-text"> You have 10 unread messages</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="d-flex" href="javascript:void(0)">
                                        <div class="list-item d-flex align-items-start">
                                            <div class="me-1">
                                                <div class="avatar bg-light-danger">
                                                    <div class="avatar-content">MD</div>
                                                </div>
                                            </div>
                                            <div class="list-item-body flex-grow-1">
                                                <p class="media-heading"><span class="fw-bolder">Revised Order 👋</span>&nbsp;checkout
                                                </p>
                                                <small class="notification-text"> MD Inc. order updated</small>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="list-item d-flex align-items-center">
                                        <h6 class="fw-bolder me-auto mb-0">System Notifications</h6>
                                        <div class="form-check form-check-primary form-switch">
                                            <input class="form-check-input" id="systemNotification" type="checkbox" checked="">
                                            <label class="form-check-label" for="systemNotification"></label>
                                        </div>
                                    </div>
                                    <a class="d-flex" href="javascript:void(0)">
                                        <div class="list-item d-flex align-items-start">
                                            <div class="me-1">
                                                <div class="avatar bg-light-danger">
                                                    <div class="avatar-content"><i class="avatar-icon" data-feather="x"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-item-body flex-grow-1">
                                                <p class="media-heading"><span class="fw-bolder">Server down</span>&nbsp;registered
                                                </p>
                                                <small class="notification-text"> USA Server is down due to hight CPU
                                                    usage</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="d-flex" href="javascript:void(0)">
                                        <div class="list-item d-flex align-items-start">
                                            <div class="me-1">
                                                <div class="avatar bg-light-success">
                                                    <div class="avatar-content"><i class="avatar-icon" data-feather="check"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-item-body flex-grow-1">
                                                <p class="media-heading"><span class="fw-bolder">Sales report</span>&nbsp;generated
                                                </p><small class="notification-text"> Last month sales report generated</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="d-flex" href="javascript:void(0)">
                                        <div class="list-item d-flex align-items-start">
                                            <div class="me-1">
                                                <div class="avatar bg-light-warning">
                                                    <div class="avatar-content"><i class="avatar-icon"
                                                                                   data-feather="alert-triangle"></i></div>
                                                </div>
                                            </div>
                                            <div class="list-item-body flex-grow-1">
                                                <p class="media-heading"><span class="fw-bolder">High memory</span>&nbsp;usage
                                                </p><small class="notification-text"> BLR Server using high memory</small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="dropdown-menu-footer">
                                    <a class="btn btn-primary w-100" href="javascript:void(0)">Read all notifications</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown dropdown-user">
                            <a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="javascript:void(0);"
                               data-bs-toggle="dropdown" aria-haspopup="true">
                                <div class="user-nav d-sm-flex d-none">
                                    <span class="user-name fw-bolder">John Doe</span>
                                    <span class="user-status">Admin</span>
                                </div>
                                <span class="avatar">
              <img class="round" src="images/portrait/small/avatar-s-11.jpg" alt="avatar" height="40" width="40">
              <span class="avatar-status-online"></span>
            </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user">
                                <a class="dropdown-item" href="page/profile.html">
                                    <i class="me-50" data-feather="user"></i> Profile
                                </a>
                                <a class="dropdown-item" href="app/email.html">
                                    <i class="me-50" data-feather="mail"></i> Inbox
                                </a>
                                <a class="dropdown-item" href="app/todo.html">
                                    <i class="me-50" data-feather="check-square"></i> Task
                                </a>
                                <a class="dropdown-item" href="app/chat.html">
                                    <i class="me-50" data-feather="message-square"></i> Chats
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="page/account-settings-account.html">
                                    <i class="me-50" data-feather="settings"></i> Settings
                                </a>
                                <a class="dropdown-item" href="page/pricing.html">
                                    <i class="me-50" data-feather="credit-card"></i> Pricing
                                </a>
                                <a class="dropdown-item" href="page/faq.html">
                                    <i class="me-50" data-feather="help-circle"></i> FAQ
                                </a>
                                <a class="dropdown-item" href="{{ route('logout.perform') }}">
                                    <i class="me-50" data-feather="help-circle"></i> Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth
        @endif
    </nav>

    <livewire:index>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-light  footer-static">
        <p class="clearfix mb-0">
    <span class="float-md-start d-block d-md-inline-block mt-25">COPYRIGHT &copy;
      <script>document.write(new Date().getFullYear())</script><a class="ms-25"
                                                                  href="https://1.envato.market/pixinvent_portfolio"
                                                                  target="_blank">Pixinvent</a>,
      <span class="d-none d-sm-inline-block">All rights Reserved</span>
    </span>
            <span class="float-md-end d-none d-md-block">Hand-crafted & Made with<i data-feather="heart"></i></span>
        </p>
    </footer>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('vendor/vendors/js/vendors.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->
    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('vendor/vendors/js/ui/jquery.sticky.js') }}"></script>

    <script src="{{ asset('vendor/vendors/js/charts/apexcharts.min.js') }}"></script>
{{--    <script src="{{ asset('vendor/vendors/js/extensions/toastr.min.js') }}"></script>SUCCESSFUL LOGIN MODAL POPUP PLUGIN--}}
    <!-- END: Page Vendor JS-->
    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('vendor/js/core/app-menu.js') }}"></script>
    <script src="{{ asset('vendor/js/core/app.js') }}"></script>

    <!-- custom scripts file for user -->
    <script src="{{ asset('vendor/js/core/scripts.js') }}"></script>

    <script src="{{ asset('vendor/js/scripts/customizer.js') }}"></script>
    <!-- END: Theme JS-->
    <!-- BEGIN: Page JS-->

    <script src="{{ asset('vendor/js/scripts/pages/dashboard-ecommerce.js') }}"></script>
    <!-- END: Page JS-->

    <script type="text/javascript">
        $(window).on('load', function () {
            if (feather) {
                feather.replace({
                    width: 14, height: 14
                });
            }
        })
    </script>
    <livewire:scripts/>
    </body>
</html>
