<section id="content">
  <div class="dark" style="background-color: #43BFC7; min-height: 500px;">
    <div class="content-wrap" style="margin-left: 2%; margin-right: 2%; font-size:24px;">
      <?php if ($is_admin) {?>
        <a href="<?php echo base_url();?>auth/create_user" class="button button-3d button-white nomargin" style="color: #43BFC7; text-align: center; font-size: 14px;">Create New User</a>
      <?php } ?>
      <br>
      <br>
      <div class="container clearfix">
          <table class="table table-bordered table-striped" style="clear: both; text-align: center;">
            <tbody>
              <tr>
                <td width="5%">
                  #
                </td>
                <td width="20%">
                  Username
                </td>
                <td width="20%">
                  Email
                </td>
                <td width="15%">
                  Admin
                </td>
                <td width="10%">
                  Active
                </td>
                <td width="30%">
                  Actions
                </td>
              </tr>
            </tbody>
            <tbody>
              <?php foreach ($users as $user): ?>
                <tr>
                  <td width="5%">
                    <?php echo $user['id'] ?>
                  </td>
                  <td width="20%">
                    <?php echo $user['username'] ?>
                  </td>
                  <td width="20%">
                    <?php echo $user['email'] ?>
                  </td>
                  <td width="15%">
                    <?php echo $user['company'] ?>
                  </td>
                  <td width="10%">
                    <?php echo $user['active'] ?>
                  </td>
                  <td width="30%">
                    <a href="<?php echo base_url();?>users/view/<?php echo $user['id'] ?>" class="btn btn-success" style="text-align: center; width: 70px; height: 35px; padding: 7px; margin: 2px; font-size: 14px;">View</a>
                    <a href="<?php echo base_url();?>users/edit/<?php echo $user['id'] ?>" class="btn btn-success" style="text-align: center; width: 70px; height: 35px; padding: 7px; margin: 2px; font-size: 14px;">Edit</a>
                    <?php if ($is_admin) {?>
                      <a href="<?php echo base_url();?>users/delete/<?php echo $user['id'] ?>" class="btn btn-success" style="text-align: center; width: 70px; height: 35px; padding: 7px; margin: 2px; font-size: 14px;">Delete</a>
                    <?php } ?>
                  </td>
                </tr>
              <?php endforeach ?>
            </tbody>
          </table>
      </div>
    </div>
  </div>
</section>