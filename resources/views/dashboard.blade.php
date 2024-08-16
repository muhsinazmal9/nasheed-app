<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>OneUI - Bootstrap 5 Admin Template &amp; UI Framework | DEMO</title>
  <meta name="description" content="OneUI - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave | This is the demo of OneUI! You need to purchase a license for legal use! | DEMO">
  <meta name="author" content="pixelcave">
  <meta name="robots" content="index, follow">
  <meta property="og:title" content="OneUI - Bootstrap 5 Admin Template &amp; UI Framework | DEMO">
  <meta property="og:site_name" content="OneUI">
  <meta property="og:description" content="OneUI - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave | This is the demo of OneUI! You need to purchase a license for legal use! | DEMO">
  <meta property="og:type" content="website">
  <meta property="og:url" content="">
  <meta property="og:image" content="">
  <link rel="shortcut icon" href="{{ asset('assets') }}/media/favicons/favicon.png">
  <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets') }}/media/favicons/favicon-192x192.png">
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets') }}/media/favicons/apple-touch-icon-180x180.png">
    <link rel="stylesheet" id="css-main" href="{{ asset('assets') }}/css/oneui.min-5.9.css">
    <script async="" src="../gtag/js?id=G-9HQDQJJYW7"></script><script>window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag('js', new Date());gtag('config', 'G-9HQDQJJYW7');</script>
