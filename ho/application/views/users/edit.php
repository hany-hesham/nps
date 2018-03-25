<section id="content">
  <div class="dark" style="background-color: #43BFC7; min-height: 500px;">
    <div class="content-wrap" style="margin-left: 2%; margin-right: 2%; font-size:24px;">
      <div class="container clearfix">
        <form action="" method="POST" id="form-submit" enctype="multipart/form-data" class="form-div span12" accept-charset="utf-8">
          <table class="table table-bordered table-striped" style="clear: both">
            <tbody>
              <tr>
                <td width="35%">Username</td>
                <td>
                  <input type="text" name="username" class="form-control" style="color:white"  placeholder="Username" value="<?php echo $user['username']; ?>"/>
                </td>
              </tr>
              <tr>
                <td width="35%">Email</td>
                <td>
                  <input type="text" name="email" class="form-control" style="color:white"  placeholder="Username" value="<?php echo $user['email']; ?>"/>
                </td>
              </tr>
              <tr>
                <td width="35%">First Name</td>
                <td>
                  <input type="text" name="first_name" class="form-control" style="color:white"  placeholder="First Name" value="<?php echo $user['first_name']; ?>"/>
                </td>
              </tr>
              <tr>
                <td width="35%">Last Name</td>
                <td>
                  <input type="text" name="last_name" class="form-control" style="color:white"  placeholder="Last Name" value="<?php echo $user['last_name']; ?>"/>
                </td>
              </tr>
              <tr>
                <td width="35%">Phone</td>
                <td>
                  <input type="text" name="phone" class="form-control" style="color:white"  placeholder="Phone" value="<?php echo $user['phone']; ?>"/>
                </td>
              </tr>
              <tr>
                <td width="35%">Admin</td>
                <td>
                  <input type="text" name="company" class="form-control" style="color:white"  placeholder="Username" value="<?php echo $user['company']; ?>"/>
                </td>
              </tr>
              <tr>
                <td width="35%">Active</td>
                <td>
                  <input type="text" name="active" class="form-control" style="color:white"  placeholder="Username" value="<?php echo $user['active']; ?>"/>
                </td>
              </tr>
              <tr>
                <td width="35%">Profile Picture</td>
                <td>
                  <input type="file" name="ppic" class="form-control"  placeholder=""/>
                </td>
              </tr>
            </tbody>
          </table>
          <input name="submit" value="Submit" type="submit" class="btn btn-success" style="float: right;" />
        </form>

      </div>
    </div>
  </div>
</section>