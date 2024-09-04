<?php
$navItems = [
    [
        'title' => 'Dashboard',
        'url' => route('dashboard'),
        'icon' => 'nav-main-link-icon si si-speedometer',
        'active' => Route::is('dashboard'),
    ],
    [
        'title' => 'Artists',
        'url' => route('artists.index'),
        'icon' => 'nav-main-link-icon si si-speedometer',
        'active' => Route::is('artists.*'),
    ],
    [
        'title' => 'Lyricists',
        'url' => route('lyricists.index'),
        'icon' => 'nav-main-link-icon si si-speedometer',
        'active' => Route::is('lyricists.*'),
    ],
    [
        'title' => 'Dedications',
        'url' => route('dedications.index'),
        'icon' => 'nav-main-link-icon si si-speedometer',
        'active' => Route::is('dedications.*'),
    ],
    [
        'title' => 'Tracks',
        'url' => route('tracks.index'),
        'icon' => 'nav-main-link-icon si si-speedometer',
        'active' => Route::is('tracks.*'),
    ],
    [
        'title' => 'Users',
        'url' => route('users.index'),
        'icon' => 'nav-main-link-icon si si-speedometer',
        'active' => Route::is('users.*'),
    ],
];

?>



<nav id="sidebar" aria-label="Main Navigation">
    <div class="content-header">
        <a class="fw-semibold text-dual" href="{{ route('dashboard') }}">
            <span class="smini-visible">
                <i class="fa fa-circle-notch text-primary"></i>
            </span>
            <span class="smini-hide fs-5 tracking-wider">{{ config('meta.title') }}</span>
        </a>
        <div>
            <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="layout"
                data-action="dark_mode_toggle">
                <i class="far fa-moon"></i>
            </button>
            <div class="dropdown d-inline-block ms-1">
                <button type="button" class="btn btn-sm btn-alt-secondary" id="sidebar-themes-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-brush"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end fs-sm smini-hide border-0"
                    aria-labelledby="sidebar-themes-dropdown">
                    <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium"
                        data-toggle="theme" data-theme="default" href="#">
                        <span>Default</span>
                        <i class="fa fa-circle text-default"></i>
                    </a>
                    <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium"
                        data-toggle="theme" data-theme="{{ asset('assets') }}/css/themes/amethyst.min-5.9.css"
                        href="#">
                        <span>Amethyst</span>
                        <i class="fa fa-circle text-amethyst"></i>
                    </a>
                    <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium"
                        data-toggle="theme" data-theme="{{ asset('assets') }}/css/themes/city.min-5.9.css"
                        href="#">
                        <span>City</span>
                        <i class="fa fa-circle text-city"></i>
                    </a>
                    <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium"
                        data-toggle="theme" data-theme="{{ asset('assets') }}/css/themes/flat.min-5.9.css"
                        href="#">
                        <span>Flat</span>
                        <i class="fa fa-circle text-flat"></i>
                    </a>
                    <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium"
                        data-toggle="theme" data-theme="{{ asset('assets') }}/css/themes/modern.min-5.9.css"
                        href="#">
                        <span>Modern</span>
                        <i class="fa fa-circle text-modern"></i>
                    </a>
                    <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium"
                        data-toggle="theme" data-theme="{{ asset('assets') }}/css/themes/smooth.min-5.9.css"
                        href="#">
                        <span>Smooth</span>
                        <i class="fa fa-circle text-smooth"></i>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item fw-medium" data-toggle="layout" data-action="sidebar_style_light"
                        href="javascript:void(0)">
                        <span>Sidebar Light</span>
                    </a>
                    <a class="dropdown-item fw-medium" data-toggle="layout" data-action="sidebar_style_dark"
                        href="javascript:void(0)">
                        <span>Sidebar Dark</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item fw-medium" data-toggle="layout" data-action="header_style_light"
                        href="javascript:void(0)">
                        <span>Header Light</span>
                    </a>
                    <a class="dropdown-item fw-medium" data-toggle="layout" data-action="header_style_dark"
                        href="javascript:void(0)">
                        <span>Header Dark</span>
                    </a>
                </div>
            </div>
            <a class="d-lg-none btn btn-sm btn-alt-secondary ms-1" data-toggle="layout" data-action="sidebar_close"
                href="javascript:void(0)">
                <i class="fa fa-fw fa-times"></i>
            </a>
        </div>
    </div>
    <div class="js-sidebar-scroll">
        <div class="content-side">
            <ul class="nav-main">
                @foreach ($navItems as $nav)
                    <li class="nav-main-item">
                        <a class="nav-main-link {{ $nav['active'] ? 'active' : '' }}" href="{{ $nav['url'] }}">
                            <i class="{{ $nav['icon'] }}"></i>
                            <span class="nav-main-link-name">{{ $nav['title'] }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>
