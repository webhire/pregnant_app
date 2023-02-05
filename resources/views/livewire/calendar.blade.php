<body class="vertical-layout vertical-menu-modern navbar-floating    footer-static default"
      data-open="click"
      data-menu="vertical-menu-modern"
      data-col="default"
      data-framework="laravel"
      data-asset-path="https://pixinvent.com/demo/vuexy-bootstrap-laravel-admin-template/demo-4/">
<!-- BEGIN: Header-->
<nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow  ">
    <div class="navbar-container d-flex content">
        <div class="bookmark-wrapper d-flex align-items-center">
            <ul class="nav navbar-nav d-xl-none">
                <li class="nav-item"><a class="nav-link menu-toggle" href="javascript:void(0);"><i class="ficon"
                                                                                                   data-feather="menu"></i></a>
                </li>
            </ul>
            <ul class="nav navbar-nav bookmark-icons">
                <li class="nav-item d-none d-lg-block"><a class="nav-link" href="email.html" data-bs-toggle="tooltip"
                                                          data-bs-placement="bottom" title="Email"><i class="ficon"
                                                                                                      data-feather="mail"></i></a>
                </li>
                <li class="nav-item d-none d-lg-block"><a class="nav-link" href="chat.html" data-bs-toggle="tooltip"
                                                          data-bs-placement="bottom" title="Chat"><i class="ficon"
                                                                                                     data-feather="message-square"></i></a>
                </li>
                <li class="nav-item d-none d-lg-block"><a class="nav-link" href="calendar.html" data-bs-toggle="tooltip"
                                                          data-bs-placement="bottom" title="Calendar"><i class="ficon"
                                                                                                         data-feather="calendar"></i></a>
                </li>
                <li class="nav-item d-none d-lg-block"><a class="nav-link" href="todo.html" data-bs-toggle="tooltip"
                                                          data-bs-placement="bottom" title="Todo"><i class="ficon"
                                                                                                     data-feather="check-square"></i></a>
                </li>
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
                    <a class="dropdown-item" href="../index.html" data-language="en">
                        <i class="flag-icon flag-icon-us"></i> English
                    </a>
                    <a class="dropdown-item" href="../index.html" data-language="fr">
                        <i class="flag-icon flag-icon-fr"></i> French
                    </a>
                    <a class="dropdown-item" href="../index.html" data-language="de">
                        <i class="flag-icon flag-icon-de"></i> German
                    </a>
                    <a class="dropdown-item" href="../index.html" data-language="pt">
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
                            <img class="d-block rounded me-1" src="../images/pages/eCommerce/1.png" alt="donuts"
                                 width="62">
                            <div class="list-item-body flex-grow-1">
                                <i class="ficon cart-item-remove" data-feather="x"></i>
                                <div class="media-heading">
                                    <h6 class="cart-item-title"><a class="text-body" href="ecommerce/details.html">
                                            Apple watch 5</a></h6><small class="cart-item-by">By Apple</small>
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
                            <img class="d-block rounded me-1" src="../images/pages/eCommerce/7.png" alt="donuts"
                                 width="62">
                            <div class="list-item-body flex-grow-1">
                                <i class="ficon cart-item-remove" data-feather="x"></i>
                                <div class="media-heading">
                                    <h6 class="cart-item-title"><a class="text-body" href="ecommerce/details.html">
                                            Google Home Mini</a></h6><small class="cart-item-by">By Google</small>
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
                            <img class="d-block rounded me-1" src="../images/pages/eCommerce/2.png" alt="donuts"
                                 width="62">
                            <div class="list-item-body flex-grow-1">
                                <i class="ficon cart-item-remove" data-feather="x"></i>
                                <div class="media-heading">
                                    <h6 class="cart-item-title"><a class="text-body" href="ecommerce/details.html">
                                            iPhone 11 Pro</a></h6><small class="cart-item-by">By Apple</small>
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
                            <img class="d-block rounded me-1" src="../images/pages/eCommerce/3.png" alt="donuts"
                                 width="62">
                            <div class="list-item-body flex-grow-1">
                                <i class="ficon cart-item-remove" data-feather="x"></i>
                                <div class="media-heading">
                                    <h6 class="cart-item-title"><a class="text-body" href="ecommerce/details.html"> iMac
                                            Pro</a></h6><small class="cart-item-by">By Apple</small>
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
                            <img class="d-block rounded me-1" src="../images/pages/eCommerce/5.png" alt="donuts"
                                 width="62">
                            <div class="list-item-body flex-grow-1">
                                <i class="ficon cart-item-remove" data-feather="x"></i>
                                <div class="media-heading">
                                    <h6 class="cart-item-title"><a class="text-body" href="ecommerce/details.html">
                                            MacBook Pro</a></h6><small class="cart-item-by">By Apple</small>
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
                        <a class="btn btn-primary w-100" href="ecommerce/checkout.html">Checkout</a>
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
                            <div class="badge rounded-pill badge-light-primary">6 New</div>
                        </div>
                    </li>
                    <li class="scrollable-container media-list">
                        <a class="d-flex" href="javascript:void(0)">
                            <div class="list-item d-flex align-items-start">
                                <div class="me-1">
                                    <div class="avatar">
                                        <img src="../images/portrait/small/avatar-s-15.jpg" alt="avatar" width="32"
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
                                        <img src="../images/portrait/small/avatar-s-3.jpg" alt="avatar" width="32"
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
                                        <div class="avatar-content"><i class="avatar-icon" data-feather="x"></i></div>
                                    </div>
                                </div>
                                <div class="list-item-body flex-grow-1">
                                    <p class="media-heading"><span class="fw-bolder">Server down</span>&nbsp;registered
                                    </p>
                                    <small class="notification-text"> USA Server is down due to hight CPU usage</small>
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
                                    <p class="media-heading"><span class="fw-bolder">High memory</span>&nbsp;usage</p>
                                    <small class="notification-text"> BLR Server using high memory</small>
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
              <img class="round" src="../images/portrait/small/avatar-s-11.jpg" alt="avatar" height="40" width="40">
              <span class="avatar-status-online"></span>
            </span>
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user">
                    <a class="dropdown-item" href="../page/profile.html">
                        <i class="me-50" data-feather="user"></i> Profile
                    </a>
                    <a class="dropdown-item" href="email.html">
                        <i class="me-50" data-feather="mail"></i> Inbox
                    </a>
                    <a class="dropdown-item" href="todo.html">
                        <i class="me-50" data-feather="check-square"></i> Task
                    </a>
                    <a class="dropdown-item" href="chat.html">
                        <i class="me-50" data-feather="message-square"></i> Chats
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="../page/account-settings-account.html">
                        <i class="me-50" data-feather="settings"></i> Settings
                    </a>
                    <a class="dropdown-item" href="../page/pricing.html">
                        <i class="me-50" data-feather="credit-card"></i> Pricing
                    </a>
                    <a class="dropdown-item" href="../page/faq.html">
                        <i class="me-50" data-feather="help-circle"></i> FAQ
                    </a>
                    <a class="dropdown-item" href="../auth/login-cover.html">
                        <i class="me-50" data-feather="power"></i> Logout
                    </a>
                </div>
            </li>
        </ul>
    </div>
