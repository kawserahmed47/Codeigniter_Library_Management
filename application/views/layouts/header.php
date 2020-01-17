 <div class="navbar navbar-default" role="navigation">
     <div class="navbar-header custommenu">Library Management</div>

        <div class="navbar-collapse collapse" style="height: 1px;">
          <ul id="main-menu" class="nav navbar-nav navbar-right">
            <li class="dropdown hidden-xs">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <span class="glyphicon glyphicon-user padding-right-small" style="position:relative;top: 3px;"></span>User
                    <i class="fa fa-caret-down"></i>
                </a>

              <ul class="dropdown-menu">
                <li><a href="./">My Account</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Admin Panel</li>
                <li><a href="<?php echo base_url('user/login'); ?>">Login</a></li>             
                <li><a tabindex="-1" href="<?php echo base_url('user/logout'); ?>">Logout</a></li>
              </ul>
            </li>
          </ul>

        </div>
      </div>