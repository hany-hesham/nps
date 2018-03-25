<footer id="footer" class="dark real">
  <div class="container real">
    <div class="footer-widgets-wrap clearfix">
      <div class="col_one_third">
        Copyrights &copy; 2017 All Rights Reserved by Sunrise-Resorts
      </div>
      <div class="col_one_third">
        <i class="icon-envelope2"></i> info@sunrise-resorts.com <span class="middot">&middot;</span> <i class="icon-headphones"></i> +202 33032435
      </div>
      <div class="col_one_third col_last">
        <div class="widget clearfix" style="margin-bottom: -20px;">
          <div class="row">
            <?php if ($is_admin) {?>
              <div class="col-md-6 bottommargin-sm">
                <div class="counter counter-small"><span data-from="50" data-to="<?php echo $total_user ?>" data-refresh-interval="80" data-speed="3000" data-comma="true"></span></div>
                <h5 class="nobottommargin">Total Users</h5>
              </div>
            <?php } ?>
            <div class="col-md-6 bottommargin-sm">
              <div class="counter counter-small"><span data-from="100" data-to="<?php echo $total_guest ?>" data-refresh-interval="50" data-speed="2000" data-comma="true"></span></div>
              <h5 class="nobottommargin">Total Participants</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
