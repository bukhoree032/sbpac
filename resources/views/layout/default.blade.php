{{--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4 & Angular 8
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
 --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" {{ Metronic::printAttrs('html') }} {{ Metronic::printClasses('html') }}>
    <head>
        <meta charset="utf-8"/>

        {{-- Title Section --}}
        <title>{{ config('app.name') }} | @yield('title', $page_title ?? '')</title>

        {{-- Meta Data --}}
        <meta name="description" content="@yield('page_description', $page_description ?? '')"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

        {{-- Favicon --}}
        <link rel="shortcut icon" href="{{ asset('media/logos/favicon.ico') }}" />

        {{-- Fonts --}}
        {{ Metronic::getGoogleFontsInclude() }}

        {{-- Global Theme Styles (used by all pages) --}}
        @foreach(config('layout.resources.css') as $style)
            <link href="{{ config('layout.self.rtl') ? asset(Metronic::rtlCssPath($style)) : asset($style) }}" rel="stylesheet" type="text/css"/>
        @endforeach

        {{-- Layout Themes (used by all pages) --}}
        @foreach (Metronic::initThemes() as $theme)
            <link href="{{ config('layout.self.rtl') ? asset(Metronic::rtlCssPath($theme)) : asset($theme) }}" rel="stylesheet" type="text/css"/>
        @endforeach

        {{-- Datatable --}}
		<!--begin::Page Vendors Styles(used by this page)-->
		<link href="{{ asset('js/datatable/datatable.cssplugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
		<!--end::Page Vendors Styles-->
        <link href="{{ asset('css/selecttwo.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/input-file.css') }}" rel="stylesheet" type="text/css" />
        <!-- upload file -->
        <link href="{{ asset('css/upload_file/upload_file.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/upload_file/upload_file_multiples.css') }}" rel="stylesheet" type="text/css" />
        <!-- upload file -->
        {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
        {{-- Includable CSS --}}
        <style>
            .pointer {cursor: pointer;}
        </style>

        <style>
            .wizard,
            .wizard .nav-tabs,
            .wizard .nav-tabs .nav-item {
                position: relative;
            }
            
            .wizard .nav-tabs:after {
                content: "";
                width: 80%;
                border-bottom: solid 2px #ccc;
                position: absolute;
                margin-left: auto;
                margin-right: auto;
                top: 38%;
                z-index: -1;
            }
            
            .wizard .nav-tabs .nav-item .nav-link {
                width: 70px;
                height: 70px;
                margin-bottom: 6%;
                background: white;
                border: 2px solid #ccc;
                color: #ccc;
                z-index: 10;
            }
            
            .wizard .nav-tabs .nav-item .nav-link:hover {
                color: #333;
                border: 2px solid #333;
            }
            
            .wizard .nav-tabs .nav-item .nav-link.active {
                background: #fff;
                border: 2px solid #0dcaf0;
                color: #0dcaf0;
            }
            
            .wizard .nav-tabs .nav-item .nav-link:after {
                content: " ";
                position: absolute;
                left: 50%;
                transform: translate(-50%);
                opacity: 0;
                margin: 0 auto;
                bottom: 0px;
                border: 5px solid transparent;
                border-bottom-color: #0dcaf0;
                transition: 0.1s ease-in-out;
            }
            
            .nav-tabs .nav-item .nav-link.active:after {
                content: " ";
                position: absolute;
                left: 50%;
                transform: translate(-50%);
                opacity: 1;
                margin: 0 auto;
                bottom: 0px;
                border: 10px solid transparent;
                border-bottom-color: #0dcaf0;
            }
            
            .wizard .nav-tabs .nav-item .nav-link svg {
                font-size: 25px;
            }
        </style>

        <script>
            window.console = window.console || function(t) {};
        </script>
        <script>
            if (document.location.search.match(/type=embed/gi)) {
                window.parent.postMessage("resize", "*");
            }
        </script>
        
        @yield('styles')
    </head>

    <body {{ Metronic::printAttrs('body') }} {{ Metronic::printClasses('body') }}>

        @if (config('layout.page-loader.type') != '')
            @include('layout.partials._page-loader')
        @endif

        @include('layout.base._layout')

        <script>var HOST_URL = "{{ route('quick-search') }}";</script>

        {{-- Global Config (global config for global JS scripts) --}}
        <script>
            var KTAppSettings = {!! json_encode(config('layout.js'), JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES) !!};
        </script>

        {{-- Global Theme JS Bundle (used by all pages)  --}}
        @foreach(config('layout.resources.js') as $script)
            <script src="{{ asset($script) }}" type="text/javascript"></script>
        @endforeach

        {{-- Includable JS --}}
        @yield('scripts')

    </body>
</html>