</head>
<body>
<div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">
    <aside id="side-overlay">
  <div class="content-header border-bottom">
    <a class="img-link me-1" href="javascript:void(0)">
      <img class="img-avatar img-avatar32" src="{{ asset('assets') }}/media/avatars/avatar10.jpg" alt="">
    </a>
    <div class="ms-2">
      <a class="text-dark fw-semibold fs-sm" href="javascript:void(0)">John Smith</a>
    </div>
    <a class="ms-auto btn btn-sm btn-alt-danger" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_close">
      <i class="fa fa-fw fa-times"></i>
    </a>
  </div>
  <div class="content-side">
    <div class="block block-transparent pull-x pull-t">
      <ul class="nav nav-tabs nav-tabs-block nav-justified" role="tablist">
        <li class="nav-item">
          <button type="button" class="nav-link active" id="so-overview-tab" data-bs-toggle="tab" data-bs-target="#so-overview" role="tab" aria-controls="so-overview" aria-selected="true">
            <i class="fa fa-fw fa-coffee text-gray opacity-75 me-1"></i> Overview
          </button>
        </li>
        <li class="nav-item">
          <button type="button" class="nav-link" id="so-sales-tab" data-bs-toggle="tab" data-bs-target="#so-sales" role="tab" aria-controls="so-sales" aria-selected="false">
            <i class="fa fa-fw fa-chart-line text-gray opacity-75 me-1"></i> Sales
          </button>
        </li>
      </ul>
      <div class="block-content tab-content overflow-hidden">
        <div class="tab-pane pull-x fade fade-left show active" id="so-overview" role="tabpanel" aria-labelledby="so-overview-tab" tabindex="0">
          <div class="block block-transparent">
            <div class="block-header block-header-default">
              <h3 class="block-title">Recent Activity</h3>
              <div class="block-options">
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                  <i class="si si-refresh"></i>
                </button>
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
              </div>
            </div>
            <div class="block-content">
              <ul class="nav-items mb-0">
                <li>
                  <a class="text-dark d-flex py-2" href="javascript:void(0)">
                    <div class="flex-shrink-0 me-3 ms-2">
                      <i class="fa fa-fw fa-plus text-success"></i>
                    </div>
                    <div class="flex-grow-1 fs-sm">
                      <div class="fw-semibold">New sale ($15)</div>
                      <div>Admin Template</div>
                      <small class="text-muted">3 min ago</small>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="text-dark d-flex py-2" href="javascript:void(0)">
                    <div class="flex-shrink-0 me-3 ms-2">
                      <i class="fa fa-fw fa-pencil-alt text-info"></i>
                    </div>
                    <div class="flex-grow-1 fs-sm">
                      <div class="fw-semibold">You edited the file</div>
                      <div>Documentation.doc</div>
                      <small class="text-muted">15 min ago</small>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="text-dark d-flex py-2" href="javascript:void(0)">
                    <div class="flex-shrink-0 me-3 ms-2">
                      <i class="fa fa-fw fa-trash text-danger"></i>
                    </div>
                    <div class="flex-grow-1 fs-sm">
                      <div class="fw-semibold">Project deleted</div>
                      <div>Line Icon Set</div>
                      <small class="text-muted">4 hours ago</small>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="block block-transparent">
            <div class="block-header block-header-default">
              <h3 class="block-title">Online Friends</h3>
              <div class="block-options">
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                  <i class="si si-refresh"></i>
                </button>
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
              </div>
            </div>
            <div class="block-content">
              <ul class="nav-items mb-0">
                <li>
                  <a class="d-flex py-2" href="javascript:void(0)">
                    <div class="me-3 ms-2 overlay-container overlay-bottom">
                      <img class="img-avatar img-avatar48" src="{{ asset('assets') }}/media/avatars/avatar1.jpg" alt="">
                      <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-success"></span>
                    </div>
                    <div class="flex-grow-1 fs-sm">
                      <div class="fw-semibold">Judy Ford</div>
                      <div class="text-muted">Copywriter</div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="d-flex py-2" href="javascript:void(0)">
                    <div class="me-3 ms-2 overlay-container overlay-bottom">
                      <img class="img-avatar img-avatar48" src="{{ asset('assets') }}/media/avatars/avatar9.jpg" alt="">
                      <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-success"></span>
                    </div>
                    <div class="flex-grow-1 fs-sm">
                      <div class="fw-semibold">Henry Harrison</div>
                      <div class="text-muted">Web Developer</div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="d-flex py-2" href="javascript:void(0)">
                    <div class="me-3 ms-2 overlay-container overlay-bottom">
                      <img class="img-avatar img-avatar48" src="{{ asset('assets') }}/media/avatars/avatar5.jpg" alt="">
                      <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-success"></span>
                    </div>
                    <div class="flex-grow-1 fs-sm">
                      <div class="fw-semibold">Megan Fuller</div>
                      <div class="text-muted">Web Designer</div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="d-flex py-2" href="javascript:void(0)">
                    <div class="me-3 ms-2 overlay-container overlay-bottom">
                      <img class="img-avatar img-avatar48" src="{{ asset('assets') }}/media/avatars/avatar4.jpg" alt="">
                      <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-warning"></span>
                    </div>
                    <div class="flex-grow-1 fs-sm">
                      <div class="fw-semibold">Sara Fields</div>
                      <div class="text-muted">Photographer</div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="d-flex py-2" href="javascript:void(0)">
                    <div class="me-3 ms-2 overlay-container overlay-bottom">
                      <img class="img-avatar img-avatar48" src="{{ asset('assets') }}/media/avatars/avatar12.jpg" alt="">
                      <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-warning"></span>
                    </div>
                    <div class="flex-grow-1 fs-sm">
                      <div class="fw-semibold">Ryan Flores</div>
                      <div class="text-muted">Graphic Designer</div>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="block block-transparent mb-0">
            <div class="block-header block-header-default">
              <h3 class="block-title">Quick Settings</h3>
              <div class="block-options">
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
              </div>
            </div>
            <div class="block-content">
              <form action="be_pages_dashboard.html" method="POST" onsubmit="return false;">
                <div class="mb-4">
                  <p class="fs-sm fw-semibold mb-2">
                    Online Status
                  </p>
                  <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" value="" id="so-settings-check1" name="so-settings-check1" checked="">
                    <label class="form-check-label fs-sm" for="so-settings-check1">Show your status to all</label>
                  </div>
                </div>
                <div class="mb-4">
                  <p class="fs-sm fw-semibold mb-2">
                    Auto Updates
                  </p>
                  <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" value="" id="so-settings-check2" name="so-settings-check2" checked="">
                    <label class="form-check-label fs-sm" for="so-settings-check2">Keep up to date</label>
                  </div>
                </div>
                <div class="mb-4">
                  <p class="fs-sm fw-semibold mb-1">
                    Application Alerts
                  </p>
                  <div class="space-y-2">
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" value="" id="so-settings-check3" name="so-settings-check3" checked="">
                      <label class="form-check-label fs-sm" for="so-settings-check3">Email Notifications</label>
                    </div>
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" value="" id="so-settings-check4" name="so-settings-check4" checked="">
                      <label class="form-check-label fs-sm" for="so-settings-check4">SMS Notifications</label>
                    </div>
                  </div>
                </div>
                <div class="mb-4">
                  <p class="fs-sm fw-semibold mb-1">
                    API
                  </p>
                  <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" value="" id="so-settings-check5" name="so-settings-check5" checked="">
                    <label class="form-check-label fs-sm" for="so-settings-check5">Enable access</label>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="tab-pane pull-x fade fade-right" id="so-sales" role="tabpanel" aria-labelledby="so-sales-tab" tabindex="0">
          <div class="block block-transparent mb-0">
            <div class="block-content">
              <div class="row items-push pull-t">
                <div class="col-6">
                  <div class="fs-sm fw-semibold text-uppercase">Sales</div>
                  <a class="fs-lg" href="javascript:void(0)">22.030</a>
                </div>
                <div class="col-6">
                  <div class="fs-sm fw-semibold text-uppercase">Balance</div>
                  <a class="fs-lg" href="javascript:void(0)">$4.589,00</a>
                </div>
              </div>
            </div>
            <div class="block-content block-content-full block-content-sm bg-body-light">
              <div class="row">
                <div class="col-6">
                  <span class="fs-sm fw-semibold text-uppercase">Today</span>
                </div>
                <div class="col-6 text-end">
                  <span class="ext-muted">$996</span>
                </div>
              </div>
            </div>
            <div class="block-content">
              <ul class="nav-items push">
                <li>
                  <a class="text-dark d-flex py-2" href="javascript:void(0)">
                    <div class="flex-shrink-0 me-3 ms-2">
                      <i class="fa fa-fw fa-plus text-success"></i>
                    </div>
                    <div class="flex-grow-1 fs-sm">
                      <div class="fw-semibold">New sale! + $249</div>
                      <small class="text-muted">3 min ago</small>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="text-dark d-flex py-2" href="javascript:void(0)">
                    <div class="flex-shrink-0 me-3 ms-2">
                      <i class="fa fa-fw fa-plus text-success"></i>
                    </div>
                    <div class="flex-grow-1 fs-sm">
                      <div class="fw-semibold">New sale! + $129</div>
                      <small class="text-muted">50 min ago</small>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="text-dark d-flex py-2" href="javascript:void(0)">
                    <div class="flex-shrink-0 me-3 ms-2">
                      <i class="fa fa-fw fa-plus text-success"></i>
                    </div>
                    <div class="flex-grow-1 fs-sm">
                      <div class="fw-semibold">New sale! + $119</div>
                      <small class="text-muted">2 hours ago</small>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="text-dark d-flex py-2" href="javascript:void(0)">
                    <div class="flex-shrink-0 me-3 ms-2">
                      <i class="fa fa-fw fa-plus text-success"></i>
                    </div>
                    <div class="flex-grow-1 fs-sm">
                      <div class="fw-semibold">New sale! + $499</div>
                      <small class="text-muted">3 hours ago</small>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
            <div class="block-content block-content-full block-content-sm bg-body-light">
              <div class="row">
                <div class="col-6">
                  <span class="fs-sm fw-semibold text-uppercase">Yesterday</span>
                </div>
                <div class="col-6 text-end">
                  <span class="text-muted">$765</span>
                </div>
              </div>
            </div>
            <div class="block-content">
              <ul class="nav-items push">
                <li>
                  <a class="text-dark d-flex py-2" href="javascript:void(0)">
                    <div class="flex-shrink-0 me-3 ms-2">
                      <i class="fa fa-fw fa-plus text-success"></i>
                    </div>
                    <div class="flex-grow-1 fs-sm">
                      <div class="fw-semibold">New sale! + $249</div>
                      <small class="text-muted">26 hours ago</small>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="text-dark d-flex py-2" href="javascript:void(0)">
                    <div class="flex-shrink-0 me-3 ms-2">
                      <i class="fa fa-fw fa-minus text-danger"></i>
                    </div>
                    <div class="flex-grow-1 fs-sm">
                      <div class="fw-semibold">Product Purchase - $50</div>
                      <small class="text-muted">28 hours ago</small>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="text-dark d-flex py-2" href="javascript:void(0)">
                    <div class="flex-shrink-0 me-3 ms-2">
                      <i class="fa fa-fw fa-plus text-success"></i>
                    </div>
                    <div class="flex-grow-1 fs-sm">
                      <div class="fw-semibold">New sale! + $119</div>
                      <small class="text-muted">29 hours ago</small>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="text-dark d-flex py-2" href="javascript:void(0)">
                    <div class="flex-shrink-0 me-3 ms-2">
                      <i class="fa fa-fw fa-minus text-danger"></i>
                    </div>
                    <div class="flex-grow-1 fs-sm">
                      <div class="fw-semibold">Paypal Withdrawal - $300</div>
                      <small class="text-muted">37 hours ago</small>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="text-dark d-flex py-2" href="javascript:void(0)">
                    <div class="flex-shrink-0 me-3 ms-2">
                      <i class="fa fa-fw fa-plus text-success"></i>
                    </div>
                    <div class="flex-grow-1 fs-sm">
                      <div class="fw-semibold">New sale! + $129</div>
                      <small class="text-muted">39 hours ago</small>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="text-dark d-flex py-2" href="javascript:void(0)">
                    <div class="flex-shrink-0 me-3 ms-2">
                      <i class="fa fa-fw fa-plus text-success"></i>
                    </div>
                    <div class="flex-grow-1 fs-sm">
                      <div class="fw-semibold">New sale! + $119</div>
                      <small class="text-muted">45 hours ago</small>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="text-dark d-flex py-2" href="javascript:void(0)">
                    <div class="flex-shrink-0 me-3 ms-2">
                      <i class="fa fa-fw fa-plus text-success"></i>
                    </div>
                    <div class="flex-grow-1 fs-sm">
                      <div class="fw-semibold">New sale! + $499</div>
                      <small class="text-muted">46 hours ago</small>
                    </div>
                  </a>
                </li>
              </ul>
              <div class="text-center">
                <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                  <i class="fa fa-arrow-down opacity-50 me-1"></i> Load More..
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</aside>
  <nav id="sidebar" aria-label="Main Navigation">
  <div class="content-header">
    <a class="fw-semibold text-dual" href="index.html">
      <span class="smini-visible">
        <i class="fa fa-circle-notch text-primary"></i>
      </span>
      <span class="smini-hide fs-5 tracking-wider">OneUI</span>
    </a>
    <div>
      <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="layout" data-action="dark_mode_toggle">
        <i class="far fa-moon"></i>
      </button>
      <div class="dropdown d-inline-block ms-1">
        <button type="button" class="btn btn-sm btn-alt-secondary" id="sidebar-themes-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-brush"></i>
        </button>
        <div class="dropdown-menu dropdown-menu-end fs-sm smini-hide border-0" aria-labelledby="sidebar-themes-dropdown">
          <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="default" href="#">
            <span>Default</span>
            <i class="fa fa-circle text-default"></i>
          </a>
          <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="{{ asset('assets') }}/css/themes/amethyst.min-5.9.css" href="#">
            <span>Amethyst</span>
            <i class="fa fa-circle text-amethyst"></i>
          </a>
          <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="{{ asset('assets') }}/css/themes/city.min-5.9.css" href="#">
            <span>City</span>
            <i class="fa fa-circle text-city"></i>
          </a>
          <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="{{ asset('assets') }}/css/themes/flat.min-5.9.css" href="#">
            <span>Flat</span>
            <i class="fa fa-circle text-flat"></i>
          </a>
          <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="{{ asset('assets') }}/css/themes/modern.min-5.9.css" href="#">
            <span>Modern</span>
            <i class="fa fa-circle text-modern"></i>
          </a>
          <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="{{ asset('assets') }}/css/themes/smooth.min-5.9.css" href="#">
            <span>Smooth</span>
            <i class="fa fa-circle text-smooth"></i>
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item fw-medium" data-toggle="layout" data-action="sidebar_style_light" href="javascript:void(0)">
            <span>Sidebar Light</span>
          </a>
          <a class="dropdown-item fw-medium" data-toggle="layout" data-action="sidebar_style_dark" href="javascript:void(0)">
            <span>Sidebar Dark</span>
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item fw-medium" data-toggle="layout" data-action="header_style_light" href="javascript:void(0)">
            <span>Header Light</span>
          </a>
          <a class="dropdown-item fw-medium" data-toggle="layout" data-action="header_style_dark" href="javascript:void(0)">
            <span>Header Dark</span>
          </a>
        </div>
      </div>
      <a class="d-lg-none btn btn-sm btn-alt-secondary ms-1" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
        <i class="fa fa-fw fa-times"></i>
      </a>
    </div>
  </div>
  <div class="js-sidebar-scroll">
    <div class="content-side">
      <ul class="nav-main">
        <li class="nav-main-item">
