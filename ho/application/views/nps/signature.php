<section id="content">
  <div class="dark" style="background-color: #43BFC7; min-height: 650px;">

    <div class="content-wrap" style="margin-left: 120px; font-size:24px;">
    <?php //die(print_r($this->session)); ?>
      <h2 class="" data-animate="fadeInDown" style="margin-top: 100px">Please Choose your Language</h2>
    <form action="" method="POST" id="form-submit" enctype="multipart/form-data" class="form-div span12" accept-charset="utf-8">
      <div class=" container clearfix">
          <?php echo _lang('signature') ?>
      </div>
      <div class="container clearfix">
        <div id="signature-pad" class="m-signature-pad">
          <div class="m-signature-pad--body">
            <canvas></canvas>
          </div>
          <div class="m-signature-pad--footer">
            <div class="description">Sign above</div>
            <div class="left">
              <button type="button" class="button clear" data-action="clear">Clear</button>
            </div>
          </div>
        </div>
      </div>
      <br>
      <br>
      <input type="submit" name="submit" value="End" class="btn btn-success" class="button save" data-action="save-svg" style="border-color: white; background-color: white; color:#43BFC7 ; text-align: center; float: left; position: absolute; margin-left: 70%; width: 20%; height: 10%; padding-top: ; font-size: 18px;">
      <a href="<?php echo base_url();?>nps/room/<?php echo $id ?>" class="btn btn-success" style="border-color: white; background-color: white; color:#43BFC7 ; text-align: center; float: left; position: absolute; margin-left: 10%; width: 20%; height: 10%; padding-top: 20px; font-size: 18px;">Last</a>
    </form>
  </div>
</section>