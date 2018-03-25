<?php header( "refresh:10;url=". base_url() ); ?>
<section id="content">
  <div class="dark" style="background-image: url('<?php echo base_url();?>assets/main/Beach 4.png'); background-position: 100%; height: 650px;">
    <div class="section nobg full-screen nopadding nomargin">
      <div class="container vertical-middle divcenter clearfix">
        <div class="panel panel-default divcenter noradius noborder" style="max-width: 500px; max-height: 600px; background-color: rgba(255,255,255,0.93);">
          <div class="panel-body" style="padding: 40px;">
              <div id="infoMessage" class="alert" style="margin-top: -20px; color:red;"><?php echo $message;?></div>
            <?php 
              $attributes = array('class' => 'nobottommargin', 'id' => 'login-form');
              echo form_open("auth/login", $attributes);
            ?>
              <h4 class="center" data-animate="fadeInDown" style="color: black; margin-top: -20px;">Login to your Account</h4>
              <div class="col_full" style="margin-top: -30px;">
              	<label for="login-form-username">Username:</label>
              	<?php echo form_input($identity);?>
              </div>
              <div class="col_full">
                <label for="login-form-password">Password:</label>
                <?php echo form_input($password);?>
              </div>
            	  <label for="remember">Remember Me:</label>
            	  <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
              <div class="col_full nobottommargin">
                <?php echo form_submit('submit', 'Login', 'class="button button-3d button-black nomargin"');?>
                <a href="forgot_password" class="fright">Forgot your password?</a>
              </div>
            <?php echo form_close();?>
            <div class="line line-sm"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>