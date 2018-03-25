<section id="slider" class="force-full-screen full-screen">
  <div class="dark" style="background-image: url('<?php echo base_url();?>assets/main/Beach 4.png'); background-position: 100%; height: 650px;">
    <div class="section nobg full-screen nopadding nomargin">
      <div class="container vertical-middle divcenter clearfix">
        <div class="panel panel-default divcenter noradius noborder" style="max-width: 500px; max-height: 600px; background-color: rgba(255,255,255,0.93);">
          <div class="panel-body" style="padding: 40px;">
              <div id="infoMessage" class="alert" style="margin-top: -20px; color:red;"><?php echo $message;?></div>
            <?php 
              $attributes = array('class' => 'nobottommargin', 'id' => '');
              echo form_open("auth/change_password", $attributes);
            ?>
              <h4 class="center" data-animate="fadeInDown" style="color: black; margin-top: -20px;">Change Password</h4>
              <div class="col_full" style="margin-top: -30px;">
                  <label for="login-form-username">Old Password:</label>
                  <?php echo form_input($old_password);?>
              </div>
              <div class="col_full">
                <label for="login-form-password">New Password (at least <?php echo $min_password_length;?> characters long):</label>
                <?php echo form_input($new_password);?>
              </div>
              <div class="col_full">
                <label for="login-form-password">Confirm New Password:</label>
                <?php echo form_input($new_password_confirm);?>
              </div>
                    <?php echo form_input($user_id);?>
              <div class="col_full nobottommargin">
                <?php echo form_submit('submit', 'Change', 'class="button button-3d button-black nomargin"');?>
                <a href="/welcome" class="button button-3d button-red nomargin">Cancel</a>
              </div>
            <?php echo form_close();?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>