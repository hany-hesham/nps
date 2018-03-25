<section id="slider" class="force-full-screen full-screen">
  <div class="dark" style="background-image: url('<?php echo base_url();?>assets/main/Beach 4.png'); background-position: 100%; min-height: 500px;">
    <div class="section nobg full-screen nopadding nomargin">
      <div class="container vertical-middle divcenter clearfix">
        <div class="panel panel-default divcenter noradius noborder" style="max-width: 500px; max-height: 1000px; background-color: rgba(255,255,255,0.93);">
          <div class="panel-body" style="padding: ">
              <div id="infoMessage" class="alert" style="margin-top: -20px; color:red;"><?php echo $message;?></div>
                              <?php 
                                    $attributes = array('class' => 'nobottommargin', 'id' => '');
                                    echo form_open("auth/create_user", $attributes);
                              ?>
                                    <h4 class="center" style="color: black; margin-top: -40px;">Create User</h4>
                                    <div class="col_full" style="margin-top: -30px;">
                                          <label for="login-form-username">First Name:</label>
                                          <?php echo form_input($first_name);?>
                                    </div>
                                    <div class="col_full" style="margin-top: -20px;">
                                          <label for="login-form-username">Last Name:</label>
                                          <?php echo form_input($last_name);?>
                                    </div>
                                    <div class="col_full" style="margin-top: -20px;">
                                          <label for="login-form-username">Email:</label>
                                          <?php echo form_input($email);?>
                                    </div>
                                    <div class="col_full">
                                          <label for="login-form-password">Password:</label>
                                          <?php echo form_input($password);?>
                                    </div>
                                    <div class="col_full">
                                          <label for="login-form-password">Confirm Password:</label>
                                          <?php echo form_input($password_confirm);?>
                                    </div>
                                    <div class="col_full" style="margin-top: -20px;">
                                          <label for="login-form-username">Admin:</label>
                                          <?php echo form_input($company);?>
                                    </div>
                                    <div class="col_full nobottommargin">
                                          <?php echo form_submit('submit', 'Create User', 'class="button button-3d button-black nomargin"');?>
                                          <a href="<?php echo base_url();?>users" class="button button-3d button-red nomargin">Cancel</a>
                                    </div>
                              <?php echo form_close();?>
                        </div>
        </div>
      </div>
    </div>
  </div>
</section>