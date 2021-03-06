<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                    data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>
    <div class="scrollbar-sidebar ps ps--active-y">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu metismenu">
               
                @foreach ($menusComposer as $item)
                @if ($item["menu_anterior"] != 0)
                @break
                @endif
                @include("theme.$theme.menu-item", ["item" => $item])
                @endforeach
                {{-- <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-rocket"></i>
                        Dashboards
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul class="mm-collapse">
                        <li>
                            <a href="analytics.html">
                                <i class="metismenu-icon">
                                </i>Analytics
                            </a>
                        </li>
                        <li>
                            <a href="commerce.html">
                                <i class="metismenu-icon">
                                </i>Commerce
                            </a>
                        </li>
                        <li>
                            <a href="sales.html">
                                <i class="metismenu-icon">
                                </i>Sales
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="metismenu-icon"></i>
                                Minimal
                                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                            </a>
                            <ul class="mm-collapse">
                                <li>
                                    <a href="minimal-1.html">
                                        <i class="metismenu-icon">
                                        </i>Variation 1
                                    </a>
                                </li>
                                <li>
                                    <a href="minimal-2.html">
                                        <i class="metismenu-icon">
                                        </i>Variation 2
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="crm.html">
                                <i class="metismenu-icon"></i>
                                CRM
                            </a>
                        </li>
                    </ul>
                </li> --}}
            </ul>
        </div>
        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
        </div>
        <div class="ps__rail-y" style="top: 0px; height: 847px; right: 0px;">
            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 507px;"></div>
        </div>
    </div>
</div>