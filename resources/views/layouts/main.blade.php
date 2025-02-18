<!DOCTYPE html>
<!--
Template Name: Metronic - Bootstrap 4 HTML, React, Angular 10 & VueJS Admin Dashboard Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: https://1.envato.market/EA4JP
Renew Support: https://1.envato.market/EA4JP
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->

<head>
   <base href="../../">
   <meta charset="utf-8" />
   <title>MauGrafika</title>
   <meta name="description" content="Aside light theme example" />
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
   <link rel="canonical" href="https://keenthemes.com/metronic" />
   <!--begin::Fonts-->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
   <!--end::Fonts-->
   <!--begin::Page Vendors Styles(used by this page)-->
   <link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
   <!--end::Page Vendors Styles-->
   <!--begin::Global Theme Styles(used by all pages)-->
   <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
   <link href="assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
   <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
   <!--end::Global Theme Styles-->
   <!--begin::Layout Themes(used by all pages)-->
   <link href="assets/css/themes/layout/header/base/light.css" rel="stylesheet" type="text/css" />
   <link href="assets/css/themes/layout/header/menu/light.css" rel="stylesheet" type="text/css" />
   <link href="assets/css/themes/layout/brand/light.css" rel="stylesheet" type="text/css" />
   <link href="assets/css/themes/layout/aside/light.css" rel="stylesheet" type="text/css" />
   <!--end::Layout Themes-->
   <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
   <!--begin::Main-->
   <!--begin::Header Mobile-->
   <div id="kt_header_mobile" class="header-mobile align-items-center header-mobile-fixed">
      <!--begin::Logo-->
      <a href="index.html">
         <!-- <img alt="Logo" src="assets/media/logos/logo-dark.png" /> -->
         <h3>Mau Grafika</h3>
      </a>
      <!--end::Logo-->
      <!--begin::Toolbar-->
      <div class="d-flex align-items-center">
         <!--begin::Aside Mobile Toggle-->
         <button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
            <span></span>
         </button>
         <!--end::Aside Mobile Toggle-->
         <!--begin::Header Menu Mobile Toggle-->
         <button class="btn p-0 burger-icon ml-4" id="kt_header_mobile_toggle">
            <span></span>
         </button>
         <!--end::Header Menu Mobile Toggle-->
         <!--begin::Topbar Mobile Toggle-->
         <button class="btn btn-hover-text-primary p-0 ml-2" id="kt_header_mobile_topbar_toggle">
            <span class="svg-icon svg-icon-xl">
               <!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
               <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                     <polygon points="0 0 24 0 24 24 0 24" />
                     <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                     <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                  </g>
               </svg>
               <!--end::Svg Icon-->
            </span>
         </button>
         <!--end::Topbar Mobile Toggle-->
      </div>
      <!--end::Toolbar-->
   </div>
   <!--end::Header Mobile-->
   <div class="d-flex flex-column flex-root">
      <!--begin::Page-->
      <div class="d-flex flex-row flex-column-fluid page">
         <!--begin::Aside-->
         <div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
            <!--begin::Brand-->
            <div class="brand flex-column-auto" id="kt_brand">
               <!--begin::Logo-->
               <a href="index.html" class="brand-logo">
                  <!-- <img alt="Logo" src="assets/media/logos/logo-dark.png" /> -->
                  <h3 style="color: black;">Mau Grafika</h3>
               </a>
               <!--end::Logo-->
               <!--begin::Toggle-->
               <button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
                  <span class="svg-icon svg-icon svg-icon-xl">
                     <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-left.svg-->
                     <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                           <polygon points="0 0 24 0 24 24 0 24" />
                           <path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999)" />
                           <path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999)" />
                        </g>
                     </svg>
                     <!--end::Svg Icon-->
                  </span>
               </button>
               <!--end::Toolbar-->
            </div>
            <!--end::Brand-->
            <!--begin::Aside Menu-->
            <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">

               <!--begin::Menu Container-->
               <div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500">
                  <ul class="menu-nav">

                     @include('partials.side')

                  </ul>
               </div>
               <!--end::Menu Container-->

            </div>
            <!--end::Aside Menu-->
         </div>
         <!--end::Aside-->
         <!--begin::Wrapper-->
         <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
            <!--begin::Header-->
            <div id="kt_header" class="header header-fixed">
               <!--begin::Container-->
               <div class="container-fluid d-flex align-items-stretch justify-content-between">
                  <!--begin::Header Menu Wrapper-->
                  <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
                     <!--begin::Header Menu-->
                     <div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
                        <!--begin::Header Nav-->

                        <!--end::Header Nav-->
                     </div>
                     <!--end::Header Menu-->
                  </div>
                  <!--end::Header Menu Wrapper-->
                  <!--begin::Topbar-->
                  <div class="topbar">
                     <!--begin::Search-->
                     <div class="dropdown" id="kt_quick_search_toggle">
                        <!--begin::Toggle-->
                        <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
                           <div class="btn btn-icon btn-clean btn-lg btn-dropdown mr-1">
                              <span class="svg-icon svg-icon-xl svg-icon-primary">
                                 <!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg-->
                                 <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                       <rect x="0" y="0" width="24" height="24" />
                                       <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                       <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
                                    </g>
                                 </svg>
                                 <!--end::Svg Icon-->
                              </span>
                           </div>
                        </div>
                        <!--end::Toggle-->
                        <!--begin::Dropdown-->
                        <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">
                           <div class="quick-search quick-search-dropdown" id="kt_quick_search_dropdown">
                              <!--begin:Form-->
                              <form method="get" class="quick-search-form">
                                 <div class="input-group">
                                    <div class="input-group-prepend">
                                       <span class="input-group-text">
                                          <span class="svg-icon svg-icon-lg">
                                             <!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg-->
                                             <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                   <rect x="0" y="0" width="24" height="24" />
                                                   <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                   <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
                                                </g>
                                             </svg>
                                             <!--end::Svg Icon-->
                                          </span>
                                       </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Search..." />
                                    <div class="input-group-append">
                                       <span class="input-group-text">
                                          <i class="quick-search-close ki ki-close icon-sm text-muted"></i>
                                       </span>
                                    </div>
                                 </div>
                              </form>
                              <!--end::Form-->
                              <!--begin::Scroll-->
                              <div class="quick-search-wrapper scroll" data-scroll="true" data-height="325" data-mobile-height="200"></div>
                              <!--end::Scroll-->
                           </div>
                        </div>
                        <!--end::Dropdown-->
                     </div>
                     <!--end::Search-->
                     <!--begin::Notifications-->
                     <div class="dropdown">
                        <!--begin::Toggle-->
                        <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
                           <div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1 pulse pulse-primary">
                              <span class="svg-icon svg-icon-xl svg-icon-primary">
                                 <!--begin::Svg Icon | path:assets/media/svg/icons/Code/Compiling.svg-->
                                 <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                       <rect x="0" y="0" width="24" height="24" />
                                       <path d="M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z" fill="#000000" opacity="0.3" />
                                       <path d="M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z" fill="#000000" />
                                    </g>
                                 </svg>
                                 <!--end::Svg Icon-->
                              </span>
                              <span class="pulse-ring"></span>
                           </div>
                        </div>
                        <!--end::Toggle-->
                        <!--begin::Dropdown-->
                        <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">
                           <form>
                              <!--begin::Header-->
                              <div class="d-flex flex-column pt-12 bgi-size-cover bgi-no-repeat rounded-top" style="background-image: url(assets/media/misc/bg-1.jpg)">
                                 <!--begin::Title-->
                                 <h4 class="d-flex flex-center rounded-top">
                                    <span class="text-white">User Notifications</span>
                                    <span class="btn btn-text btn-success btn-sm font-weight-bold btn-font-md ml-2">23 new</span>
                                 </h4>
                                 <!--end::Title-->
                                 <!--begin::Tabs-->
                                 <ul class="nav nav-bold nav-tabs nav-tabs-line nav-tabs-line-3x nav-tabs-line-transparent-white nav-tabs-line-active-border-success mt-3 px-8" role="tablist">
                                    <li class="nav-item">
                                       <a class="nav-link active show" data-toggle="tab" href="#topbar_notifications_notifications">Alerts</a>
                                    </li>
                                    <li class="nav-item">
                                       <a class="nav-link" data-toggle="tab" href="#topbar_notifications_events">Events</a>
                                    </li>
                                    <li class="nav-item">
                                       <a class="nav-link" data-toggle="tab" href="#topbar_notifications_logs">Logs</a>
                                    </li>
                                 </ul>
                                 <!--end::Tabs-->
                              </div>
                              <!--end::Header-->
                              <!--begin::Content-->
                              <div class="tab-content">
                                 <!--begin::Tabpane-->
                                 <div class="tab-pane active show p-8" id="topbar_notifications_notifications" role="tabpanel">
                                    <!--begin::Scroll-->
                                    <div class="scroll pr-7 mr-n7" data-scroll="true" data-height="300" data-mobile-height="200">
                                       <!--begin::Item-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Symbol-->
                                          <div class="symbol symbol-40 symbol-light-primary mr-5">
                                             <span class="symbol-label">
                                                <span class="svg-icon svg-icon-lg svg-icon-primary">
                                                   <!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
                                                   <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                         <rect x="0" y="0" width="24" height="24" />
                                                         <path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000" />
                                                         <rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)" x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
                                                      </g>
                                                   </svg>
                                                   <!--end::Svg Icon-->
                                                </span>
                                             </span>
                                          </div>
                                          <!--end::Symbol-->
                                          <!--begin::Text-->
                                          <div class="d-flex flex-column font-weight-bold">
                                             <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Cool App</a>
                                             <span class="text-muted">Marketing campaign planning</span>
                                          </div>
                                          <!--end::Text-->
                                       </div>
                                       <!--end::Item-->
                                       <!--begin::Item-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Symbol-->
                                          <div class="symbol symbol-40 symbol-light-warning mr-5">
                                             <span class="symbol-label">
                                                <span class="svg-icon svg-icon-lg svg-icon-warning">
                                                   <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                                   <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                         <rect x="0" y="0" width="24" height="24" />
                                                         <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                                         <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                      </g>
                                                   </svg>
                                                   <!--end::Svg Icon-->
                                                </span>
                                             </span>
                                          </div>
                                          <!--end::Symbol-->
                                          <!--begin::Text-->
                                          <div class="d-flex flex-column font-weight-bold">
                                             <a href="#" class="text-dark-75 text-hover-primary mb-1 font-size-lg">Awesome SAAS</a>
                                             <span class="text-muted">Project status update meeting</span>
                                          </div>
                                          <!--end::Text-->
                                       </div>
                                       <!--end::Item-->
                                       <!--begin::Item-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Symbol-->
                                          <div class="symbol symbol-40 symbol-light-success mr-5">
                                             <span class="symbol-label">
                                                <span class="svg-icon svg-icon-lg svg-icon-success">
                                                   <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group-chat.svg-->
                                                   <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                         <rect x="0" y="0" width="24" height="24" />
                                                         <path d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z" fill="#000000" />
                                                         <path d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z" fill="#000000" opacity="0.3" />
                                                      </g>
                                                   </svg>
                                                   <!--end::Svg Icon-->
                                                </span>
                                             </span>
                                          </div>
                                          <!--end::Symbol-->
                                          <!--begin::Text-->
                                          <div class="d-flex flex-column font-weight-bold">
                                             <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Claudy Sys</a>
                                             <span class="text-muted">Project Deployment &amp; Launch</span>
                                          </div>
                                          <!--end::Text-->
                                       </div>
                                       <!--end::Item-->
                                       <!--begin::Item-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Symbol-->
                                          <div class="symbol symbol-40 symbol-light-danger mr-5">
                                             <span class="symbol-label">
                                                <span class="svg-icon svg-icon-lg svg-icon-danger">
                                                   <!--begin::Svg Icon | path:assets/media/svg/icons/General/Attachment2.svg-->
                                                   <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                         <rect x="0" y="0" width="24" height="24" />
                                                         <path d="M11.7573593,15.2426407 L8.75735931,15.2426407 C8.20507456,15.2426407 7.75735931,15.6903559 7.75735931,16.2426407 C7.75735931,16.7949254 8.20507456,17.2426407 8.75735931,17.2426407 L11.7573593,17.2426407 L11.7573593,18.2426407 C11.7573593,19.3472102 10.8619288,20.2426407 9.75735931,20.2426407 L5.75735931,20.2426407 C4.65278981,20.2426407 3.75735931,19.3472102 3.75735931,18.2426407 L3.75735931,14.2426407 C3.75735931,13.1380712 4.65278981,12.2426407 5.75735931,12.2426407 L9.75735931,12.2426407 C10.8619288,12.2426407 11.7573593,13.1380712 11.7573593,14.2426407 L11.7573593,15.2426407 Z" fill="#000000" opacity="0.3" transform="translate(7.757359, 16.242641) rotate(-45.000000) translate(-7.757359, -16.242641)" />
                                                         <path d="M12.2426407,8.75735931 L15.2426407,8.75735931 C15.7949254,8.75735931 16.2426407,8.30964406 16.2426407,7.75735931 C16.2426407,7.20507456 15.7949254,6.75735931 15.2426407,6.75735931 L12.2426407,6.75735931 L12.2426407,5.75735931 C12.2426407,4.65278981 13.1380712,3.75735931 14.2426407,3.75735931 L18.2426407,3.75735931 C19.3472102,3.75735931 20.2426407,4.65278981 20.2426407,5.75735931 L20.2426407,9.75735931 C20.2426407,10.8619288 19.3472102,11.7573593 18.2426407,11.7573593 L14.2426407,11.7573593 C13.1380712,11.7573593 12.2426407,10.8619288 12.2426407,9.75735931 L12.2426407,8.75735931 Z" fill="#000000" transform="translate(16.242641, 7.757359) rotate(-45.000000) translate(-16.242641, -7.757359)" />
                                                         <path d="M5.89339828,3.42893219 C6.44568303,3.42893219 6.89339828,3.87664744 6.89339828,4.42893219 L6.89339828,6.42893219 C6.89339828,6.98121694 6.44568303,7.42893219 5.89339828,7.42893219 C5.34111353,7.42893219 4.89339828,6.98121694 4.89339828,6.42893219 L4.89339828,4.42893219 C4.89339828,3.87664744 5.34111353,3.42893219 5.89339828,3.42893219 Z M11.4289322,5.13603897 C11.8194565,5.52656326 11.8194565,6.15972824 11.4289322,6.55025253 L10.0147186,7.96446609 C9.62419433,8.35499039 8.99102936,8.35499039 8.60050506,7.96446609 C8.20998077,7.5739418 8.20998077,6.94077682 8.60050506,6.55025253 L10.0147186,5.13603897 C10.4052429,4.74551468 11.0384079,4.74551468 11.4289322,5.13603897 Z M0.600505063,5.13603897 C0.991029355,4.74551468 1.62419433,4.74551468 2.01471863,5.13603897 L3.42893219,6.55025253 C3.81945648,6.94077682 3.81945648,7.5739418 3.42893219,7.96446609 C3.0384079,8.35499039 2.40524292,8.35499039 2.01471863,7.96446609 L0.600505063,6.55025253 C0.209980772,6.15972824 0.209980772,5.52656326 0.600505063,5.13603897 Z" fill="#000000" opacity="0.3" transform="translate(6.014719, 5.843146) rotate(-45.000000) translate(-6.014719, -5.843146)" />
                                                         <path d="M17.9142136,15.4497475 C18.4664983,15.4497475 18.9142136,15.8974627 18.9142136,16.4497475 L18.9142136,18.4497475 C18.9142136,19.0020322 18.4664983,19.4497475 17.9142136,19.4497475 C17.3619288,19.4497475 16.9142136,19.0020322 16.9142136,18.4497475 L16.9142136,16.4497475 C16.9142136,15.8974627 17.3619288,15.4497475 17.9142136,15.4497475 Z M23.4497475,17.1568542 C23.8402718,17.5473785 23.8402718,18.1805435 23.4497475,18.5710678 L22.0355339,19.9852814 C21.6450096,20.3758057 21.0118446,20.3758057 20.6213203,19.9852814 C20.2307961,19.5947571 20.2307961,18.9615921 20.6213203,18.5710678 L22.0355339,17.1568542 C22.4260582,16.76633 23.0592232,16.76633 23.4497475,17.1568542 Z M12.6213203,17.1568542 C13.0118446,16.76633 13.6450096,16.76633 14.0355339,17.1568542 L15.4497475,18.5710678 C15.8402718,18.9615921 15.8402718,19.5947571 15.4497475,19.9852814 C15.0592232,20.3758057 14.4260582,20.3758057 14.0355339,19.9852814 L12.6213203,18.5710678 C12.2307961,18.1805435 12.2307961,17.5473785 12.6213203,17.1568542 Z" fill="#000000" opacity="0.3" transform="translate(18.035534, 17.863961) scale(1, -1) rotate(45.000000) translate(-18.035534, -17.863961)" />
                                                      </g>
                                                   </svg>
                                                   <!--end::Svg Icon-->
                                                </span>
                                             </span>
                                          </div>
                                          <!--end::Symbol-->
                                          <!--begin::Text-->
                                          <div class="d-flex flex-column font-weight-bold">
                                             <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Trilo Service</a>
                                             <span class="text-muted">Analytics &amp; Requirement Study</span>
                                          </div>
                                          <!--end::Text-->
                                       </div>
                                       <!--end::Item-->
                                       <!--begin::Item-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Symbol-->
                                          <div class="symbol symbol-40 symbol-light-info mr-5">
                                             <span class="symbol-label">
                                                <span class="svg-icon svg-icon-lg svg-icon-info">
                                                   <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Shield-user.svg-->
                                                   <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                         <rect x="0" y="0" width="24" height="24" />
                                                         <path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z" fill="#000000" opacity="0.3" />
                                                         <path d="M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z" fill="#000000" opacity="0.3" />
                                                         <path d="M7.00036205,16.4995035 C7.21569918,13.5165724 9.36772908,12 11.9907452,12 C14.6506758,12 16.8360465,13.4332455 16.9988413,16.5 C17.0053266,16.6221713 16.9988413,17 16.5815,17 C14.5228466,17 11.463736,17 7.4041679,17 C7.26484009,17 6.98863236,16.6619875 7.00036205,16.4995035 Z" fill="#000000" opacity="0.3" />
                                                      </g>
                                                   </svg>
                                                   <!--end::Svg Icon-->
                                                </span>
                                             </span>
                                          </div>
                                          <!--end::Symbol-->
                                          <!--begin::Text-->
                                          <div class="d-flex flex-column font-weight-bold">
                                             <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Bravia SAAS</a>
                                             <span class="text-muted">Reporting Application</span>
                                          </div>
                                          <!--end::Text-->
                                       </div>
                                       <!--end::Item-->
                                       <!--begin::Item-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Symbol-->
                                          <div class="symbol symbol-40 symbol-light-danger mr-5">
                                             <span class="symbol-label">
                                                <span class="svg-icon svg-icon-lg svg-icon-danger">
                                                   <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-notification.svg-->
                                                   <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                         <rect x="0" y="0" width="24" height="24" />
                                                         <path d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z" fill="#000000" />
                                                         <circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5" r="2.5" />
                                                      </g>
                                                   </svg>
                                                   <!--end::Svg Icon-->
                                                </span>
                                             </span>
                                          </div>
                                          <!--end::Symbol-->
                                          <!--begin::Text-->
                                          <div class="d-flex flex-column font-weight-bold">
                                             <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Express Wind</a>
                                             <span class="text-muted">Software Analytics &amp; Design</span>
                                          </div>
                                          <!--end::Text-->
                                       </div>
                                       <!--end::Item-->
                                       <!--begin::Item-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Symbol-->
                                          <div class="symbol symbol-40 symbol-light-success mr-5">
                                             <span class="symbol-label">
                                                <span class="svg-icon svg-icon-lg svg-icon-success">
                                                   <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Bucket.svg-->
                                                   <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                         <rect x="0" y="0" width="24" height="24" />
                                                         <path d="M5,5 L5,15 C5,15.5948613 5.25970314,16.1290656 5.6719139,16.4954176 C5.71978107,16.5379595 5.76682388,16.5788906 5.81365532,16.6178662 C5.82524933,16.6294602 15,7.45470952 15,7.45470952 C15,6.9962515 15,6.17801499 15,5 L5,5 Z M5,3 L15,3 C16.1045695,3 17,3.8954305 17,5 L17,15 C17,17.209139 15.209139,19 13,19 L7,19 C4.790861,19 3,17.209139 3,15 L3,5 C3,3.8954305 3.8954305,3 5,3 Z" fill="#000000" fill-rule="nonzero" transform="translate(10.000000, 11.000000) rotate(-315.000000) translate(-10.000000, -11.000000)" />
                                                         <path d="M20,22 C21.6568542,22 23,20.6568542 23,19 C23,17.8954305 22,16.2287638 20,14 C18,16.2287638 17,17.8954305 17,19 C17,20.6568542 18.3431458,22 20,22 Z" fill="#000000" opacity="0.3" />
                                                      </g>
                                                   </svg>
                                                   <!--end::Svg Icon-->
                                                </span>
                                             </span>
                                          </div>
                                          <!--end::Symbol-->
                                          <!--begin::Text-->
                                          <div class="d-flex flex-column font-weight-bold">
                                             <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Bruk Fitness</a>
                                             <span class="text-muted">Web Design &amp; Development</span>
                                          </div>
                                          <!--end::Text-->
                                       </div>
                                       <!--end::Item-->
                                    </div>
                                    <!--end::Scroll-->
                                    <!--begin::Action-->
                                    <div class="d-flex flex-center pt-7">
                                       <a href="#" class="btn btn-light-primary font-weight-bold text-center">See All</a>
                                    </div>
                                    <!--end::Action-->
                                 </div>
                                 <!--end::Tabpane-->
                                 <!--begin::Tabpane-->
                                 <div class="tab-pane" id="topbar_notifications_events" role="tabpanel">
                                    <!--begin::Nav-->
                                    <div class="navi navi-hover scroll my-4" data-scroll="true" data-height="300" data-mobile-height="200">
                                       <!--begin::Item-->
                                       <a href="#" class="navi-item">
                                          <div class="navi-link">
                                             <div class="navi-icon mr-2">
                                                <i class="flaticon2-line-chart text-success"></i>
                                             </div>
                                             <div class="navi-text">
                                                <div class="font-weight-bold">New report has been received</div>
                                                <div class="text-muted">23 hrs ago</div>
                                             </div>
                                          </div>
                                       </a>
                                       <!--end::Item-->
                                       <!--begin::Item-->
                                       <a href="#" class="navi-item">
                                          <div class="navi-link">
                                             <div class="navi-icon mr-2">
                                                <i class="flaticon2-paper-plane text-danger"></i>
                                             </div>
                                             <div class="navi-text">
                                                <div class="font-weight-bold">Finance report has been generated</div>
                                                <div class="text-muted">25 hrs ago</div>
                                             </div>
                                          </div>
                                       </a>
                                       <!--end::Item-->
                                       <!--begin::Item-->
                                       <a href="#" class="navi-item">
                                          <div class="navi-link">
                                             <div class="navi-icon mr-2">
                                                <i class="flaticon2-user flaticon2-line- text-success"></i>
                                             </div>
                                             <div class="navi-text">
                                                <div class="font-weight-bold">New order has been received</div>
                                                <div class="text-muted">2 hrs ago</div>
                                             </div>
                                          </div>
                                       </a>
                                       <!--end::Item-->
                                       <!--begin::Item-->
                                       <a href="#" class="navi-item">
                                          <div class="navi-link">
                                             <div class="navi-icon mr-2">
                                                <i class="flaticon2-pin text-primary"></i>
                                             </div>
                                             <div class="navi-text">
                                                <div class="font-weight-bold">New customer is registered</div>
                                                <div class="text-muted">3 hrs ago</div>
                                             </div>
                                          </div>
                                       </a>
                                       <!--end::Item-->
                                       <!--begin::Item-->
                                       <a href="#" class="navi-item">
                                          <div class="navi-link">
                                             <div class="navi-icon mr-2">
                                                <i class="flaticon2-sms text-danger"></i>
                                             </div>
                                             <div class="navi-text">
                                                <div class="font-weight-bold">Application has been approved</div>
                                                <div class="text-muted">3 hrs ago</div>
                                             </div>
                                          </div>
                                       </a>
                                       <!--end::Item-->
                                       <!--begin::Item-->
                                       <a href="#" class="navi-item">
                                          <div class="navi-link">
                                             <div class="navi-icon mr-2">
                                                <i class="flaticon2-pie-chart-3 text-warning"></i>
                                             </div>
                                             <div class="navinavinavi-text">
                                                <div class="font-weight-bold">New file has been uploaded</div>
                                                <div class="text-muted">5 hrs ago</div>
                                             </div>
                                          </div>
                                       </a>
                                       <!--end::Item-->
                                       <!--begin::Item-->
                                       <a href="#" class="navi-item">
                                          <div class="navi-link">
                                             <div class="navi-icon mr-2">
                                                <i class="flaticon-pie-chart-1 text-info"></i>
                                             </div>
                                             <div class="navi-text">
                                                <div class="font-weight-bold">New user feedback received</div>
                                                <div class="text-muted">8 hrs ago</div>
                                             </div>
                                          </div>
                                       </a>
                                       <!--end::Item-->
                                       <!--begin::Item-->
                                       <a href="#" class="navi-item">
                                          <div class="navi-link">
                                             <div class="navi-icon mr-2">
                                                <i class="flaticon2-settings text-success"></i>
                                             </div>
                                             <div class="navi-text">
                                                <div class="font-weight-bold">System reboot has been successfully completed</div>
                                                <div class="text-muted">12 hrs ago</div>
                                             </div>
                                          </div>
                                       </a>
                                       <!--end::Item-->
                                       <!--begin::Item-->
                                       <a href="#" class="navi-item">
                                          <div class="navi-link">
                                             <div class="navi-icon mr-2">
                                                <i class="flaticon-safe-shield-protection text-primary"></i>
                                             </div>
                                             <div class="navi-text">
                                                <div class="font-weight-bold">New order has been placed</div>
                                                <div class="text-muted">15 hrs ago</div>
                                             </div>
                                          </div>
                                       </a>
                                       <!--end::Item-->
                                       <!--begin::Item-->
                                       <a href="#" class="navi-item">
                                          <div class="navi-link">
                                             <div class="navi-icon mr-2">
                                                <i class="flaticon2-notification text-primary"></i>
                                             </div>
                                             <div class="navi-text">
                                                <div class="font-weight-bold">Company meeting canceled</div>
                                                <div class="text-muted">19 hrs ago</div>
                                             </div>
                                          </div>
                                       </a>
                                       <!--end::Item-->
                                       <!--begin::Item-->
                                       <a href="#" class="navi-item">
                                          <div class="navi-link">
                                             <div class="navi-icon mr-2">
                                                <i class="flaticon2-fax text-success"></i>
                                             </div>
                                             <div class="navi-text">
                                                <div class="font-weight-bold">New report has been received</div>
                                                <div class="text-muted">23 hrs ago</div>
                                             </div>
                                          </div>
                                       </a>
                                       <!--end::Item-->
                                       <!--begin::Item-->
                                       <a href="#" class="navi-item">
                                          <div class="navi-link">
                                             <div class="navi-icon mr-2">
                                                <i class="flaticon-download-1 text-danger"></i>
                                             </div>
                                             <div class="navi-text">
                                                <div class="font-weight-bold">Finance report has been generated</div>
                                                <div class="text-muted">25 hrs ago</div>
                                             </div>
                                          </div>
                                       </a>
                                       <!--end::Item-->
                                       <!--begin::Item-->
                                       <a href="#" class="navi-item">
                                          <div class="navi-link">
                                             <div class="navi-icon mr-2">
                                                <i class="flaticon-security text-warning"></i>
                                             </div>
                                             <div class="navi-text">
                                                <div class="font-weight-bold">New customer comment recieved</div>
                                                <div class="text-muted">2 days ago</div>
                                             </div>
                                          </div>
                                       </a>
                                       <!--end::Item-->
                                       <!--begin::Item-->
                                       <a href="#" class="navi-item">
                                          <div class="navi-link">
                                             <div class="navi-icon mr-2">
                                                <i class="flaticon2-analytics-1 text-success"></i>
                                             </div>
                                             <div class="navi-text">
                                                <div class="font-weight-bold">New customer is registered</div>
                                                <div class="text-muted">3 days ago</div>
                                             </div>
                                          </div>
                                       </a>
                                       <!--end::Item-->
                                    </div>
                                    <!--end::Nav-->
                                 </div>
                                 <!--end::Tabpane-->
                                 <!--begin::Tabpane-->
                                 <div class="tab-pane" id="topbar_notifications_logs" role="tabpanel">
                                    <!--begin::Nav-->
                                    <div class="d-flex flex-center text-center text-muted min-h-200px">All caught up!
                                       <br />No new notifications.
                                    </div>
                                    <!--end::Nav-->
                                 </div>
                                 <!--end::Tabpane-->
                              </div>
                              <!--end::Content-->
                           </form>
                        </div>
                        <!--end::Dropdown-->
                     </div>
                     <!--end::Notifications-->

                     <!--begin::Cart-->
                     <div class="topbar-item">
                        <div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1" id="kt_quick_cart_toggle">
                           <span class="svg-icon svg-icon-xl svg-icon-primary">
                              <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Cart3.svg-->
                              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                 <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path d="M12,4.56204994 L7.76822128,9.6401844 C7.4146572,10.0644613 6.7840925,10.1217854 6.3598156,9.76822128 C5.9355387,9.4146572 5.87821464,8.7840925 6.23177872,8.3598156 L11.2317787,2.3598156 C11.6315738,1.88006147 12.3684262,1.88006147 12.7682213,2.3598156 L17.7682213,8.3598156 C18.1217854,8.7840925 18.0644613,9.4146572 17.6401844,9.76822128 C17.2159075,10.1217854 16.5853428,10.0644613 16.2317787,9.6401844 L12,4.56204994 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                    <path d="M3.5,9 L20.5,9 C21.0522847,9 21.5,9.44771525 21.5,10 C21.5,10.132026 21.4738562,10.2627452 21.4230769,10.3846154 L17.7692308,19.1538462 C17.3034221,20.271787 16.2111026,21 15,21 L9,21 C7.78889745,21 6.6965779,20.271787 6.23076923,19.1538462 L2.57692308,10.3846154 C2.36450587,9.87481408 2.60558331,9.28934029 3.11538462,9.07692308 C3.23725479,9.02614384 3.36797398,9 3.5,9 Z M12,17 C13.1045695,17 14,16.1045695 14,15 C14,13.8954305 13.1045695,13 12,13 C10.8954305,13 10,13.8954305 10,15 C10,16.1045695 10.8954305,17 12,17 Z" fill="#000000" />
                                 </g>
                              </svg>
                              <!--end::Svg Icon-->
                           </span>
                        </div>
                     </div>
                     <!--end::Cart-->
                     <!--begin::Quick panel-->
                     <div class="topbar-item">
                        <div class="btn btn-icon btn-clean btn-lg mr-1" id="kt_quick_panel_toggle">
                           <span class="svg-icon svg-icon-xl svg-icon-primary">
                              <!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
                              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                 <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
                                    <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3" />
                                 </g>
                              </svg>
                              <!--end::Svg Icon-->
                           </span>
                        </div>
                     </div>
                     <!--end::Quick panel-->
                     <!--begin::Chat-->
                     <div class="topbar-item">
                        <div class="btn btn-icon btn-clean btn-lg mr-1" data-toggle="modal" data-target="#kt_chat_modal">
                           <span class="svg-icon svg-icon-xl svg-icon-primary">
                              <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group-chat.svg-->
                              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                 <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z" fill="#000000" />
                                    <path d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z" fill="#000000" opacity="0.3" />
                                 </g>
                              </svg>
                              <!--end::Svg Icon-->
                           </span>
                        </div>
                     </div>
                     <!--end::Chat-->

                     <!--begin::User-->
                     <div class="topbar-item">
                        <div class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
                           <span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
                           <span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">Sean</span>
                           <span class="symbol symbol-lg-35 symbol-25 symbol-light-success">
                              <span class="symbol-label font-size-h5 font-weight-bold">S</span>
                           </span>
                        </div>
                     </div>
                     <!--end::User-->
                  </div>
                  <!--end::Topbar-->
               </div>
               <!--end::Container-->
            </div>
            <!--end::Header-->
            <!--begin::Content-->
            <div class="content d-flex flex-column flex-column-fluid p-0" id="kt_content">
               <!--begin::Subheader-->
               <!--end::Subheader-->
               <!--begin::Entry-->
               <div class="d-flex flex-column-fluid">
                  <!--begin::Container-->
                  <div class="container">

                     @yield('content')

                  </div>
                  <!--end::Container-->
               </div>
               <!--end::Entry-->
            </div>
            <!--end::Content-->
            <!--begin::Footer-->
            <div class="footer bg-white py-4 d-flex flex-lg-column" id="kt_footer">
               <!--begin::Container-->
               <div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
                  <!--begin::Copyright-->
                  <div class="text-dark order-2 order-md-1">
                     <span class="text-muted font-weight-bold mr-2"><?= date('Y'); ?> ©</span>
                     <a href="http://keenthemes.com/metronic" target="_blank" class="text-dark-75 text-hover-primary">Mau Grafika</a>
                  </div>
                  <!--end::Copyright-->
                  <!--begin::Nav-->
                  <div class="nav nav-dark">
                  </div>
                  <!--end::Nav-->
               </div>
               <!--end::Container-->
            </div>
            <!--end::Footer-->
         </div>
         <!--end::Wrapper-->
      </div>
      <!--end::Page-->
   </div>
   <!--end::Main-->
   <!-- begin::User Panel-->
   <div id="kt_quick_user" class="offcanvas offcanvas-right p-10">
      <!--begin::Header-->
      <div class="offcanvas-header d-flex align-items-center justify-content-between pb-5">
         <h3 class="font-weight-bold m-0">User Profile
            <small class="text-muted font-size-sm ml-2">12 messages</small>
         </h3>
         <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_user_close">
            <i class="ki ki-close icon-xs text-muted"></i>
         </a>
      </div>
      <!--end::Header-->
      <!--begin::Content-->
      <div class="offcanvas-content pr-5 mr-n5">
         <!--begin::Header-->
         <div class="d-flex align-items-center mt-5">
            <div class="symbol symbol-100 mr-5">
               <div class="symbol-label" style="background-image:url('assets/media/users/300_21.jpg')"></div>
               <i class="symbol-badge bg-success"></i>
            </div>
            <div class="d-flex flex-column">
               <a href="#" class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary">James Jones</a>
               <div class="text-muted mt-1">Application Developer</div>
               <div class="navi mt-2">
                  <a href="#" class="navi-item">
                     <span class="navi-link p-0 pb-2">
                        <span class="navi-icon mr-1">
                           <span class="svg-icon svg-icon-lg svg-icon-primary">
                              <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-notification.svg-->
                              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                 <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z" fill="#000000" />
                                    <circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5" r="2.5" />
                                 </g>
                              </svg>
                              <!--end::Svg Icon-->
                           </span>
                        </span>
                        <span class="navi-text text-muted text-hover-primary">jm@softplus.com</span>
                     </span>
                  </a>
                  <a href="#" class="btn btn-sm btn-light-primary font-weight-bolder py-2 px-5">Sign Out</a>
               </div>
            </div>
         </div>
         <!--end::Header-->
         <!--begin::Separator-->
         <div class="separator separator-dashed mt-8 mb-5"></div>
         <!--end::Separator-->
         <!--begin::Nav-->
         <div class="navi navi-spacer-x-0 p-0">
            <!--begin::Item-->
            <a href="custom/apps/user/profile-1/personal-information.html" class="navi-item">
               <div class="navi-link">
                  <div class="symbol symbol-40 bg-light mr-3">
                     <div class="symbol-label">
                        <span class="svg-icon svg-icon-md svg-icon-success">
                           <!--begin::Svg Icon | path:assets/media/svg/icons/General/Notification2.svg-->
                           <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                 <rect x="0" y="0" width="24" height="24" />
                                 <path d="M13.2070325,4 C13.0721672,4.47683179 13,4.97998812 13,5.5 C13,8.53756612 15.4624339,11 18.5,11 C19.0200119,11 19.5231682,10.9278328 20,10.7929675 L20,17 C20,18.6568542 18.6568542,20 17,20 L7,20 C5.34314575,20 4,18.6568542 4,17 L4,7 C4,5.34314575 5.34314575,4 7,4 L13.2070325,4 Z" fill="#000000" />
                                 <circle fill="#000000" opacity="0.3" cx="18.5" cy="5.5" r="2.5" />
                              </g>
                           </svg>
                           <!--end::Svg Icon-->
                        </span>
                     </div>
                  </div>
                  <div class="navi-text">
                     <div class="font-weight-bold">My Profile</div>
                     <div class="text-muted">Account settings and more
                        <span class="label label-light-danger label-inline font-weight-bold">update</span>
                     </div>
                  </div>
               </div>
            </a>
            <!--end:Item-->
            <!--begin::Item-->
            <a href="custom/apps/user/profile-3.html" class="navi-item">
               <div class="navi-link">
                  <div class="symbol symbol-40 bg-light mr-3">
                     <div class="symbol-label">
                        <span class="svg-icon svg-icon-md svg-icon-warning">
                           <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Chart-bar1.svg-->
                           <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                 <rect x="0" y="0" width="24" height="24" />
                                 <rect fill="#000000" opacity="0.3" x="12" y="4" width="3" height="13" rx="1.5" />
                                 <rect fill="#000000" opacity="0.3" x="7" y="9" width="3" height="8" rx="1.5" />
                                 <path d="M5,19 L20,19 C20.5522847,19 21,19.4477153 21,20 C21,20.5522847 20.5522847,21 20,21 L4,21 C3.44771525,21 3,20.5522847 3,20 L3,4 C3,3.44771525 3.44771525,3 4,3 C4.55228475,3 5,3.44771525 5,4 L5,19 Z" fill="#000000" fill-rule="nonzero" />
                                 <rect fill="#000000" opacity="0.3" x="17" y="11" width="3" height="6" rx="1.5" />
                              </g>
                           </svg>
                           <!--end::Svg Icon-->
                        </span>
                     </div>
                  </div>
                  <div class="navi-text">
                     <div class="font-weight-bold">My Messages</div>
                     <div class="text-muted">Inbox and tasks</div>
                  </div>
               </div>
            </a>
            <!--end:Item-->
            <!--begin::Item-->
            <a href="custom/apps/user/profile-2.html" class="navi-item">
               <div class="navi-link">
                  <div class="symbol symbol-40 bg-light mr-3">
                     <div class="symbol-label">
                        <span class="svg-icon svg-icon-md svg-icon-danger">
                           <!--begin::Svg Icon | path:assets/media/svg/icons/Files/Selected-file.svg-->
                           <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                 <polygon points="0 0 24 0 24 24 0 24" />
                                 <path d="M4.85714286,1 L11.7364114,1 C12.0910962,1 12.4343066,1.12568431 12.7051108,1.35473959 L17.4686994,5.3839416 C17.8056532,5.66894833 18,6.08787823 18,6.52920201 L18,19.0833333 C18,20.8738751 17.9795521,21 16.1428571,21 L4.85714286,21 C3.02044787,21 3,20.8738751 3,19.0833333 L3,2.91666667 C3,1.12612489 3.02044787,1 4.85714286,1 Z M8,12 C7.44771525,12 7,12.4477153 7,13 C7,13.5522847 7.44771525,14 8,14 L15,14 C15.5522847,14 16,13.5522847 16,13 C16,12.4477153 15.5522847,12 15,12 L8,12 Z M8,16 C7.44771525,16 7,16.4477153 7,17 C7,17.5522847 7.44771525,18 8,18 L11,18 C11.5522847,18 12,17.5522847 12,17 C12,16.4477153 11.5522847,16 11,16 L8,16 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                 <path d="M6.85714286,3 L14.7364114,3 C15.0910962,3 15.4343066,3.12568431 15.7051108,3.35473959 L20.4686994,7.3839416 C20.8056532,7.66894833 21,8.08787823 21,8.52920201 L21,21.0833333 C21,22.8738751 20.9795521,23 19.1428571,23 L6.85714286,23 C5.02044787,23 5,22.8738751 5,21.0833333 L5,4.91666667 C5,3.12612489 5.02044787,3 6.85714286,3 Z M8,12 C7.44771525,12 7,12.4477153 7,13 C7,13.5522847 7.44771525,14 8,14 L15,14 C15.5522847,14 16,13.5522847 16,13 C16,12.4477153 15.5522847,12 15,12 L8,12 Z M8,16 C7.44771525,16 7,16.4477153 7,17 C7,17.5522847 7.44771525,18 8,18 L11,18 C11.5522847,18 12,17.5522847 12,17 C12,16.4477153 11.5522847,16 11,16 L8,16 Z" fill="#000000" fill-rule="nonzero" />
                              </g>
                           </svg>
                           <!--end::Svg Icon-->
                        </span>
                     </div>
                  </div>
                  <div class="navi-text">
                     <div class="font-weight-bold">My Activities</div>
                     <div class="text-muted">Logs and notifications</div>
                  </div>
               </div>
            </a>
            <!--end:Item-->
            <!--begin::Item-->
            <a href="custom/apps/userprofile-1/overview.html" class="navi-item">
               <div class="navi-link">
                  <div class="symbol symbol-40 bg-light mr-3">
                     <div class="symbol-label">
                        <span class="svg-icon svg-icon-md svg-icon-primary">
                           <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-opened.svg-->
                           <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                 <rect x="0" y="0" width="24" height="24" />
                                 <path d="M6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,12 C19,12.5522847 18.5522847,13 18,13 L6,13 C5.44771525,13 5,12.5522847 5,12 L5,3 C5,2.44771525 5.44771525,2 6,2 Z M7.5,5 C7.22385763,5 7,5.22385763 7,5.5 C7,5.77614237 7.22385763,6 7.5,6 L13.5,6 C13.7761424,6 14,5.77614237 14,5.5 C14,5.22385763 13.7761424,5 13.5,5 L7.5,5 Z M7.5,7 C7.22385763,7 7,7.22385763 7,7.5 C7,7.77614237 7.22385763,8 7.5,8 L10.5,8 C10.7761424,8 11,7.77614237 11,7.5 C11,7.22385763 10.7761424,7 10.5,7 L7.5,7 Z" fill="#000000" opacity="0.3" />
                                 <path d="M3.79274528,6.57253826 L12,12.5 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 Z" fill="#000000" />
                              </g>
                           </svg>
                           <!--end::Svg Icon-->
                        </span>
                     </div>
                  </div>
                  <div class="navi-text">
                     <div class="font-weight-bold">My Tasks</div>
                     <div class="text-muted">latest tasks and projects</div>
                  </div>
               </div>
            </a>
            <!--end:Item-->
         </div>
         <!--end::Nav-->
         <!--begin::Separator-->
         <div class="separator separator-dashed my-7"></div>
         <!--end::Separator-->
        
      </div>
      <!--end::Content-->
   </div>
   <!-- end::User Panel-->
   <!--begin::Quick Cart-->
   <div id="kt_quick_cart" class="offcanvas offcanvas-right p-10">
      <!--begin::Header-->
      <div class="offcanvas-header d-flex align-items-center justify-content-between pb-7">
         <h4 class="font-weight-bold m-0">Shopping Cart</h4>
         <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_cart_close">
            <i class="ki ki-close icon-xs text-muted"></i>
         </a>
      </div>
      <!--end::Header-->
      <!--begin::Content-->
      <div class="offcanvas-content">
         <!--begin::Wrapper-->
         <div class="offcanvas-wrapper mb-5 scroll-pull">
            <!--begin::Item-->
            <div class="d-flex align-items-center justify-content-between py-8">
               <div class="d-flex flex-column mr-2">
                  <a href="#" class="font-weight-bold text-dark-75 font-size-lg text-hover-primary">iBlender</a>
                  <span class="text-muted">The best kitchen gadget in 2020</span>
                  <div class="d-flex align-items-center mt-2">
                     <span class="font-weight-bold mr-1 text-dark-75 font-size-lg">$ 350</span>
                     <span class="text-muted mr-1">for</span>
                     <span class="font-weight-bold mr-2 text-dark-75 font-size-lg">5</span>
                     <a href="#" class="btn btn-xs btn-light-success btn-icon mr-2">
                        <i class="ki ki-minus icon-xs"></i>
                     </a>
                     <a href="#" class="btn btn-xs btn-light-success btn-icon">
                        <i class="ki ki-plus icon-xs"></i>
                     </a>
                  </div>
               </div>
               <a href="#" class="symbol symbol-70 flex-shrink-0">
                  <img src="assets/media/stock-600x400/img-1.jpg" title="" alt="" />
               </a>
            </div>
            <!--end::Item-->
            <!--begin::Separator-->
            <div class="separator separator-solid"></div>
            <!--end::Separator-->
            <!--begin::Item-->
            <div class="d-flex align-items-center justify-content-between py-8">
               <div class="d-flex flex-column mr-2">
                  <a href="#" class="font-weight-bold text-dark-75 font-size-lg text-hover-primary">SmartCleaner</a>
                  <span class="text-muted">Smart tool for cooking</span>
                  <div class="d-flex align-items-center mt-2">
                     <span class="font-weight-bold mr-1 text-dark-75 font-size-lg">$ 650</span>
                     <span class="text-muted mr-1">for</span>
                     <span class="font-weight-bold mr-2 text-dark-75 font-size-lg">4</span>
                     <a href="#" class="btn btn-xs btn-light-success btn-icon mr-2">
                        <i class="ki ki-minus icon-xs"></i>
                     </a>
                     <a href="#" class="btn btn-xs btn-light-success btn-icon">
                        <i class="ki ki-plus icon-xs"></i>
                     </a>
                  </div>
               </div>
               <a href="#" class="symbol symbol-70 flex-shrink-0">
                  <img src="assets/media/stock-600x400/img-2.jpg" title="" alt="" />
               </a>
            </div>
            <!--end::Item-->
            <!--begin::Separator-->
            <div class="separator separator-solid"></div>
            <!--end::Separator-->
            <!--begin::Item-->
            <div class="d-flex align-items-center justify-content-between py-8">
               <div class="d-flex flex-column mr-2">
                  <a href="#" class="font-weight-bold text-dark-75 font-size-lg text-hover-primary">CameraMax</a>
                  <span class="text-muted">Professional camera for edge cutting shots</span>
                  <div class="d-flex align-items-center mt-2">
                     <span class="font-weight-bold mr-1 text-dark-75 font-size-lg">$ 150</span>
                     <span class="text-muted mr-1">for</span>
                     <span class="font-weight-bold mr-2 text-dark-75 font-size-lg">3</span>
                     <a href="#" class="btn btn-xs btn-light-success btn-icon mr-2">
                        <i class="ki ki-minus icon-xs"></i>
                     </a>
                     <a href="#" class="btn btn-xs btn-light-success btn-icon">
                        <i class="ki ki-plus icon-xs"></i>
                     </a>
                  </div>
               </div>
               <a href="#" class="symbol symbol-70 flex-shrink-0">
                  <img src="assets/media/stock-600x400/img-3.jpg" title="" alt="" />
               </a>
            </div>
            <!--end::Item-->
            <!--begin::Separator-->
            <div class="separator separator-solid"></div>
            <!--end::Separator-->
            <!--begin::Item-->
            <div class="d-flex align-items-center justify-content-between py-8">
               <div class="d-flex flex-column mr-2">
                  <a href="#" class="font-weight-bold text-dark text-hover-primary">4D Printer</a>
                  <span class="text-muted">Manufactoring unique objects</span>
                  <div class="d-flex align-items-center mt-2">
                     <span class="font-weight-bold mr-1 text-dark-75 font-size-lg">$ 1450</span>
                     <span class="text-muted mr-1">for</span>
                     <span class="font-weight-bold mr-2 text-dark-75 font-size-lg">7</span>
                     <a href="#" class="btn btn-xs btn-light-success btn-icon mr-2">
                        <i class="ki ki-minus icon-xs"></i>
                     </a>
                     <a href="#" class="btn btn-xs btn-light-success btn-icon">
                        <i class="ki ki-plus icon-xs"></i>
                     </a>
                  </div>
               </div>
               <a href="#" class="symbol symbol-70 flex-shrink-0">
                  <img src="assets/media/stock-600x400/img-4.jpg" title="" alt="" />
               </a>
            </div>
            <!--end::Item-->
            <!--begin::Separator-->
            <div class="separator separator-solid"></div>
            <!--end::Separator-->
            <!--begin::Item-->
            <div class="d-flex align-items-center justify-content-between py-8">
               <div class="d-flex flex-column mr-2">
                  <a href="#" class="font-weight-bold text-dark text-hover-primary">MotionWire</a>
                  <span class="text-muted">Perfect animation tool</span>
                  <div class="d-flex align-items-center mt-2">
                     <span class="font-weight-bold mr-1 text-dark-75 font-size-lg">$ 650</span>
                     <span class="text-muted mr-1">for</span>
                     <span class="font-weight-bold mr-2 text-dark-75 font-size-lg">7</span>
                     <a href="#" class="btn btn-xs btn-light-success btn-icon mr-2">
                        <i class="ki ki-minus icon-xs"></i>
                     </a>
                     <a href="#" class="btn btn-xs btn-light-success btn-icon">
                        <i class="ki ki-plus icon-xs"></i>
                     </a>
                  </div>
               </div>
               <a href="#" class="symbol symbol-70 flex-shrink-0">
                  <img src="assets/media/stock-600x400/img-8.jpg" title="" alt="" />
               </a>
            </div>
            <!--end::Item-->
         </div>
         <!--end::Wrapper-->
         <!--begin::Purchase-->
         <div class="offcanvas-footer">
            <div class="d-flex align-items-center justify-content-between mb-4">
               <span class="font-weight-bold text-muted font-size-sm mr-2">Total</span>
               <span class="font-weight-bolder text-dark-50 text-right">$1840.00</span>
            </div>
            <div class="d-flex align-items-center justify-content-between mb-7">
               <span class="font-weight-bold text-muted font-size-sm mr-2">Sub total</span>
               <span class="font-weight-bolder text-primary text-right">$5640.00</span>
            </div>
            <div class="text-right">
               <button type="button" class="btn btn-primary text-weight-bold">Place Order</button>
            </div>
         </div>
         <!--end::Purchase-->
      </div>
      <!--end::Content-->
   </div>
   <!--end::Quick Cart-->
   <!--begin::Quick Panel-->
   <div id="kt_quick_panel" class="offcanvas offcanvas-right pt-5 pb-10">
      <!--begin::Header-->
      <div class="offcanvas-header offcanvas-header-navs d-flex align-items-center justify-content-between mb-5">
         <ul class="nav nav-bold nav-tabs nav-tabs-line nav-tabs-line-3x nav-tabs-primary flex-grow-1 px-10" role="tablist">
            <li class="nav-item">
               <a class="nav-link active" data-toggle="tab" href="#kt_quick_panel_logs">Audit Logs</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" data-toggle="tab" href="#kt_quick_panel_notifications">Notifications</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" data-toggle="tab" href="#kt_quick_panel_settings">Settings</a>
            </li>
         </ul>
         <div class="offcanvas-close mt-n1 pr-5">
            <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_panel_close">
               <i class="ki ki-close icon-xs text-muted"></i>
            </a>
         </div>
      </div>
      <!--end::Header-->
      <!--begin::Content-->
      <div class="offcanvas-content px-10">
         <div class="tab-content">
            <!--begin::Tabpane-->
            <div class="tab-pane fade show pt-3 pr-5 mr-n5 active" id="kt_quick_panel_logs" role="tabpanel">
               <!--begin::Section-->
               <div class="mb-15">
                  <h5 class="font-weight-bold mb-5">System Messages</h5>
                  <!--begin: Item-->
                  <div class="d-flex align-items-center flex-wrap mb-5">
                     <div class="symbol symbol-50 symbol-light mr-5">
                        <span class="symbol-label">
                           <img src="assets/media/svg/misc/006-plurk.svg" class="h-50 align-self-center" alt="" />
                        </span>
                     </div>
                     <div class="d-flex flex-column flex-grow-1 mr-2">
                        <a href="#" class="font-weight-bolder text-dark-75 text-hover-primary font-size-lg mb-1">Top Authors</a>
                        <span class="text-muted font-weight-bold">Most Successful Fellas</span>
                     </div>
                     <span class="btn btn-sm btn-light font-weight-bolder py-1 my-lg-0 my-2 text-dark-50">+82$</span>
                  </div>
                  <!--end: Item-->
                  <!--begin: Item-->
                  <div class="d-flex align-items-center flex-wrap mb-5">
                     <div class="symbol symbol-50 symbol-light mr-5">
                        <span class="symbol-label">
                           <img src="assets/media/svg/misc/015-telegram.svg" class="h-50 align-self-center" alt="" />
                        </span>
                     </div>
                     <div class="d-flex flex-column flex-grow-1 mr-2">
                        <a href="#" class="font-weight-bolder text-dark-75 text-hover-primary font-size-lg mb-1">Popular Authors</a>
                        <span class="text-muted font-weight-bold">Most Successful Fellas</span>
                     </div>
                     <span class="btn btn-sm btn-light font-weight-bolder my-lg-0 my-2 py-1 text-dark-50">+280$</span>
                  </div>
                  <!--end: Item-->
                  <!--begin: Item-->
                  <div class="d-flex align-items-center flex-wrap mb-5">
                     <div class="symbol symbol-50 symbol-light mr-5">
                        <span class="symbol-label">
                           <img src="assets/media/svg/misc/003-puzzle.svg" class="h-50 align-self-center" alt="" />
                        </span>
                     </div>
                     <div class="d-flex flex-column flex-grow-1 mr-2">
                        <a href="#" class="font-weight-bolder text-dark-75 text-hover-primary font-size-lg mb-1">New Users</a>
                        <span class="text-muted font-weight-bold">Most Successful Fellas</span>
                     </div>
                     <span class="btn btn-sm btn-light font-weight-bolder my-lg-0 my-2 py-1 text-dark-50">+4500$</span>
                  </div>
                  <!--end: Item-->
                  <!--begin: Item-->
                  <div class="d-flex align-items-center flex-wrap mb-5">
                     <div class="symbol symbol-50 symbol-light mr-5">
                        <span class="symbol-label">
                           <img src="assets/media/svg/misc/005-bebo.svg" class="h-50 align-self-center" alt="" />
                        </span>
                     </div>
                     <div class="d-flex flex-column flex-grow-1 mr-2">
                        <a href="#" class="font-weight-bolder text-dark-75 text-hover-primary font-size-lg mb-1">Active Customers</a>
                        <span class="text-muted font-weight-bold">Most Successful Fellas</span>
                     </div>
                     <span class="btn btn-sm btn-light font-weight-bolder my-lg-0 my-2 py-1 text-dark-50">+4500$</span>
                  </div>
                  <!--end: Item-->
                  <!--begin: Item-->
                  <div class="d-flex align-items-center flex-wrap">
                     <div class="symbol symbol-50 symbol-light mr-5">
                        <span class="symbol-label">
                           <img src="assets/media/svg/misc/014-kickstarter.svg" class="h-50 align-self-center" alt="" />
                        </span>
                     </div>
                     <div class="d-flex flex-column flex-grow-1 mr-2">
                        <a href="#" class="font-weight-bolder text-dark-75 text-hover-primary font-size-lg mb-1">Bestseller Theme</a>
                        <span class="text-muted font-weight-bold">Most Successful Fellas</span>
                     </div>
                     <span class="btn btn-sm btn-light font-weight-bolder my-lg-0 my-2 py-1 text-dark-50">+4500$</span>
                  </div>
                  <!--end: Item-->
               </div>
               <!--end::Section-->
               <!--begin::Section-->
               <div class="mb-5">
                  <h5 class="font-weight-bold mb-5">Notifications</h5>
                  <!--begin: Item-->
                  <div class="d-flex align-items-center bg-light-warning rounded p-5 mb-5">
                     <span class="svg-icon svg-icon-warning mr-5">
                        <span class="svg-icon svg-icon-lg">
                           <!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
                           <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                 <rect x="0" y="0" width="24" height="24" />
                                 <path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000" />
                                 <rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)" x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
                              </g>
                           </svg>
                           <!--end::Svg Icon-->
                        </span>
                     </span>
                     <div class="d-flex flex-column flex-grow-1 mr-2">
                        <a href="#" class="font-weight-normal text-dark-75 text-hover-primary font-size-lg mb-1">Another purpose persuade</a>
                        <span class="text-muted font-size-sm">Due in 2 Days</span>
                     </div>
                     <span class="font-weight-bolder text-warning py-1 font-size-lg">+28%</span>
                  </div>
                  <!--end: Item-->
                  <!--begin: Item-->
                  <div class="d-flex align-items-center bg-light-success rounded p-5 mb-5">
                     <span class="svg-icon svg-icon-success mr-5">
                        <span class="svg-icon svg-icon-lg">
                           <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                           <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                 <rect x="0" y="0" width="24" height="24" />
                                 <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                 <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                              </g>
                           </svg>
                           <!--end::Svg Icon-->
                        </span>
                     </span>
                     <div class="d-flex flex-column flex-grow-1 mr-2">
                        <a href="#" class="font-weight-normal text-dark-75 text-hover-primary font-size-lg mb-1">Would be to people</a>
                        <span class="text-muted font-size-sm">Due in 2 Days</span>
                     </div>
                     <span class="font-weight-bolder text-success py-1 font-size-lg">+50%</span>
                  </div>
                  <!--end: Item-->
                  <!--begin: Item-->
                  <div class="d-flex align-items-center bg-light-danger rounded p-5 mb-5">
                     <span class="svg-icon svg-icon-danger mr-5">
                        <span class="svg-icon svg-icon-lg">
                           <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group-chat.svg-->
                           <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                 <rect x="0" y="0" width="24" height="24" />
                                 <path d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z" fill="#000000" />
                                 <path d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z" fill="#000000" opacity="0.3" />
                              </g>
                           </svg>
                           <!--end::Svg Icon-->
                        </span>
                     </span>
                     <div class="d-flex flex-column flex-grow-1 mr-2">
                        <a href="#" class="font-weight-normel text-dark-75 text-hover-primary font-size-lg mb-1">Purpose would be to persuade</a>
                        <span class="text-muted font-size-sm">Due in 2 Days</span>
                     </div>
                     <span class="font-weight-bolder text-danger py-1 font-size-lg">-27%</span>
                  </div>
                  <!--end: Item-->
                  <!--begin: Item-->
                  <div class="d-flex align-items-center bg-light-info rounded p-5">
                     <span class="svg-icon svg-icon-info mr-5">
                        <span class="svg-icon svg-icon-lg">
                           <!--begin::Svg Icon | path:assets/media/svg/icons/General/Attachment2.svg-->
                           <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                 <rect x="0" y="0" width="24" height="24" />
                                 <path d="M11.7573593,15.2426407 L8.75735931,15.2426407 C8.20507456,15.2426407 7.75735931,15.6903559 7.75735931,16.2426407 C7.75735931,16.7949254 8.20507456,17.2426407 8.75735931,17.2426407 L11.7573593,17.2426407 L11.7573593,18.2426407 C11.7573593,19.3472102 10.8619288,20.2426407 9.75735931,20.2426407 L5.75735931,20.2426407 C4.65278981,20.2426407 3.75735931,19.3472102 3.75735931,18.2426407 L3.75735931,14.2426407 C3.75735931,13.1380712 4.65278981,12.2426407 5.75735931,12.2426407 L9.75735931,12.2426407 C10.8619288,12.2426407 11.7573593,13.1380712 11.7573593,14.2426407 L11.7573593,15.2426407 Z" fill="#000000" opacity="0.3" transform="translate(7.757359, 16.242641) rotate(-45.000000) translate(-7.757359, -16.242641)" />
                                 <path d="M12.2426407,8.75735931 L15.2426407,8.75735931 C15.7949254,8.75735931 16.2426407,8.30964406 16.2426407,7.75735931 C16.2426407,7.20507456 15.7949254,6.75735931 15.2426407,6.75735931 L12.2426407,6.75735931 L12.2426407,5.75735931 C12.2426407,4.65278981 13.1380712,3.75735931 14.2426407,3.75735931 L18.2426407,3.75735931 C19.3472102,3.75735931 20.2426407,4.65278981 20.2426407,5.75735931 L20.2426407,9.75735931 C20.2426407,10.8619288 19.3472102,11.7573593 18.2426407,11.7573593 L14.2426407,11.7573593 C13.1380712,11.7573593 12.2426407,10.8619288 12.2426407,9.75735931 L12.2426407,8.75735931 Z" fill="#000000" transform="translate(16.242641, 7.757359) rotate(-45.000000) translate(-16.242641, -7.757359)" />
                                 <path d="M5.89339828,3.42893219 C6.44568303,3.42893219 6.89339828,3.87664744 6.89339828,4.42893219 L6.89339828,6.42893219 C6.89339828,6.98121694 6.44568303,7.42893219 5.89339828,7.42893219 C5.34111353,7.42893219 4.89339828,6.98121694 4.89339828,6.42893219 L4.89339828,4.42893219 C4.89339828,3.87664744 5.34111353,3.42893219 5.89339828,3.42893219 Z M11.4289322,5.13603897 C11.8194565,5.52656326 11.8194565,6.15972824 11.4289322,6.55025253 L10.0147186,7.96446609 C9.62419433,8.35499039 8.99102936,8.35499039 8.60050506,7.96446609 C8.20998077,7.5739418 8.20998077,6.94077682 8.60050506,6.55025253 L10.0147186,5.13603897 C10.4052429,4.74551468 11.0384079,4.74551468 11.4289322,5.13603897 Z M0.600505063,5.13603897 C0.991029355,4.74551468 1.62419433,4.74551468 2.01471863,5.13603897 L3.42893219,6.55025253 C3.81945648,6.94077682 3.81945648,7.5739418 3.42893219,7.96446609 C3.0384079,8.35499039 2.40524292,8.35499039 2.01471863,7.96446609 L0.600505063,6.55025253 C0.209980772,6.15972824 0.209980772,5.52656326 0.600505063,5.13603897 Z" fill="#000000" opacity="0.3" transform="translate(6.014719, 5.843146) rotate(-45.000000) translate(-6.014719, -5.843146)" />
                                 <path d="M17.9142136,15.4497475 C18.4664983,15.4497475 18.9142136,15.8974627 18.9142136,16.4497475 L18.9142136,18.4497475 C18.9142136,19.0020322 18.4664983,19.4497475 17.9142136,19.4497475 C17.3619288,19.4497475 16.9142136,19.0020322 16.9142136,18.4497475 L16.9142136,16.4497475 C16.9142136,15.8974627 17.3619288,15.4497475 17.9142136,15.4497475 Z M23.4497475,17.1568542 C23.8402718,17.5473785 23.8402718,18.1805435 23.4497475,18.5710678 L22.0355339,19.9852814 C21.6450096,20.3758057 21.0118446,20.3758057 20.6213203,19.9852814 C20.2307961,19.5947571 20.2307961,18.9615921 20.6213203,18.5710678 L22.0355339,17.1568542 C22.4260582,16.76633 23.0592232,16.76633 23.4497475,17.1568542 Z M12.6213203,17.1568542 C13.0118446,16.76633 13.6450096,16.76633 14.0355339,17.1568542 L15.4497475,18.5710678 C15.8402718,18.9615921 15.8402718,19.5947571 15.4497475,19.9852814 C15.0592232,20.3758057 14.4260582,20.3758057 14.0355339,19.9852814 L12.6213203,18.5710678 C12.2307961,18.1805435 12.2307961,17.5473785 12.6213203,17.1568542 Z" fill="#000000" opacity="0.3" transform="translate(18.035534, 17.863961) scale(1, -1) rotate(45.000000) translate(-18.035534, -17.863961)" />
                              </g>
                           </svg>
                           <!--end::Svg Icon-->
                        </span>
                     </span>
                     <div class="d-flex flex-column flex-grow-1 mr-2">
                        <a href="#" class="font-weight-normel text-dark-75 text-hover-primary font-size-lg mb-1">The best product</a>
                        <span class="text-muted font-size-sm">Due in 2 Days</span>
                     </div>
                     <span class="font-weight-bolder text-info py-1 font-size-lg">+8%</span>
                  </div>
                  <!--end: Item-->
               </div>
               <!--end::Section-->
            </div>
            <!--end::Tabpane-->
            <!--begin::Tabpane-->
            <div class="tab-pane fade pt-2 pr-5 mr-n5" id="kt_quick_panel_notifications" role="tabpanel">
               <!--begin::Nav-->
               <div class="navi navi-icon-circle navi-spacer-x-0">
                  <!--begin::Item-->
                  <a href="#" class="navi-item">
                     <div class="navi-link rounded">
                        <div class="symbol symbol-50 mr-3">
                           <div class="symbol-label">
                              <i class="flaticon-bell text-success icon-lg"></i>
                           </div>
                        </div>
                        <div class="navi-text">
                           <div class="font-weight-bold font-size-lg">5 new user generated report</div>
                           <div class="text-muted">Reports based on sales</div>
                        </div>
                     </div>
                  </a>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <a href="#" class="navi-item">
                     <div class="navi-link rounded">
                        <div class="symbol symbol-50 mr-3">
                           <div class="symbol-label">
                              <i class="flaticon2-box text-danger icon-lg"></i>
                           </div>
                        </div>
                        <div class="navi-text">
                           <div class="font-weight-bold font-size-lg">2 new items submited</div>
                           <div class="text-muted">by Grog John</div>
                        </div>
                     </div>
                  </a>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <a href="#" class="navi-item">
                     <div class="navi-link rounded">
                        <div class="symbol symbol-50 mr-3">
                           <div class="symbol-label">
                              <i class="flaticon-psd text-primary icon-lg"></i>
                           </div>
                        </div>
                        <div class="navi-text">
                           <div class="font-weight-bold font-size-lg">79 PSD files generated</div>
                           <div class="text-muted">Reports based on sales</div>
                        </div>
                     </div>
                  </a>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <a href="#" class="navi-item">
                     <div class="navi-link rounded">
                        <div class="symbol symbol-50 mr-3">
                           <div class="symbol-label">
                              <i class="flaticon2-supermarket text-warning icon-lg"></i>
                           </div>
                        </div>
                        <div class="navi-text">
                           <div class="font-weight-bold font-size-lg">$2900 worth producucts sold</div>
                           <div class="text-muted">Total 234 items</div>
                        </div>
                     </div>
                  </a>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <a href="#" class="navi-item">
                     <div class="navi-link rounded">
                        <div class="symbol symbol-50 mr-3">
                           <div class="symbol-label">
                              <i class="flaticon-paper-plane-1 text-success icon-lg"></i>
                           </div>
                        </div>
                        <div class="navi-text">
                           <div class="font-weight-bold font-size-lg">4.5h-avarage response time</div>
                           <div class="text-muted">Fostest is Barry</div>
                        </div>
                     </div>
                  </a>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <a href="#" class="navi-item">
                     <div class="navi-link rounded">
                        <div class="symbol symbol-50 mr-3">
                           <div class="symbol-label">
                              <i class="flaticon-safe-shield-protection text-danger icon-lg"></i>
                           </div>
                        </div>
                        <div class="navi-text">
                           <div class="font-weight-bold font-size-lg">3 Defence alerts</div>
                           <div class="text-muted">40% less alerts thar last week</div>
                        </div>
                     </div>
                  </a>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <a href="#" class="navi-item">
                     <div class="navi-link rounded">
                        <div class="symbol symbol-50 mr-3">
                           <div class="symbol-label">
                              <i class="flaticon-notepad text-primary icon-lg"></i>
                           </div>
                        </div>
                        <div class="navi-text">
                           <div class="font-weight-bold font-size-lg">Avarage 4 blog posts per author</div>
                           <div class="text-muted">Most posted 12 time</div>
                        </div>
                     </div>
                  </a>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <a href="#" class="navi-item">
                     <div class="navi-link rounded">
                        <div class="symbol symbol-50 mr-3">
                           <div class="symbol-label">
                              <i class="flaticon-users-1 text-warning icon-lg"></i>
                           </div>
                        </div>
                        <div class="navi-text">
                           <div class="font-weight-bold font-size-lg">16 authors joined last week</div>
                           <div class="text-muted">9 photodrapehrs, 7 designer</div>
                        </div>
                     </div>
                  </a>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <a href="#" class="navi-item">
                     <div class="navi-link rounded">
                        <div class="symbol symbol-50 mr-3">
                           <div class="symbol-label">
                              <i class="flaticon2-box text-info icon-lg"></i>
                           </div>
                        </div>
                        <div class="navi-text">
                           <div class="font-weight-bold font-size-lg">2 new items have been submited</div>
                           <div class="text-muted">by Grog John</div>
                        </div>
                     </div>
                  </a>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <a href="#" class="navi-item">
                     <div class="navi-link rounded">
                        <div class="symbol symbol-50 mr-3">
                           <div class="symbol-label">
                              <i class="flaticon2-download text-success icon-lg"></i>
                           </div>
                        </div>
                        <div class="navi-text">
                           <div class="font-weight-bold font-size-lg">2.8 GB-total downloads size</div>
                           <div class="text-muted">Mostly PSD end AL concepts</div>
                        </div>
                     </div>
                  </a>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <a href="#" class="navi-item">
                     <div class="navi-link rounded">
                        <div class="symbol symbol-50 mr-3">
                           <div class="symbol-label">
                              <i class="flaticon2-supermarket text-danger icon-lg"></i>
                           </div>
                        </div>
                        <div class="navi-text">
                           <div class="font-weight-bold font-size-lg">$2900 worth producucts sold</div>
                           <div class="text-muted">Total 234 items</div>
                        </div>
                     </div>
                  </a>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <a href="#" class="navi-item">
                     <div class="navi-link rounded">
                        <div class="symbol symbol-50 mr-3">
                           <div class="symbol-label">
                              <i class="flaticon-bell text-primary icon-lg"></i>
                           </div>
                        </div>
                        <div class="navi-text">
                           <div class="font-weight-bold font-size-lg">7 new user generated report</div>
                           <div class="text-muted">Reports based on sales</div>
                        </div>
                     </div>
                  </a>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <a href="#" class="navi-item">
                     <div class="navi-link rounded">
                        <div class="symbol symbol-50 mr-3">
                           <div class="symbol-label">
                              <i class="flaticon-paper-plane-1 text-success icon-lg"></i>
                           </div>
                        </div>
                        <div class="navi-text">
                           <div class="font-weight-bold font-size-lg">4.5h-avarage response time</div>
                           <div class="text-muted">Fostest is Barry</div>
                        </div>
                     </div>
                  </a>
                  <!--end::Item-->
               </div>
               <!--end::Nav-->
            </div>
            <!--end::Tabpane-->
            <!--begin::Tabpane-->
            <div class="tab-pane fade pt-3 pr-5 mr-n5" id="kt_quick_panel_settings" role="tabpanel">
               <form class="form">
                  <!--begin::Section-->
                  <div>
                     <h5 class="font-weight-bold mb-3">Customer Care</h5>
                     <div class="form-group mb-0 row align-items-center">
                        <label class="col-8 col-form-label">Enable Notifications:</label>
                        <div class="col-4 d-flex justify-content-end">
                           <span class="switch switch-success switch-sm">
                              <label>
                                 <input type="checkbox" checked="checked" name="select" />
                                 <span></span>
                              </label>
                           </span>
                        </div>
                     </div>
                     <div class="form-group mb-0 row align-items-center">
                        <label class="col-8 col-form-label">Enable Case Tracking:</label>
                        <div class="col-4 d-flex justify-content-end">
                           <span class="switch switch-success switch-sm">
                              <label>
                                 <input type="checkbox" name="quick_panel_notifications_2" />
                                 <span></span>
                              </label>
                           </span>
                        </div>
                     </div>
                     <div class="form-group mb-0 row align-items-center">
                        <label class="col-8 col-form-label">Support Portal:</label>
                        <div class="col-4 d-flex justify-content-end">
                           <span class="switch switch-success switch-sm">
                              <label>
                                 <input type="checkbox" checked="checked" name="select" />
                                 <span></span>
                              </label>
                           </span>
                        </div>
                     </div>
                  </div>
                  <!--end::Section-->
                  <div class="separator separator-dashed my-6"></div>
                  <!--begin::Section-->
                  <div class="pt-2">
                     <h5 class="font-weight-bold mb-3">Reports</h5>
                     <div class="form-group mb-0 row align-items-center">
                        <label class="col-8 col-form-label">Generate Reports:</label>
                        <div class="col-4 d-flex justify-content-end">
                           <span class="switch switch-sm switch-danger">
                              <label>
                                 <input type="checkbox" checked="checked" name="select" />
                                 <span></span>
                              </label>
                           </span>
                        </div>
                     </div>
                     <div class="form-group mb-0 row align-items-center">
                        <label class="col-8 col-form-label">Enable Report Export:</label>
                        <div class="col-4 d-flex justify-content-end">
                           <span class="switch switch-sm switch-danger">
                              <label>
                                 <input type="checkbox" name="select" />
                                 <span></span>
                              </label>
                           </span>
                        </div>
                     </div>
                     <div class="form-group mb-0 row align-items-center">
                        <label class="col-8 col-form-label">Allow Data Collection:</label>
                        <div class="col-4 d-flex justify-content-end">
                           <span class="switch switch-sm switch-danger">
                              <label>
                                 <input type="checkbox" checked="checked" name="select" />
                                 <span></span>
                              </label>
                           </span>
                        </div>
                     </div>
                  </div>
                  <!--end::Section-->
                  <div class="separator separator-dashed my-6"></div>
                  <!--begin::Section-->
                  <div class="pt-2">
                     <h5 class="font-weight-bold mb-3">Memebers</h5>
                     <div class="form-group mb-0 row align-items-center">
                        <label class="col-8 col-form-label">Enable Member singup:</label>
                        <div class="col-4 d-flex justify-content-end">
                           <span class="switch switch-sm switch-primary">
                              <label>
                                 <input type="checkbox" checked="checked" name="select" />
                                 <span></span>
                              </label>
                           </span>
                        </div>
                     </div>
                     <div class="form-group mb-0 row align-items-center">
                        <label class="col-8 col-form-label">Allow User Feedbacks:</label>
                        <div class="col-4 d-flex justify-content-end">
                           <span class="switch switch-sm switch-primary">
                              <label>
                                 <input type="checkbox" name="select" />
                                 <span></span>
                              </label>
                           </span>
                        </div>
                     </div>
                     <div class="form-group mb-0 row align-items-center">
                        <label class="col-8 col-form-label">Enable Customer Portal:</label>
                        <div class="col-4 d-flex justify-content-end">
                           <span class="switch switch-sm switch-primary">
                              <label>
                                 <input type="checkbox" checked="checked" name="select" />
                                 <span></span>
                              </label>
                           </span>
                        </div>
                     </div>
                  </div>
                  <!--end::Section-->
               </form>
            </div>
            <!--end::Tabpane-->
         </div>
      </div>
      <!--end::Content-->
   </div>
   <!--end::Quick Panel-->
   <!--begin::Chat Panel-->
   <div class="modal modal-sticky modal-sticky-bottom-right" id="kt_chat_modal" role="dialog" data-backdrop="false">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <!--begin::Card-->
            <div class="card card-custom">
               <!--begin::Header-->
               <div class="card-header align-items-center px-4 py-3">
                  <div class="text-left flex-grow-1">
                     <!--begin::Dropdown Menu-->
                     <div class="dropdown dropdown-inline">
                        <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <span class="svg-icon svg-icon-lg">
                              <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
                              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                 <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24" />
                                    <path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                    <path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                                 </g>
                              </svg>
                              <!--end::Svg Icon-->
                           </span>
                        </button>
                        <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-md">
                           <!--begin::Navigation-->
                           <ul class="navi navi-hover py-5">
                              <li class="navi-item">
                                 <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                       <i class="flaticon2-drop"></i>
                                    </span>
                                    <span class="navi-text">New Group</span>
                                 </a>
                              </li>
                              <li class="navi-item">
                                 <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                       <i class="flaticon2-list-3"></i>
                                    </span>
                                    <span class="navi-text">Contacts</span>
                                 </a>
                              </li>
                              <li class="navi-item">
                                 <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                       <i class="flaticon2-rocket-1"></i>
                                    </span>
                                    <span class="navi-text">Groups</span>
                                    <span class="navi-link-badge">
                                       <span class="label label-light-primary label-inline font-weight-bold">new</span>
                                    </span>
                                 </a>
                              </li>
                              <li class="navi-item">
                                 <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                       <i class="flaticon2-bell-2"></i>
                                    </span>
                                    <span class="navi-text">Calls</span>
                                 </a>
                              </li>
                              <li class="navi-item">
                                 <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                       <i class="flaticon2-gear"></i>
                                    </span>
                                    <span class="navi-text">Settings</span>
                                 </a>
                              </li>
                              <li class="navi-separator my-3"></li>
                              <li class="navi-item">
                                 <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                       <i class="flaticon2-magnifier-tool"></i>
                                    </span>
                                    <span class="navi-text">Help</span>
                                 </a>
                              </li>
                              <li class="navi-item">
                                 <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                       <i class="flaticon2-bell-2"></i>
                                    </span>
                                    <span class="navi-text">Privacy</span>
                                    <span class="navi-link-badge">
                                       <span class="label label-light-danger label-rounded font-weight-bold">5</span>
                                    </span>
                                 </a>
                              </li>
                           </ul>
                           <!--end::Navigation-->
                        </div>
                     </div>
                     <!--end::Dropdown Menu-->
                  </div>
                  <div class="text-center flex-grow-1">
                     <div class="text-dark-75 font-weight-bold font-size-h5">Matt Pears</div>
                     <div>
                        <span class="label label-dot label-success"></span>
                        <span class="font-weight-bold text-muted font-size-sm">Active</span>
                     </div>
                  </div>
                  <div class="text-right flex-grow-1">
                     <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-dismiss="modal">
                        <i class="ki ki-close icon-1x"></i>
                     </button>
                  </div>
               </div>
               <!--end::Header-->
               <!--begin::Body-->
               <div class="card-body">
                  <!--begin::Scroll-->
                  <div class="scroll scroll-pull" data-height="375" data-mobile-height="300">
                     <!--begin::Messages-->
                     <div class="messages">
                        <!--begin::Message In-->
                        <div class="d-flex flex-column mb-5 align-items-start">
                           <div class="d-flex align-items-center">
                              <div class="symbol symbol-circle symbol-40 mr-3">
                                 <img alt="Pic" src="assets/media/users/300_12.jpg" />
                              </div>
                              <div>
                                 <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt Pears</a>
                                 <span class="text-muted font-size-sm">2 Hours</span>
                              </div>
                           </div>
                           <div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">How likely are you to recommend our company to your friends and family?</div>
                        </div>
                        <!--end::Message In-->
                        <!--begin::Message Out-->
                        <div class="d-flex flex-column mb-5 align-items-end">
                           <div class="d-flex align-items-center">
                              <div>
                                 <span class="text-muted font-size-sm">3 minutes</span>
                                 <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                              </div>
                              <div class="symbol symbol-circle symbol-40 ml-3">
                                 <img alt="Pic" src="assets/media/users/300_21.jpg" />
                              </div>
                           </div>
                           <div class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">Hey there, we’re just writing to let you know that you’ve been subscribed to a repository on GitHub.</div>
                        </div>
                        <!--end::Message Out-->
                        <!--begin::Message In-->
                        <div class="d-flex flex-column mb-5 align-items-start">
                           <div class="d-flex align-items-center">
                              <div class="symbol symbol-circle symbol-40 mr-3">
                                 <img alt="Pic" src="assets/media/users/300_21.jpg" />
                              </div>
                              <div>
                                 <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt Pears</a>
                                 <span class="text-muted font-size-sm">40 seconds</span>
                              </div>
                           </div>
                           <div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">Ok, Understood!</div>
                        </div>
                        <!--end::Message In-->
                        <!--begin::Message Out-->
                        <div class="d-flex flex-column mb-5 align-items-end">
                           <div class="d-flex align-items-center">
                              <div>
                                 <span class="text-muted font-size-sm">Just now</span>
                                 <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                              </div>
                              <div class="symbol symbol-circle symbol-40 ml-3">
                                 <img alt="Pic" src="assets/media/users/300_21.jpg" />
                              </div>
                           </div>
                           <div class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">You’ll receive notifications for all issues, pull requests!</div>
                        </div>
                        <!--end::Message Out-->
                        <!--begin::Message In-->
                        <div class="d-flex flex-column mb-5 align-items-start">
                           <div class="d-flex align-items-center">
                              <div class="symbol symbol-circle symbol-40 mr-3">
                                 <img alt="Pic" src="assets/media/users/300_12.jpg" />
                              </div>
                              <div>
                                 <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt Pears</a>
                                 <span class="text-muted font-size-sm">40 seconds</span>
                              </div>
                           </div>
                           <div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">You can unwatch this repository immediately by clicking here:
                              <a href="#">https://github.com</a>
                           </div>
                        </div>
                        <!--end::Message In-->
                        <!--begin::Message Out-->
                        <div class="d-flex flex-column mb-5 align-items-end">
                           <div class="d-flex align-items-center">
                              <div>
                                 <span class="text-muted font-size-sm">Just now</span>
                                 <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                              </div>
                              <div class="symbol symbol-circle symbol-40 ml-3">
                                 <img alt="Pic" src="assets/media/users/300_21.jpg" />
                              </div>
                           </div>
                           <div class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">Discover what students who viewed Learn Figma - UI/UX Design. Essential Training also viewed</div>
                        </div>
                        <!--end::Message Out-->
                        <!--begin::Message In-->
                        <div class="d-flex flex-column mb-5 align-items-start">
                           <div class="d-flex align-items-center">
                              <div class="symbol symbol-circle symbol-40 mr-3">
                                 <img alt="Pic" src="assets/media/users/300_12.jpg" />
                              </div>
                              <div>
                                 <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt Pears</a>
                                 <span class="text-muted font-size-sm">40 seconds</span>
                              </div>
                           </div>
                           <div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">Most purchased Business courses during this sale!</div>
                        </div>
                        <!--end::Message In-->
                        <!--begin::Message Out-->
                        <div class="d-flex flex-column mb-5 align-items-end">
                           <div class="d-flex align-items-center">
                              <div>
                                 <span class="text-muted font-size-sm">Just now</span>
                                 <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                              </div>
                              <div class="symbol symbol-circle symbol-40 ml-3">
                                 <img alt="Pic" src="assets/media/users/300_21.jpg" />
                              </div>
                           </div>
                           <div class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">Company BBQ to celebrate the last quater achievements and goals. Food and drinks provided</div>
                        </div>
                        <!--end::Message Out-->
                     </div>
                     <!--end::Messages-->
                  </div>
                  <!--end::Scroll-->
               </div>
               <!--end::Body-->
               <!--begin::Footer-->
               <div class="card-footer align-items-center">
                  <!--begin::Compose-->
                  <textarea class="form-control border-0 p-0" rows="2" placeholder="Type a message"></textarea>
                  <div class="d-flex align-items-center justify-content-between mt-5">
                     <div class="mr-3">
                        <a href="#" class="btn btn-clean btn-icon btn-md mr-1">
                           <i class="flaticon2-photograph icon-lg"></i>
                        </a>
                        <a href="#" class="btn btn-clean btn-icon btn-md">
                           <i class="flaticon2-photo-camera icon-lg"></i>
                        </a>
                     </div>
                     <div>
                        <button type="button" class="btn btn-primary btn-md text-uppercase font-weight-bold chat-send py-2 px-6">Send</button>
                     </div>
                  </div>
                  <!--begin::Compose-->
               </div>
               <!--end::Footer-->
            </div>
            <!--end::Card-->
         </div>
      </div>
   </div>
   <!--end::Chat Panel-->
   <!--begin::Scrolltop-->
   <div id="kt_scrolltop" class="scrolltop">
      <span class="svg-icon">
         <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Up-2.svg-->
         <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
               <polygon points="0 0 24 0 24 24 0 24" />
               <rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1" />
               <path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
            </g>
         </svg>
         <!--end::Svg Icon-->
      </span>
   </div>
   <!--end::Scrolltop-->
   <!--begin::Sticky Toolbar-->
   <ul class="sticky-toolbar nav flex-column pl-2 pr-2 pt-3 pb-3 mt-4">
      <!--begin::Item-->
      <li class="nav-item mb-2" id="kt_demo_panel_toggle" data-toggle="tooltip" title="Check out more demos" data-placement="right">
         <a class="btn btn-sm btn-icon btn-bg-light btn-icon-success btn-hover-success" href="#">
            <i class="flaticon2-drop"></i>
         </a>
      </li>
      <!--end::Item-->
      <!--begin::Item-->
      <li class="nav-item mb-2" data-toggle="tooltip" title="Layout Builder" data-placement="left">
         <a class="btn btn-sm btn-icon btn-bg-light btn-icon-primary btn-hover-primary" href="https://preview.keenthemes.com/metronic/demo1/builder.html" target="_blank">
            <i class="flaticon2-gear"></i>
         </a>
      </li>
      <!--end::Item-->
      <!--begin::Item-->
      <li class="nav-item mb-2" data-toggle="tooltip" title="Documentation" data-placement="left">
         <a class="btn btn-sm btn-icon btn-bg-light btn-icon-warning btn-hover-warning" href="https://keenthemes.com/metronic/?page=docs" target="_blank">
            <i class="flaticon2-telegram-logo"></i>
         </a>
      </li>
      <!--end::Item-->
      <!--begin::Item-->
      <li class="nav-item" id="kt_sticky_toolbar_chat_toggler" data-toggle="tooltip" title="Chat Example" data-placement="left">
         <a class="btn btn-sm btn-icon btn-bg-light btn-icon-danger btn-hover-danger" href="#" data-toggle="modal" data-target="#kt_chat_modal">
            <i class="flaticon2-chat-1"></i>
         </a>
      </li>
      <!--end::Item-->
   </ul>
   <!--end::Sticky Toolbar-->
   <!--begin::Demo Panel-->
   <div id="kt_demo_panel" class="offcanvas offcanvas-right p-10">
      <!--begin::Header-->
      <div class="offcanvas-header d-flex align-items-center justify-content-between pb-7">
         <h4 class="font-weight-bold m-0">Select A Demo</h4>
         <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_demo_panel_close">
            <i class="ki ki-close icon-xs text-muted"></i>
         </a>
      </div>
      <!--end::Header-->
      <!--begin::Content-->
      <div class="offcanvas-content">

         <!--begin::Purchase-->
         <div class="offcanvas-footer">
            <a href="https://1.envato.market/EA4JP" target="_blank" class="btn btn-block btn-danger btn-shadow font-weight-bolder text-uppercase">Buy Metronic Now!</a>
         </div>
         <!--end::Purchase-->
      </div>
      <!--end::Content-->
   </div>
   <!--end::Demo Panel-->
   <script>
      var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";
   </script>
   <!--begin::Global Config(global config for global JS scripts)-->
   <script>
      var KTAppSettings = {
         "breakpoints": {
            "sm": 576,
            "md": 768,
            "lg": 992,
            "xl": 1200,
            "xxl": 1400
         },
         "colors": {
            "theme": {
               "base": {
                  "white": "#ffffff",
                  "primary": "#3699FF",
                  "secondary": "#E5EAEE",
                  "success": "#1BC5BD",
                  "info": "#8950FC",
                  "warning": "#FFA800",
                  "danger": "#F64E60",
                  "light": "#E4E6EF",
                  "dark": "#181C32"
               },
               "light": {
                  "white": "#ffffff",
                  "primary": "#E1F0FF",
                  "secondary": "#EBEDF3",
                  "success": "#C9F7F5",
                  "info": "#EEE5FF",
                  "warning": "#FFF4DE",
                  "danger": "#FFE2E5",
                  "light": "#F3F6F9",
                  "dark": "#D6D6E0"
               },
               "inverse": {
                  "white": "#ffffff",
                  "primary": "#ffffff",
                  "secondary": "#3F4254",
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
               "gray-200": "#EBEDF3",
               "gray-300": "#E4E6EF",
               "gray-400": "#D1D3E0",
               "gray-500": "#B5B5C3",
               "gray-600": "#7E8299",
               "gray-700": "#5E6278",
               "gray-800": "#3F4254",
               "gray-900": "#181C32"
            }
         },
         "font-family": "Poppins"
      };
   </script>
   <!--end::Global Config-->
   <!--begin::Global Theme Bundle(used by all pages)-->
   <script src="assets/plugins/global/plugins.bundle.js"></script>
   <script src="assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
   <script src="assets/js/scripts.bundle.js"></script>
   <!--end::Global Theme Bundle-->
   <!--begin::Page Vendors(used by this page)-->
   <script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
   <script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM"></script>
   <script src="assets/plugins/custom/gmaps/gmaps.js"></script>
   <!--end::Page Vendors-->
   <!--begin::Page Scripts(used by this page)-->
   <script src="assets/js/pages/widgets.js"></script>
   <!--end::Page Scripts-->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

   @yield('javascript')
</body>
<!--end::Body-->

</html>