<a class="nav-main-link active" href="be_pages_dashboard.html">
<i class="nav-main-link-icon si si-speedometer"></i>
<span class="nav-main-link-name">Dashboard</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
<i class="nav-main-link-icon si si-layers"></i>
<span class="nav-main-link-name">Page Packs</span>
</a>
<ul class="nav-main-submenu">
<li class="nav-main-item">
<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
<i class="nav-main-link-icon si si-bag"></i>
<span class="nav-main-link-name">e-Commerce</span>
</a>
<ul class="nav-main-submenu">
<li class="nav-main-item">
<a class="nav-main-link" href="be_pages_ecom_dashboard.html">
<span class="nav-main-link-name">Dashboard</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_pages_ecom_orders.html">
<span class="nav-main-link-name">Orders</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_pages_ecom_order.html">
<span class="nav-main-link-name">Order</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_pages_ecom_products.html">
<span class="nav-main-link-name">Products</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_pages_ecom_product_edit.html">
<span class="nav-main-link-name">Product Edit</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_pages_ecom_customer.html">
<span class="nav-main-link-name">Customer</span>
</a>
</li>
</ul>
</li>
<li class="nav-main-item">
<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
<i class="nav-main-link-icon si si-handbag"></i>
<span class="nav-main-link-name">e-Commerce Store</span>
</a>
<ul class="nav-main-submenu">
<li class="nav-main-item">
<a class="nav-main-link" href="be_pages_ecom_store_home.html">
<span class="nav-main-link-name">Home</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_pages_ecom_store_search.html">
<span class="nav-main-link-name">Search Results</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_pages_ecom_store_products.html">
<span class="nav-main-link-name">Products List</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_pages_ecom_store_product.html">
<span class="nav-main-link-name">Product Page</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_pages_ecom_store_checkout.html">
<span class="nav-main-link-name">Checkout</span>
</a>
</li>
</ul>
</li>
<li class="nav-main-item">
<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
<i class="nav-main-link-icon si si-pencil"></i>
<span class="nav-main-link-name">Blog</span>
</a>
<ul class="nav-main-submenu">
<li class="nav-main-item">
<a class="nav-main-link" href="be_pages_blog_classic.html">
<span class="nav-main-link-name">Classic</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_pages_blog_list.html">
<span class="nav-main-link-name">List</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_pages_blog_grid.html">
<span class="nav-main-link-name">Grid</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_pages_blog_story.html">
<span class="nav-main-link-name">Story</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_pages_blog_story_cover.html">
<span class="nav-main-link-name">Story Cover</span>
</a>
</li>
</ul>
</li>
<li class="nav-main-item">
<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
<i class="nav-main-link-icon si si-graduation"></i>
<span class="nav-main-link-name">e-Learning</span>
</a>
<ul class="nav-main-submenu">
<li class="nav-main-item">
<a class="nav-main-link" href="be_pages_elearning_courses.html">
<span class="nav-main-link-name">Courses</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_pages_elearning_course.html">
<span class="nav-main-link-name">Course</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_pages_elearning_lesson.html">
<span class="nav-main-link-name">Lesson</span>
</a>
</li>
</ul>
</li>
<li class="nav-main-item">
<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
<i class="nav-main-link-icon si si-bubbles"></i>
<span class="nav-main-link-name">Forum</span>
</a>
<ul class="nav-main-submenu">
<li class="nav-main-item">
<a class="nav-main-link" href="be_pages_forum_categories.html">
<span class="nav-main-link-name">Categories</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_pages_forum_topics.html">
<span class="nav-main-link-name">Topics</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_pages_forum_discussion.html">
<span class="nav-main-link-name">Discussion</span>
</a>
</li>
</ul>
</li>
<li class="nav-main-item">
<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
<i class="nav-main-link-icon si si-magnet"></i>
<span class="nav-main-link-name">Boxed Backend</span>
</a>
<ul class="nav-main-submenu">
<li class="nav-main-item">
<a class="nav-main-link" href="bd_dashboard.html">
<span class="nav-main-link-name">Dashboard</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="bd_search.html">
<span class="nav-main-link-name">Search</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="bd_simple_1.html">
<span class="nav-main-link-name">Simple 1</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="bd_simple_2.html">
<span class="nav-main-link-name">Simple 2</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="bd_image_1.html">
<span class="nav-main-link-name">Image 1</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="bd_image_2.html">
<span class="nav-main-link-name">Image 2</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="bd_video_1.html">
<span class="nav-main-link-name">Video 1</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="bd_video_2.html">
<span class="nav-main-link-name">Video 2</span>
</a>
</li>
</ul>
</li>
</ul>
</li>
<li class="nav-main-heading">User Interface</li>
<li class="nav-main-item">
<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
<i class="nav-main-link-icon si si-energy"></i>
<span class="nav-main-link-name">Blocks</span>
</a>
<ul class="nav-main-submenu">
<li class="nav-main-item">
<a class="nav-main-link" href="be_blocks_styles.html">
<span class="nav-main-link-name">Styles</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_blocks_options.html">
<span class="nav-main-link-name">Options</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_blocks_forms.html">
<span class="nav-main-link-name">Forms</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_blocks_themed.html">
<span class="nav-main-link-name">Themed</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_blocks_api.html">
<span class="nav-main-link-name">API</span>
</a>
</li>
</ul>
</li>
<li class="nav-main-item">
<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
<i class="nav-main-link-icon si si-trophy"></i>
<span class="nav-main-link-name">Widgets</span>
</a>
<ul class="nav-main-submenu">
<li class="nav-main-item">
<a class="nav-main-link" href="be_widgets_tiles.html">
<span class="nav-main-link-name">Tiles</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_widgets_users.html">
<span class="nav-main-link-name">Users</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_widgets_stats.html">
<span class="nav-main-link-name">Statistics</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_widgets_blog.html">
<span class="nav-main-link-name">Blog</span>
</a>
</li>
</ul>
</li>
<li class="nav-main-item">
<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
<i class="nav-main-link-icon si si-badge"></i>
<span class="nav-main-link-name">Elements</span>
</a>
<ul class="nav-main-submenu">
<li class="nav-main-item">
<a class="nav-main-link" href="be_ui_grid.html">
<span class="nav-main-link-name">Grid</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_ui_typography.html">
<span class="nav-main-link-name">Typography</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_ui_icons.html">
<span class="nav-main-link-name">Icons</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_ui_buttons.html">
<span class="nav-main-link-name">Buttons</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_ui_buttons_groups.html">
<span class="nav-main-link-name">Button Groups</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_ui_dropdowns.html">
<span class="nav-main-link-name">Dropdowns</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_ui_tabs.html">
<span class="nav-main-link-name">Tabs</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_ui_navigation.html">
<span class="nav-main-link-name">Navigation</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_ui_navigation_horizontal.html">
<span class="nav-main-link-name">Horizontal Navigation</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_ui_mega_menu.html">
<span class="nav-main-link-name">Mega Menu</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_ui_progress.html">
<span class="nav-main-link-name">Progress</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_ui_alerts.html">
<span class="nav-main-link-name">Alerts</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_ui_tooltips.html">
<span class="nav-main-link-name">Tooltips</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_ui_popovers.html">
<span class="nav-main-link-name">Popovers</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_ui_modals.html">
<span class="nav-main-link-name">Modals</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_ui_images.html">
<span class="nav-main-link-name">Images Overlay</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_ui_timeline.html">
<span class="nav-main-link-name">Timeline</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_ui_ribbons.html">
<span class="nav-main-link-name">Ribbons</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_ui_steps.html">
<span class="nav-main-link-name">Steps</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_ui_animations.html">
<span class="nav-main-link-name">Animations</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_ui_color_themes.html">
<span class="nav-main-link-name">Color Themes</span>
</a>
</li>
</ul>
</li>
<li class="nav-main-item">
<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
<i class="nav-main-link-icon si si-grid"></i>
<span class="nav-main-link-name">Tables</span>
</a>
<ul class="nav-main-submenu">
<li class="nav-main-item">
<a class="nav-main-link" href="be_tables_styles.html">
<span class="nav-main-link-name">Styles</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_tables_responsive.html">
<span class="nav-main-link-name">Responsive</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_tables_helpers.html">
<span class="nav-main-link-name">Helpers</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_tables_datatables.html">
<span class="nav-main-link-name">DataTables</span>
</a>
</li>
</ul>
</li>
<li class="nav-main-item">
<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
<i class="nav-main-link-icon si si-note"></i>
<span class="nav-main-link-name">Forms</span>
</a>
<ul class="nav-main-submenu">
<li class="nav-main-item">
<a class="nav-main-link" href="be_forms_elements.html">
<span class="nav-main-link-name">Elements</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_forms_layouts.html">
<span class="nav-main-link-name">Layouts</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_forms_input_groups.html">
<span class="nav-main-link-name">Input Groups</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_forms_plugins.html">
<span class="nav-main-link-name">Plugins</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_forms_editors.html">
<span class="nav-main-link-name">Editors</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
<span class="nav-main-link-name">CKEditor 5</span>
</a>
<ul class="nav-main-submenu">
<li class="nav-main-item">
<a class="nav-main-link" href="be_forms_ckeditor5_classic.html">
<span class="nav-main-link-name">Classic</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_forms_ckeditor5_inline.html">
<span class="nav-main-link-name">Inline</span>
</a>
</li>
</ul>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_forms_validation.html">
<span class="nav-main-link-name">Validation</span>
</a>
</li>
</ul>
</li>
<li class="nav-main-heading">Develop</li>
<li class="nav-main-item">
<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
<i class="nav-main-link-icon si si-wrench"></i>
<span class="nav-main-link-name">Components</span>
</a>
<ul class="nav-main-submenu">
<li class="nav-main-item">
<a class="nav-main-link" href="be_comp_loaders.html">
<span class="nav-main-link-name">Loaders</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_comp_image_cropper.html">
<span class="nav-main-link-name">Image Cropper</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_comp_appear.html">
<span class="nav-main-link-name">Appear</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_comp_charts.html">
<span class="nav-main-link-name">Charts</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_comp_calendar.html">
<span class="nav-main-link-name">Calendar</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_comp_sliders.html">
<span class="nav-main-link-name">Sliders</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_comp_carousel.html">
<span class="nav-main-link-name">Carousel</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_comp_offcanvas.html">
<span class="nav-main-link-name">Offcanvas</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_comp_syntax_highlighting.html">
<span class="nav-main-link-name">Syntax Highlighting</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_comp_rating.html">
<span class="nav-main-link-name">Rating</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_comp_maps_vector.html">
<span class="nav-main-link-name">Vector Maps</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_comp_dialogs.html">
<span class="nav-main-link-name">Dialogs</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_comp_notifications.html">
<span class="nav-main-link-name">Notifications</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_comp_gallery.html">
<span class="nav-main-link-name">Gallery</span>
</a>
</li>
</ul>
</li>
<li class="nav-main-item">
<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
<i class="nav-main-link-icon si si-magic-wand"></i>
<span class="nav-main-link-name">Layout</span>
</a>
<ul class="nav-main-submenu">
<li class="nav-main-item">
<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
<span class="nav-main-link-name">Page</span>
</a>
<ul class="nav-main-submenu">
<li class="nav-main-item">
<a class="nav-main-link" href="be_layout_page_default.html">
<span class="nav-main-link-name">Default</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_layout_page_flipped.html">
<span class="nav-main-link-name">Flipped</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_layout_page_native_scrolling.html">
<span class="nav-main-link-name">Native Scrolling</span>
</a>
</li>
</ul>
</li>
<li class="nav-main-item">
<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
<span class="nav-main-link-name">Dark Mode</span>
</a>
<ul class="nav-main-submenu">
<li class="nav-main-item">
<a class="nav-main-link" href="be_layout_dark_mode_on.html">
<span class="nav-main-link-name">On</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_layout_dark_mode_off.html">
<span class="nav-main-link-name">Off</span>
</a>
</li>
</ul>
</li>
<li class="nav-main-item">
<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
<span class="nav-main-link-name">Main Content</span>
</a>
<ul class="nav-main-submenu">
<li class="nav-main-item">
<a class="nav-main-link" href="be_layout_content_main_full_width.html">
<span class="nav-main-link-name">Full Width</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_layout_content_main_narrow.html">
<span class="nav-main-link-name">Narrow</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_layout_content_main_boxed.html">
<span class="nav-main-link-name">Boxed</span>
</a>
</li>
</ul>
</li>
<li class="nav-main-item">
<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
<span class="nav-main-link-name">Header</span>
</a>
<ul class="nav-main-submenu">
<li class="nav-main-heading">Fixed</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_layout_header_fixed_light.html">
<span class="nav-main-link-name">Light</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_layout_header_fixed_dark.html">
<span class="nav-main-link-name">Dark</span>
</a>
</li>
<li class="nav-main-heading">Static</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_layout_header_static_light.html">
<span class="nav-main-link-name">Light</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_layout_header_static_dark.html">
<span class="nav-main-link-name">Dark</span>
</a>
</li>
</ul>
</li>
<li class="nav-main-item">
<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
<span class="nav-main-link-name">Sidebar</span>
</a>
<ul class="nav-main-submenu">
<li class="nav-main-item">
<a class="nav-main-link" href="be_layout_sidebar_mini.html">
<span class="nav-main-link-name">Mini</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_layout_sidebar_light.html">
<span class="nav-main-link-name">Light</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_layout_sidebar_dark.html">
<span class="nav-main-link-name">Dark</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_layout_sidebar_hidden.html">
<span class="nav-main-link-name">Hidden</span>
</a>
</li>
</ul>
</li>
<li class="nav-main-item">
<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
<span class="nav-main-link-name">Side Overlay</span>
</a>
<ul class="nav-main-submenu">
<li class="nav-main-item">
<a class="nav-main-link" href="be_layout_side_overlay_visible.html">
<span class="nav-main-link-name">Visible</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_layout_side_overlay_mode_hover.html">
<span class="nav-main-link-name">Hover Mode</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_layout_side_overlay_no_page_overlay.html">
<span class="nav-main-link-name">No Page Overlay</span>
</a>
</li>
</ul>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_layout_api.html">
<span class="nav-main-link-name">API</span>
</a>
</li>
</ul>
</li>
<li class="nav-main-item">
<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
<i class="nav-main-link-icon si si-puzzle"></i>
<span class="nav-main-link-name">Multi Level Menu</span>
</a>
<ul class="nav-main-submenu">
<li class="nav-main-item">
<a class="nav-main-link" href="#">
<span class="nav-main-link-name">Link 1-1</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="#">
<span class="nav-main-link-name">Link 1-2</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
<span class="nav-main-link-name">Sub Level 2</span>
</a>
<ul class="nav-main-submenu">
<li class="nav-main-item">
<a class="nav-main-link" href="#">
<span class="nav-main-link-name">Link 2-1</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="#">
<span class="nav-main-link-name">Link 2-2</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
<span class="nav-main-link-name">Sub Level 3</span>
</a>
<ul class="nav-main-submenu">
<li class="nav-main-item">
<a class="nav-main-link" href="#">
<span class="nav-main-link-name">Link 3-1</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="#">
<span class="nav-main-link-name">Link 3-2</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
<span class="nav-main-link-name">Sub Level 4</span>
</a>
<ul class="nav-main-submenu">
<li class="nav-main-item">
<a class="nav-main-link" href="#">
<span class="nav-main-link-name">Link 4-1</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="#">
<span class="nav-main-link-name">Link 4-2</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
<span class="nav-main-link-name">Sub Level 5</span>
</a>
<ul class="nav-main-submenu">
<li class="nav-main-item">
<a class="nav-main-link" href="#">
<span class="nav-main-link-name">Link 5-1</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="#">
<span class="nav-main-link-name">Link 5-2</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
<span class="nav-main-link-name">Sub Level 6</span>
</a>
<ul class="nav-main-submenu">
<li class="nav-main-item">
<a class="nav-main-link" href="#">
<span class="nav-main-link-name">Link 6-1</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="#">
<span class="nav-main-link-name">Link 6-2</span>
</a>
</li>
</ul>
</li>
</ul>
</li>
</ul>
</li>
</ul>
</li>
</ul>
</li>
</ul>
</li>
<li class="nav-main-heading">Pages</li>
<li class="nav-main-item">
<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
<i class="nav-main-link-icon si si-layers"></i>
<span class="nav-main-link-name">Generic</span>
</a>
<ul class="nav-main-submenu">
<li class="nav-main-item">
<a class="nav-main-link" href="be_pages_generic_blank.html">
<span class="nav-main-link-name">Blank</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_pages_generic_blank_block.html">
<span class="nav-main-link-name">Blank with Block</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_pages_generic_search.html">
<span class="nav-main-link-name">Search</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_pages_generic_profile.html">
<span class="nav-main-link-name">Profile</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_pages_generic_profile_edit.html">
<span class="nav-main-link-name">Profile Edit</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_pages_generic_inbox.html">
<span class="nav-main-link-name">Inbox</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_pages_generic_invoice.html">
<span class="nav-main-link-name">Invoice</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_pages_generic_pricing_plans.html">
<span class="nav-main-link-name">Pricing Plans</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_pages_generic_faq.html">
<span class="nav-main-link-name">FAQ</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_pages_generic_team.html">
<span class="nav-main-link-name">Team</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_pages_generic_contact.html">
<span class="nav-main-link-name">Contact</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_pages_generic_support.html">
<span class="nav-main-link-name">Support</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_pages_generic_upgrade_plan.html">
<span class="nav-main-link-name">Upgrade Plan</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_pages_sidebar_mini_nav.html">
<span class="nav-main-link-name">Sidebar with Mini Nav</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_pages_dashboard_v1.html">
<span class="nav-main-link-name">Dashboard v1</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="op_maintenance.html">
<span class="nav-main-link-name">Maintenance</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="op_status.html">
<span class="nav-main-link-name">Status</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="op_installation.html">
<span class="nav-main-link-name">Installation</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="op_checkout.html">
<span class="nav-main-link-name">Checkout</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="op_coming_soon.html">
<span class="nav-main-link-name">Coming Soon</span>
</a>
</li>
</ul>
</li>
<li class="nav-main-item">
<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
<i class="nav-main-link-icon si si-lock"></i>
<span class="nav-main-link-name">Authentication</span>
</a>
<ul class="nav-main-submenu">
<li class="nav-main-item">
<a class="nav-main-link" href="be_pages_auth_all.html">
<span class="nav-main-link-name">All</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="op_auth_signin.html">
<span class="nav-main-link-name">Sign In</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="op_auth_signin2.html">
<span class="nav-main-link-name">Sign In 2</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="op_auth_signin3.html">
<span class="nav-main-link-name">Sign In 3</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="op_auth_signup.html">
<span class="nav-main-link-name">Sign Up</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="op_auth_signup2.html">
<span class="nav-main-link-name">Sign Up 2</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="op_auth_signup3.html">
<span class="nav-main-link-name">Sign Up 3</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="op_auth_lock.html">
<span class="nav-main-link-name">Lock Screen</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="op_auth_lock2.html">
<span class="nav-main-link-name">Lock Screen 2</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="op_auth_lock3.html">
<span class="nav-main-link-name">Lock Screen 3</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="op_auth_reminder.html">
<span class="nav-main-link-name">Pass Reminder</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="op_auth_reminder2.html">
<span class="nav-main-link-name">Pass Reminder 2</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="op_auth_reminder3.html">
<span class="nav-main-link-name">Pass Reminder 3</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="op_auth_two_factor.html">
<span class="nav-main-link-name">Two Factor</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="op_auth_two_factor2.html">
<span class="nav-main-link-name">Two Factor 2</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="op_auth_two_factor3.html">
<span class="nav-main-link-name">Two Factor 3</span>
</a>
</li>
</ul>
</li>
<li class="nav-main-item">
<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
<i class="nav-main-link-icon si si-fire"></i>
<span class="nav-main-link-name">Error Pages</span>
</a>
<ul class="nav-main-submenu">
<li class="nav-main-item">
<a class="nav-main-link" href="be_pages_error_all.html">
<span class="nav-main-link-name">All</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="op_error_400.html">
<span class="nav-main-link-name">400</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="op_error_401.html">
<span class="nav-main-link-name">401</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="op_error_403.html">
<span class="nav-main-link-name">403</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="op_error_404.html">
<span class="nav-main-link-name">404</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="op_error_500.html">
<span class="nav-main-link-name">500</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="op_error_503.html">
<span class="nav-main-link-name">503</span>
</a>
</li>
</ul>
</li>
<li class="nav-main-item">
<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
<i class="nav-main-link-icon si si-cup"></i>
<span class="nav-main-link-name">Get Started</span>
</a>
<ul class="nav-main-submenu">
<li class="nav-main-item">
<a class="nav-main-link" href="gs_backend.html">
<span class="nav-main-link-name">Backend</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="gs_backend_boxed.html">
<span class="nav-main-link-name">Backend Boxed</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="gs_landing.html">
<span class="nav-main-link-name">Landing</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="gs_rtl_backend.html">
<span class="nav-main-link-name">RTL Backend</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="gs_rtl_backend_boxed.html">
<span class="nav-main-link-name">RTL Backend Boxed</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="gs_rtl_landing.html">
<span class="nav-main-link-name">RTL Landing</span>
</a>
</li>
</ul>
</li>
      </ul>
    </div>
  </div>
