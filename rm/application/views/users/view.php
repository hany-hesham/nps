<section id="content">
  <div class="dark" style="background-color: #43BFC7; min-height: 500px;">
    <div class="content-wrap" style="margin-left: 2%; margin-right: 2%; font-size:24px;">
      <div class="container clearfix">
        <div class="slider-caption slider-caption-center">
          <img src="<?php echo base_url();?>assets/uploads/files/<?php echo $user['ppic'] ?>" alt="Profile Picture" height="100" width="100">          
          <h4 data-animate="fadeInDown"><?php echo $user['username'] ?></h4>
          <p data-animate="fadeInUp" data-delay="400"><?php echo $user['first_name']." ".$user['last_name'] ?></p>
          <?php if ($user['id'] == $this->session->userdata['user_id']) {?>
            <a data-animate="fadeInUp" data-delay="600" href="<?php echo base_url();?>auth/change_password" class="button button-border button-light button-rounded button-large noleftmargin nobottommargin" style="margin-top: 30px;">Change Password</a>
          <?php } ?>
          <a data-animate="fadeInUp" data-delay="800" href="<?php echo base_url();?>users/edit/<?php echo $user['id'] ?>" class="button button-3d button-teal button-large nobottommargin" style="margin: 30px 0 0 10px;">Edit Profile</a>
        </div>
      </div>
    </div>
  </div>
</section>