
    <!-- Top navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">

        <a target="_blank" class="h4 mb-0 d-none d-lg-inline-block" href="https://github.com/rosoftdeveloper/appseed/tree/master/fullstack-apps/">Sources</a>
        &nbsp;&nbsp; 
        <a target="_blank" class="h4 mb-0 d-none d-lg-inline-block" href="https://www.facebook.com/groups/fullstack.apps.generator/">Support</a>
        &nbsp;&nbsp; 
        <a target="_blank" class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" 
           href="<?php echo _assets('LINK_PRODUCT_ARGON_DASHBOARD') ?>">Get this app in Vue, React</a>
        <!-- Form -->
        <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
          <div class="form-group mb-0">
            <div class="input-group input-group-alternative">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-search"></i></span>
              </div>
              <input class="form-control" placeholder="Search" type="text">
            </div>
          </div>
        </form>
        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">

          <?php if ( _is_auth() ) { ?>

            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <img alt="Image placeholder" src="/<?php echo _static() ?>assets/img/theme/team-4-800x800.jpg">
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold">Jessica Jones</span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome!</h6>
              </div>
              <a href="/profile" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>My profile</span>
              </a>
              <a href="#" class="dropdown-item">
                <i class="ni ni-settings-gear-65"></i>
                <span>Settings</span>
              </a>
              <a href="#" class="dropdown-item">
                <i class="ni ni-calendar-grid-58"></i>
                <span>Activity</span>
              </a>
              <a href="#" class="dropdown-item">
                <i class="ni ni-support-16"></i>
                <span>Support</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="<?php echo base_url('logout') ?>" class="dropdown-item">
                <i class="ni ni-user-run"></i>
                <span>Logout</span>
              </a>
            </div>

          <?php } else { ?>

            <a href="<?php echo base_url('login') ?>" class="dropdown-item">
                <i class="ni ni-user-run"></i>
                <span>Login</span>
              </a>

          <?php } ?>

          </li>
        </ul>
      </div>
    </nav>

