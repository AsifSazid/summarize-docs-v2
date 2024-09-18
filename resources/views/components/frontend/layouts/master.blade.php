<!DOCTYPE html>
<html lang="en">

<head>
    <base href="../../../">
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Tasks | Keenthemes</title>
    <meta name="description" content="Tasks management" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="canonical" href="https://keenthemes.com/metronic" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link href="{{ asset('assets') }}/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets') }}/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets') }}/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="{{ asset('assets') }}/media/logos/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        @font-face {
            font-family: __Roboto_8032a8;
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(/_next/static/media/6ebb97b5c9fa4e03-s.p.woff2) format("woff2");
            unicode-range: u+00??, u+0131, u+0152-0153, u+02bb-02bc, u+02c6, u+02da, u+02dc, u+0304, u+0308, u+0329, u+2000-206f, u+2074, u+20ac, u+2122, u+2191, u+2193, u+2212, u+2215, u+feff, u+fffd
        }

        @font-face {
            font-family: __Roboto_Fallback_8032a8;
            src: local("Arial");
            ascent-override: 92.98%;
            descent-override: 24.47%;
            line-gap-override: 0%;
            size-adjust: 99.78%
        }

        .__brand_wrapper {
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .__brand_logo_name {
            gap: 8px;
            cursor: pointer;
            display: flex;
            flex-direction: row;
            -webkit-box-align: center;
            justify-content: center;
            align-items: center;
            width: 100px;
        }

        .__logo_name {
            font-family: __Roboto_8032a8, __Roboto_Fallback_8032a8;
            font-weight: 700;
            font-style: normal;
            line-height: 1px;
            letter-spacing: 1.2px;
        }

        .history-file-name {
            display: inline-block;
            max-width: 180px;
            /* Adjust width as needed */
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            vertical-align: bottom;
        }
    </style>
    @stack('css')
</head>

<body id="kt_body"
    class="header-mobile-fixed subheader-enabled aside-enabled aside-fixed aside-secondary-enabled page-loading">
    <div id="kt_header_mobile" class="header-mobile">
        <a href="index.html">
            <img alt="Logo" src="{{ asset('assets') }}/media/logos/sharly-logo.webp"
                class="logo-default max-h-30px" />
        </a>
        <div class="d-flex align-items-center">
            <button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
                <span></span>
            </button>
        </div>
    </div>
    <div class="d-flex flex-column flex-root">
        <div class="d-flex flex-row flex-column-fluid page">
            <div class="aside aside-left" id="kt_aside">
                <div class="">
                    <div class="aside-workspace scroll scroll-push my-2">
                        <div class="tab-content m-5">
                            <div class="tab-pane fade show active" id="kt_aside_tab_1">
                                <div class="brand flex-column-auto mb-6 __brand_wrapper" id="kt_brand"
                                    kt-hidden-height="65" style="">
                                    <a href="index.html" class="brand-logo __brand_logo_name">
                                        <img class="max-h-30px" alt="Logo"
                                            src="{{ asset('assets') }}/media/logos/sharly-logo.webp">
                                        <h2 class="__logo_name">Sharly</h2>
                                    </a>
                                </div>
                                <form action="">
                                    <div class="btn btn-primary full-width" role="presentation" tabindex="0"
                                        id="file-upload" data-toggle="tooltip" title data-placement="left"
                                        data-original-title="Start New Chat">
                                        <input id="fileInput" accept="" multiple="" type="file"
                                            style="display: none;">
                                        <span class="d-none d-md-inline">+ Start New Chat with PDF</span>
                                        <span class="svg-icon svg-icon-lg">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                    <path
                                                        d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z"
                                                        fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                    <rect fill="#000000" x="6" y="11" width="9" height="2"
                                                        rx="1" />
                                                    <rect fill="#000000" x="6" y="15" width="5" height="2"
                                                        rx="1" />
                                                </g>
                                            </svg>
                                        </span>
                                    </div>
                                </form>
                                {{-- <h3 class="p-2 p-lg-3 my-1 my-lg-3">History</h3> --}}
                                <p class="p-2 p-lg-3 my-1 my-lg-3 font-size-sm"><strong>Today</strong></p>
                                <div class="list list-hover">
                                    <div class="list-item hoverable p-2 p-lg-3 mb-2">
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                                <a href="#" class="text-muted text-hover-primary" data-toggle="tooltip" title="Getting Start with OneDrive.pdf - 8:30 AM">
                                                    <span class="text-dark-75 mb-0 history-file-name">Getting Start with OneDrive.pdf</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="p-2 p-lg-3 my-1 my-lg-3 font-size-sm"><strong>Previous 30 Days</strong></p>
                                <div class="list list-hover">
                                    <div class="list-item hoverable p-2 p-lg-3 mb-2">
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                                <a href="#" class="text-muted text-hover-primary" data-toggle="tooltip" title="National_AI_Policy_2024_Draft_Mode.pdf - 8:30 AM">
                                                    <span class="text-dark-75 mb-0 history-file-name">National_AI_Policy_2024_Draft_Mode.pdf</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list list-hover">
                                    <div class="list-item hoverable p-2 p-lg-3 mb-2">
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                                <a href="#" class="text-muted text-hover-primary" data-toggle="tooltip" title="National_AI_Policy_2024_Draft_Mode.pdf - 8:30 AM">
                                                    <span class="text-dark-75 mb-0 history-file-name">National_AI_Policy_2024_Draft_Mode.pdf</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list list-hover">
                                    <div class="list-item hoverable p-2 p-lg-3 mb-2">
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                                <a href="#" class="text-muted text-hover-primary" data-toggle="tooltip" title="National_AI_Policy_2024_Draft_Mode.pdf - 8:30 AM">
                                                    <span class="text-dark-75 mb-0 history-file-name">National_AI_Policy_2024_Draft_Mode.pdf</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button class="btn btn-sm btn-bg-light btn-hover-primary">Load More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
    <div id="kt_scrolltop" class="scrolltop">
        <span class="svg-icon">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                height="24px" viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <polygon points="0 0 24 0 24 24 0 24" />
                    <rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10"
                        rx="1" />
                    <path
                        d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z"
                        fill="#000000" fill-rule="nonzero" />
                </g>
            </svg>
        </span>
    </div>
    <ul class="sticky-toolbar nav flex-column pl-2 pr-2 pt-3 pb-3 mt-4">
        <li class="nav-item mb-2" id="kt_demo_panel_toggle" data-toggle="tooltip" title="Tools"
            data-placement="right">
            <a class="btn btn-sm btn-icon btn-bg-light btn-icon-success btn-hover-success" href="#">
                <i class="fa-solid fa-chevron-left"></i>
            </a>
        </li>
    </ul>
    <div id="kt_demo_panel" class="offcanvas offcanvas-right p-10">
        <div class="offcanvas-header d-flex align-items-center justify-content-between pb-7">
            <h4 class="font-weight-bold m-0">Tool Bar</h4>
            <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_demo_panel_close">
                <i class="ki ki-close icon-xs text-muted"></i>
            </a>
        </div>
        <div class="offcanvas-content">
            <div class="offcanvas-wrapper mb-5 scroll-pull">
            </div>
            <div class="offcanvas-footer">
                <a href="https://1.envato.market/EA4JP" target="_blank"
                    class="btn btn-block btn-primary btn-shadow font-weight-bolder text-uppercase">Custom
                    Instruction</a>
                <a href="https://1.envato.market/EA4JP" target="_blank"
                    class="btn btn-block btn-danger btn-shadow font-weight-bolder text-uppercase">More Settings</a>
                <a href="https://1.envato.market/EA4JP" target="_blank"
                    class="btn btn-block btn-warning btn-shadow font-weight-bolder text-uppercase">Upgrade Plan</a>
            </div>
        </div>
    </div>
    <script>
        var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";
    </script>
    <script>
        var KTAppSettings = {
            "breakpoints": {
                "sm": 576,
                "md": 768,
                "lg": 992,
                "xl": 1200,
                "xxl": 1200
            },
            "colors": {
                "theme": {
                    "base": {
                        "white": "#ffffff",
                        "primary": "#1BC5BD",
                        "secondary": "#E5EAEE",
                        "success": "#1BC5BD",
                        "info": "#6993FF",
                        "warning": "#FFA800",
                        "danger": "#F64E60",
                        "light": "#F3F6F9",
                        "dark": "#212121"
                    },
                    "light": {
                        "white": "#ffffff",
                        "primary": "#1BC5BD",
                        "secondary": "#ECF0F3",
                        "success": "#C9F7F5",
                        "info": "#E1E9FF",
                        "warning": "#FFF4DE",
                        "danger": "#FFE2E5",
                        "light": "#F3F6F9",
                        "dark": "#D6D6E0"
                    },
                    "inverse": {
                        "white": "#ffffff",
                        "primary": "#ffffff",
                        "secondary": "#212121",
                        "success": "#ffffff",
                        "info": "#ffffff",
                        "warning": "#ffffff",
                        "danger": "#ffffff",
                        "light": "#464E5F",
                        "dark": "#ffffff"
                    }
                },
                "gray": {
                    "gray-100": "#F3F6F9",
                    "gray-200": "#ECF0F3",
                    "gray-300": "#E5EAEE",
                    "gray-400": "#D6D6E0",
                    "gray-500": "#B5B5C3",
                    "gray-600": "#80808F",
                    "gray-700": "#464E5F",
                    "gray-800": "#1B283F",
                    "gray-900": "#212121"
                }
            },
            "font-family": "Poppins"
        };
    </script>
    <script src="{{ asset('assets') }}/plugins/global/plugins.bundle.js"></script>
    <script src="{{ asset('assets') }}/plugins/custom/prismjs/prismjs.bundle.js"></script>
    <script src="{{ asset('assets') }}/js/scripts.bundle.js"></script>
    <script src="{{ asset('assets') }}/js/pages/custom/todo/todo.js"></script>

    @stack('js')

</body>

</html>
