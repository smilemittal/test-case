@php

$sidebarMenu = app()->make('dashboard.navigation')->getMenuByLocation('sidebar');

@endphp

<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true" data-img="{{ url('assets/dashboard/app-assets/images/backgrounds/02.')}}">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item m-auto">
                <a class="navbar-brand" href="index.html">
                    <img class="brand-logo" alt="Chameleon admin logo" src="{{ url('assets/dashboard/app-assets/images/logo/logo.png')}}" />
                </a>
            </li>

            <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>

            <li class="nav-item">
                <a href="main-menu.html" class="nav-link mainmenu-icon">
                    <img class="brand-logo" alt="" src="app-assets/images/icons/Grid_Icon1.svg" />
                </a>
            </li>
        </ul>
    </div>

    <div class="navigation-background"></div>

    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            @foreach($sidebarMenu->getMenuItems() as $menuItem)
            <li class="nav-item" style="padding-left: 13px;">
                <a href="#">
                    <img src="{{ $menuItem->icon }}" style="height: 50px; width: 50px; ">
                    <span class="menu-title" data-i18n="" style="padding-left: 13px;">{{ $menuItem->title }}</span>
                </a>

                @foreach($menuItem->menus as $subMenu)
                <ul class="menu-content">
                    @foreach($subMenu->getMenuItems() as $submenuItem)
                    <li><a class="menu-item" href="{{$submenuItem->url}}">{{$submenuItem->title}}</a></li>
                    @endforeach
                </ul>
                @endforeach
            </li>
            @endforeach
        </ul>
    </div>
</div>