</nav>


<ul class="main-search-list-defaultlist d-none">
    <li class="d-flex align-items-center">
        <a href="javascript:void(0);">
            <h6 class="section-label mt-75 mb-0">Files</h6>
        </a>
    </li>
    <li class="auto-suggestion">
        <a class="d-flex align-items-center justify-content-between w-100" href="file-manager.html">
            <div class="d-flex">
                <div class="me-75">
                    <img src="../images/icons/xls.png" alt="png" height="32">
                </div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Two new item submitted</p>
                    <small class="text-muted">Marketing Manager</small>
                </div>
            </div>
            <small class="search-data-size me-50 text-muted">&apos;17kb</small>
        </a>
    </li>
    <li class="auto-suggestion">
        <a class="d-flex align-items-center justify-content-between w-100" href="file-manager.html">
            <div class="d-flex">
                <div class="me-75">
                    <img src="../images/icons/jpg.png" alt="png" height="32">
                </div>
                <div class="search-data">
                    <p class="search-data-title mb-0">52 JPG file Generated</p>
                    <small class="text-muted">FontEnd Developer</small>
                </div>
            </div>
            <small class="search-data-size me-50 text-muted">&apos;11kb</small>
        </a>
    </li>
    <li class="auto-suggestion">
        <a class="d-flex align-items-center justify-content-between w-100" href="file-manager.html">
            <div class="d-flex">
                <div class="me-75">
                    <img src="../images/icons/pdf.png" alt="png" height="32">
                </div>
                <div class="search-data">
                    <p class="search-data-title mb-0">25 PDF File Uploaded</p>
                    <small class="text-muted">Digital Marketing Manager</small>
                </div>
            </div>
            <small class="search-data-size me-50 text-muted">&apos;150kb</small>
        </a>
    </li>
    <li class="auto-suggestion">
        <a class="d-flex align-items-center justify-content-between w-100" href="file-manager.html">
            <div class="d-flex">
                <div class="me-75">
                    <img src="../images/icons/doc.png" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Anna_Strong.doc</p>
                    <small class="text-muted">Web Designer</small>
                </div>
            </div>
            <small class="search-data-size me-50 text-muted">&apos;256kb</small>
        </a>
    </li>
    <li class="d-flex align-items-center">
        <a href="javascript:void(0);">
            <h6 class="section-label mt-75 mb-0">Members</h6>
        </a>
    </li>
    <li class="auto-suggestion">
        <a class="d-flex align-items-center justify-content-between py-50 w-100"
           href="https://pixinvent.com/demo/vuexy-bootstrap-laravel-admin-template/demo-4/app/user/view">
            <div class="d-flex align-items-center">
                <div class="avatar me-75">
                    <img src="../images/portrait/small/avatar-s-8.jpg" alt="png" height="32">
                </div>
                <div class="search-data">
                    <p class="search-data-title mb-0">John Doe</p>
                    <small class="text-muted">UI designer</small>
                </div>
            </div>
        </a>
    </li>
    <li class="auto-suggestion">
        <a class="d-flex align-items-center justify-content-between py-50 w-100"
           href="https://pixinvent.com/demo/vuexy-bootstrap-laravel-admin-template/demo-4/app/user/view">
            <div class="d-flex align-items-center">
                <div class="avatar me-75">
                    <img src="../images/portrait/small/avatar-s-1.jpg" alt="png" height="32">
                </div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Michal Clark</p>
                    <small class="text-muted">FontEnd Developer</small>
                </div>
            </div>
        </a>
    </li>
    <li class="auto-suggestion">
        <a class="d-flex align-items-center justify-content-between py-50 w-100"
           href="https://pixinvent.com/demo/vuexy-bootstrap-laravel-admin-template/demo-4/app/user/view">
            <div class="d-flex align-items-center">
                <div class="avatar me-75">
                    <img src="../images/portrait/small/avatar-s-14.jpg" alt="png" height="32">
                </div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Milena Gibson</p>
                    <small class="text-muted">Digital Marketing Manager</small>
                </div>
            </div>
        </a>
    </li>
    <li class="auto-suggestion">
        <a class="d-flex align-items-center justify-content-between py-50 w-100"
           href="https://pixinvent.com/demo/vuexy-bootstrap-laravel-admin-template/demo-4/app/user/view">
            <div class="d-flex align-items-center">
                <div class="avatar me-75">
                    <img src="../images/portrait/small/avatar-s-6.jpg" alt="png" height="32">
                </div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Anna Strong</p>
                    <small class="text-muted">Web Designer</small>
                </div>
            </div>
        </a>
    </li>
