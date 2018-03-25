<section id="content">
  <div class="dark" style="background-color: #43BFC7; min-height: 500px;">
    <div class="content-wrap" style="margin-left: 2%; margin-right: 2%; font-size:24px;">
      <form  action="" method="POST" id="form-submit" enctype="multipart/form-data" class="form-div span12" accept-charset="utf-8">
        <div data-animate="fadeInDown" class="container clearfix">
          <?php echo $translation['recommend'] ?>
        </div>
        <?php if(validation_errors() != false): ?>
          <div class="alert alert-danger">
            <?php echo validation_errors(); ?>
          </div>
        <?php endif ?>
        <div class="container clearfix">
          <img src="<?php echo base_url();?>assets/main/YERTZ4.png" style="width: 25%; height: 25%; margin-left: 10%"> 
          <img src="<?php echo base_url();?>assets/main/YERTZ3.png" style="width: 25%; height: 25%; margin-left: 5%" >
          <img src="<?php echo base_url();?>assets/main/YERTZ2.png" style="width: 25%; height: 25%; margin-left: 5%" >
        </div>
        <div class="container clearfix ">
          <ul class="donate-now">
            <li style=" margin-left:-10%"> 
              <input type="radio" id="0" name="recommend" value="0" />
              <label for="0" style="background-color: #F25C5C;">0</label>
            </li>
            <li style=" margin-left: -0.4%">
              <input type="radio" id="1" name="recommend" value="1"/>
              <label for="1" style="background-color: #F25C5C;">1</label>
            </li>
            <li style=" margin-left: -0.4%">
              <input type="radio" id="2" name="recommend" value="2"/>
              <label for="2" style="background-color: #F25C5C;">2</label>
            </li>
            <li style=" margin-left: -0.4%">
              <input type="radio" id="3" name="recommend" value="3"/>
              <label for="3" style="background-color: #F25C5C;">3</label>
            </li>
            <li style=" margin-left: -0.4%">
              <input type="radio" id="4" name="recommend" value="4" />
              <label for="4" style="background-color: #F25C5C;">4</label>
            </li>
            <li style=" margin-left: -0.4%">
              <input type="radio" id="5" name="recommend" value="5" />
              <label for="5" style="background-color: #F25C5C;">5</label>
            </li>
            <li style=" margin-left: -0.4%">
              <input type="radio" id="6" name="recommend" value="6" />
              <label for="6" style="background-color: #F25C5C;">6</label>
            </li>
            <li style=" margin-left: -0.4%">
              <input type="radio" id="7" name="recommend" value="7" />
              <label for="7" style="background-color: #EAEC51;">7</label>
            </li>
            <li style=" margin-left: -0.4%">
              <input type="radio" id="8" name="recommend" value="8" />
              <label for="8" style="background-color: #EAEC51;">8</label>
            </li>
            <li style=" margin-left: -0.4%">
              <input type="radio" id="9" name="recommend" value="9" />
              <label for="9" style="background-color: #5CD853;">9</label>
            </li>
            <li style=" margin-left: -0.4%">
              <input type="radio" id="10" name="recommend" value="10"/>
              <label for="10" style="background-color: #5CD853;">10</label>
            </li>
          </ul>
        </div>
        <br>
        <br>
        <input type="submit" name="submit" value="<?php echo $translation['next'] ?>" class="btn btn-success" style="border-color: white; background-color: white; color:#43BFC7 ; text-align: center; float: left; position: absolute; margin-left: 70%; width: 20%; height: 10%; padding-top: ; font-size: 12px;">
        <a href="<?php echo base_url();?>welcome" class="btn btn-success" style="border-color: white; background-color: white; color:#43BFC7 ; text-align: center; float: left; position: absolute; margin-left: 10%; width: 20%; height: 10%; padding-top: 20px; font-size: 12px;"><?php echo $translation['cancel'] ?></a>
      </form>
    </div>
  </div>
</section>
<script type="text/javascript">
  $(document).ready(function() {
    $('select').togglebutton();
  })
</script>
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>