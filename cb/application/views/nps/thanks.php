<?php header( "refresh:10;url=". base_url() ); ?>
<section id="content">
  <div class="dark" style="background-image: url('<?php echo base_url();?>assets/main/Beach 4.png'); background-position: 100%; min-height: 650px;">
    <div class="content-wrap" style="margin-left: ; font-size:24px;">
      <?php //die(print_r($this->session)); ?>
      <h2 data-animate="fadeInDown" style="margin-top: 100px" class="center"><?php echo $translation['thanks'] ?></h2>
      <a href="<?php echo base_url();?>welcome" class="btn btn-success" style="border-color: white; background-color: white; color:#43BFC7 ; text-align: center; float: right; position: relative; margin-right: 10%; margin-top: -150px; width: 20%; height: 14%; padding-top: ; font-size: 18px;"><?php echo $translation['home'] ?></a>
    </div>
  </div>
</section>