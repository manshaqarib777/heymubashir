	<div id="page-wrap">

		<div class="container_etiqueta" style="min-height: 540px; max-height: 540px; min-width: 420px; max-width: 420px;">
			<div class="print_ticket_zebra" style="max-height: 110px; min-height: 110px;">
				<div style="width: 30%;line-height:110px;margin:0px auto;text-align:center;">
					<?php echo "<img class=\"logo\" style=\"vertical-align:middle\" src='".$core->site_url."/uploads/logo_ticket.png' border='0' width='145' height='70'>";  ?>	
				</div>
				<div style="width: 70%;">
					<strong><?php echo $core->site_name; ?><br></strong>
						
						<?php echo $core->c_country; ?>, <?php echo $core->c_city; ?>, <?php echo $core->c_postal; ?>.<br>
						TEL: <?php echo $core->c_phone; ?>
				</div>
			</div>
			<div class="app_print_ticket_zebra" style="margin-top: -18px; height: 100px; max-width: 420px; margin-left: 22px">
					<img style="width: 380px; min-height: 100px; max-height: 100px;" src='https://barcode.tec-it.com/barcode.ashx?data=<?php echo $row->order_inv; ?>&code=EANUCC128&multiplebarcodes=false&translate-esc=true&unit=Fit&dpi=96&imagetype=Gif&rotation=0&color=%23000000&bgcolor=%23ffffff&qunit=Mm&quiet=0' alt=''/>
			</div>
			<div class="app_easypack_ticket_zebra" style="padding-top:50px; max-width: 420px; text-align: center">
				<div class="track_courier"><strong> <?php echo $row->order_inv; ?></strong></div>
			</div>
			<div class="app_easypack_print" style="padding-top: 5px;font-weight: bold">
				<div>Package ref: &nbsp;</div>
				<div>&nbsp;</div>
			</div>
			<div class="datas_easypack_print">
				<div>Date: &nbsp;<?php echo $row->created; ?> &nbsp;|&nbsp;Qnty: &nbsp;<?php echo $row->r_qnty; ?>&nbsp;|&nbsp;W: &nbsp;<?php if ($row->r_weight > $row->v_weight) { echo  round_out($row->r_weight); } else { echo round_out($row->v_weight); }?>&nbsp;|&nbsp;USFOB: &nbsp;<?php echo $suma3;?> </div>
			</div>
				<div class="app_easypack_print">
					<div>L :  <?php echo $suma;?>   &nbsp;</div>
					<div>W : <?php echo $suma1;?> H :  <?php echo $suma2;?></div>
				</div>
			
			<div class="app_easypack_print">
				<div><strong>REF. SERVICE: </strong>&nbsp;</div>
				<div><?php echo $row->service_options; ?> &nbsp;|&nbsp; <?php echo $row->courier; ?></div>
			</div>
			<div class="app_easypack_ticket_zebra" style="padding-top: 3px; padding-bottom: 3px; font-size: 22px; max-height: 18px; min-height: 25px;">
				<strong><?php echo $row->pay_mode; ?></strong>
			</div>
			<br>
			<div class="app_easypack_ticket_zebra" style="font-size: 37px; margin-top: 1px; margin-left: 0px; ">
			<strong><?php echo $row->r_dest." - ".$row->r_city; ?></strong>
			</div>
			<div class="app_easypack_qr_code" style="max-height: 110px; min-height: 110px;">
				<div style="width: 30%;">
					<img src='https://barcode.tec-it.com/barcode.ashx?data=Tracking:+<?php echo $row->order_inv; ?>,+Category:+<?php echo $row->itemcat; ?>,+Package Description:+<?php echo $row->r_description; ?>&code=QRCode&multiplebarcodes=false&translate-esc=false&unit=Fit&dpi=72&imagetype=Gif&rotation=0&color=%23000000&bgcolor=%23ffffff&qunit=Mm&quiet=0&eclevel=L' alt=''/>
				</div>
				<div style="width: 70%;" >
					<?php echo $row->r_name; ?>  <br>
					<?php echo $row->r_address." <br> ".$row->r_phone; ?>
				</div>
			</div>
		</div>

		<br><br><br><br><br><br><br>
		<button class='button -dark center no-print'  onClick="window.print();" style="font-size:16px">Print label &nbsp;&nbsp; <li class="fa fa-print"></i></button>
	</div>