</ul>


<ul class="main-search-list-defaultlist-other-list d-none">
    <li class="auto-suggestion justify-content-between">
        <a class="d-flex align-items-center justify-content-between w-100 py-50">
            <div class="d-flex justify-content-start">
                <span class="me-75" data-feather="alert-circle"></span>
                <span>No results found.</span>
            </div>
        </a>
    </li>
</ul>

<!-- END: Header-->
<!-- END: Header-->

<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item me-auto">
                <a class="navbar-brand" href="../index.html">
          <span class="brand-logo">
            <svg viewbox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg"
                 xmlns:xlink="http://www.w3.org/1999/xlink" height="24">
              <defs>
                <lineargradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%" y2="89.4879456%">
                  <stop stop-color="#000000" offset="0%"></stop>
                  <stop stop-color="#FFFFFF" offset="100%"></stop>
                </lineargradient>
                <lineargradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%" x2="37.373316%" y2="100%">
                  <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                  <stop stop-color="#FFFFFF" offset="100%"></stop>
                </lineargradient>
              </defs>
              <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                  <g id="Group" transform="translate(400.000000, 178.000000)">
                    <path class="text-primary" id="Path"
                          d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z"
                          style="fill:currentColor"></path>
                    <path id="Path1"
                          d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z"
                          fill="url(#linearGradient-1)" opacity="0.2"></path>
                    <polygon id="Path-2" fill="#000000" opacity="0.049999997"
                             points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325"></polygon>
                    <polygon id="Path-21" fill="#000000" opacity="0.099999994"
                             points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338"></polygon>
                    <polygon id="Path-3" fill="url(#linearGradient-2)" opacity="0.099999994"
                             points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288"></polygon>
                  </g>
                </g>
              </g>
            </svg>
          </span>
                    <h2 class="brand-text">Vuexy</h2>
                </a>
            </li>
            <li class="nav-item nav-toggle">
                <a class="nav-link modern-nav-toggle pe-0" data-toggle="collapse">
                    <i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i>
                    <i class="d-none d-xl-block collapse-toggle-icon font-medium-4 text-primary" data-feather="disc"
                       data-ticon="disc"></i>
                </a>
            </li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">


            <li class="nav-item  ">
                <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
                    <i data-feather="home"></i>
                    <span class="menu-title text-truncate">painel de controle</span>
                    <span class="badge badge-light-warning rounded-pill ms-auto me-1">2</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a href="../dashboard/analytics.html" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Analytics</span>
                        </a>
                    </li>
                    <li>
                        <a href="../index.html" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">comércio eletrônico</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="navigation-header">
                <span>Aplicativos e páginas</span>
                <i data-feather="more-horizontal"></i>
            </li>

            <li class="nav-item  ">
                <a href="email.html" class="d-flex align-items-center" target="_self">
                    <i data-feather="mail"></i>
                    <span class="menu-title text-truncate">O email</span>
                </a>
            </li>

            <li class="nav-item  ">
                <a href="chat.html" class="d-flex align-items-center" target="_self">
                    <i data-feather="message-square"></i>
                    <span class="menu-title text-truncate">Bate-papo</span>
                </a>
            </li>

            <li class="nav-item  ">
                <a href="todo.html" class="d-flex align-items-center" target="_self">
                    <i data-feather="check-square"></i>
                    <span class="menu-title text-truncate">Façam</span>
                </a>
            </li>

            <li class="nav-item  active">
                <a href="calendar.html" class="d-flex align-items-center" target="_self">
                    <i data-feather="calendar"></i>
                    <span class="menu-title text-truncate">Calendário</span>
                </a>
            </li>

            <li class="nav-item  ">
                <a href="kanban.html" class="d-flex align-items-center" target="_self">
                    <i data-feather="grid"></i>
                    <span class="menu-title text-truncate">Kanban</span>
                </a>
            </li>

            <li class="nav-item  ">
                <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
                    <i data-feather="file-text"></i>
                    <span class="menu-title text-truncate">Fatura</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a href="invoice/list.html" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Lista</span>
                        </a>
                    </li>
                    <li>
                        <a href="invoice/preview.html" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Antevisão</span>
                        </a>
                    </li>
                    <li>
                        <a href="invoice/edit.html" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Editar</span>
                        </a>
                    </li>
                    <li>
                        <a href="invoice/add.html" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Adicionar</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item  ">
                <a href="file-manager.html" class="d-flex align-items-center" target="_self">
                    <i data-feather="save"></i>
                    <span class="menu-title text-truncate">Gerenciador de arquivos</span>
                </a>
            </li>

            <li class="nav-item  ">
                <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
                    <i data-feather="shield"></i>
                    <span class="menu-title text-truncate">Funções e permissão</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a href="access-roles.html" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Funções</span>
                        </a>
                    </li>
                    <li>
                        <a href="access-permission.html" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Permissão</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item  ">
                <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
                    <i data-feather="shopping-cart"></i>
                    <span class="menu-title text-truncate">comércio eletrônico</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a href="ecommerce/shop.html" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">fazer compras</span>
                        </a>
                    </li>
                    <li>
                        <a href="ecommerce/details.html" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Detalhes</span>
                        </a>
                    </li>
                    <li>
                        <a href="ecommerce/wishlist.html" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Lista de Desejos</span>
                        </a>
                    </li>
                    <li>
                        <a href="ecommerce/checkout.html" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Confira</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item  ">
                <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
                    <i data-feather="user"></i>
                    <span class="menu-title text-truncate">Usuário</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a href="user/list.html" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Lista</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Ver</span>
                        </a>
                        <ul class="menu-content">
                            <li>
                                <a href="user/view/account.html" class="d-flex align-items-center" target="_self">
                                    <span class="menu-item text-truncate">Conta</span>
                                </a>
                            </li>
                            <li>
                                <a href="user/view/security.html" class="d-flex align-items-center" target="_self">
                                    <span class="menu-item text-truncate">Segurança</span>
                                </a>
                            </li>
                            <li>
                                <a href="user/view/billing.html" class="d-flex align-items-center" target="_self">
                                    <span class="menu-item text-truncate">Faturamento e planos</span>
                                </a>
                            </li>
                            <li>
                                <a href="user/view/notifications.html" class="d-flex align-items-center" target="_self">
                                    <span class="menu-item text-truncate">Notificações</span>
                                </a>
                            </li>
                            <li>
                                <a href="user/view/connections.html" class="d-flex align-items-center" target="_self">
                                    <span class="menu-item text-truncate">Conexões</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="nav-item  ">
                <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
                    <i data-feather="file-text"></i>
                    <span class="menu-title text-truncate">Páginas</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Configurações da conta</span>
                        </a>
                        <ul class="menu-content">
                            <li>
                                <a href="../page/account-settings-account.html" class="d-flex align-items-center"
                                   target="_self">
                                    <span class="menu-item text-truncate">Conta</span>
                                </a>
                            </li>
                            <li>
                                <a href="../page/account-settings-security.html" class="d-flex align-items-center"
                                   target="_self">
                                    <span class="menu-item text-truncate">Segurança</span>
                                </a>
                            </li>
                            <li>
                                <a href="../page/account-settings-billing.html" class="d-flex align-items-center"
                                   target="_self">
                                    <span class="menu-item text-truncate">Faturamento e planos</span>
                                </a>
                            </li>
                            <li>
                                <a href="../page/account-settings-notifications.html" class="d-flex align-items-center"
                                   target="_self">
                                    <span class="menu-item text-truncate">Notificações</span>
                                </a>
                            </li>
                            <li>
                                <a href="../page/account-settings-connections.html" class="d-flex align-items-center"
                                   target="_self">
                                    <span class="menu-item text-truncate">Conexões</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="../page/profile.html" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Perfil</span>
                        </a>
                    </li>
                    <li>
                        <a href="../page/faq.html" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Perguntas frequentes</span>
                        </a>
                    </li>
                    <li>
                        <a href="../page/knowledge-base.html" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Base de Conhecimento</span>
                        </a>
                    </li>
                    <li>
                        <a href="../page/pricing.html" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Preços</span>
                        </a>
                    </li>
                    <li>
                        <a href="../page/license.html" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Licença</span>
                        </a>
                    </li>
                    <li>
                        <a href="../page/api-key.html" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Chave API</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Blog</span>
                        </a>
                        <ul class="menu-content">
                            <li>
                                <a href="../page/blog/list.html" class="d-flex align-items-center" target="_self">
                                    <span class="menu-item text-truncate">Lista</span>
                                </a>
                            </li>
                            <li>
                                <a href="../page/blog/detail.html" class="d-flex align-items-center" target="_self">
                                    <span class="menu-item text-truncate">Detalhe</span>
                                </a>
                            </li>
                            <li>
                                <a href="../page/blog/edit.html" class="d-flex align-items-center" target="_self">
                                    <span class="menu-item text-truncate">Editar</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Modelo de Correio</span>
                        </a>
                        <ul class="menu-content">
                            <li>
                                <a href="../../../vuexy-mail-template/mail-welcome.html"
                                   class="d-flex align-items-center" target="_blank">
                                    <span class="menu-item text-truncate">Bem-vinda</span>
                                </a>
                            </li>
                            <li>
                                <a href="../../../vuexy-mail-template/mail-reset-password.html"
                                   class="d-flex align-items-center" target="_blank">
                                    <span class="menu-item text-truncate">Redefinir senha</span>
                                </a>
                            </li>
                            <li>
                                <a href="../../../vuexy-mail-template/mail-verify-email.html"
                                   class="d-flex align-items-center" target="_blank">
                                    <span class="menu-item text-truncate">Verificar e-mail</span>
                                </a>
                            </li>
                            <li>
                                <a href="../../../vuexy-mail-template/mail-deactivate-account.html"
                                   class="d-flex align-items-center" target="_blank">
                                    <span class="menu-item text-truncate">Desativar conta</span>
                                </a>
                            </li>
                            <li>
                                <a href="../../../vuexy-mail-template/mail-invoice.html"
                                   class="d-flex align-items-center" target="_blank">
                                    <span class="menu-item text-truncate">Fatura</span>
                                </a>
                            </li>
                            <li>
                                <a href="../../../vuexy-mail-template/mail-promotional.html"
                                   class="d-flex align-items-center" target="_blank">
                                    <span class="menu-item text-truncate">Promocional</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Diversas</span>
                        </a>
                        <ul class="menu-content">
                            <li>
                                <a href="../page/coming-soon.html" class="d-flex align-items-center" target="_blank">
                                    <span class="menu-item text-truncate">Em breve</span>
                                </a>
                            </li>
                            <li>
                                <a href="../page/not-authorized.html" class="d-flex align-items-center" target="_blank">
                                    <span class="menu-item text-truncate">Não autorizado</span>
                                </a>
                            </li>
                            <li>
                                <a href="../page/maintenance.html" class="d-flex align-items-center" target="_blank">
                                    <span class="menu-item text-truncate">Manutenção</span>
                                </a>
                            </li>
                            <li>
                                <a href="../error.html" class="d-flex align-items-center" target="_blank">
                                    <span class="menu-item text-truncate">Erro</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="nav-item  ">
                <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
                    <i data-feather="user-check"></i>
                    <span class="menu-title text-truncate">Autenticação</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Entrar</span>
                        </a>
                        <ul class="menu-content">
                            <li>
                                <a href="../auth/login-basic.html" class="d-flex align-items-center" target="_blank">
                                    <span class="menu-item text-truncate">Basic</span>
                                </a>
                            </li>
                            <li>
                                <a href="../auth/login-cover.html" class="d-flex align-items-center" target="_blank">
                                    <span class="menu-item text-truncate">Cobrir</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">registo</span>
                        </a>
                        <ul class="menu-content">
                            <li>
                                <a href="../auth/register-basic.html" class="d-flex align-items-center" target="_blank">
                                    <span class="menu-item text-truncate">Basic</span>
                                </a>
                            </li>
                            <li>
                                <a href="../auth/register-cover.html" class="d-flex align-items-center" target="_blank">
                                    <span class="menu-item text-truncate">Cobrir</span>
                                </a>
                            </li>
                            <li>
                                <a href="../auth/register-multisteps.html" class="d-flex align-items-center"
                                   target="_blank">
                                    <span class="menu-item text-truncate">Multi-etapas</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Esqueceu a senha</span>
                        </a>
                        <ul class="menu-content">
                            <li>
                                <a href="../auth/forgot-password-basic.html" class="d-flex align-items-center"
                                   target="_blank">
                                    <span class="menu-item text-truncate">Basic</span>
                                </a>
                            </li>
                            <li>
                                <a href="../auth/forgot-password-cover.html" class="d-flex align-items-center"
                                   target="_blank">
                                    <span class="menu-item text-truncate">Cobrir</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Redefinir senha</span>
                        </a>
                        <ul class="menu-content">
                            <li>
                                <a href="../auth/reset-password-basic.html" class="d-flex align-items-center"
                                   target="_blank">
                                    <span class="menu-item text-truncate">Basic</span>
                                </a>
                            </li>
                            <li>
                                <a href="../auth/reset-password-cover.html" class="d-flex align-items-center"
                                   target="_blank">
                                    <span class="menu-item text-truncate">Cobrir</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Verificar e-mail</span>
                        </a>
                        <ul class="menu-content">
                            <li>
                                <a href="../auth/verify-email-basic.html" class="d-flex align-items-center"
                                   target="_blank">
                                    <span class="menu-item text-truncate">Basic</span>
                                </a>
                            </li>
                            <li>
                                <a href="../auth/verify-email-cover.html" class="d-flex align-items-center"
                                   target="_blank">
                                    <span class="menu-item text-truncate">Cobrir</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Dois passos</span>
                        </a>
                        <ul class="menu-content">
                            <li>
                                <a href="../auth/two-steps-basic.html" class="d-flex align-items-center"
                                   target="_blank">
                                    <span class="menu-item text-truncate">Basic</span>
                                </a>
                            </li>
                            <li>
                                <a href="../auth/two-steps-cover.html" class="d-flex align-items-center"
                                   target="_blank">
                                    <span class="menu-item text-truncate">Cobrir</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="nav-item  ">
                <a href="../modal-examples.html" class="d-flex align-items-center" target="_self">
                    <i data-feather="square"></i>
                    <span class="menu-title text-truncate">Exemplos Modais</span>
                </a>
            </li>
            <li class="navigation-header">
                <span>Interface de usuário</span>
                <i data-feather="more-horizontal"></i>
            </li>

            <li class="nav-item  ">
                <a href="../ui/typography.html" class="d-flex align-items-center" target="_self">
                    <i data-feather="type"></i>
                    <span class="menu-title text-truncate">Tipografia</span>
                </a>
            </li>

            <li class="nav-item  ">
                <a href="../icons/feather.html" class="d-flex align-items-center" target="_self">
                    <i data-feather="eye"></i>
                    <span class="menu-title text-truncate">Pena</span>
                </a>
            </li>

            <li class="nav-item  ">
                <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
                    <i data-feather="credit-card"></i>
                    <span class="menu-title text-truncate">Cartão</span>
                    <span class="badge badge-light-success rounded-pill ms-auto me-1">New</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a href="../card/basic.html" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Basic</span>
                        </a>
                    </li>
                    <li>
                        <a href="../card/advance.html" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Avançar</span>
                        </a>
                    </li>
                    <li>
                        <a href="../card/statistics.html" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Estatisticas</span>
                        </a>
                    </li>
                    <li>
                        <a href="../card/analytics.html" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Analytics</span>
                        </a>
                    </li>
                    <li>
                        <a href="../card/actions.html" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Ações do Cartão</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item  ">
                <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
                    <i data-feather="briefcase"></i>
                    <span class="menu-title text-truncate">Componentes</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a href="../component/accordion.html" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Acordeão</span>
                        </a>
                    </li>
                    <li>
                        <a href="../component/alert.html" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Alertas</span>
                        </a>
                    </li>
                    <li>
                        <a href="../component/avatar.html" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Avatar</span>
                        </a>
                    </li>
                    <li>
                        <a href="../component/badges.html" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Distintivos</span>
                        </a>
                    </li>
                    <li>
                        <a href="../component/breadcrumbs.html" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Pão ralado</span>
                        </a>
                    </li>
                    <li>
                        <a href="../component/buttons.html" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Botões</span>
                        </a>
                    </li>
                    <li>
                        <a href="../component/carousel.html" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Carrossel</span>
                        </a>
                    </li>
                    <li>
                        <a href="../component/collapse.html" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Colapso</span>
                        </a>
                    </li>
                    <li>
                        <a href="../component/divider.html" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Divisor</span>
                        </a>
                    </li>
                    <li>
                        <a href="../component/dropdowns.html" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Dropdowns</span>
                        </a>
                    </li>
                    <li>
                        <a href="../component/list-group.html" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Grupo de listas</span>
                        </a>
                    </li>
                    <li>
                        <a href="../component/modals.html" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Modais</span>
                        </a>
                    </li>
                    <li>
                        <a href="../component/navs.html" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Componente Navs</span>
                        </a>
                    </li>
                    <li>
                        <a href="../component/offcanvas.html" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Offcanvas</span>
                        </a>
                    </li>
                    <li>
                        <a href="../component/pagination.html" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Paginação</span>
                        </a>
                    </li>
                    <li>
                        <a href="../component/pill-badges.html" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Emblemas de pílula</span>
                        </a>
                    </li>
                    <li>
                        <a href="../component/pills.html" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Componente de comprimidos</span>
                        </a>
                    </li>
                    <li>
                        <a href="../component/popovers.html" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Popovers</span>
                        </a>
                    </li>
                    <li>
                        <a href="../component/progress.html" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Progresso</span>
                        </a>
                    </li>
                    <li>
                        <a href="../component/spinner.html" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Girador</span>
                        </a>
                    </li>
                    <li>
                        <a href="../component/tabs.html" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Componente de guias</span>
                        </a>
                    </li>
                    <li>
                        <a href="../component/timeline.html" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Linha do tempo</span>
                        </a>
                    </li>
                    <li>
                        <a href="../component/toast.html" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Torradas</span>
                        </a>
                    </li>
                    <li>
                        <a href="../component/tooltips.html" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Dicas de ferramentas</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item  ">
                <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
                    <i data-feather="box"></i>
                    <span class="menu-title text-truncate">Extensões</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a href="../ext-component/sweet-alerts.html" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Alerta doce</span>
                        </a>
                    </li>
                    <li>
                        <a href="../ext-component/block-ui.html" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">BlockUI</span>
                        </a>
                    </li>
                    <li>
                        <a href="../ext-component/toastr.html" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Toastr</span>
                        </a>
                    </li>
                    <li>
                        <a href="../ext-component/sliders.html" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Slider</span>
                        </a>
                    </li>
                    <li>
                        <a href="../ext-component/drag-drop.html" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Arraste e solte</span>
                        </a>
                    </li>
                    <li>
                        <a href="../ext-component/tour.html" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Tour</span>
                        </a>
                    </li>
                    <li>
                        <a href="../ext-component/clipboard.html" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Prancheta</span>
                        </a>
                    </li>
                    <li>
                        <a href="../ext-component/plyr.html" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Reprodutor de mídia</span>
                        </a>
                    </li>
                    <li>
                        <a href="../ext-component/context-menu.html" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Menu contextual</span>
                        </a>
                    </li>
                    <li>
                        <a href="../ext-component/swiper.html" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Swiper</span>
                        </a>
                    </li>
                    <li>
                        <a href="../ext-component/tree.html" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Árvore</span>
                        </a>
                    </li>
                    <li>
                        <a href="../ext-component/ratings.html" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Avaliações</span>
                        </a>
                    </li>
                    <li>
                        <a href="../ext-component/locale.html" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Localidade</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item  ">
                <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
                    <i data-feather="layout"></i>
                    <span class="menu-title text-truncate">Layouts de página</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a href="../page-layouts/collapsed-menu.html" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Recolher Menu</span>
                        </a>
                    </li>
                    <li>
                        <a href="../page-layouts/full.html" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Layout Completo</span>
                        </a>
                    </li>
                    <li>
                        <a href="../page-layouts/without-menu.html" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Sem Menu</span>
                        </a>
                    </li>
                    <li>
                        <a href="../page-layouts/empty.html" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Layout Vazio</span>
                        </a>
                    </li>
                    <li>
                        <a href="../page-layouts/blank.html" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Layout em branco</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="navigation-header">
                <span>Formas e tabelas</span>
                <i data-feather="more-horizontal"></i>
            </li>

            <li class="nav-item  ">
                <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
                    <i data-feather="copy"></i>
                    <span class="menu-title text-truncate">Elementos do formulário</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a href="../form/input.html" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Entrada</span>
                        </a>
                    </li>
                    <li>
                        <a href="../form/input-groups.html" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Grupos de entrada</span>
                        </a>
                    </li>
                    <li>
                        <a href="../form/input-mask.html" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Máscara de entrada</span>
                        </a>
                    </li>
                    <li>
                        <a href="../form/textarea.html" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Textarea</span>
                        </a>
                    </li>
                    <li>
                        <a href="../form/checkbox.html" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Caixa de seleção</span>
                        </a>
                    </li>
                    <li>
                        <a href="../form/radio.html" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Rádio</span>
                        </a>
                    </li>
                    <li>
                        <a href="../form/custom-options.html" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Opções Personalizadas</span>
                        </a>
                    </li>
                    <li>
                        <a href="../form/switch.html" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Interruptor</span>
                        </a>
                    </li>
                    <li>
                        <a href="../form/select.html" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Selecione</span>
                        </a>
                    </li>
                    <li>
                        <a href="../form/number-input.html" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Entrada numérica</span>
                        </a>
                    </li>
                    <li>
                        <a href="../form/file-uploader.html" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Uploader de arquivos</span>
                        </a>
                    </li>
                    <li>
                        <a href="../form/quill-editor.html" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Editor de pena</span>
                        </a>
                    </li>
                    <li>
                        <a href="../form/date-time-picker.html" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Selecionador de data e hora</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item  ">
                <a href="../form/layout.html" class="d-flex align-items-center" target="_self">
                    <i data-feather="box"></i>
                    <span class="menu-title text-truncate">Layout de formulário</span>
                </a>
            </li>

            <li class="nav-item  ">
                <a href="../form/wizard.html" class="d-flex align-items-center" target="_self">
                    <i data-feather="package"></i>
                    <span class="menu-title text-truncate">Assistente de Formulário</span>
                </a>
            </li>

            <li class="nav-item  ">
                <a href="../form/validation.html" class="d-flex align-items-center" target="_self">
                    <i data-feather="check-circle"></i>
                    <span class="menu-title text-truncate">Validação de Formulário</span>
                </a>
            </li>

            <li class="nav-item  ">
                <a href="../form/repeater.html" class="d-flex align-items-center" target="_self">
                    <i data-feather="rotate-cw"></i>
                    <span class="menu-title text-truncate">Repetidor de Formulário</span>
                </a>
            </li>

            <li class="nav-item  ">
                <a href="../table.html" class="d-flex align-items-center" target="_self">
                    <i data-feather="server"></i>
                    <span class="menu-title text-truncate">Mesa</span>
                </a>
            </li>

            <li class="nav-item  ">
                <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
                    <i data-feather="grid"></i>
                    <span class="menu-title text-truncate">Tabela de dados</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a href="../table/datatable/basic.html" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Basic</span>
                        </a>
                    </li>
                    <li>
                        <a href="../table/datatable/advance.html" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Avançar</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="navigation-header">
                <span>pronounce Gráficos e Mapas</span>
                <i data-feather="more-horizontal"></i>
            </li>

            <li class="nav-item  ">
                <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
                    <i data-feather="pie-chart"></i>
                    <span class="menu-title text-truncate">Gráficos</span>
                    <span class="badge rounded-pill badge-light-danger ms-auto me-1">2</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a href="../chart/apex.html" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Ápice</span>
                        </a>
                    </li>
                    <li>
                        <a href="../chart/chartjs.html" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Chartjs</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item  ">
                <a href="../maps/leaflet.html" class="d-flex align-items-center" target="_self">
                    <i data-feather="map"></i>
                    <span class="menu-title text-truncate">Mapas de Folheto</span>
                </a>
            </li>
            <li class="navigation-header">
                <span>Misc</span>
                <i data-feather="more-horizontal"></i>
            </li>

            <li class="nav-item  ">
                <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
                    <i data-feather="menu"></i>
                    <span class="menu-title text-truncate">Níveis de Menu</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Segundo nível 2.1</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Segundo nível 2.2</span>
                        </a>
                        <ul class="menu-content">
                            <li>
                                <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
                                    <span class="menu-item text-truncate">Terceiro nivel 3.2</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
                                    <span class="menu-item text-truncate">Terceiro nivel 3.2</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="nav-item disabled ">
                <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
                    <i data-feather="eye-off"></i>
                    <span class="menu-title text-truncate">Menu desativado</span>
                </a>
            </li>

            <li class="nav-item  ">
                <a href="../../../vuexy-html-bootstrap-admin-template/documentation-old/documentation-laravel-folder-structure.html"
                   class="d-flex align-items-center" target="_blank">
                    <i data-feather="folder"></i>
                    <span class="menu-title text-truncate">Documentação</span>
                </a>
            </li>

            <li class="nav-item  ">
                <a href="https://pixinvent.ticksy.com/" class="d-flex align-items-center" target="_blank">
                    <i data-feather="life-buoy"></i>
                    <span class="menu-title text-truncate">Levantar Suporte</span>
                </a>
            </li>

        </ul>
    </div>
