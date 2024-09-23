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
        /* width */
        ::-webkit-scrollbar {
            width: 5px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #888;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

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
            max-width: 200px;
            /* Adjust width as needed */
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            vertical-align: bottom;
        }

        .lock-section {
            width: 100%;
            margin-top: 16px;
        }

        .lock-box {
            background-color: rgb(255, 255, 255);
            width: 100%;
            border-radius: 8px;
            flex-flow: column;
            padding: 16px;
        }

        .unlock-area {
            display: flex;
            -webkit-box-flex: 1;
            flex-grow: 1;
            flex-flow: row;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: justify;
            justify-content: space-between;
        }

        .unlock-area p {
            margin: 0px;
            font-size: 14px;
            line-height: 1.7;
            letter-spacing: 0em;
            font-weight: 700;
            width: 100%;
        }

        .counting-area {
            display: flex;
            -webkit-box-flex: 1;
            flex-grow: 1;
            flex-flow: column;
            -webkit-box-align: start;
            align-items: start;
            gap: 4px;
            margin-top: 16px;
            margin-bottom: 24px;
        }

        .lock-free {
            display: flex;
            -webkit-box-flex: 1;
            flex-grow: 1;
            flex-flow: row;
            -webkit-box-align: center;
            align-items: center;
            gap: 4px;
        }

        .lock-icon {
            user-select: none;
            width: 1em;
            height: 1em;
            display: inline-block;
            fill: currentcolor;
            flex-shrink: 0;
            font-size: 18px;
            transition: fill 200ms cubic-bezier(0.4, 0, 0.2, 1);
        }

        .__lock-free {
            background-color: rgb(237, 240, 255);
            color: rgb(0, 26, 67);
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
            border-radius: 4px;
            display: inline-flex;
            height: 18px;
            padding: 8px;
        }

        .counting {
            width: 100%;
            display: flex;
            flex-direction: column;
            gap: 8px;
            margin-bottom: 16px;
        }

        .counter-holder {
            display: flex;
            width: 100%;
            gap: 8px;
            -webkit-box-align: center;
            align-items: center;
        }

        .count-docs {
            margin: 0px;
            font-size: 14px;
            line-height: 1.42;
            letter-spacing: 0em;
            font-weight: 700;
        }

        .count-text {
            margin: 0px;
            font-size: 12px;
            line-height: 1.3;
            letter-spacing: 0em;
            font-weight: 500;
            color: rgb(97, 97, 97);
        }

        .counting-progress {
            position: relative;
            overflow: hidden;
            display: block;
            z-index: 0;
            border-radius: 8px;
            background-color: rgb(225, 226, 236);
            height: 6px;
        }

        .main-pr-bar {
            width: 100%;
            position: absolute;
            left: 0px;
            bottom: 0px;
            top: 0px;
            transition: transform 0.4s linear;
            transform-origin: left center;
            background-color: rgb(186, 26, 26);
        }

        .counting-text {
            margin: 0px;
            font-family: Inter, sans-serif;
            font-size: 12px;
            line-height: 1.3;
            letter-spacing: 0em;
            font-weight: 500;
            color: inherit;
        }

        .upgrade-section {
            margin-bottom: 16px;
        }

        @media (min-width: 600px) {
            .upgrade-box {
                min-height: 64px;
            }
        }

        @media (min-width: 0px) {
            @media (orientation: landscape) {
                .upgrade-box {
                    min-height: 48px;
                }
            }
        }

        .upgrade-button-area {
            display: inline-flex;
            border-radius: 4px;
            flex-direction: column;
        }

        .upgrade-button {
            -webkit-box-pack: center;
            justify-content: center;
            position: relative;
            box-sizing: border-box;
            -webkit-tap-highlight-color: transparent;
            background-color: transparent;
            outline: 0px;
            margin: 0px;
            cursor: pointer;
            user-select: none;
            vertical-align: middle;
            appearance: none;
            text-decoration: none;
            font-family: Inter, sans-serif;
            line-height: 1.42;
            letter-spacing: 0em;
            padding: 11px;
            border: 1px solid rgb(225, 226, 236);
            display: flex;
            flex-direction: column;
            border-radius: 8px;
            -webkit-box-align: start;
            align-items: start;
            text-transform: none;
            font-size: 14px;
            font-weight: 500;
            color: inherit;
        }

        .upgrade-button:hover {
            background-color: rgba(129, 67, 243, 0.12);
        }

        .upgrade-button-selected {
            color: rgb(129, 67, 243) !important;
        }

        .upgrade-button-selected:hover {
            background-color: rgba(129, 67, 243, 0.12) !important;
        }

        .offcanvas-header-three {
            margin: 0px;
            font-family: Inter, sans-serif;
            font-weight: 400;
            line-height: 1.42;
            letter-spacing: 0em;
            padding-left: 24px;
            padding-top: 8px;
            font-size: 14px;
        }

        .__offcanvas-new-file-upload-section {
            display: inline-flex;
            -webkit-box-align: center;
            align-items: center;
            font-size: 12px;
            margin-left: 24px;
            margin-top: 8px;
            gap: 14.4px;
            cursor: pointer;
            color: rgb(0, 89, 198);
        }

        .__offcanvas-new-file-upload-section p {
            margin: 0px;
            line-height: 1.42;
            letter-spacing: 0em;
            font-size: 14px;
            font-weight: 600;
        }

        .file-upload-svg {
            user-select: none;
            width: 1em;
            height: 1em;
            display: inline-block;
            fill: currentcolor;
            flex-shrink: 0;
            font-size: 18px;
            transition: fill 200ms cubic-bezier(0.4, 0, 0.2, 1);
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
                <div class="aside-primary d-flex flex-column align-items-center flex-row-auto">
                    <!--begin::Brand-->
                    <div class="aside-brand d-flex flex-column align-items-left flex-column-auto py-5 py-lg-12">
                        <div class="brand flex-column-auto mb-6 __brand_wrapper" id="kt_brand" kt-hidden-height="65"
                            style="">
                            <a href="index.html" class="brand-logo __brand_logo_name">
                                <img class="max-h-30px" alt="Logo"
                                    src="{{ asset('assets') }}/media/logos/sharly-logo.webp">
                                <h2 class="__logo_name" style="margin: 0px !important;">Sharly</h2>
                            </a>
                        </div>
                        <form action="">
                            <div class="btn btn-primary full-width" role="presentation" tabindex="0" id="file-upload"
                                data-toggle="tooltip" title data-placement="left" data-original-title="Start New Chat">
                                <input id="fileInput" accept="" multiple="" type="file"
                                    style="display: none;">
                                <span class="d-none d-md-inline">+ Start New Chat with PDF</span>
                                <span class="svg-icon svg-icon-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
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
                    </div>
                    <div class="aside-nav d-flex flex-column align-items-left
                     flex-column-fluid scroll scroll-pull ps ps--active-y"
                        style="height: 75px; overflow: hidden;">
                        <p class="p-2 p-lg-3 my-1 my-lg-3 font-size-sm"><strong>Today</strong></p>
                        <div class="list list-hover">
                            <div class="list-item hoverable p-2 p-lg-3 mb-2">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-column flex-grow-1 mr-2">
                                        <a href="#" class="text-muted text-hover-primary" data-toggle="tooltip"
                                            title="Getting Start with OneDrive.pdf - 8:30 AM">
                                            <span class="text-dark-75 mb-0 history-file-name">Getting Start
                                                with OneDrive.pdf</span>
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
                                        <a href="#" class="text-muted text-hover-primary" data-toggle="tooltip"
                                            title="National_AI_Policy_2024_Draft_Mode.pdf - 8:30 AM">
                                            <span
                                                class="text-dark-75 mb-0 history-file-name">National_AI_Policy_2024_Draft_Mode.pdf</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list list-hover">
                            <div class="list-item hoverable p-2 p-lg-3 mb-2">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-column flex-grow-1 mr-2">
                                        <a href="#" class="text-muted text-hover-primary" data-toggle="tooltip"
                                            title="National_AI_Policy_2024_Draft_Mode.pdf - 8:30 AM">
                                            <span
                                                class="text-dark-75 mb-0 history-file-name">National_AI_Policy_2024_Draft_Mode.pdf</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list list-hover">
                            <div class="list-item hoverable p-2 p-lg-3 mb-2">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-column flex-grow-1 mr-2">
                                        <a href="#" class="text-muted text-hover-primary" data-toggle="tooltip"
                                            title="National_AI_Policy_2024_Draft_Mode.pdf - 8:30 AM">
                                            <span
                                                class="text-dark-75 mb-0 history-file-name">National_AI_Policy_2024_Draft_Mode.pdf</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-sm btn-bg-light btn-hover-primary">Load More</button>
                        </div>
                        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                        </div>
                        <div class="ps__rail-y" style="top: 0px; right: -2px; height: 75px;">
                            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 40px;"></div>
                        </div>
                    </div>
                    <div class="aside-footer d-flex flex-column align-items-center flex-column-auto py-4 py-lg-10">
                        <div class="__aside lock-section">
                            <div class="__aside lock-box">
                                <div class="__lock-box unlock-area">
                                    <p class="MuiTypography-root MuiTypography-body1 css-p74nk6">Unlock More</p>
                                    <div class="__unlock-area lock-free">
                                        <svg class="lock-icon" focusable="false" aria-hidden="true"
                                            viewBox="0 0 24 24" data-testid="LockOutlinedIcon">
                                            <path
                                                d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2M9 6c0-1.66 1.34-3 3-3s3 1.34 3 3v2H9zm9 14H6V10h12zm-6-3c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2">
                                            </path>
                                        </svg>
                                        <div class="__lock-free text">
                                            <span
                                                class="MuiTypography-root MuiTypography-caption css-arsrzk">FREE</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="__lock-box counting-area">
                                    <div class="__counting-area counting">
                                        <div class="__counting counter-holder">
                                            <p class="__counter-holder count-docs">1 / 1</p>
                                            <span class="__counter-holder count-text">documents uploaded</span>
                                        </div>
                                        <span class="__counting counting-progress" role="progressbar"
                                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                            <span class="__counting-progress main-pr-bar"
                                                style="transform: translateX(0%);"></span>
                                        </span>
                                    </div>
                                    <span class="__counting-area counting-text">Upload more
                                        documents for Free!</span>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--end::Footer-->
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
                <div class="__offcanvas-upgrade-section">
                    <div class="__upgrade-section upgrade-box">
                        <div role="group" class="__upgrade-box upgrade-button-area" aria-label="text alignment"
                            style="width: 100%;">
                            <button class="__upgrade-button-area upgrade-button upgrade-button-selected"
                                tabindex="0" type="button" value="false" aria-pressed="true"
                                aria-label="efficient-response-button">
                                <div class="MuiBox-root css-10uih11">Efficient</div>
                                <span class="MuiTypography-root MuiTypography-caption css-18czna">Great
                                    responses</span>
                                <span class="MuiTouchRipple-root css-w0pj6f"></span>
                            </button>
                            <button class="__upgrade-button-area upgrade-button" tabindex="0" type="button"
                                value="true" aria-pressed="false" aria-label="advance-response-button">
                                <div class="MuiBox-root css-10uih11">Advanced
                                    <div class="MuiBox-root css-vxcmzt">
                                        <div class="MuiBox-root css-1qmwbks">
                                            <div class="MuiBox-root css-wo8od1">
                                                <span
                                                    class="MuiTypography-root MuiTypography-caption css-j55nbm">PRO</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <span class="MuiTypography-root MuiTypography-caption css-18czna">High Accuracy
                                    GPT-4</span>
                                <span class="MuiTouchRipple-root css-w0pj6f"></span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="__offcanvas-header-three my-4">
                    Attached Files
                </div>
                <div class="__offcanvas-new-file-upload-section">
                    <svg class="file-upload-svg" focusable="false" aria-hidden="true" viewBox="0 0 24 24"
                        data-testid="AddCircleOutlineOutlinedIcon">
                        <path
                            d="M13 7h-2v4H7v2h4v4h2v-4h4v-2h-4zm-1-5C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2m0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8">
                        </path>
                    </svg>
                    <p class="MuiTypography-root MuiTypography-body2 css-bbya65">Add New File</p>
                </div>
            </div>
            <div class="offcanvas-footer">
                <a href="https://1.envato.market/EA4JP" target="_blank"
                    class="btn btn-block btn-primary btn-shadow font-weight-bolder text-uppercase">Custom
                    Instruction</a>
                <a href="https://1.envato.market/EA4JP" target="_blank"
                    class="btn btn-block btn-danger btn-shadow font-weight-bolder text-uppercase">More Settings</a>
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
