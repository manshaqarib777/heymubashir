<?php
// *************************************************************************
// *                                                                       *
// * DEPRIXA -  Integrated Web system                                      *
// * Copyright (c) JAOMWEB. All Rights Reserved                            *
// *                                                                       *
// *************************************************************************
// *                                                                       *
// * Email: osorio2380@yahoo.es                                            *
// * Website: http://www.jaom.info                                         *
// *                                                                       *
// *************************************************************************
// *                                                                       *
// * This software is furnished under a license and may be used and copied *
// * only  in  accordance  with  the  terms  of such  license and with the *
// * inclusion of the above copyright notice.                              *
// * If you Purchased from Codecanyon, Please read the full License from   *
// * here- http://codecanyon.net/licenses/standard                         *
// *                                                                       *
// *************************************************************************

  if (!defined("_VALID_PHP"))
      die('Direct access to this location is not allowed.');
?>

<?php include 'templates/head_user.php'; ?>


<?php $courierrow = $core->getCourier_list(); ?>
<div class="row">
	<!-- Column -->
	<div class="col-lg-12 col-xl-12 col-md-12">
		<div class="card">
			<div class="card-body">			
				<div class="table-responsive">
					<table id="zero_config" class="table table-condensed table-hover table-striped">
						<thead>
							<tr>
								<th><b><?php echo $lang['ltracking'] ?></b></th>
								<th class="text-center"><b><?php echo $lang['ncustomer'] ?></b></th>
								<th class="text-center"><b><?php echo $lang['booking-list18'] ?></b></th>
								<th class="text-center"><b><?php echo $lang['booking-list13'] ?></b></th>
								<th class="text-center"><b><?php echo $lang['booking-list14'] ?></b></th>
								<th class="text-center" align='center'><b><?php echo $lang['booking-list19'] ?></b></th>
								<th class="text-center"><b><?php echo $lang['lstatusshipment'] ?></b></th>
								<th class="text-center"><b><?php echo $lang['aaction'] ?></b></th>
							</tr>
						</thead>
						<div class="m-t-40">
							<div class="d-flex">
								<div class="mr-auto">
									<div class="form-group">
										<a href="customer_list.php"><button type="button" class="btn btn-primary btn"><i class="ti-plus" aria-hidden="true"></i> <?php echo $lang['createnewship'] ?></button></a>
									</div>
								</div>
							</div>
						</div>
						<tbody id="projects-tbl">
							<?php if(!$courierrow):?>
							<tr>
								<td colspan="10">
								<?php echo "
								<i align='center' class='display-3 text-warning d-block'><img src='assets/images/alert/ohh_shipment.png' width='140' /></i>
								</br>
								<p style='font-size: 20px; -webkit-font-smoothing: antialiased; color: #737373;' align='center'>".$lang['oohhship']."</p>
								<p style='font-size: 16px; -webkit-font-smoothing: antialiased; color: #999;' align='center'> ".$lang['ooohhship']."</p>
								",false;?>
								</td>
							</tr>
							<?php else: ?>
							<?php foreach ($courierrow as $row):?>
							<tr>
								<td><b><a  href="cargo_shipping.php?do=edit_courier&amp;cus_name=<?php echo $row->username;?>&amp;action=ship&amp;courier_id=<?php echo $row->id;?>"><?php echo $row->order_inv;?></a></b></td>
								<td class="text-center"><?php echo $row->country;?>-<?php echo $row->city;?></td>
								<td class="text-center"><?php echo $row->cargo_vat;?></td>
								<td class="text-center"><?php echo $row->pickLocation;?></td>
								<td class="text-center"><?php echo $row->deliveryLocation;?></td>
								<td align='center'><a  href="view-google-maps.php?do=view-google-maps&amp;action=mapview&amp;id=<?php echo $row->id;?>" target="_blank"><input  type=image src="assets/images/icon_map.png" ></a></td>
								<td class="text-center"><span style="background: <?php echo $row->color; ?>;"  class="label label-large" ><?php echo $row->status_courier;?></span></td>
								<td align='center'>
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal<?php echo $row->id;?>">
											  show details
											</button>
								<a  href="cargo_shipping.php?do=edit_courier&amp;cus_name=<?php echo $row->username;?>&amp;action=ship&amp;courier_id=<?php echo $row->id;?>" data-toggle="tooltip" data-placement="top" title="<?php echo $lang['tooledit'] ?>"><i style="color:#343a40" class="ti-pencil"></i></a>
								<a  href="invoice/inv_ship1.php?do=inv_ship1&amp;action=ship&amp;id=<?php echo $row->id;?>" target="_blank" data-toggle="tooltip" data-placement="top" title="<?php echo $lang['toolprint'] ?>"><i style="color:#343a40" class="ti-printer"></i></a>
								<a  href="invoice/inv_ship.php?do=inv_ship&amp;action=ship&amp;id=<?php echo $row->id;?>" target="_blank" data-toggle="tooltip" data-placement="top" title="<?php echo $lang['toolprint'] ?>"><i style="color:#343a40" class="ti-printer"></i></a>
								<a  href="status_shipment.php?do=status_shipment&amp;action=status&amp;id=<?php echo $row->id;?>" data-toggle="tooltip" data-placement="top" title="<?php echo $lang['toolupdate'] ?>"><i style="color:#20c997" class="ti-reload"></i></a>
								<?php if($row->status_courier != 'Delivered'){?> 
								<a  href="deliver_shipment.php?do=deliver_shipment&amp;action=status&amp;id=<?php echo $row->id;?>" data-toggle="tooltip" data-placement="top" title="<?php echo $lang['tooldeliver'] ?>"><i style="color:#2962FF" class="ti-package"></i></a>
								<?php }?> 
								<a  id="item_<?php echo $row->id;?>" data-rel="<?php echo $row->s_name;?>" class="delete" data-toggle="tooltip" data-placement="top" title="<?php echo $lang['tooldelete'] ?>"><i style="color:#343a40" class="ti-trash"></i></a>
								</td>
							</tr>
							<div class="modal fade" id="exampleModal<?php echo $row->id;?>" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">Details</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									</div>
									<div class="modal-body">
									<ul class="list-group">
										<li class="list-group-item"><strong><?php echo $lang['pickup_date'] ?></strong> <?php echo $row->pickup_date; ?></li>
										<li class="list-group-item"><strong><?php echo $lang['pickup_hour'] ?></strong> <?php echo $row->pickup_hour; ?></li>
										<li class="list-group-item"><strong><?php echo $lang['deliver_date'] ?></strong> <?php echo $row->deliver_date; ?></li>
										<li class="list-group-item"><strong><?php echo $lang['delivery_hour'] ?></strong> <?php echo $row->delivery_hour; ?></li>
										<li class="list-group-item"><strong><?php echo $lang['pickLocation'] ?></strong> <?php echo $row->pickLocation; ?></li>
										<li class="list-group-item"><strong><?php echo $lang['deliveryLocation'] ?></strong> <?php echo $row->deliveryLocation; ?></li>
										<li class="list-group-item"><strong><?php echo $lang['cargo_vat'] ?></strong> <?php echo $row->cargo_vat; ?></li>
										<li class="list-group-item"><strong><?php echo $lang['cargo_without_vat'] ?></strong> <?php echo $row->cargo_without_vat; ?></li>
										<li class="list-group-item"><strong><?php echo $lang['cargo_distance'] ?></strong> <?php echo $row->cargo_distance; ?></li>
										<li class="list-group-item"><strong><?php echo $lang['cargo_time'] ?></strong> <?php echo $row->cargo_time; ?></li> 
										<?php foreach (json_decode($row->combine_data) as $key => $value) {
											echo '<li class="list-group-item"><strong>'.$lang['what'].'</strong> '.$value->what.'</li>';
											echo '<li class="list-group-item"><strong>'.$lang['cargo_item'].'</strong> '.$value->cargo_item.'</li>';
											echo '<li class="list-group-item"><strong>'.$lang['cargo_length'].'</strong> '.$value->cargo_length.'</li>';
											echo '<li class="list-group-item"><strong>'.$lang['cargo_width'].'</strong> '.$value->cargo_width.'</li>';
											echo '<li class="list-group-item"><strong>'.$lang['cargo_height'].'</strong> '.$value->cargo_height.'</li>';
											echo '<li class="list-group-item"><strong>'.$lang['cargo_weight'].'</strong> '.$value->cargo_weight.'</li>';
											echo '<li class="list-group-item"><strong>'.$lang['cargo_value'].'</strong> '.$value->cargo_value.'</li>';
											echo '<li class="list-group-item"><strong>'.$lang['cargo_title'].'</strong> '.$value->cargo_title.'</li>';
											echo '<li class="list-group-item"><strong>'.$lang['cargo_description'].'</strong> '.$value->cargo_description.'</li>';
											echo '<li class="list-group-item"><strong>'.$lang['cargo_goodsstacke'].'</strong> '.$value->cargo_goodsstacke.'</li>';
											echo '<li class="list-group-item"><strong>'.$lang['cargo_goodpackage'].'</strong> '.$value->cargo_goodpackage.'</li>';

										} ?>
										<li class="list-group-item"><strong><?php echo $lang['cargo_flexible'] ?></strong> <?php echo $row->cargo_flexible; ?></li>
										<li class="list-group-item"><strong><?php echo $lang['cargo_deliveryatnoon'] ?></strong> <?php echo $row->cargo_deliveryatnoon; ?></li>
										<li class="list-group-item"><strong><?php echo $lang['cargo_pickupatnoon'] ?></strong> <?php echo $row->cargo_pickupatnoon; ?></li>
										<li class="list-group-item"><strong><?php echo $lang['r_country'] ?></strong> <?php echo $row->r_country; ?></li>
										<li class="list-group-item"><strong><?php echo $lang['lastname'] ?></strong> <?php echo $row->lastname; ?></li>
										<li class="list-group-item"><strong><?php echo $lang['r_lastname'] ?></strong> <?php echo $row->r_lastname; ?></li>
										<li class="list-group-item"><strong><?php echo $lang['street'] ?></strong> <?php echo $row->street; ?></li>
										<li class="list-group-item"><strong><?php echo $lang['r_street'] ?></strong> <?php echo $row->r_street; ?></li>
										<li class="list-group-item"><strong><?php echo $lang['addresspickup'] ?></strong> <?php echo $row->addresspickup; ?></li>
										<li class="list-group-item"><strong><?php echo $lang['pickupdetails'] ?></strong> <?php echo $row->pickupdetails; ?></li>
										<li class="list-group-item"><strong><?php echo $lang['r_pickupdetails'] ?></strong> <?php echo $row->r_pickupdetails; ?></li>
										<li class="list-group-item"><strong><?php echo $lang['refrence_no'] ?></strong> <?php echo $row->refrence_no; ?></li>
										<li class="list-group-item"><strong><?php echo $lang['r_refrence_no'] ?></strong> <?php echo $row->r_refrence_no; ?></li>
										<li class="list-group-item"><strong><?php echo $lang['access_restriction_limitation'] ?></strong> <?php echo $row->access_restriction_limitation; ?></li>
										<li class="list-group-item"><strong><?php echo $lang['access_restriction_limitation_height'] ?></strong> <?php echo $row->access_restriction_limitation_height; ?></li>
										<li class="list-group-item"><strong><?php echo $lang['r_access_restriction_limitation'] ?></strong> <?php echo $row->r_access_restriction_limitation; ?></li>
										<li class="list-group-item"><strong><?php echo $lang['r_access_restriction_limitation_height'] ?></strong> <?php echo $row->r_access_restriction_limitation_height; ?></li>

										<?php foreach (json_decode($row->additional_data) as $key => $value) {
											echo '<li class="list-group-item"><strong>'.$lang['extra_company'].'</strong> '.$value->extra_company.'</li>';
											echo '<li class="list-group-item"><strong>'.$lang['extra_name'].'</strong> '.$value->extra_name.'</li>';
											echo '<li class="list-group-item"><strong>'.$lang['extra_lastname'].'</strong> '.$value->extra_lastname.'</li>';
											echo '<li class="list-group-item"><strong>'.$lang['extra_address'].'</strong> '.$value->extra_address.'</li>';
											echo '<li class="list-group-item"><strong>'.$lang['extra_location'].'</strong> '.$value->extra_location.'</li>';
											echo '<li class="list-group-item"><strong>'.$lang['extra_phone'].'</strong> '.$value->extra_phone.'</li>';
											echo '<li class="list-group-item"><strong>'.$lang['extra_delivery_location'].'</strong> '.$value->extra_delivery_location.'</li>';
										} ?>
										<?php foreach (json_decode($row->additional_data) as $key => $value) {
											echo '<li class="list-group-item"><strong>'.$lang['r_extra_company'].'</strong> '.$value->r_extra_company.'</li>';
											echo '<li class="list-group-item"><strong>'.$lang['r_extra_name'].'</strong> '.$value->r_extra_name.'</li>';
											echo '<li class="list-group-item"><strong>'.$lang['r_extra_lastname'].'</strong> '.$value->r_extra_lastname.'</li>';
											echo '<li class="list-group-item"><strong>'.$lang['r_extra_address'].'</strong> '.$value->r_extra_address.'</li>';
											echo '<li class="list-group-item"><strong>'.$lang['r_extra_location'].'</strong> '.$value->r_extra_location.'</li>';
											echo '<li class="list-group-item"><strong>'.$lang['r_extra_phone'].'</strong> '.$value->r_extra_phone.'</li>';
											echo '<li class="list-group-item"><strong>'.$lang['r_extra_delivery_location'].'</strong> '.$value->r_extra_delivery_location.'</li>';
										} ?>
										<li class="list-group-item"><strong><?php echo $lang['company'] ?></strong> <?php echo $row->company; ?></li>
										<li class="list-group-item"><strong><?php echo $lang['r_company'] ?></strong> <?php echo $row->r_company; ?></li>
										<li class="list-group-item"><strong><?php echo $lang['person_contact_no'] ?></strong> <?php echo $row->person_contact_no; ?></li>
										<li class="list-group-item"><strong><?php echo $lang['truck_lift'] ?></strong> <?php echo $row->truck_lift; ?></li>
										<li class="list-group-item"><strong><?php echo $lang['floor_pickup'] ?></strong> <?php echo $row->floor_pickup; ?></li>
										<li class="list-group-item"><strong><?php echo $lang['deposite_collection'] ?></strong> <?php echo $row->deposite_collection; ?></li>
										<li class="list-group-item"><strong><?php echo $lang['deliver_goods'] ?></strong> <?php echo $row->deliver_goods; ?></li>
										<li class="list-group-item"><strong><?php echo $lang['phone_notification'] ?></strong> <?php echo $row->phone_notification; ?></li>
										<li class="list-group-item"><strong><?php echo $lang['transport_insurance'] ?></strong> <?php echo $row->transport_insurance; ?></li>
										<li class="list-group-item"><strong><?php echo $lang['floor_delivery'] ?></strong> <?php echo $row->floor_delivery; ?></li>
										<li class="list-group-item"><strong><?php echo $lang['driver_deposite_goods'] ?></strong> <?php echo $row->driver_deposite_goods; ?></li>
										<li class="list-group-item"><strong><?php echo $lang['green_tree'] ?></strong> <?php echo $row->green_tree; ?></li>
										<li class="list-group-item"><strong><?php echo $lang['shipment_type'] ?></strong> <?php echo $row->shipment_type; ?></li>
										<li class="list-group-item"><strong><?php echo $lang['dangerous_goods'] ?></strong> <?php echo $row->dangerous_goods; ?></li>
										<li class="list-group-item"><strong><?php echo $lang['un_number'] ?></strong> <?php echo $row->un_number; ?></li>
										<li class="list-group-item"><strong><?php echo $lang['packaging_amount'] ?></strong> <?php echo $row->packaging_amount; ?></li>
										<li class="list-group-item"><strong><?php echo $lang['dangerous_goods_points'] ?></strong> <?php echo $row->dangerous_goods_points; ?></li>
										<li class="list-group-item"><strong><?php echo $lang['temprature_controlled_goods'] ?></strong> <?php echo $row->temprature_controlled_goods; ?></li>
										<li class="list-group-item"><strong><?php echo $lang['temprature'] ?></strong> <?php echo $row->temprature; ?></li>
										<li class="list-group-item"><strong><?php echo $lang['transport_company'] ?></strong> <?php echo $row->transport_company; ?></li>
										<li class="list-group-item"><strong><?php echo $lang['transport_company_goods'] ?></strong> <?php echo $row->transport_company_goods; ?></li>
										<li class="list-group-item"><strong><?php echo $lang['crane_required_picking'] ?></strong> <?php echo $row->crane_required_picking; ?></li>
										<li class="list-group-item"><strong><?php echo $lang['crane_required_uploading'] ?></strong> <?php echo $row->crane_required_uploading; ?></li>
										<li class="list-group-item"><strong><?php echo $lang['shipment_file'] ?></strong> <?php echo $row->shipment_file; ?></li>
										<li class="list-group-item"><strong><?php echo $lang['service_type'] ?></strong> <?php echo $row->service_type; ?></li>
									</ul>

					
									</div>
									<div class="modal-footer">
									<button  class="btn btn-secondary" data-dismiss="modal">Close</button>
									</div>
								</div>
								</div>
							</div>
							<?php endforeach;?>
							<?php unset($row);?>
							<?php endif;?>
						</tbody>
					</table>
					<?php echo $pager->display_pages();?>
					<?php echo Core::doDelete("Delete Shipment","deleteCourier");?> 
				</div>
			</div>
		</div>
	</div>
	
	<!-- Column -->
</div>
<script src="dist/js/stacktable.js"></script>
<script>
	$('table').stacktable();
</script>