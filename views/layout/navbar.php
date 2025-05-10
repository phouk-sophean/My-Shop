<div class="min-height-300  position-fixed w-100 " style="background-color:rgb(0, 140, 196);"></div>
<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 "
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href=" #" target="_blank">
            <img src="/views/assets/img/apple-icon.png" width="26px" height="26px" class="navbar-brand-img h-100"
                alt="main_logo">
            <span class="ms-1 font-weight-bold">Lim Try</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <div class="collapse navbar-collapse aside_high" id="sidenav-collapse-main">
                    <ul class="navbar-nav ">
                        <li class="nav-item  ">
                            <a class="nav-link " href="/">
                                <div
                                    class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                    <i class="material-icons text-dark text-lg">home</i>
                                </div>
                                <span class="nav-link-text ms-1">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/inventory">
                                <div
                                    class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                    <i class="material-icons text-dark text-lg">inventory</i>
                                </div>
                                <span class="nav-link-text ms-1">Inventory</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="/shop" id="salesLink">
                                <span
                                    class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                    <i class="material-icons text-dark text-lg">storefront</i>
                                </span>
                                <span class="nav-link-text ms-1">Shop</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/customers">
                                <div
                                    class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                    <i class="material-icons text-dark text-lg">groups</i>
                                </div>
                                <span class="nav-link-text ms-1">Customer</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/employee/managment">
                                <div
                                    class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                    <i class="material-icons text-dark text-lg">group</i>
                                </div>
                                <span class="nav-link-text ms-1">Employee</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/profile">
                                <div
                                    class="icon icon-shape icon-sm border-radius-md me-2 d-flex align-items-center justify-content-center">
                                    <i class="material-icons text-dark text-lg">manage_accounts</i>
                                </div>
                                <span class="nav-link-text ms-1">Account</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/logout">
                                <div
                                    class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                    <i class="material-icons text-dark text-lg">logout</i>
                                </div>
                                <span class="nav-link-text ms-1">Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
    </div>
</aside>
<main class="main-content position-relative border-radius-lg p-4">
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
        data-scroll="false">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm">
                        <a class="opacity-5 text-white" href="javascript:;">Pages</a>
                    </li>
                    <li class="breadcrumb-item text-sm text-white active" aria-current="page"
                        data-translate="dashboard">Dashboard</li>
                </ol>
                <h6 class="font-weight-bolder text-white mb-0" data-translate="dashboardTitle">Dashboard</h6>
            </nav>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4 d-flex flex-row align-items-center justify-content-center"
                id="navbar">
                <div class="ms-md-auto pe-md-5 d-flex align-items-center">
                    <form id="searchForm" autocomplete="off" class="relative w-full sm:w-1/2 lg:w-1/2 mx-auto">
                        <div class="relative">
                            <input style="width: 500px;" type="search" name="q" id="searchInput"
                                class="form-control border-2 border-gray-100 rounded-lg p-2.8 shadow-md focus:ring-2 focus:ring-blue-500"
                                placeholder="Type here..." required>
                        </div>
                    </form>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <i class="ni ni-world-2 text-white text-sm"></i>
                    <select id="myDropdown" class="text-white bg-transparent border-0 fw-bold">
                        <option value="en">English</option>
                        <option value="km">Khmer</option>
                    </select>
                </div>
            </div>
        </div>
    </nav>
</main>