</nav>
  <header id="page-header">
  <div class="content-header">
    <div class="d-flex align-items-center">
      <button type="button" class="btn btn-sm btn-alt-secondary me-2 d-lg-none" data-toggle="layout" data-action="sidebar_toggle">
        <i class="fa fa-fw fa-bars"></i>
      </button>
      <button type="button" class="btn btn-sm btn-alt-secondary d-md-none" data-toggle="layout" data-action="header_search_on">
        <i class="fa fa-fw fa-search"></i>
      </button>
      <form class="d-none d-md-inline-block" action="be_pages_generic_search.html" method="POST">
        <div class="input-group input-group-sm">
          <input type="text" class="form-control form-control-alt" placeholder="Search.." id="page-header-search-input2" name="page-header-search-input2">
          <span class="input-group-text border-0">
            <i class="fa fa-fw fa-search"></i>
          </span>
        </div>
      </form>
    </div>
    <div class="d-flex align-items-center">
      <div class="dropdown d-inline-block ms-2">
        <button type="button" class="btn btn-sm btn-alt-secondary d-flex align-items-center" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img class="rounded-circle" src="{{ asset('assets') }}/media/avatars/avatar10.jpg" alt="Header Avatar" style="width: 21px;">
          <span class="d-none d-sm-inline-block ms-2">John</span>
          <i class="fa fa-fw fa-angle-down d-none d-sm-inline-block opacity-50 ms-1 mt-1"></i>
        </button>
        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end p-0 border-0" aria-labelledby="page-header-user-dropdown">
          <div class="p-3 text-center bg-body-light border-bottom rounded-top">
            <img class="img-avatar img-avatar48 img-avatar-thumb" src="{{ asset('assets') }}/media/avatars/avatar10.jpg" alt="">
            <p class="mt-2 mb-0 fw-medium">John Smith</p>
            <p class="mb-0 text-muted fs-sm fw-medium">Web Developer</p>
          </div>
          <div class="p-2">
            <a class="dropdown-item d-flex align-items-center justify-content-between" href="be_pages_generic_inbox.html">
              <span class="fs-sm fw-medium">Inbox</span>
              <span class="badge rounded-pill bg-primary ms-2">3</span>
            </a>
            <a class="dropdown-item d-flex align-items-center justify-content-between" href="be_pages_generic_profile.html">
              <span class="fs-sm fw-medium">Profile</span>
              <span class="badge rounded-pill bg-primary ms-2">1</span>
            </a>
            <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
              <span class="fs-sm fw-medium">Settings</span>
            </a>
          </div>
          <div role="separator" class="dropdown-divider m-0"></div>
          <div class="p-2">
            <a class="dropdown-item d-flex align-items-center justify-content-between" href="op_auth_lock.html">
              <span class="fs-sm fw-medium">Lock Account</span>
            </a>
            <a class="dropdown-item d-flex align-items-center justify-content-between" href="op_auth_signin.html">
              <span class="fs-sm fw-medium">Log Out</span>
            </a>
          </div>
        </div>
      </div>
      <div class="dropdown d-inline-block ms-2">
        <button type="button" class="btn btn-sm btn-alt-secondary" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-fw fa-bell"></i>
          <span class="text-primary">•</span>
        </button>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0 border-0 fs-sm" aria-labelledby="page-header-notifications-dropdown">
          <div class="p-2 bg-body-light border-bottom text-center rounded-top">
            <h5 class="dropdown-header text-uppercase">Notifications</h5>
          </div>
          <ul class="nav-items mb-0">
            <li>
              <a class="text-dark d-flex py-2" href="javascript:void(0)">
                <div class="flex-shrink-0 me-2 ms-3">
                  <i class="fa fa-fw fa-check-circle text-success"></i>
                </div>
                <div class="flex-grow-1 pe-2">
                  <div class="fw-semibold">You have a new follower</div>
                  <span class="fw-medium text-muted">15 min ago</span>
                </div>
              </a>
            </li>
            <li>
              <a class="text-dark d-flex py-2" href="javascript:void(0)">
                <div class="flex-shrink-0 me-2 ms-3">
                  <i class="fa fa-fw fa-plus-circle text-primary"></i>
                </div>
                <div class="flex-grow-1 pe-2">
                  <div class="fw-semibold">1 new sale, keep it up</div>
                  <span class="fw-medium text-muted">22 min ago</span>
                </div>
              </a>
            </li>
            <li>
              <a class="text-dark d-flex py-2" href="javascript:void(0)">
                <div class="flex-shrink-0 me-2 ms-3">
                  <i class="fa fa-fw fa-times-circle text-danger"></i>
                </div>
                <div class="flex-grow-1 pe-2">
                  <div class="fw-semibold">Update failed, restart server</div>
                  <span class="fw-medium text-muted">26 min ago</span>
                </div>
              </a>
            </li>
            <li>
              <a class="text-dark d-flex py-2" href="javascript:void(0)">
                <div class="flex-shrink-0 me-2 ms-3">
                  <i class="fa fa-fw fa-plus-circle text-primary"></i>
                </div>
                <div class="flex-grow-1 pe-2">
                  <div class="fw-semibold">2 new sales, keep it up</div>
                  <span class="fw-medium text-muted">33 min ago</span>
                </div>
              </a>
            </li>
            <li>
              <a class="text-dark d-flex py-2" href="javascript:void(0)">
                <div class="flex-shrink-0 me-2 ms-3">
                  <i class="fa fa-fw fa-user-plus text-success"></i>
                </div>
                <div class="flex-grow-1 pe-2">
                  <div class="fw-semibold">You have a new subscriber</div>
                  <span class="fw-medium text-muted">41 min ago</span>
                </div>
              </a>
            </li>
            <li>
              <a class="text-dark d-flex py-2" href="javascript:void(0)">
                <div class="flex-shrink-0 me-2 ms-3">
                  <i class="fa fa-fw fa-check-circle text-success"></i>
                </div>
                <div class="flex-grow-1 pe-2">
                  <div class="fw-semibold">You have a new follower</div>
                  <span class="fw-medium text-muted">42 min ago</span>
                </div>
              </a>
            </li>
          </ul>
          <div class="p-2 border-top text-center">
            <a class="d-inline-block fw-medium" href="javascript:void(0)">
              <i class="fa fa-fw fa-arrow-down me-1 opacity-50"></i> Load More..
            </a>
          </div>
        </div>
      </div>
      <button type="button" class="btn btn-sm btn-alt-secondary ms-2" data-toggle="layout" data-action="side_overlay_toggle">
        <i class="fa fa-fw fa-list-ul fa-flip-horizontal"></i>
      </button>
    </div>
  </div>
  <div id="page-header-search" class="overlay-header bg-body-extra-light">
    <div class="content-header">
      <form class="w-100" action="be_pages_generic_search.html" method="POST">
        <div class="input-group">
          <button type="button" class="btn btn-alt-danger" data-toggle="layout" data-action="header_search_off">
            <i class="fa fa-fw fa-times-circle"></i>
          </button>
          <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
        </div>
      </form>
    </div>
  </div>
  <div id="page-header-loader" class="overlay-header bg-body-extra-light">
    <div class="content-header">
      <div class="w-100 text-center">
        <i class="fa fa-fw fa-circle-notch fa-spin"></i>
      </div>
    </div>
  </div>
