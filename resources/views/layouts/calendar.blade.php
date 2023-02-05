<!DOCTYPE html>

<html class="loading dark-layout"
      lang="pt"
      data-textdirection="ltr"
      data-layout="dark-layout" >

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="csrf-token" content="SQFSeAHbM6D3oz8gX0gpxouL1w8BsfCvTIrI0haz">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>App Calender - Vuexy - Bootstrap HTML & Laravel admin template</title>
    <link rel="apple-touch-icon" href="https://pixinvent.com/demo/vuexy-bootstrap-laravel-admin-template/demo-4/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../images/logo/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">


    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" href="{{ asset('vendor/vendors/css/vendors.min.css') }}" />

    <!-- Vendor css files -->
    <link rel="stylesheet" href="{{ asset('vendor/vendors/css/calendars/fullcalendar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/vendors/css/forms/select/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/vendors/css/pickers/flatpickr/flatpickr.min.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" href="{{ asset('vendor/css/core.css') }}" />


    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" href="{{ asset('vendor/css/base/core/menu/menu-types/vertical-menu.css') }}" />


    <!-- Page css files -->
    <link rel="stylesheet" href="{{ asset('vendor/css/base/plugins/forms/pickers/form-flat-pickr.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/css/base/pages/app-calendar.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/css/base/plugins/forms/form-validation.css') }}">

    <!-- laravel style -->
    <link rel="stylesheet" href="{{ asset('vendor/css/overrides.css') }}" />

    <!-- BEGIN: Custom CSS-->

    <link rel="stylesheet" href="{{ asset('vendor/css/style.css') }}" />

    <livewire:styles />
</head>
<!-- END: Head-->

    <livewire:calendar />

    <livewire:scripts />
<!-- BEGIN: Footer-->
<footer class="footer footer-light  footer-static">
    <p class="clearfix mb-0">
    <span class="float-md-start d-block d-md-inline-block mt-25">COPYRIGHT &copy;
      <script>document.write(new Date().getFullYear())</script><a class="ms-25" href="https://1.envato.market/pixinvent_portfolio" target="_blank">Pixinvent</a>,
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
<!-- Vendor js files -->
<script src="{{ asset('vendor/vendors/js/calendar/fullcalendar.min.js') }}"></script>
<script src="{{ asset('vendor/vendors/js/extensions/moment.min.js') }}"></script>
<script src="{{ asset('vendor/vendors/js/forms/select/select2.full.min.js') }}"></script>
<script src="{{ asset('vendor/vendors/js/forms/validation/jquery.validate.min.js') }}"></script>
<script src="{{ asset('vendor/vendors/js/pickers/flatpickr/flatpickr.min.js') }}"></script>
<!-- END: Page Vendor JS-->
<!-- BEGIN: Theme JS-->
<script src="{{ asset('vendor/js/core/app-menu.js') }}"></script>
<script src="{{ asset('vendor/js/core/app.js') }}"></script>

<!-- custom scripts file for user -->
<script src="{{ asset('vendor/js/core/scripts.js') }}"></script>

<!-- END: Theme JS-->
<!-- BEGIN: Page JS-->
<!-- Page js files -->
<script src="{{ asset('vendor/js/scripts/pages/app-calendar-events.js') }}"></script>
<script src="{{ asset('vendor/js/scripts/pages/app-calendar.js') }}"></script>
<!-- END: Page JS-->

<script type="text/javascript">
    $(window).on('load', function() {
        if (feather) {
            feather.replace({
                width: 14, height: 14
            });
        }
    })
</script>
</body>
</html>
