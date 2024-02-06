<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="/assets/admin/" data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Flipkart Local</title>

  <meta name="description" content="" />

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="/assets/admin/img/images/flipkart.jpg" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

  <!-- Icons. Uncomment required icon fonts -->
  <link rel="stylesheet" href="/assets/admin/vendor/fonts/boxicons.css" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="/assets/admin/vendor/css/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="/assets/admin/vendor/css/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="/assets/admin/css/demo.css" />
  <link rel="stylesheet" href="/assets/admin/css/style.css" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="/assets/admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

  <!-- Page CSS -->

  <!-- Helpers -->
  <script src="/assets/admin/vendor/js/helpers.js"></script>

  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="/assets/admin/js/config.js"></script>
</head>

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Menu -->

      <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
        <div class="app-brand demo">
          <a href="/admin/html/index.html" class="app-brand-link">
            <span class="app-brand-logo demo">
              <img src="/assets/admin/img/images/flipkart.jpg" height="30px" />
            </span>
            <span class="app-brand-text demo menu-text fw-bolder ms-2">Flipkart</span>
          </a>

          <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
          </a>
        </div>

        <div class="menu-inner-shadow"></div>

        <ul class="menu-inner py-1">

          <!-- Layouts
              <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bx-layout"></i>
                  <div data-i18n="Layouts">Layouts</div>
                </a>

                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="/admin/html/layouts-without-menu.html" class="menu-link">
                      <div data-i18n="Without menu">Without menu</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="/admin/html/layouts-without-navbar.html" class="menu-link">
                      <div data-i18n="Without navbar">Without navbar</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="/admin/html/layouts-container.html" class="menu-link">
                      <div data-i18n="Container">Container</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="/admin/html/layouts-fluid.html" class="menu-link">
                      <div data-i18n="Fluid">Fluid</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="/admin/html/layouts-blank.html" class="menu-link">
                      <div data-i18n="Blank">Blank</div>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="menu-header small text-uppercase">
                <span class="menu-header-text">Pages</span>
              </li>
              <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bx-dock-top"></i>
                  <div data-i18n="Account Settings">Account Settings</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="/admin/html/pages-account-settings-account.html" class="menu-link">
                      <div data-i18n="Account">Account</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="/admin/html/pages-account-settings-notifications.html" class="menu-link">
                      <div data-i18n="Notifications">Notifications</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="pages-account-settings-connections.html" class="menu-link">
                      <div data-i18n="Connections">Connections</div>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="menu-item">
                <a href="/admin/html/javascript:void(0);" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
                  <div data-i18n="Authentications">Authentications</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="/admin/html/auth-login-basic.html" class="menu-link" target="_blank">
                      <div data-i18n="Basic">Login</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="/admin/html/auth-register-basic.html" class="menu-link" target="_blank">
                      <div data-i18n="Basic">Register</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="/admin/html/auth-forgot-password-basic.html" class="menu-link" target="_blank">
                      <div data-i18n="Basic">Forgot Password</div>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bx-cube-alt"></i>
                  <div data-i18n="Misc">Misc</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="/admin/html/pages-misc-error.html" class="menu-link">
                      <div data-i18n="Error">Error</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="/admin/html/pages-misc-under-maintenance.html" class="menu-link">
                      <div data-i18n="Under Maintenance">Under Maintenance</div>
                    </a>
                  </li>
                </ul>
              </li> -->


          <!-- Dashboard -->
            <li class="menu-item">
              <a href="/admin/index.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>

          <!-- Components -->
          <li class="menu-header small text-uppercase"><span class="menu-header-text">Components</span></li>
          <!-- Categories -->
          <li class="menu-item">
            <a href="" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-category"></i>
              <div>Categories</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="/admin/add-category.php" class="menu-link">
                  <div>Add Category</div>
                </a>
              </li>
            </ul>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="/admin/category-list.php" class="menu-link">
                  <div>Category List</div>
                </a>
              </li>
            </ul>
          </li>
          <!-- Inventory -->
          <li class="menu-item">
            <a href="/admin/inventory-list.php" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-table"></i>
              <div>Inventory</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="/admin/add-inventory.php" class="menu-link">
                  <div>Add Inventory</div>
                </a>
              </li>
            </ul>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="/admin/inventory-list.php" class="menu-link">
                  <div>Inventory List</div>
                </a>
              </li>
            </ul>
          </li>
          <!-- Discount -->
          <li class="menu-item">
            <a href="/admin/discount-list.php" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bxs-offer"></i>
              <div>Discount</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="/admin/add-discount.php" class="menu-link">
                  <div>Add Discount</div>
                </a>
              </li>
            </ul>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="/admin/discount-list.php" class="menu-link">
                  <div>Discount List</div>
                </a>
              </li>
            </ul>
          </li>
          <!-- Product -->
          <li class="menu-item">
            <a href="/admin/product-list.php" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bxs-package"></i>
              <div>Product</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="/admin/add-product.php" class="menu-link">
                  <div>Add Product</div>
                </a>
              </li>
            </ul>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="/admin/product-list.php" class="menu-link">
                  <div>Product List</div>
                </a>
              </li>
            </ul>
          </li>
          <!-- Product Images -->
          <li class="menu-item">
            <a href="/admin/product-list.php" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bxs-package"></i>
              <div>Product Images</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="/admin/product-images-list.php" class="menu-link">
                  <div>Product Image List</div>
                </a>
              </li>
            </ul>
          </li>
          <!-- Application -->
          <li class="menu-item">
            <a href="/admin/application-list.php" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-table"></i>
              <div>Application </div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="/admin/add-application.php" class="menu-link">
                  <div>Add Application</div>
                </a>
              </li>
            </ul>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="/admin/application-list.php" class="menu-link">
                  <div>Application List</div>
                </a>
              </li>
            </ul>
          </li>
          <!-- Misc -->
          <li class="menu-header small text-uppercase"><span class="menu-header-text">Misc</span></li>
          <li class="menu-item">
            <a href="https://github.com/themeselection/sneat-html-admin-template-free/issues" target="_blank" class="menu-link">
              <i class="menu-icon tf-icons bx bx-support"></i>
              <div data-i18n="Support">Support</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/" target="_blank" class="menu-link">
              <i class="menu-icon tf-icons bx bx-file"></i>
              <div data-i18n="Documentation">Documentation</div>
            </a>
          </li>
        </ul>
      </aside>
      <!-- / Menu -->

      <!-- Layout container -->
      <div class="layout-page">
        <!-- Navbar -->

        <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
          <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
              <i class="bx bx-menu bx-sm"></i>
            </a>
          </div>

          <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            <!-- Search -->
            <div class="navbar-nav align-items-center">
              <div class="nav-item d-flex align-items-center">
                <i class="bx bx-search fs-4 lh-0"></i>
                <input type="text" class="form-control border-0 shadow-none" placeholder="Search..." aria-label="Search..." />
              </div>
            </div>
            <!-- /Search -->

            <ul class="navbar-nav flex-row align-items-center ms-auto">
              <!-- Place this tag where you want the button to render. -->
              <li class="nav-item lh-1 me-3">
                <a class="github-button" href="https://github.com/themeselection/sneat-html-admin-template-free" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star themeselection/sneat-html-admin-template-free on GitHub">Star</a>
              </li>

              <!-- User -->
              <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                  <div class="avatar avatar-online">
                    <img src="/assets/admin/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                    <a class="dropdown-item" href="#">
                      <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                          <div class="avatar avatar-online">
                            <img src="/assets/admin/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          <span class="fw-semibold d-block">John Doe</span>
                          <small class="text-muted">Admin</small>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <div class="dropdown-divider"></div>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
                      <i class="bx bx-user me-2"></i>
                      <span class="align-middle">My Profile</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
                      <i class="bx bx-cog me-2"></i>
                      <span class="align-middle">Settings</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
                      <span class="d-flex align-items-center align-middle">
                        <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                        <span class="flex-grow-1 align-middle">Billing</span>
                        <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                      </span>
                    </a>
                  </li>
                  <li>
                    <div class="dropdown-divider"></div>
                  </li>
                  <li>
                    <a class="dropdown-item" href="auth-login-basic.html">
                      <i class="bx bx-power-off me-2"></i>
                      <span class="align-middle">Log Out</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!--/ User -->
            </ul>
          </div>
        </nav>

        <!-- / Navbar -->

        <!-- Content wrapper -->
        <div class="content-wrapper">