<section id="content">
  <div class="dark" style="background-color: #43BFC7; min-height: 500px;">
    <!--<button onclick="myFunction();" class="real form-actions btn btn-danger" href="" style="float:left; margin: 5px;">Print</button>-->
    <div class="content-wrap" style="margin-left: 2%; margin-right: 2%; font-size:24px;">
    	<legend class="title-table"><?php echo $title; ?></legend>
		<fieldset class="real">
    		<?php $this->load->view('partials/recommend_report_filter'); ?>
		</fieldset>
    </div> 
    <?php if (isset($posting)): ?>
		<button onclick="window.print()" class="noprint form-actions btn btn-success" href="" style="margin-top: -100px;">Print</button>
		<div class="content-wrap">
	    	<table class="table report" style="margin-top: -100px; width: 100%">
				<tbody>
					<tr class="active">
						<td>#</td>
						<td>Hotel Name</td>
						<td>recommendation Score</td>
						<td>E-Mail</td>
						<td>Nationality</td>

					</tr>
				</tbody>
				<tbody>
					<?php foreach ($participants as $participant): ?>
						<tr class="<?php  if ($participant['recommend'] >= 0 && $participant['recommend'] <= 6) {
							echo "danger";
						}elseif ($participant['recommend'] >= 7 && $participant['recommend'] <= 8) {
							echo "warning";
						}elseif ($participant['recommend'] >= 9 && $participant['recommend'] <= 10) {
							echo "success";
						}else {
							echo "info";
						} ?>">
							<td><?php echo $participant['id'] ?></td>
							<td><?php echo $participant['hotel_name'] ?></td>
							<td><?php echo $participant['recommend'] ?></td>
							<td><?php echo $participant['email'] ?></td>
							<td><?php echo $participant['nationality'] ?></td>
						</tr>
					<?php endforeach; ?>
						<tr class="info center">
							<td colspan="3">Total Number of Participants</td>
							<td colspan="2"><?php echo $total ?> Guests</td>
						</tr>
				</tbody>
			</table>
		</div>
    <?php endif; ?>  
  </div>
</section>