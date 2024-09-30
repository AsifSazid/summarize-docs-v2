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
    <link rel="stylesheet" href="{{ asset('assets/css/master.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/summary.css') }}">
    <style>
        .copy-btn {
            display: none;
            padding: 0.5rem;
        }

        .copy-btn i {
            font-size: 1rem !important;
        }

        .content-container:hover .copy-btn {
            display: block;
        }
    </style>
    <style>
        .sidebar-title {
            cursor: pointer;
        }

        .delete-btn {
            display: none;
            cursor: pointer;
        }

        .list-item.hoverable:hover .delete-btn {
            display: block;
        }

        .single-upgrade-button-title {
            width: 100%;
            display: flex;
            flex-direction: row;
            -webkit-box-align: center;
            align-items: center;
            gap: 8px;
        }

        .single-upgrade-button-des {
            margin: 0px;
            font-family: Inter, sans-serif;
            font-weight: 400;
            font-size: 12px;
            line-height: 1.3;
            letter-spacing: 0em;
            color: rgb(0, 26, 67);
        }

        .single-upgrade-button-design {
            pointer-events: none;
            position: absolute;
            z-index: 0;
            top: 0px;
            right: 0px;
            bottom: 0px;
            left: 0px;
            overflow: hidden;
            border-radius: inherit;
        }

        .badge-section {
            display: inline-flex;
        }

        .badge-area {
            background-color: rgb(129, 67, 243);
            color: rgb(255, 255, 255);
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
            border-radius: 4px;
            display: inline-flex;
            height: 18px;
            padding: 8px;
        }

        .main-badge {
            display: flex;
            flex-flow: row;
            -webkit-box-align: center;
            align-items: center;
            gap: 8px;
        }

        .badge-caption {
            margin: 0px;
            font-family: Inter, sans-serif;
            font-size: 12px;
            line-height: 1.3;
            letter-spacing: 0em;
            color: rgb(255, 255, 255);
            font-weight: 600;
        }

        .__offcanvas-showing-file-section {
            display: flex;
            width: 100%;
            flex-direction: column;
            overflow: auto;
            margin-bottom: 16px;
            scrollbar-width: none;
            scrollbar-color: rgba(0, 0, 0, 0.2) transparent;
        }

        .file-drawer {
            list-style: none;
            position: relative;
            padding: 8px 0px;
            width: 100%;
            overflow: auto;
            margin: 0px;
            gap: 0px;
        }

        .file-list {
            display: flex;
            -webkit-box-pack: start;
            justify-content: flex-start;
            -webkit-box-align: center;
            align-items: center;
            position: relative;
            text-decoration: none;
            width: 100%;
            box-sizing: border-box;
            text-align: left;
            cursor: pointer;
            min-height: 34px;
            border-radius: 8px;
        }

        .file-list:hover {
            background-color: rgb(246, 246, 249);
        }

        .file-list:hover svg {
            visibility: visible;
        }

        .file-list svg {
            user-select: none;
            width: 1em;
            height: 1em;
            display: inline-block;
            fill: currentcolor;
            flex-shrink: 0;
            font-size: 1.71429rem;
            transition: fill 200ms cubic-bezier(0.4, 0, 0.2, 1);
        }

        .file-title {
            flex: 1 1 auto;
            min-width: 0px;
            margin-top: 4px;
            margin-bottom: 4px;
        }

        .file-title-text {
            font-family: Inter, sans-serif;
            font-weight: 400;
            line-height: 1.7;
            letter-spacing: 0em;
            text-overflow: ellipsis;
            display: block;
            font-size: 14px;
            margin: 0px 0px 0px 13px;
            overflow: hidden;
            white-space: nowrap;
        }

        .file-remove-btn {
            display: inline-flex;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
            position: relative;
            box-sizing: border-box;
            -webkit-tap-highlight-color: transparent;
            background-color: transparent;
            cursor: pointer;
            user-select: none;
            vertical-align: middle;
            appearance: none;
            text-align: center;
            font-size: 1.71429rem;
            color: rgba(0, 0, 0, 0.54);
            visibility: hidden;
            outline: 0px;
            border-width: 0px;
            border-style: initial;
            border-color: initial;
            border-image: initial;
            margin: 0px;
            text-decoration: none;
            flex: 0 0 auto;
            border-radius: 50%;
            overflow: visible;
            transition: background-color 150ms cubic-bezier(0.4, 0, 0.2, 1);
            padding: 0px;
        }

        .file-remove-btn svg {
            user-select: none;
            width: 1em;
            height: 1em;
            display: inline-block;
            fill: currentcolor;
            flex-shrink: 0;
            visibility: hidden;
            font-size: 18px;
            color: rgb(158, 158, 158);
            transition: fill 200ms cubic-bezier(0.4, 0, 0.2, 1);
        }

        .file-remove-btn span {
            overflow: hidden;
            pointer-events: none;
            position: absolute;
            z-index: 0;
            inset: 0px;
            border-radius: inherit;
        }
    </style>
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
                            <a href="{{ route('docSummary') }}" class="brand-logo __brand_logo_name">
                                <img class="max-h-30px" alt="Logo"
                                    src="{{ asset('assets') }}/media/logos/sharly-logo.webp">
                                <h2 class="__logo_name" style="margin: 0px !important;">Sharly</h2>
                            </a>
                        </div>
                        <form action="">
                            <div class="btn btn-primary full-width" role="presentation" tabindex="0" id="file-upload"
                                data-toggle="tooltip" title data-placement="left" data-original-title="Start New Chat">
                                <input id="fileInput" accept="application/pdf" multiple="" type="file"
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
                    <div
                        class="aside-nav d-flex flex-column align-items-left flex-column-fluid scroll scroll-pull ps ps--active-y">
                        <p class="p-2 p-lg-3 my-1 font-size-sm todays-title d-none"><strong>Today</strong></p>
                        <div class="list today-list"></div>

                        <!-- This title will be conditionally hidden -->
                        <p class="p-2 p-lg-3 my-1 font-size-sm previous-days-title d-none"><strong>Previous 30
                                Days</strong></p>
                        <div class="list previous-list"></div>

                        <!-- Load More button, hidden by default -->
                        <div class="text-center">
                            <button class="btn btn-sm btn-bg-light btn-hover-primary btn-load-more"
                                style="display: none;">View All</button>
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
                                            <p class="__counter-holder count-docs">
                                                <span id="dataCountForStorage"></span>
                                                @if (auth()->user())
                                                    / 10
                                                @else
                                                    / 5
                                                @endif
                                            </p>
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
                    <div class="subheader py-3 py-lg-8 subheader-transparent" id="kt_subheader">
                        <div
                            class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                            <div class="d-flex align-items-center mr-1">
                                <div class="dropdown dropdown-inline d-inline-block d-lg-none ml-2 mr-4">
                                    <a href="#" class="px-2 px-lg-5 mr-2" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="fa-solid fa-ellipsis-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                                        <ul class="navi navi-hover">
                                            <li class="navi-header font-weight-bold py-4">
                                                <span class="font-size-lg">Chat Experience</span>
                                            </li>
                                            <li class="navi-header font-weight-bold py-4">
                                                <span class="font-size-lg">Custom Instruction</span>
                                            </li>
                                            <li class="navi-header font-weight-bold py-4" id="resetChatSection">
                                                <span class="font-size-lg">Reset Chat</span>
                                            </li>
                                            <li class="navi-header font-weight-bold py-4">
                                                <span class="font-size-lg">Share Chat</span>
                                            </li>
                                            <li class="navi-header font-weight-bold py-4">
                                                <span class="font-size-lg">Export Chat</span>
                                            </li>
                                            <li class="navi-header font-weight-bold py-4">
                                                <span class="font-size-lg text-danger">Delete Chat</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="d-flex align-items-baseline flex-wrap mr-5">
                                    <h2 class="d-flex align-items-center text-dark font-weight-bold my-1 mr-3"
                                        id="chat-title" data-placement="bottom" data-toggle="tooltip" title=""
                                        aria-haspopup="true">
                                    </h2>
                                </div>
                            </div>
                            <div class="d-flex align-items-center flex-wrap">
                                @if (auth()->user())
                                    <div class="dropdown dropdown-inline" data-toggle="tooltip" title=""
                                        data-placement="left" data-original-title="Quick actions">
                                        <a href="#" class="px-2 px-lg-5 mr-2" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <img class="symbol symbol-35px symbol-md-40px" style="border-radius: 50%;"
                                                src="{{ asset('assets') }}/media/users/100_12.jpg" alt="user"
                                                width="50" height="50" />
                                        </a>
                                        <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                                            <!--begin::Navigation-->
                                            <ul class="navi navi-hover">
                                                <li class="navi-header font-weight-bold py-4">
                                                    <div
                                                        class="user-identity d-sm-flex flex-row justify-content-center me-2 me-md-4">
                                                        <span class="fw-bold lh-1 mt-2"
                                                            style="font-size: 1.2rem;"><strong>{{ auth()->user()->name }}</strong></span>
                                                        <span
                                                            class="badge rounded-pill bg-info text-dark opacity-75 ml-2 mb-4"
                                                            style="font-size: 0.6rem">GUEST</span>
                                                    </div>
                                                </li>
                                                <li class="navi-header font-weight-bold py-4">
                                                    <span class="font-size-lg">Settings</span>
                                                </li>
                                                <li class="navi-header font-weight-bold py-4">
                                                    <span class="font-size-lg">Upgrade</span>
                                                </li>
                                                <li class="navi-header font-weight-bold py-4">
                                                    <form method="POST" action="{{ route('logout') }}">
                                                        @csrf
                                                        <a class="logout-btn" :href="route('logout')"
                                                            onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                                            {{ __('Log Out') }}
                                                        </a>
                                                    </form>
                                                </li>
                                            </ul>
                                            <!--end::Navigation-->
                                        </div>
                                    </div>
                                @else
                                    <a href="{{ route('register') }}"
                                        class="btn btn-flex btn-sm fw-bold btn-info py-3">Sign Up</a>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-column-fluid">
                        <div class="container h-full">
                            <div class="card card-flush card-chat">
                                <div class="card-body d-flex flex-row p-0">
                                    <div class="chat-body d-flex flex-column">
                                        <div class="chat-window mb-2" id="chat-window">
                                            <!-- Chat messages go here and this section will scroll -->
                                        </div>
                                    </div>
                                    <div class="chat-action d-none" id="chat-action">
                                        <div data-bs-toggle="tooltip" data-original-title="Reset Conversation"
                                            data-bs-placement="left">
                                            <a class="btn btn-outline-secondary text-center" id="resetConversationBtn"
                                                aria-haspopup="true">
                                                <i class="fa-solid fa-arrows-rotate"></i>
                                            </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" data-original-title="Share Conversation"
                                            data-bs-placement="left" onclick="shareConversation()">
                                            <a class="btn btn-outline-secondary text-center" aria-haspopup="true">
                                                <i class="fa-regular fa-share-from-square"></i>
                                            </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" data-original-title="Download Conversation"
                                            data-bs-placement="left" onclick="downloadConversation()">
                                            <a class="btn btn-outline-secondary text-center" aria-haspopup="true">
                                                <i class="fa-solid fa-download"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>




                                <div class="card-footer px-5 py-1">
                                    <div class="suggested-button-section d-flex flex-wrap mb-3">
                                        <button type="button"
                                            class="btn btn-outline-secondary m-2 suggested-button">Summarize</button>
                                        <button type="button"
                                            class="btn btn-outline-secondary m-2 suggested-button">Highlight</button>
                                        <button type="button"
                                            class="btn btn-outline-secondary m-2 suggested-button">Simplify</button>
                                        <button type="button"
                                            class="btn btn-outline-secondary m-2 suggested-button">Enhance</button>
                                        <button type="button"
                                            class="btn btn-outline-secondary m-2 suggested-button">Critique</button>
                                        <button type="button"
                                            class="btn btn-outline-secondary m-2 suggested-button">Meme</button>
                                        <button type="button"
                                            class="btn btn-outline-primary m-2 suggested-button">+</button>
                                    </div>
                                    <form id="chat-form">
                                        <div class="input-group chat-input-group mb-5 m-2 p-2">
                                            <div class="__chat-form-attachment">
                                                <svg class="__attachment-icon" focusable="false" aria-hidden="true"
                                                    viewBox="0 0 24 24" data-testid="AttachFileOutlinedIcon">
                                                    <path
                                                        d="M16.5 6v11.5c0 2.21-1.79 4-4 4s-4-1.79-4-4V5c0-1.38 1.12-2.5 2.5-2.5s2.5 1.12 2.5 2.5v10.5c0 .55-.45 1-1 1s-1-.45-1-1V6H10v9.5c0 1.38 1.12 2.5 2.5 2.5s2.5-1.12 2.5-2.5V5c0-2.21-1.79-4-4-4S7 2.79 7 5v12.5c0 3.04 2.46 5.5 5.5 5.5s5.5-2.46 5.5-5.5V6z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <input type="text" id="user-input" class="form-control chat-input"
                                                placeholder="Ask me anything about your document" required>
                                            <button id="submitButton" class="btn btn-primary" type="submit"
                                                disabled>
                                                <i class="fas fa-paper-plane"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
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
    <div id="kt_demo_panel" class="offcanvas offcanvas-right p-8">
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
                                <div class="__upgrade-button single-upgrade-button-title">Efficient</div>
                                <span class="__upgrade-button single-upgrade-button-des">Great
                                    responses</span>
                                <span class="__upgrade-button single-upgrade-button-design"></span>
                            </button>
                            <button class="__upgrade-button-area upgrade-button" tabindex="0" type="button"
                                value="true" aria-pressed="false" aria-label="advance-response-button">
                                <div class="__upgrade-button single-upgrade-button-title">Advanced
                                    <div class="__single-upgrade-button badge-section">
                                        <div class="__badge-section badge-area">
                                            <div class="__badge-area main-badge">
                                                <span class="__main-badge badge-caption">PRO</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <span class="__upgrade-button single-upgrade-button-des">High Accuracy
                                    GPT-4</span>
                                <span class="__upgrade-button single-upgrade-button-design"></span>
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
                    <input id="offcanvasFileInput" type="file" accept="application/pdf" style="display: none;">
                </div>
                <div class="__offcanvas-showing-file-section">
                    <ul class="__showing-file-section file-drawer">
                        {{-- <li class="__file-drawer file-list">
                            <svg class="__file-list list-svg" focusable="false" aria-hidden="true"
                                viewBox="0 0 24 24" data-testid="DescriptionOutlinedIcon"
                                style="font-size: 18px; color: rgb(71, 93, 145);">
                                <path
                                    d="M8 16h8v2H8zm0-4h8v2H8zm6-10H6c-1.1 0-2 .9-2 2v16c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8zm4 18H6V4h7v5h5z">
                                </path>
                            </svg>
                            <div class="__file-list file-title">
                                <span class="__file-title file-title-text">
                                    conversation-summary (1).pdf
                                </span>
                            </div>
                            <button class="__file-list file-remove-btn" tabindex="0" type="button"
                                aria-label="Remove from chat">
                                <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-ogbjj0" focusable="false"
                                    aria-hidden="true" viewBox="0 0 24 24" data-testid="CloseIcon">
                                    <path
                                        d="M19 6.41 17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z">
                                    </path>
                                </svg>
                                <span class="MuiTouchRipple-root css-w0pj6f"></span>
                            </button>
                        </li> --}}
                    </ul>
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
    <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/pages/custom/todo/todo.js') }}"></script>
    <script src="{{ asset('assets/js/pages/features/miscellaneous/toastr.js') }}"></script>
    <script>
        let authUser = @json(auth()->user());

        function getHistoryCount() {
            let count = 0;

            for (let i = 0; i < localStorage.length; i++) {
                const key = localStorage.key(i);

                // Check if the key starts with "history-"
                if (key.startsWith("history-")) {
                    count++;
                }
            }

            return count;
        }

        const historyCount = getHistoryCount();
    </script>

    <script>
        let msg = {};
        let toBStoredConversation = {
            id: '',
            messages: [],
            created_at: '',
            updated_at: '',
            extracted_text: '',
        };

        let toBStoredFileHistory = {
            id: '',
            created_at: '',
            updated_at: '',
            extracted_text: '',
            file_name: '',
        };

        let activeConversation = null;
        const fileDropArea = document.getElementById('file-upload');
        const fileInput = document.getElementById('fileInput');
        const responseBody = document.getElementById('responseBody');
        const chatTitle = document.getElementById('chat-title');
        const submitButton = document.getElementById('submitButton');
        const chatWindow = document.getElementById('chat-window');
        const userInput = document.getElementById('user-input');
        const chatForm = document.getElementById('chat-form');
        const suggestedButtons = document.querySelectorAll('.suggested-button');
        const chatAction = document.getElementById('chat-action');
        const attachmentButton = document.querySelector('.__chat-form-attachment');
        const offcanvasUploadButton = document.querySelector('.__offcanvas-new-file-upload-section');
        const offcanvasFileInput = document.querySelector('#offcanvasFileInput');
        const targetUrl = window.location.origin + '/get-summary';
        let hasReset = false;
        let extractDocText = '';


        window.addEventListener('load', () => {
            hasReset = false; // Reset the state when the page loads
        });

        function generateUUID() {
            return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
                var r = Math.random() * 16 | 0,
                    v = c == 'x' ? r : (r & 0x3 | 0x8);
                return v.toString(16);
            });
        }

        function updateURLWithUUID(cuid) {
            if (cuid) {
                let conversationData = localStorage.getItem('history-' + cuid);
                let formattedConversationData = JSON.parse(conversationData);
                const extractedText = formattedConversationData.extracted_text;
                chatTitle.innerHTML = '';
                titleChange(formattedConversationData.title);
                storeExtractedTextInSession(extractedText);
                toBStoredConversation.id = cuid;

                const newUrl = window.location.protocol + "//" + window.location.host + window.location.pathname +
                    '?conversation=' + cuid;

                history.pushState({
                    path: newUrl
                }, '', newUrl);
            } else {
                const uuid = generateUUID();
                toBStoredConversation.id = uuid;

                const newUrl = window.location.protocol + "//" + window.location.host + window.location.pathname +
                    '?conversation=' + uuid;

                history.pushState({
                    path: newUrl
                }, '', newUrl);
            }
        }

        function callToaster(message, title, type) {
            toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": true,
                "progressBar": false,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            };

            if (type == "error") {
                toastr.error(message, title);
            } else if (type == "warning") {
                toastr.warning(message, title);
            } else if (type == "info") {
                toastr.info(message, title);
            } else {
                toastr.success(message, title);
            }
        }

        suggestedButtons.forEach(button => {
            button.disabled = true;
        });

        fileDropArea.addEventListener('click', () => {
            if (authUser) {
                if (historyCount >= 10) {
                    callToaster(
                        "You have reached the maximum number of PDF summaries. Please log in if you'd like to process more.",
                        "Maximum Limit Reached!", "warning");
                    return;
                }
            } else {
                if (historyCount >= 5) {
                    callToaster(
                        "You have reached the maximum number of PDF summaries. Please log in if you'd like to process more.",
                        "Maximum Limit Reached!", "warning");
                    return;
                }
            }
            if (window.location.href !== targetUrl) {
                setTimeout(() => {
                    window.location.href = targetUrl;
                }, 100);
                fileInput.click();
            } else {
                fileInput.click();
            }
        });

        fileDropArea.addEventListener('dragover', (e) => {
            e.preventDefault();
            fileDropArea.classList.add('drag-over');
        });

        fileDropArea.addEventListener('dragleave', (e) => {
            e.preventDefault();
            fileDropArea.classList.remove('drag-over');
        });

        fileDropArea.addEventListener('drop', (e) => {
            e.preventDefault();
            fileDropArea.classList.remove('drag-over');
            const files = e.dataTransfer.files;
            if (files.length > 0) {
                fileInput.files = files;
                handleFiles(files);
            }
        });

        fileInput.addEventListener('change', (event) => {
            const files = event.target.files;
            if (!hasReset) { // Only update URL if it hasn't been reset
                updateURLWithUUID(); // Update the URL here after file upload
            }
            handleFiles(files);
        });

        function titleChange(fileName) {
            const fullTitle = `${fileName}`;
            let index = 0;

            const typingInterval = setInterval(() => {
                if (index < fullTitle.length) {
                    chatTitle.textContent += fullTitle.charAt(index);
                    index++;
                } else {
                    clearInterval(typingInterval); // Stop the typing effect once complete
                }
            }, 50);
            chatTitle.setAttribute('data-original-title', fullTitle)
        }

        attachmentButton.addEventListener('click', () => {
            fileInput.click();
        });

        offcanvasUploadButton.addEventListener('click', () => {
            offcanvasFileInput.click(); // Trigger the hidden offcanvas-specific file input
        });

        offcanvasFileInput.addEventListener('change', async (event) => {
            const files = event.target.files;
            if (files.length > 0) {
                const selectedFile = files[0].name;
                // alert(`${selectedFile} is selected`);

                let fileHistoryId = generateUUID();
                const formData = new FormData();
                formData.append('pdf', files[0]);

                try {
                    const response = await fetch(
                        'http://62.171.163.137:8055/api/pdf_to_summary/', {
                            method: 'POST',
                            body: formData
                        });

                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }

                    const result = await response.json();
                    const extractDocText = result.extracted_text;

                    const toBStoredFileHistory = {
                        id: fileHistoryId,
                        created_at: new Date().toISOString(),
                        file_name: selectedFile,
                        extracted_text: extractDocText,
                        first_response: result.summary
                    };

                    localStorage.setItem("fileHistory-" + fileHistoryId, JSON.stringify(toBStoredFileHistory));
                } catch (error) {
                    console.error('Error during file upload:', error);
                }
            } else {
                alert('No item selected');
            }
        });


        async function storeExtractedTextInSession(extractDocText) {
            try {
                const csrfMetaTag = document.querySelector('meta[name="csrf-token"]');
                const csrfToken = csrfMetaTag ? csrfMetaTag.getAttribute('content') : '';

                const response = await fetch('/store-extracted-text', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: JSON.stringify({
                        extracted_text: extractDocText
                    })
                });

                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }

                const result = await response.json();

            } catch (error) {

                console.error('Error sending extracted text:', error);
            }
        }

        async function handleFiles(files) {
            if (files.length > 0) {
                try {
                    const file = files[0];
                    fileName = file.name;

                    if (activeConversation === null || activeConversation === false) {
                        toBStoredConversation.title = fileName;
                        toBStoredConversation.created_at = Date.now();
                    }

                    addMessage(`Uploaded file: ${file.name}`, 'user-message', 'user');

                    await summarizedTextResponse(file);
                    if (window.innerWidth >= 992) {
                        chatAction.classList.replace('d-none', 'd-flex');
                    }
                    submitButton.disabled = false;

                    suggestedButtons.forEach(button => {
                        button.disabled = false;
                    });

                    titleChange(fileName);
                } catch (error) {
                    console.error('Error:', error);
                    const errorMessage = "Sorry, something went wrong while processing the file. Please try again.";
                    simulateTypingEffect(errorMessage);
                }
            } else {
                alert('No files selected');
            }
        }

        async function summarizedTextResponse(file) {
            try {
                const formData = new FormData();
                formData.append('pdf', file);
                showTypingIndicator();

                const response = await fetch(
                    'http://62.171.163.137:8055/api/pdf_to_summary/', { // Replace with your API URL
                        method: 'POST',
                        body: formData
                    });

                removeTypingIndicator(); // Remove typing indicator once response is received

                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }

                const result = await response.json();
                extractDocText = result.extracted_text;
                toBStoredConversation.extracted_text = extractDocText;
                storeExtractedTextInSession(extractDocText);

                if (result.summary) {
                    simulateTypingEffect(result);
                } else {
                    simulateTypingEffect("Unable to summarize the document. Please try another file.");
                }
            } catch (error) {
                console.error('Error uploading file:', error);
                removeTypingIndicator(); // Ensure the typing indicator is removed even on error
                const errorMessage = "Sorry, something went wrong while processing the file. Please try again.";
                simulateTypingEffect(errorMessage);
            }
        }

        chatForm.addEventListener('submit', async (e) => {
            e.preventDefault(); // Prevent the form from refreshing the page

            userMessage = userInput.value.trim();
            if (userMessage) {
                addMessage(userMessage, 'user-message', 'user');
                userInput.value = ''; // Clear input field

                try {
                    await handleChatRequest();
                } catch (error) {
                    console.error('Error handling chat request:', error);
                    removeTypingIndicator(); // Ensure typing indicator is removed even on error
                    const errorMessage =
                        "Sorry, something went wrong while sending the message. Please try again.";
                    simulateTypingEffect(errorMessage);
                }
            }
        });

        async function handleChatRequest() {
            try {
                const response = await fetch('/get-extracted-text');

                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }

                const result = await response.json();
                extractDocText = result.extracted_text;
                showTypingIndicator();

                const apiResponse = await fetch(
                    'http://62.171.163.137:8055/api/text_with_query/', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify({
                            text: extractDocText,
                            query: userMessage
                        })
                    });

                removeTypingIndicator();

                if (!apiResponse.ok) {
                    throw new Error('Network response was not ok');
                }

                const apiResult = await apiResponse.json();

                if (apiResult.answer) {
                    simulateTypingEffect(apiResult);
                } else {
                    simulateTypingEffect("Sorry, I couldn't find an answer to your query. Please try again.");
                }
            } catch (error) {
                console.error('Error:', error);
                removeTypingIndicator(); // Remove typing indicator even on error
                const errorMessage = "Sorry, something went wrong while sending the message. Please try again.";
                simulateTypingEffect(errorMessage);
            }
        }

        function addMessage(message, className, sender) {
            const msg = {
                conversation_id: toBStoredConversation.id,
                timestamp: Date.now(),
                sender: sender,
                text: message
            };

            toBStoredConversation.messages.push(msg); // Add message to the conversation
            toBStoredConversation.updated_at = Date.now(); // Update the timestamp

            if (authUser) {
                if (historyCount <= 10) {
                    localStorage.setItem("history-" + toBStoredConversation.id, JSON.stringify(toBStoredConversation));
                } else {
                    alert("Maximum Limit Reached!");
                }
            } else {
                // if (historyCount <= 5) {
                localStorage.setItem("history-" + toBStoredConversation.id, JSON.stringify(toBStoredConversation));
                // } else {
                // alert("Maximum Limit Reached!");
                // }
            }

            adjustProgressBar();
            renderConversations();

            if (sender != 'bot') {
                const messageDiv = document.createElement('div');
                messageDiv.classList.add('chat-bubble', className);
                const avatar = document.createElement('img');
                avatar.classList.add('chat-avatar');
                avatar.src = sender === 'user' ? 'assets/media/users/100_12.jpg' : 'assets/media/   /ai-chatbot-4.png';
                const textDiv = document.createElement('div');
                textDiv.classList.add('chat-text');
                textDiv.innerText = message;
                messageDiv.appendChild(avatar);
                messageDiv.appendChild(textDiv);
                chatWindow.appendChild(messageDiv);
                chatWindow.scrollTop = chatWindow.scrollHeight;
            }

        }

        function showTypingIndicator() {
            const typingDiv = document.createElement('div');
            typingDiv.classList.add('chat-bubble', 'bot-message');
            typingDiv.innerHTML = `
            <img src="assets/media/chatbot/ai-chatbot-4.png" class="chat-avatar">
            <span class="typing-indicator"></span>
            <span class="typing-indicator"></span>
            <span class="typing-indicator"></span>
        `;
            typingDiv.id = 'typing-indicator'; // Add ID for easy removal
            chatWindow.appendChild(typingDiv);
            chatWindow.scrollTop = chatWindow.scrollHeight;
        }

        function removeTypingIndicator() {
            const typingDiv = document.getElementById('typing-indicator');
            if (typingDiv) {
                typingDiv.remove();
            }
        }

        function escapeHtml(html) {
            const text = document.createTextNode(html);
            const div = document.createElement('div');
            div.appendChild(text);
            return div.innerHTML;
        }

        function simulateTypingEffect(responseText) {
            const suggestedQueries = responseText.suggested_queries || [];

            const messageDiv = document.createElement('div');
            messageDiv.classList.add('chat-bubble', 'bot-message');

            const avatar = document.createElement('img');
            avatar.classList.add('chat-avatar');
            avatar.src = 'assets/media/chatbot/ai-chatbot-4.png';

            const contentDiv = document.createElement('div');
            contentDiv.classList.add('content-container');

            const textDiv = document.createElement('div');
            textDiv.classList.add('chat-text');

            const responseTextContent = responseText.summary || responseText.answer ||
                "Sorry, something went wrong. Please try again.";
            let formattedText = textFormation(responseTextContent);

            let tempDiv = document.createElement("div");
            tempDiv.innerHTML = formattedText;
            let nodes = Array.from(tempDiv.childNodes);

            let index = 0;
            textDiv.id = 'response-text-' + Date.now(); // Generate a unique ID for each response

            contentDiv.appendChild(textDiv);

            const copyButton = document.createElement('button');
            copyButton.classList.add('btn', 'btn-outline-secondary', 'copy-btn', 'ml-4');

            const icon = document.createElement('i');
            icon.classList.add('fas', 'fa-copy'); // Add Font Awesome classes for the copy icon
            copyButton.appendChild(icon);
            copyButton.setAttribute('aria-label', 'Copy to clipboard');
            copyButton.onclick = function() {
                copyToClipboard(textDiv.id); // Call the copy function with the generated textDiv ID
            };

            contentDiv.appendChild(copyButton);

            messageDiv.appendChild(avatar);
            messageDiv.appendChild(contentDiv);

            chatWindow.appendChild(messageDiv);
            chatWindow.scrollTop = chatWindow.scrollHeight;

            addMessage(formattedText, 'bot-message', 'bot');

            const cursor = document.createElement('span');
            cursor.classList.add('blinking-cursor');
            textDiv.appendChild(cursor);

            function typeNextNode() {
                if (index < nodes.length) {
                    textDiv.insertBefore(nodes[index].cloneNode(true), cursor); // Insert before the cursor
                    chatWindow.scrollTop = chatWindow.scrollHeight;
                    index++;
                    setTimeout(typeNextNode, 200); // Adjust the delay (50ms)
                } else {
                    cursor.remove();
                    showSuggestedQueries(suggestedQueries, textDiv);
                }
            }

            typeNextNode(); // Start typing
        }

        function copyToClipboard(elementId) {
            const textToCopy = document.getElementById(elementId).innerText;
            const textarea = document.createElement('textarea');
            textarea.value = textToCopy;
            document.body.appendChild(textarea);
            textarea.select();
            document.execCommand('copy');
            document.body.removeChild(textarea);
            callToaster("Copied to clipboard!", "Action", "primary", "success");
        }

        function showSuggestedQueries(queries, container) {
            let queryIndex = 0;

            function displayNextQuery() {
                if (queryIndex < queries.length - 2) {
                    const textBtn = document.createElement('button');

                    const icon = document.createElement('i');
                    icon.classList.add('fa-regular', 'fa-circle-right', 'ms-2');
                    textBtn.appendChild(icon);

                    textBtn.appendChild(document.createTextNode('\u00A0')); // Non-breaking space

                    textBtn.appendChild(document.createTextNode(queries[queryIndex]));
                    textBtn.classList.add('btn', 'btn-text-success', 'btn-hover-light-success', 'font-weight-bold', 'mr-2',
                        'text-left', 'my-3', 'suggested-btn'); // Apply Bootstrap 5 classes and margin

                    textBtn.addEventListener('click', () => {
                        handleQuestionClick(textBtn.innerText);
                    });

                    container.appendChild(textBtn);
                    chatWindow.scrollTop = chatWindow.scrollHeight;

                    queryIndex++;
                    setTimeout(displayNextQuery, 300); // Adjust the delay (300ms) as needed
                }
            }

            if (queries) {
                displayNextQuery(); // Start showing buttons
            }
        }

        function textFormation(responseText) {
            let formattedSummary = responseText
                .replace(/\*\*(.*?)\*\*/g, '<strong>$1</strong>') // Bold text
                .replace(/## (.*?)\n/g, '<h4>$1</h4>') // Headings
                .replace(/^- (.*)/gm, '<li>$1</li>') // Bullet points
                .replace(/\n/g, '<br>'); // Newline to <br>

            return formattedSummary;
        }

        async function handleQuestionClick(question) {
            userMessage = question + ' the content'
            addMessage(userMessage, 'user-message', 'user');
            userInput.value = ''; // Clear input field

            try {
                await handleChatRequest();
            } catch (error) {
                console.error('Error handling chat request:', error);
                removeTypingIndicator(); // Ensure typing indicator is removed even on error
                const errorMessage =
                    "Sorry, something went wrong while sending the message. Please try again.";
                simulateTypingEffect(errorMessage);
            }
        }

        suggestedButtons.forEach(button => {
            button.addEventListener('click', function() {
                handleQuestionClick(button.innerText);
            });
        });

        window.onload = function() {
            const urlParams = new URLSearchParams(window.location.search);
            const conversationId = urlParams.get('conversation');

            if (conversationId) {
                let conversationData = localStorage.getItem("history-" + conversationId);
                let handledConversation = JSON.parse(conversationData);

                activeConversation = true;
                toBStoredConversation.title = handledConversation.title;
                displayMessagesInChatWindow(handledConversation.messages,
                    conversationId); // Assume this is a function you implement to load the conversation
            } else {
                if (window.location.href !== targetUrl) {
                    window.location.href = targetUrl; // Redirect only if not already on the target URL
                }
            }
        };

        function resetConversation() {
            hasReset = true;
            const baseUrl = window.location.protocol + "//" + window.location.host + window.location.pathname;
            history.replaceState({}, document.title, baseUrl);

            window.location.reload(); // This reloads the page
        }

        document.getElementById('resetConversationBtn').addEventListener('click', function(e) {
            e.preventDefault(); // Prevent default behavior
            resetConversation(); // Call the reset function
        });

        document.getElementById('resetChatSection').addEventListener('click', function(e) {
            e.preventDefault(); // Prevent default behavior
            resetConversation(); // Call the reset function
        });

        function handleSidebarItemClick(conversationId, element) {
            let conversationData = localStorage.getItem("history-" + conversationId);

            if (conversationData) {
                let handledConversation = JSON.parse(conversationData);

                activeConversation = true;
                toBStoredConversation.title = handledConversation.title;

                displayMessagesInChatWindow(handledConversation.messages, conversationId);
                userInput.value = ''; // Clear input field for new messages
                handledConversation.id = conversationId; // Set the current conversation id for future messages

                document.querySelectorAll('.list-item').forEach(item => {
                    item.classList.remove('selected'); // Assuming you add a CSS class for selected items
                });

                element.classList.add('selected');
            }
        }

        function historyDelete(conversationId, element) {
            let conversationData = localStorage.getItem("history-" + conversationId);

            if (conversationData) {
                const userConfirmed = confirm("Are you sure you want to delete this conversation?");

                if (userConfirmed) {
                    localStorage.removeItem("history-" + conversationId);

                    setTimeout(() => {
                        window.location.href = targetUrl; // Redirect after deletion
                    }, 100);
                }
            }

        }

        function displayMessagesInChatWindow(messages, cuid) {
            chatWindow.innerHTML = ''; // Clear the current chat window

            messages.forEach(message => {
                let messageHtml = `
                <div class="chat-bubble ${message.sender === 'user' ? 'user-message' : 'bot-message'}">
                    <img class="chat-avatar" src="${message.sender === 'bot' ? 'assets/media/chatbot/ai-chatbot-4.png' : 'assets/media/users/100_12.jpg'}" alt="Avatar">
                    <div class="content-container">
                        <div class="chat-text">${message.text}</div>
                    </div>
                </div>
            `;
                chatWindow.innerHTML += messageHtml; // Append each message to the chat window
            });
            chatWindow.scrollTop = chatWindow.scrollHeight; // Scroll to the bottom
            submitButton.disabled = false;
            if (window.innerWidth >= 992) {
                chatAction.classList.replace('d-none', 'd-flex');
            }

            suggestedButtons.forEach(button => {
                button.disabled = false;
            });


            updateURLWithUUID(cuid);
        }

        function shareConversation() {
            toBeShareUrl = targetUrl + '?conversation=' + toBStoredConversation.id;
            const textarea = document.createElement('textarea');
            textarea.value = toBeShareUrl;
            document.body.appendChild(textarea);
            textarea.select();
            document.execCommand('copy');
            document.body.removeChild(textarea);
            callToaster("URL copied to share!", "Action", "success");
        }

        function downloadConversation() {
            const uuid = toBStoredConversation.id; // Assuming you have the UUID here
            const conversation = localStorage.getItem("history-" + uuid); // Get the conversation from localStorage

            if (conversation) {
                const form = document.createElement('form');
                form.method = 'POST';
                form.action = '/get-summary-pdf-download'; // Post to Laravel route
                form.target = '_blank'; // Open in a new tab

                const csrfTokenInput = document.createElement('input');
                csrfTokenInput.type = 'hidden';
                csrfTokenInput.name = '_token';
                csrfTokenInput.value =
                    '{{ csrf_token() }}'; // You need to inject the CSRF token from Blade or JavaScript
                form.appendChild(csrfTokenInput);

                const conversationInput = document.createElement('input');
                conversationInput.type = 'hidden';
                conversationInput.name = 'conversation';
                conversationInput.value = conversation; // Add the conversation data
                form.appendChild(conversationInput);

                const uuidInput = document.createElement('input');
                uuidInput.type = 'hidden';
                uuidInput.name = 'uuid';
                uuidInput.value = uuid; // Add the UUID value
                form.appendChild(uuidInput);

                document.body.appendChild(form);
                form.submit();

                document.body.removeChild(form);
            } else {
                alert('No conversation data found in localStorage.');
            }
        }
    </script>

    <script>
        function adjustPadding() {
            let asidePrimary = document.querySelector('.aside-primary');
            if (window.innerWidth <= 991.8) {
                asidePrimary.classList.remove('align-items-center');
                asidePrimary.classList.add('p-5');
            }
        }

        function adjustProgressBar() {
            let dataCountForStorage = document.getElementById('dataCountForStorage');
            let progressBars = document.getElementsByClassName('main-pr-bar'); // Get elements by class name
            let lockSection = document.querySelector('.__aside.lock-section'); // Select lock-section element

            // Initially hide lock-section
            lockSection.classList.remove('active');

            // Simulate data loading or delay
            setTimeout(() => {
                lockSection.classList.add('active'); // Show with transition after delay

                if (authUser) {
                    if (progressBars.length > 0) {
                        let progressBar = progressBars[0];
                        dataCountForStorage.innerHTML = historyCount;
                        progressBar.style.width = (historyCount) * 10 + '%';
                    } else {
                        console.warn("No elements found with class 'main-pr-bar'.");
                    }
                } else {
                    if (progressBars.length > 0) {
                        let progressBar = progressBars[0];
                        dataCountForStorage.innerHTML = historyCount;
                        progressBar.style.width = (historyCount) * 20 + '%';
                    } else {
                        console.warn("No elements found with class 'main-pr-bar'.");
                    }
                }
            }, 500); // Delay to simulate loading, adjust as needed
        }

        adjustProgressBar();

        // Run on page load and window resize
        window.addEventListener('load', adjustPadding);
        window.addEventListener('resize', adjustPadding);

        function getAllConversations() {
            let allConversations = [];

            for (let i = 0; i < localStorage.length; i++) {
                let key = localStorage.key(i);

                if (key.startsWith("history-")) {
                    let conversationData = localStorage.getItem(key);
                    let allConversation = JSON.parse(conversationData);
                    allConversations.push(allConversation);
                }
            }

            return allConversations;
        }

        function getAllUploadedFiles() {
            let allUploadedFiles = [];

            for (let i = 0; i < localStorage.length; i++) {
                let key = localStorage.key(i);

                if (key.startsWith("fileHistory-")) {
                    let uploadedFileData = localStorage.getItem(key);
                    let allUploadedFile = JSON.parse(uploadedFileData);
                    allUploadedFiles.push(allUploadedFile);
                }
            }

            return allUploadedFiles;
        }

        function renderConversations() {
            let conversationsArray = getAllConversations();
            let todayListContainer = document.querySelector('.today-list');
            let previousListContainer = document.querySelector('.previous-list');
            let loadMoreButton = document.querySelector('.btn-load-more');
            let todaysTitle = document.querySelector('.todays-title');
            let previousDaysTitle = document.querySelector('.previous-days-title');

            // Clear the current lists
            todayListContainer.innerHTML = '';
            previousListContainer.innerHTML = '';

            // Get today's date
            let today = new Date();
            today.setHours(0, 0, 0, 0); // Set to the start of the day

            let todayConversationsCount = 0;
            let previousConversationsCount = 0;

            // Iterate through the conversations and categorize them
            conversationsArray.forEach(singleConversation => {
                let conversationDate = new Date(singleConversation.created_at);
                let conversationHtml = `
                            <div class="list-item hoverable p-2 p-lg-3">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-column flex-grow-1 mr-2">
                                        <a class="text-muted text-hover-primary sidebar-title" title="${singleConversation.title}" onclick="handleSidebarItemClick('${singleConversation.id}', this)">
                                            <span class="text-dark-75 mb-0 history-file-name">${singleConversation.title}</span>
                                        </a>
                                        <span class="text-hover-danger delete-btn" onclick="historyDelete('${singleConversation.id}', this)">
                                            <i class="fa-solid fa-trash"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>`;

                // Check if the conversation is from today
                if (conversationDate >= today) {
                    // Append to today's list
                    todayListContainer.innerHTML += conversationHtml;
                    todayConversationsCount++;
                } else {
                    // Append to the previous 30 days list
                    previousListContainer.innerHTML += conversationHtml;
                    previousConversationsCount++;
                }
            });

            // Conditionally show or hide the "Previous 30 Days" section
            if (todayConversationsCount === 0) {
                todayListContainer.style.display = 'none'; // Hide the list
            } else {
                todaysTitle.classList.remove('d-none'); // Show the title
                todayListContainer.style.display = 'block'; // Show the list
            }


            if (previousConversationsCount === 0) {
                previousListContainer.style.display = 'none'; // Hide the list
            } else {
                previousDaysTitle.classList.remove('d-none'); // Show the title
                previousListContainer.style.display = 'block'; // Show the list
            }

            // Conditionally show the "Load More" button if there are 6 or more conversations
            if (conversationsArray.length >= 6) {
                loadMoreButton.style.display = 'block'; // Show the button
            } else {
                loadMoreButton.style.display = 'none'; // Hide the button
            }
        }

        function renderUploadedFiles() {
            const fileListContainer = document.querySelector('.__showing-file-section.file-drawer');

            if (!fileListContainer) {
                console.error('File list container not found!');
                return;
            }

            let uploadedFileArray = getAllUploadedFiles();

            fileListContainer.innerHTML = '';

            uploadedFileArray.forEach((uploadedFile) => {
                // Create the list item (li)
                const fileListItem = document.createElement('li');
                fileListItem.className = '__file-drawer file-list';

                const svgIcon = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
                svgIcon.setAttribute('class', '__file-list list-svg');
                svgIcon.setAttribute('focusable', 'false');
                svgIcon.setAttribute('aria-hidden', 'true');
                svgIcon.setAttribute('viewBox', '0 0 24 24');
                svgIcon.setAttribute('style', 'font-size: 18px; color: rgb(71, 93, 145);');

                const pathIcon = document.createElementNS('http://www.w3.org/2000/svg', 'path');
                pathIcon.setAttribute('d',
                    'M8 16h8v2H8zm0-4h8v2H8zm6-10H6c-1.1 0-2 .9-2 2v16c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8zm4 18H6V4h7v5h5z'
                );
                svgIcon.appendChild(pathIcon);

                const fileTitleDiv = document.createElement('div');
                fileTitleDiv.className = '__file-list file-title';

                const fileTitleSpan = document.createElement('span');
                fileTitleSpan.className = '__file-title file-title-text';
                fileTitleSpan.textContent = uploadedFile.file_name;

                fileTitleSpan.addEventListener('click', () => {
                    startChatWithThisFile(uploadedFile);
                });

                fileTitleDiv.appendChild(fileTitleSpan);

                // Create the remove button
                const removeButton = document.createElement('button');
                removeButton.className = '__file-list file-remove-btn';
                removeButton.setAttribute('tabindex', '0');
                removeButton.setAttribute('type', 'button');
                removeButton.setAttribute('aria-label', 'Remove from chat');

                const removeSvg = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
                removeSvg.setAttribute('class', 'MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-ogbjj0');
                removeSvg.setAttribute('focusable', 'false');
                removeSvg.setAttribute('aria-hidden', 'true');
                removeSvg.setAttribute('viewBox', '0 0 24 24');

                const removePath = document.createElementNS('http://www.w3.org/2000/svg', 'path');
                removePath.setAttribute('d',
                    'M19 6.41 17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z'
                );
                removeSvg.appendChild(removePath);

                removeButton.appendChild(removeSvg);

                // Add remove button functionality
                removeButton.addEventListener('click', () => {
                    removeFileFromHistory(file.id); // Assuming a function to remove file
                    renderUploadedFiles();
                });

                fileListItem.appendChild(svgIcon);
                fileListItem.appendChild(fileTitleDiv);
                fileListItem.appendChild(removeButton);

                fileListContainer.appendChild(fileListItem);
            });
        }

        async function startChatWithThisFile(uploadedFile) {
            try {
                console.log(activeConversation);
                if (!hasReset) { // Only update URL if it hasn't been reset
                    updateURLWithUUID(); // Update the URL here after file upload
                }

                if (activeConversation === null || activeConversation === false) {
                    toBStoredConversation.title = uploadedFile.file_name;
                    toBStoredConversation.created_at = Date.now();
                }

                addMessage(`Uploaded file: ${uploadedFile.file_name}`, 'user-message', 'user');

                extractDocText = uploadedFile.extracted_text;
                toBStoredConversation.extracted_text = extractDocText;
                storeExtractedTextInSession(extractDocText);

                showTypingIndicator();

                removeTypingIndicator();

                if (uploadedFile) {
                    simulateTypingEffect(uploadedFile.first_response);
                } else {
                    simulateTypingEffect("Sorry, I couldn't find an answer to your query. Please try again.");
                }
                if (window.innerWidth >= 992) {
                    chatAction.classList.replace('d-none', 'd-flex');
                }
                submitButton.disabled = false;

                suggestedButtons.forEach(button => {
                    button.disabled = false;
                });

                titleChange(uploadedFile.file_name);
            } catch (error) {
                console.error('Error:', error);
                removeTypingIndicator(); // Remove typing indicator even on error
                const errorMessage = "Sorry, something went wrong while sending the message. Please try again.";
                simulateTypingEffect(errorMessage);
            }

        }

        function toggleHover(element) {
            // Remove hover from all items
            document.querySelectorAll('.list-item.hoverable').forEach(item => {
                item.classList.remove('hover');
            });

            // Add hover effect to the clicked item
            element.classList.add('hover');
        }

        renderConversations();
        renderUploadedFiles();
    </script>

</body>

</html>
