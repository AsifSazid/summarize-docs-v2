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
    @stack('css')

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
                            <a href="index.html" class="brand-logo __brand_logo_name">
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
                        <p class="p-2 p-lg-3 my-1 my-lg-3 font-size-sm todays-title"><strong>Today</strong></p>
                        <div class="list today-list"></div>

                        <!-- This title will be conditionally hidden -->
                        <p class="p-2 p-lg-3 my-1 my-lg-3 font-size-sm previous-days-title"><strong>Previous 30
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
                                            <p class="__counter-holder count-docs"> <span
                                                    id="dataCountForStorage"></span> / 5</p>
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
                    <input id="offcanvasFileInput" type="file" accept="application/pdf" style="display: none;">
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

    @stack('js')

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

            if (progressBars.length > 0) { // Check if there is at least one element
                let progressBar = progressBars[0]; // Access the first element in the collection
                dataCountForStorage.innerHTML = localStorage.length; // Update the data count display
                progressBar.style.width = (localStorage.length) * 20 + '%'; // Adjust progress bar width
            } else {
                console.warn("No elements found with class 'main-pr-bar'.");
            }
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
                todaysTitle.style.display = 'none'; // Hide the title
                todayListContainer.style.display = 'none'; // Hide the list
            } else {
                todaysTitle.style.display = 'block'; // Show the title
                todayListContainer.style.display = 'block'; // Show the list
            }


            if (previousConversationsCount === 0) {
                previousDaysTitle.style.display = 'none'; // Hide the title
                previousListContainer.style.display = 'none'; // Hide the list
            } else {
                previousDaysTitle.style.display = 'block'; // Show the title
                previousListContainer.style.display = 'block'; // Show the list
            }

            // Conditionally show the "Load More" button if there are 6 or more conversations
            if (conversationsArray.length >= 6) {
                loadMoreButton.style.display = 'block'; // Show the button
            } else {
                loadMoreButton.style.display = 'none'; // Hide the button
            }
        }

        // Function to toggle hover effect on click
        function toggleHover(element) {
            // Remove hover from all items
            document.querySelectorAll('.list-item.hoverable').forEach(item => {
                item.classList.remove('hover');
            });

            // Add hover effect to the clicked item
            element.classList.add('hover');
        }



        // Call the render function to display the conversations on page load
        renderConversations();
    </script>

</body>

</html>