</div>
<!-- END: Main Menu-->
<!-- END: Main Menu-->

<!-- BEGIN: Content-->
<div class="app-content content ">
    <!-- BEGIN: Header-->
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>

    <div class="content-wrapper ">


        <div class="content-body">

            <!-- Full calendar start -->
            <section>
                <div class="app-calendar overflow-hidden border">
                    <div class="row g-0">
                        <!-- Sidebar -->
                        <div class="col app-calendar-sidebar flex-grow-0 overflow-hidden d-flex flex-column"
                             id="app-calendar-sidebar">
                            <div class="sidebar-wrapper">
                                <div class="card-body d-flex justify-content-center">
                                    <button
                                        class="btn btn-primary btn-toggle-sidebar w-100"
                                        data-bs-toggle="modal"
                                        data-bs-target="#add-new-sidebar"
                                    >
                                        <span class="align-middle">Add Event</span>
                                    </button>
                                </div>
                                <div class="card-body pb-0">
                                    <h5 class="section-label mb-1">
                                        <span class="align-middle">Filter</span>
                                    </h5>
                                    <div class="form-check mb-1">
                                        <input type="checkbox" class="form-check-input select-all" id="select-all"
                                               checked/>
                                        <label class="form-check-label" for="select-all">View All</label>
                                    </div>
                                    <div class="calendar-events-filter">
                                        <div class="form-check form-check-danger mb-1">
                                            <input
                                                type="checkbox"
                                                class="form-check-input input-filter"
                                                id="personal"
                                                data-value="personal"
                                                checked
                                            />
                                            <label class="form-check-label" for="personal">Personal</label>
                                        </div>
                                        <div class="form-check form-check-primary mb-1">
                                            <input
                                                type="checkbox"
                                                class="form-check-input input-filter"
                                                id="business"
                                                data-value="business"
                                                checked
                                            />
                                            <label class="form-check-label" for="business">Business</label>
                                        </div>
                                        <div class="form-check form-check-warning mb-1">
                                            <input type="checkbox" class="form-check-input input-filter" id="family"
                                                   data-value="family" checked/>
                                            <label class="form-check-label" for="family">Family</label>
                                        </div>
                                        <div class="form-check form-check-success mb-1">
                                            <input
                                                type="checkbox"
                                                class="form-check-input input-filter"
                                                id="holiday"
                                                data-value="holiday"
                                                checked
                                            />
                                            <label class="form-check-label" for="holiday">Holiday</label>
                                        </div>
                                        <div class="form-check form-check-info">
                                            <input type="checkbox" class="form-check-input input-filter" id="etc"
                                                   data-value="etc" checked/>
                                            <label class="form-check-label" for="etc">Others</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Sidebar -->

                        <!-- Calendar -->
                        <div class="col position-relative">
                            <div class="card shadow-none border-0 mb-0 rounded-0">
                                <div class="card-body pb-0">
                                    <div id="calendar"></div>
                                </div>
                            </div>
                        </div>
                        <!-- /Calendar -->
                        <div class="body-content-overlay"></div>
                    </div>
                </div>
                <!-- Calendar Add/Update/Delete event modal-->
                <div class="modal modal-slide-in event-sidebar fade" id="add-new-sidebar">
                    <div class="modal-dialog sidebar-lg">
                        <div class="modal-content p-0">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×
                            </button>
                            <div class="modal-header mb-1">
                                <h5 class="modal-title">Add Event</h5>
                            </div>
                            <div class="modal-body flex-grow-1 pb-sm-0 pb-3">
                                <form class="event-form needs-validation" data-ajax="false" novalidate>
                                    <div class="mb-1">
                                        <label for="title" class="form-label">Title</label>
                                        <input type="text" class="form-control" id="title" name="title"
                                               placeholder="Event Title" required/>
                                    </div>
                                    <div class="mb-1">
                                        <label for="select-label" class="form-label">Label</label>
                                        <select class="select2 select-label form-select w-100" id="select-label"
                                                name="select-label">
                                            <option data-label="primary" value="Business" selected>Business</option>
                                            <option data-label="danger" value="Personal">Personal</option>
                                            <option data-label="warning" value="Family">Family</option>
                                            <option data-label="success" value="Holiday">Holiday</option>
                                            <option data-label="info" value="ETC">ETC</option>
                                        </select>
                                    </div>
                                    <div class="mb-1 position-relative">
                                        <label for="start-date" class="form-label">Start Date</label>
                                        <input type="text" class="form-control" id="start-date" name="start-date"
                                               placeholder="Start Date"/>
                                    </div>
                                    <div class="mb-1 position-relative">
                                        <label for="end-date" class="form-label">End Date</label>
                                        <input type="text" class="form-control" id="end-date" name="end-date"
                                               placeholder="End Date"/>
                                    </div>
                                    <div class="mb-1">
                                        <div class="form-check form-switch">
                                            <input type="checkbox" class="form-check-input allDay-switch"
                                                   id="customSwitch3"/>
                                            <label class="form-check-label" for="customSwitch3">All Day</label>
                                        </div>
                                    </div>
                                    <div class="mb-1">
                                        <label for="event-url" class="form-label">Event URL</label>
                                        <input type="url" class="form-control" id="event-url"
                                               placeholder="https://www.google.com"/>
                                    </div>
                                    <div class="mb-1 select2-primary">
                                        <label for="event-guests" class="form-label">Add Guests</label>
                                        <select class="select2 select-add-guests form-select w-100" id="event-guests"
                                                multiple>
                                            <option data-avatar="1-small.png" value="Jane Foster">Jane Foster</option>
                                            <option data-avatar="3-small.png" value="Donna Frank">Donna Frank</option>
                                            <option data-avatar="5-small.png" value="Gabrielle Robertson">Gabrielle
                                                Robertson
                                            </option>
                                            <option data-avatar="7-small.png" value="Lori Spears">Lori Spears</option>
                                            <option data-avatar="9-small.png" value="Sandy Vega">Sandy Vega</option>
                                            <option data-avatar="11-small.png" value="Cheryl May">Cheryl May</option>
                                        </select>
                                    </div>
                                    <div class="mb-1">
                                        <label for="event-location" class="form-label">Location</label>
                                        <input type="text" class="form-control" id="event-location"
                                               placeholder="Enter Location"/>
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label">Description</label>
                                        <textarea name="event-description-editor" id="event-description-editor"
                                                  class="form-control"></textarea>
                                    </div>
                                    <div class="mb-1 d-flex">
                                        <button type="submit" class="btn btn-primary add-event-btn me-1">Add</button>
                                        <button type="button" class="btn btn-outline-secondary btn-cancel"
                                                data-bs-dismiss="modal">Cancel
                                        </button>
                                        <button type="submit" class="btn btn-primary update-event-btn d-none me-1">
                                            Update
                                        </button>
                                        <button class="btn btn-outline-danger btn-delete-event d-none">Delete</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Calendar Add/Update/Delete event modal-->
            </section>
            <!-- Full calendar end -->
        </div>
    </div>

</div>
<!-- End: Content-->

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>