</header>

  <main id="main-container">
<div class="content">
  <div class="d-flex flex-column flex-md-row justify-content-md-between align-items-md-center py-2 text-center text-md-start">
    <div class="flex-grow-1 mb-1 mb-md-0">
      <h1 class="h3 fw-bold mb-2">
        Dashboard
      </h1>
      <h2 class="h6 fw-medium fw-medium text-muted mb-0">
        Welcome <a class="fw-semibold" href="be_pages_generic_profile.html">John</a>, everything looks great.
      </h2>
    </div>
    <div class="mt-3 mt-md-0 ms-md-3 space-x-1">
      <a class="btn btn-sm btn-alt-secondary space-x-1" href="be_pages_generic_profile_edit.html">
        <i class="fa fa-cogs opacity-50"></i>
        <span>Settings</span>
      </a>
      <div class="dropdown d-inline-block">
        <button type="button" class="btn btn-sm btn-alt-secondary space-x-1" id="dropdown-analytics-overview" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-fw fa-calendar-alt opacity-50"></i>
          <span>All time</span>
          <i class="fa fa-fw fa-angle-down"></i>
        </button>
        <div class="dropdown-menu dropdown-menu-end fs-sm" aria-labelledby="dropdown-analytics-overview">
          <a class="dropdown-item fw-medium" href="javascript:void(0)">Last 30 days</a>
          <a class="dropdown-item fw-medium" href="javascript:void(0)">Last month</a>
          <a class="dropdown-item fw-medium" href="javascript:void(0)">Last 3 months</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item fw-medium" href="javascript:void(0)">This year</a>
          <a class="dropdown-item fw-medium" href="javascript:void(0)">Last Year</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item fw-medium d-flex align-items-center justify-content-between" href="javascript:void(0)">
            <span>All time</span>
            <i class="fa fa-check"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="content">
  <div class="row items-push">
    <div class="col-sm-6 col-xxl-3">
      <div class="block block-rounded d-flex flex-column h-100 mb-0">
        <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
          <dl class="mb-0">
            <dt class="fs-3 fw-bold">32</dt>
            <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">Pending Orders</dd>
          </dl>
          <div class="item item-rounded-lg bg-body-light">
            <i class="far fa-gem fs-3 text-primary"></i>
          </div>
        </div>
        <div class="bg-body-light rounded-bottom">
          <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between" href="javascript:void(0)">
            <span>View all orders</span>
            <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
          </a>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-xxl-3">
      <div class="block block-rounded d-flex flex-column h-100 mb-0">
        <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
          <dl class="mb-0">
            <dt class="fs-3 fw-bold">124</dt>
            <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">New Customers</dd>
          </dl>
          <div class="item item-rounded-lg bg-body-light">
            <i class="far fa-user-circle fs-3 text-primary"></i>
          </div>
        </div>
        <div class="bg-body-light rounded-bottom">
          <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between" href="javascript:void(0)">
            <span>View all customers</span>
            <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
          </a>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-xxl-3">
      <div class="block block-rounded d-flex flex-column h-100 mb-0">
        <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
          <dl class="mb-0">
            <dt class="fs-3 fw-bold">45</dt>
            <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">Messages</dd>
          </dl>
          <div class="item item-rounded-lg bg-body-light">
            <i class="far fa-paper-plane fs-3 text-primary"></i>
          </div>
        </div>
        <div class="bg-body-light rounded-bottom">
          <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between" href="javascript:void(0)">
            <span>View all messages</span>
            <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
          </a>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-xxl-3">
      <div class="block block-rounded d-flex flex-column h-100 mb-0">
        <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
          <dl class="mb-0">
            <dt class="fs-3 fw-bold">4.5%</dt>
            <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">Conversion Rate</dd>
          </dl>
          <div class="item item-rounded-lg bg-body-light">
            <i class="fa fa-chart-bar fs-3 text-primary"></i>
          </div>
        </div>
        <div class="bg-body-light rounded-bottom">
          <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between" href="javascript:void(0)">
            <span>View statistics</span>
            <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-xl-8 col-xxl-9 d-flex flex-column">
      <div class="block block-rounded flex-grow-1 d-flex flex-column">
        <div class="block-header block-header-default">
          <h3 class="block-title">Earnings Summary</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
              <i class="si si-refresh"></i>
            </button>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content block-content-full flex-grow-1 d-flex align-items-center">
          <canvas id="js-chartjs-earnings"></canvas>
        </div>
        <div class="block-content bg-body-light">
          <div class="row items-push text-center w-100">
            <div class="col-sm-4">
              <dl class="mb-0">
                <dt class="fs-3 fw-bold d-inline-flex align-items-center space-x-2">
                  <i class="fa fa-caret-up fs-base text-success"></i>
                  <span>2.5%</span>
                </dt>
                <dd class="fs-sm fw-medium text-muted mb-0">Customer Growth</dd>
              </dl>
            </div>
            <div class="col-sm-4">
              <dl class="mb-0">
                <dt class="fs-3 fw-bold d-inline-flex align-items-center space-x-2">
                  <i class="fa fa-caret-up fs-base text-success"></i>
                  <span>3.8%</span>
                </dt>
                <dd class="fs-sm fw-medium text-muted mb-0">Page Views</dd>
              </dl>
            </div>
            <div class="col-sm-4">
              <dl class="mb-0">
                <dt class="fs-3 fw-bold d-inline-flex align-items-center space-x-2">
                  <i class="fa fa-caret-down fs-base text-danger"></i>
                  <span>1.7%</span>
                </dt>
                <dd class="fs-sm fw-medium text-muted mb-0">New Products</dd>
              </dl>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-4 col-xxl-3 d-flex flex-column">
      <div class="row items-push flex-grow-1">
        <div class="col-md-6 col-xl-12">
          <div class="block block-rounded d-flex flex-column h-100 mb-0">
            <div class="block-content flex-grow-1 d-flex justify-content-between">
              <dl class="mb-0">
                <dt class="fs-3 fw-bold">570</dt>
                <dd class="fs-sm fw-medium text-muted mb-0">Total Orders</dd>
              </dl>
              <div>
                <div class="d-inline-block px-2 py-1 rounded-3 fs-xs fw-semibold text-danger bg-danger-light">
                  <i class="fa fa-caret-down me-1"></i>
                  2.2%
                </div>
              </div>
            </div>
            <div class="block-content p-1 text-center overflow-hidden">
              <canvas id="js-chartjs-total-orders" style="height: 90px;"></canvas>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-12">
          <div class="block block-rounded d-flex flex-column h-100 mb-0">
            <div class="block-content flex-grow-1 d-flex justify-content-between">
              <dl class="mb-0">
                <dt class="fs-3 fw-bold">$5,234.21</dt>
                <dd class="fs-sm fw-medium text-muted mb-0">Total Earnings</dd>
              </dl>
              <div>
                <div class="d-inline-block px-2 py-1 rounded-3 fs-xs fw-semibold text-success bg-success-light">
                  <i class="fa fa-caret-up me-1"></i>
                  4.2%
                </div>
              </div>
            </div>
            <div class="block-content p-1 text-center overflow-hidden">
              <canvas id="js-chartjs-total-earnings" style="height: 90px;"></canvas>
            </div>
          </div>
        </div>
        <div class="col-xl-12">
          <div class="block block-rounded d-flex flex-column h-100 mb-0">
            <div class="block-content flex-grow-1 d-flex justify-content-between">
              <dl class="mb-0">
                <dt class="fs-3 fw-bold">264</dt>
                <dd class="fs-sm fw-medium text-muted mb-0">New Customers</dd>
              </dl>
              <div>
                <div class="d-inline-block px-2 py-1 rounded-3 fs-xs fw-semibold text-success bg-success-light">
                  <i class="fa fa-caret-up me-1"></i>
                  9.3%
                </div>
              </div>
            </div>
            <div class="block-content p-1 text-center overflow-hidden">
              <canvas id="js-chartjs-new-customers" style="height: 90px;"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Recent Orders</h3>
      <div class="block-options space-x-1">
        <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="class-toggle" data-target="#one-dashboard-search-orders" data-class="d-none">
          <i class="fa fa-search"></i>
        </button>
        <div class="dropdown d-inline-block">
          <button type="button" class="btn btn-sm btn-alt-secondary" id="dropdown-recent-orders-filters" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-flask"></i>
            Filters
            <i class="fa fa-angle-down ms-1"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-md dropdown-menu-end fs-sm" aria-labelledby="dropdown-recent-orders-filters">
            <a class="dropdown-item fw-medium d-flex align-items-center justify-content-between" href="javascript:void(0)">
              Pending
              <span class="badge bg-primary rounded-pill">20</span>
            </a>
            <a class="dropdown-item fw-medium d-flex align-items-center justify-content-between" href="javascript:void(0)">
              Active
              <span class="badge bg-primary rounded-pill">72</span>
            </a>
            <a class="dropdown-item fw-medium d-flex align-items-center justify-content-between" href="javascript:void(0)">
              Completed
              <span class="badge bg-primary rounded-pill">890</span>
            </a>
            <a class="dropdown-item fw-medium d-flex align-items-center justify-content-between" href="javascript:void(0)">
              All
              <span class="badge bg-primary rounded-pill">997</span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div id="one-dashboard-search-orders" class="block-content border-bottom d-none">
      <form action="be_pages_dashboard.html" method="POST" onsubmit="return false;">
        <div class="push">
          <div class="input-group">
            <input type="text" class="form-control form-control-alt" id="one-ecom-orders-search" name="one-ecom-orders-search" placeholder="Search all orders..">
            <span class="input-group-text bg-body border-0">
              <i class="fa fa-search"></i>
            </span>
          </div>
        </div>
      </form>
    </div>
    <div class="block-content block-content-full">
      <div class="table-responsive">
        <table class="table table-hover table-vcenter">
          <thead>
            <tr>
              <th>Order ID</th>
              <th class="d-none d-xl-table-cell">Customer</th>
              <th>Status</th>
              <th class="d-none d-sm-table-cell text-center">Profit</th>
              <th class="d-none d-sm-table-cell text-end">Created</th>
              <th class="d-none d-sm-table-cell text-end">Value</th>
            </tr>
          </thead>
          <tbody class="fs-sm">
                                      <tr>
                <td>
                  <a class="fw-semibold" href="javascript:void(0)">
                    ORD.00925                  </a>
                  <p class="fs-sm fw-medium text-muted mb-0">Premium</p>
                </td>
                <td class="d-none d-xl-table-cell">
                  <a class="fw-semibold" href="javascript:void(0)">Adam McCoy</a>
                  <p class="fs-sm fw-medium text-muted mb-0">Digital Nomad</p>
                </td>
                <td>
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">Completed</span>
                </td>
                <td class="d-none d-sm-table-cell">
                                    <div class="progress mb-1" style="height: 5px;" role="progressbar" aria-valuenow="4" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar bg-success" style="width: 4%;"></div>
                  </div>
                  <p class="fs-xs fw-semibold mb-0">4%</p>
                </td>
                <td class="d-none d-sm-table-cell fw-semibold text-muted text-end">17 min ago</td>
                <td class="d-none d-sm-table-cell text-end">
                  <strong>$1884,86</strong>
                </td>
              </tr>
                          <tr>
                <td>
                  <a class="fw-semibold" href="javascript:void(0)">
                    ORD.00924                  </a>
                  <p class="fs-sm fw-medium text-muted mb-0">Premium</p>
                </td>
                <td class="d-none d-xl-table-cell">
                  <a class="fw-semibold" href="javascript:void(0)">Carol Ray</a>
                  <p class="fs-sm fw-medium text-muted mb-0">Digital Nomad</p>
                </td>
                <td>
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Pending</span>
                </td>
                <td class="d-none d-sm-table-cell">
                                    <div class="progress mb-1" style="height: 5px;" role="progressbar" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar bg-success" style="width: 22%;"></div>
                  </div>
                  <p class="fs-xs fw-semibold mb-0">22%</p>
                </td>
                <td class="d-none d-sm-table-cell fw-semibold text-muted text-end">24 min ago</td>
                <td class="d-none d-sm-table-cell text-end">
                  <strong>$1184,65</strong>
                </td>
              </tr>
                          <tr>
                <td>
                  <a class="fw-semibold" href="javascript:void(0)">
                    ORD.00923                  </a>
                  <p class="fs-sm fw-medium text-muted mb-0">Premium</p>
                </td>
                <td class="d-none d-xl-table-cell">
                  <a class="fw-semibold" href="javascript:void(0)">Lori Moore</a>
                  <p class="fs-sm fw-medium text-muted mb-0">Photographer</p>
                </td>
                <td>
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">Completed</span>
                </td>
                <td class="d-none d-sm-table-cell">
                                    <div class="progress mb-1" style="height: 5px;" role="progressbar" aria-valuenow="16" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar bg-success" style="width: 16%;"></div>
                  </div>
                  <p class="fs-xs fw-semibold mb-0">16%</p>
                </td>
                <td class="d-none d-sm-table-cell fw-semibold text-muted text-end">16 min ago</td>
                <td class="d-none d-sm-table-cell text-end">
                  <strong>$769,49</strong>
                </td>
              </tr>
                          <tr>
                <td>
                  <a class="fw-semibold" href="javascript:void(0)">
                    ORD.00922                  </a>
                  <p class="fs-sm fw-medium text-muted mb-0">Premium</p>
                </td>
                <td class="d-none d-xl-table-cell">
                  <a class="fw-semibold" href="javascript:void(0)">Judy Ford</a>
                  <p class="fs-sm fw-medium text-muted mb-0">Photographer</p>
                </td>
                <td>
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Active</span>
                </td>
                <td class="d-none d-sm-table-cell">
                                    <div class="progress mb-1" style="height: 5px;" role="progressbar" aria-valuenow="3" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar bg-success" style="width: 3%;"></div>
                  </div>
                  <p class="fs-xs fw-semibold mb-0">3%</p>
                </td>
                <td class="d-none d-sm-table-cell fw-semibold text-muted text-end">23 min ago</td>
                <td class="d-none d-sm-table-cell text-end">
                  <strong>$73,68</strong>
                </td>
              </tr>
                          <tr>
                <td>
                  <a class="fw-semibold" href="javascript:void(0)">
                    ORD.00921                  </a>
                  <p class="fs-sm fw-medium text-muted mb-0">Premium</p>
                </td>
                <td class="d-none d-xl-table-cell">
                  <a class="fw-semibold" href="javascript:void(0)">Brian Stevens</a>
                  <p class="fs-sm fw-medium text-muted mb-0">Digital Nomad</p>
                </td>
                <td>
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Active</span>
                </td>
                <td class="d-none d-sm-table-cell">
                                    <div class="progress mb-1" style="height: 5px;" role="progressbar" aria-valuenow="8" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar bg-success" style="width: 8%;"></div>
                  </div>
                  <p class="fs-xs fw-semibold mb-0">8%</p>
                </td>
                <td class="d-none d-sm-table-cell fw-semibold text-muted text-end">16 min ago</td>
                <td class="d-none d-sm-table-cell text-end">
                  <strong>$1485,87</strong>
                </td>
              </tr>
                          <tr>
                <td>
                  <a class="fw-semibold" href="javascript:void(0)">
                    ORD.00920                  </a>
                  <p class="fs-sm fw-medium text-muted mb-0">Premium</p>
                </td>
                <td class="d-none d-xl-table-cell">
                  <a class="fw-semibold" href="javascript:void(0)">Jeffrey Shaw</a>
                  <p class="fs-sm fw-medium text-muted mb-0">Photographer</p>
                </td>
                <td>
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Pending</span>
                </td>
                <td class="d-none d-sm-table-cell">
                                    <div class="progress mb-1" style="height: 5px;" role="progressbar" aria-valuenow="4" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar bg-success" style="width: 4%;"></div>
                  </div>
                  <p class="fs-xs fw-semibold mb-0">4%</p>
                </td>
                <td class="d-none d-sm-table-cell fw-semibold text-muted text-end">9 min ago</td>
                <td class="d-none d-sm-table-cell text-end">
                  <strong>$1470,30</strong>
                </td>
              </tr>
                          <tr>
                <td>
                  <a class="fw-semibold" href="javascript:void(0)">
                    ORD.00919                  </a>
                  <p class="fs-sm fw-medium text-muted mb-0">Premium</p>
                </td>
                <td class="d-none d-xl-table-cell">
                  <a class="fw-semibold" href="javascript:void(0)">Andrea Gardner</a>
                  <p class="fs-sm fw-medium text-muted mb-0">Application Manager</p>
                </td>
                <td>
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">Completed</span>
                </td>
                <td class="d-none d-sm-table-cell">
                                    <div class="progress mb-1" style="height: 5px;" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar bg-success" style="width: 20%;"></div>
                  </div>
                  <p class="fs-xs fw-semibold mb-0">20%</p>
                </td>
                <td class="d-none d-sm-table-cell fw-semibold text-muted text-end">28 min ago</td>
                <td class="d-none d-sm-table-cell text-end">
                  <strong>$275,91</strong>
                </td>
              </tr>
                      </tbody>
        </table>
      </div>
    </div>
    <div class="block-content block-content-full bg-body-light">
      <nav aria-label="Photos Search Navigation">
        <ul class="pagination pagination-sm justify-content-end mb-0">
          <li class="page-item">
            <a class="page-link" href="javascript:void(0)" tabindex="-1" aria-label="Previous">
              Prev
            </a>
          </li>
          <li class="page-item active">
            <a class="page-link" href="javascript:void(0)">1</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="javascript:void(0)">2</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="javascript:void(0)">3</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="javascript:void(0)">4</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="javascript:void(0)" aria-label="Next">
              Next
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
</div>
  </main>


  <footer id="page-footer" class="bg-body-light">
  <div class="content py-3">
    <div class="row fs-sm">
      <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-end">
        Crafted with <i class="fa fa-heart text-danger"></i> by <a class="fw-semibold" href="https://pixelcave.com" target="_blank">pixelcave</a>
      </div>
      <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-start">
        <a class="fw-semibold" href="https://pixelcave.com/products/oneui" target="_blank">OneUI 5.9</a> &copy; <span data-toggle="year-copy"></span>
      </div>
    </div>
  </div>
</footer>
</div>
<script src="{{ asset('assets') }}/js/oneui.app.min-5.9.js"></script>
<script src="{{ asset('assets') }}/js/plugins/chart.js/chart.umd.js"></script>
<script src="{{ asset('assets') }}/js/pages/be_pages_dashboard.min.js"></script>
</body>
</html>

