<div id="page-wrap">
		<table class="table" style=" margin-left: auto; margin-right: auto; font-family:Arial, Helvetica, sans-serif;" border="0" width="100%" >
			<tbody>
				<tr>
					<td>						
						<table style="text-align: center; table-layout:fixed;"   cellspacing="2" width="100%">
							<tbody>
								<tr>
									<td width="75%">
										<p style="text-align: left;"><font size=6 face="arial"><strong><?php echo $row->service_options; ?></strong></font></p>										
									</td>
									<td width="25%">
										<p style="text-align: center;"><?php echo "<img src='".$core->site_url."/uploads/logo.png' border='0' width='190' height='39'>";  ?></p>							
									</td>
								</tr>
							</tbody>
						</table>
						<hr />
						<table  width="100%" style="text-align: center; table-layout:fixed;">
							<tbody>
								<tr bgcolor="#6c757d">
									<td width="50%">
										<p style="text-align: center;"><strong><font color="white" size="5"><?php echo $lang['inv-label1'] ?></font></strong></p>										
									</td>
									<td width="50%">
										<p style="text-align: center;"><font size="5" face="arial" color="white"><strong><?php echo $lang['inv-label2'] ?></strong></font></p>										
									</td>
								</tr>
								<tr>
									<font size=4><td align="center"  style=" border-top-color:#000000; border-right-color:#333; border-right-width:2px;border-right-style:solid;  border-collapse: collapse;">									 
										<p style="text-align: left;"><font size="4"><b><?php echo $core->site_name; ?></b></font></p>
										<p style="text-align: left; "><?php echo $core->c_phone; ?></p>
										<p style="text-align: left; "><strong><?php echo $core->site_email; ?> </strong></p>
										<p style="text-align: left;"><font size=5><strong><?php echo $core->c_address; ?> - <?php echo $core->c_country; ?>-<?php echo $core->c_city; ?></strong></font></p>
									</td>
									<td>
										<p style="text-align: left;"><font size="4"><b>&nbsp;&nbsp;&nbsp;<?php echo $row->r_name; ?></b></font></p>
										<p style="text-align: left;">&nbsp;&nbsp;&nbsp;<?php echo $row->r_phone; ?></p>
										<p style="text-align: left; "><strong>&nbsp;&nbsp;&nbsp;<?php echo $row->r_address; ?> </strong></p>
										<p style="text-align: left;"><font size=5><strong>&nbsp;&nbsp;<?php echo $row->r_dest; ?></strong></font></p>
									</td></font>
								</tr>
							</tbody>
						</table>
						<hr />
						<table style="text-align: center;" width="100%">
							<tbody>
								<tr>
									<td width="50%">
										<p><strong><?php echo $lang['inv-label4'] ?></strong></p>
										<p><font size=4><b><?php echo $row->deli_time; ?></b></font></p>
									</td>
									<td width="50%">
										<p><strong><?php echo $lang['inv-label5'] ?></strong></p>
										<p><font size=4><strong><b><?php echo $row->courier; ?></b></strong></p>
									</td>
								</tr>
						  </tbody>
					  </table>
					  <hr />
					  <table style="text-align: center;" width="100%">
							<tbody>
								<tr>
									<td width="50%">
										<p><strong><?php echo $lang['inv-label6'] ?></strong></p>
									</td>
									<td width="50%">
										<p><strong><?php echo $lang['inv-label7'] ?></strong></p>
									</td>
								</tr>
								<tr>
									<td width="50%">
										<p><font size=4><?php echo $row->r_qnty; ?> | <?php echo $row->r_weight; ?></font></p>
									</td>
									<td width="50%">
										<p><font size=4><?php echo $row->comments; ?></font></p>
									</td>
								</tr>
						  </tbody>
					  </table>
					  <hr />
					  <center  width="100%">
						<div class="output">
						  <p style='padding:5px; text-align:center; font-size:24px; font-family:Arial,Helvetica;'><?php echo $lang['inv-label8'] ?></p>
						  <section class="output">
						  <img src='https://barcode.tec-it.com/barcode.ashx?data=<?php echo $row->order_inv; ?>&code=Code39&multiplebarcodes=false&translate-esc=false&unit=Fit&dpi=150&imagetype=Gif&rotation=0&color=%23000000&bgcolor=%23ffffff&qunit=Mm&quiet=0&modulewidth=50' alt='<?php echo $row->order_inv; ?>'/></section>
						</div>
					  </center>
					  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='https://barcode.tec-it.com/barcode.ashx?data=<?php echo $row->order_inv; ?>&code=QRCode&multiplebarcodes=false&translate-esc=false&unit=Fit&dpi=120&imagetype=Gif&rotation=0&color=%23000000&bgcolor=%23ffffff&qunit=Mm&quiet=0&modulewidth=120&eclevel=L' alt='<?php echo $row->order_inv; ?>'/>
					</td>
				</tr>
			</tbody>
		</table>
		<button class='button -dark center no-print'  onClick="window.print();" style="font-size:16px"><?php echo $lang['inv-label9'] ?>&nbsp;&nbsp; <li class="fa fa-print"></i></button>
	</div>