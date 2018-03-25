  <header id="header" class="full-header transparent-header real">
    <div id="header-wrap" class="real">
      <div class="container clearfix">
        <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>
        <div id="logo">
          <a href="<?php echo base_url();?>welcome" class="standard-logo" data-dark-logo="<?php echo base_url();?>assets/main/48cee-sunrise-resorts-cruises.png"><img src="<?php echo base_url();?>assets/main/48cee-sunrise-resorts-cruises.png" alt="Canvas Logo"></a>
        </div>
        <nav id="primary-menu" >
          <ul>
            <li>
              <a href="<?php echo base_url();?>auth/logout"><div>Logout</div></a>
            </li>
          </ul>
        </nav>
        <nav id="primary-menu" >
          <ul>
            <li>
              <a href="<?php echo base_url();?>users"><div>Users</div></a>
            </li>
            <li>
              <a href="<?php echo base_url();?>reports"><div>Reports</div></a>
              <ul>
                <li><a href="<?php echo base_url();?>reports/summary"><div><i class="icon-stack"></i>Summary Report</div></a></li>
                <li><a href="<?php echo base_url();?>reports/detail"><div><i class="icon-stack"></i>Detail Report</div></a></li>
              </ul>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </header>