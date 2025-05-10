<!DOCTYPE html>
<html lang="en">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
<link href="https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-icons.css" rel="stylesheet" />
<link href="https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-svg.css" rel="stylesheet" />
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<script src="views/assets/JavaScript/adminuseraccount/userlist.js" defer></script>
<link rel="stylesheet" href="views/assets/css/adminaccountuser/adminUserList.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link rel="stylesheet" href="views/assets/css/adminprofile/adminprofile.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</link>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="views/assets/JavaScript/customers/customer.js" defer></script>
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<link id="pagestyle" href="/views/assets/css/argon-dashboard.css?v=2.1.0" rel="stylesheet" />
</head>
<body class="g-sidenav-show   bg-gray-100">
    <div class="min-height-300  position-fixed w-100 " style="background-color:rgb(0, 140, 196);"></div>
    <aside
        class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 "
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
    <main class="main-content position-relative border-radius-lg "></main>
    <footer class="footer pt-3  ">
    </footer>
    <script src="/views/assets/js/core/popper.min.js"></script>
    <script src="/views/assets/js/core/bootstrap.min.js"></script>
    <script src="/views/assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="/views/assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="/views/assets/js/argon-dashboard.min.js?v=2.1.0"></script>
    <script src="/views/assets/js/plugins/chartjs.min.js"></script>
    <script src="views/assets/JavaScript/Search/search.js"></script>
    <script src="views/assets/js/inventory/categories.js"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="views/assets/js/argon-dashboard.min.js?v=2.1.0"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>