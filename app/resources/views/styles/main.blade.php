<!DOCTYPE html>
<html lang="pt-BR">
<!--begin::Head-->
<head><base href="">
    <title>Painel Administrativo | Agência F3X</title>
    <meta charset="utf-8" />
    <meta name="description" content="Painel administrativo da Agência F3X." />
    <meta name="keywords" content="f3x, agencia f3x, agência f3x, nozap, diogo archanjo, painel f3x, painel agencia f3x, " />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="pt-BR" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Painel Administrativo | Agência F3X" />
    <meta property="og:url" content="https://painel.agenciaf3x.com.br/" />
    <meta property="og:site_name" content="Agência F3X" />
    <link rel="canonical" href="#" />
    <link rel="shortcut icon" href="{{ URL::asset('media/logos/favicon.ico') }}" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Vendor Stylesheets(used by this page)-->
        @yield('page-h-stylesheets')
    <!--end::Page Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{{ URL::asset('plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="@if(auth()->user()->theme === 'dark') {{ URL::asset('css/style.dark.bundle.css') }} @else {{ URL::asset('css/style.bundle.css') }} @endif" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body" class="header-tablet-and-mobile-fixed aside-enabled">
<!--begin::Main-->
<!--begin::Root-->
<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="page d-flex flex-row flex-column-fluid">
        <!--begin::Aside-->
            @include('styles.b-aside')
        <!--end::Aside-->
        <!--begin::Wrapper-->
        <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
            <!--begin::Header-->
                @include('styles.w-header')
            <!--end::Header-->
            <!--begin::Content-->
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <!--begin::Post-->
                    <div class="post d-flex flex-column-fluid" id="kt_post">
                        <!--begin::Container-->
                        <div id="kt_content_container" class="container-xxl">
                            @yield('w-content')
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Post-->
                </div>
            <!--end::Content-->
            <!--begin::Footer-->
                @include('styles.w-footer')
            <!--end::Footer-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::Root-->
<!--begin::Drawers-->
    @yield('page-f-drawers')
<!--end::Drawers-->
<!--begin::Modals-->
    @yield('page-f-modals')
<!--end::Modals-->
<!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
    <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
    <span class="svg-icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
            <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
        </svg>
    </span>
    <!--end::Svg Icon-->
</div>
<!--end::Scrolltop-->
<!--end::Main-->
<script>var hostUrl = "/";</script>
<!--begin::Javascript-->
<!--begin::Global Javascript Bundle(used by all pages)-->
<script src="{{ URL::asset('plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ URL::asset('js/scripts.bundle.js') }}"></script>
<script>
    document.getElementById("submitSair").onclick = function() {
        document.getElementById("formSair").submit();
    }
</script>
<!--end::Global Javascript Bundle-->
<!--begin::Page Custom Javascript(used by this page)-->
    @yield('page-f-javascript')
<!--end::Page Custom Javascript-->
<!--end::Javascript-->
</body>
<!--end::Body-->
</html>
