<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="{{ route('admin.categories.index') }}" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ asset('theme/admin/assets/images/logo-sm.png') }}" alt="" height="22">
                    </span>
            <span class="logo-lg">
                        <img src="{{ asset('theme/admin/assets/images/logo-dark.png') }}" alt="" height="17">
                    </span>
        </a>
        <!-- Light Logo-->
        <a href="{{ route('admin.categories.index') }}" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ asset('theme/admin/assets/images/logo-sm.png') }}" alt="" height="22">
                    </span>
            <span class="logo-lg">
                        <img src="{{ asset('theme/admin/assets/images/logo-light.png') }}" alt="" height="17">
                    </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
                id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('admin.categories.index') }}">
                        <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Dashboards</span>
                    </a>
                </li> <!-- end Dashboard Menu -->


                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarCatalogues" data-bs-toggle="collapse" role="button"
                       aria-expanded="false" aria-controls="sidebarCatalogues">
                        <i class="ri-layout-3-line"></i>
                        <span data-key="t-layouts">Danh mục sản phẩm</span>

                    </a>
                    <div class="collapse menu-dropdown" id="sidebarCatalogues">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('admin.categories.index') }}" class="nav-link"
                                   data-key="t-horizontal">Danh sách</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.categories.create') }}" class="nav-link"
                                   data-key="t-horizontal">Thêm mới</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarProduct" data-bs-toggle="collapse" role="button"
                       aria-expanded="false" aria-controls="sidebarProduct">
                        <i class="ri-layout-3-line"></i>
                        <span data-key="t-layouts">Sản phẩm</span>

                    </a>
                    <div class="collapse menu-dropdown" id="sidebarProduct">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('admin.products.index') }}" class="nav-link"
                                   data-key="t-horizontal">Danh sách</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.products.create') }}" class="nav-link"
                                   data-key="t-horizontal">Thêm mới</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarProductDetails" data-bs-toggle="collapse" role="button"
                       aria-expanded="false" aria-controls="sidebarProductDetails">
                        <i class="ri-layout-3-line"></i>
                        <span data-key="t-layouts">Product Details</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarProductDetails">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('admin.product_details.index') }}" class="nav-link"
                                   data-key="t-horizontal">Danh sách</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.product_details.create') }}" class="nav-link"
                                   data-key="t-horizontal">Thêm mới</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarColors" data-bs-toggle="collapse" role="button"
                       aria-expanded="false" aria-controls="sidebarColors">
                        <i class="ri-layout-3-line"></i>
                        <span data-key="t-layouts">Colors</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarColors">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('admin.colors.index') }}" class="nav-link"
                                   data-key="t-horizontal">Danh sách</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.colors.create') }}" class="nav-link"
                                   data-key="t-horizontal">Thêm mới</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarSizes" data-bs-toggle="collapse" role="button"
                       aria-expanded="false" aria-controls="sidebarSizes">
                        <i class="ri-layout-3-line"></i>
                        <span data-key="t-layouts">Sizes</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarSizes">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('admin.sizes.index') }}" class="nav-link"
                                   data-key="t-horizontal">Danh sách</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.sizes.create') }}" class="nav-link"
                                   data-key="t-horizontal">Thêm mới</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarFabrics" data-bs-toggle="collapse" role="button"
                       aria-expanded="false" aria-controls="sidebarFabrics">
                        <i class="ri-layout-3-line"></i>
                        <span data-key="t-layouts">Fabrics</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarFabrics">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('admin.fabrics.index') }}" class="nav-link"
                                   data-key="t-horizontal">Danh sách</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.fabrics.create') }}" class="nav-link"
                                   data-key="t-horizontal">Thêm mới</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarImages" data-bs-toggle="collapse" role="button"
                       aria-expanded="false" aria-controls="sidebarImages">
                        <i class="ri-layout-3-line"></i>
                        <span data-key="t-layouts">Images</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarImages">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('admin.images.index') }}" class="nav-link" data-key="t-horizontal">Danh sách</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.images.create') }}" class="nav-link" data-key="t-horizontal">Thêm mới</a>
                            </li>
                        </ul>
                    </div>
                </li>


            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
