<?php
	define("_VALID_PHP", true);
	require_once("init.php");
	if (isset($_POST['next-1'])){
		$combine_data=array();
		foreach ($_POST as $key => $value) {
			if(is_array($value))
			{
				foreach ($value as $key1 => $value1) {
					
					$combine_data[$key1][$key]=$value1;
					
				}
			}	
		}
		$combine_data=json_encode($combine_data);
		$order_inv=$_POST['tracking'].$_POST['order_inv'];
		$user ='';
		if (isset($_GET['user_id'])) {
			$sql="SELECT * FROM `users` WHERE id =".$_GET['user_id'];
			$data = mysqli_query($con, $sql);
			$user = mysqli_fetch_array($data,MYSQLI_ASSOC);
			$user=$user['username'];
		}
		else {
			$user=$_SESSION['username'];			
		}
		if(isset($_GET['cus_name']) && !empty($_GET['cus_name'])) 
		{
			$user=$_GET['cus_name'];	
		}
		if(isset($_GET['courier_id']) && $_GET['courier_id']!='')
		{
			$_SESSION['courier_id']=$_GET['courier_id'];	
		}
		if(isset($_POST['id']) && $_POST['id']!='')
		{
			$_SESSION['courier_id']=$_POST['id'];	
		}
		if(empty($_SESSION['courier_id']) ||  (isset($_GET['do']) && $_GET['do']=='add_courier'))
		{	
			$sql="INSERT INTO `add_courier` ( `pickLocation`, `deliveryLocation`, `cargo_vat`, `cargo_without_vat`, `cargo_distance`, `cargo_time`,`letter_or`,`order_inv`,`tracking`,`username`,`combine_data`) VALUES ('".$_POST['pickLocation']."','".$_POST['deliveryLocation']."','".$_POST['cargo_vat']."','".$_POST['cargo_without_vat']."','".$_POST['cargo_distance']."','".$_POST['cargo_time']."','".$_POST['tracking']."','".$order_inv."','".$_POST['order_inv']."','".$user."','".$combine_data."');";
			if (mysqli_query($con, $sql)) {
			  $last_id = mysqli_insert_id($con);
			  echo  ("<strong><center>The data is add successfully</center></strong>"); 
			  $_SESSION['courier_id']=$last_id;
			} else {
			  echo "Error: " . $sql . "<br>" . mysqli_error($con);
			}
		}
		else
		{
			$sql="UPDATE `add_courier` SET `pickLocation`='".$_POST['pickLocation']."',`deliveryLocation`='".$_POST['deliveryLocation']."',`cargo_vat`='".$_POST['cargo_vat']."',`cargo_without_vat`='".$_POST['cargo_without_vat']."',`cargo_distance`='".$_POST['cargo_distance']."',`cargo_time`='".$_POST['cargo_time']."',`combine_data`='".$combine_data."' WHERE id=".$_SESSION['courier_id'];
			if (!mysqli_query($con, $sql)) {
			  echo "Error: " . $sql . "<br>" . mysqli_error($con);
			}
		}

		if (isset($_SESSION['username']) && isset($_SESSION['email']) && isset($_SESSION['name']) && isset($_SESSION['userid'])) {
			redirect_to("dashboard/cargo_date.php");
		}
		else
		{
			redirect_to("dashboard/cargo_login.php");
		}
	}



	if (isset($_POST['next-2']))
    {
    	$result = $user->login($_POST['username'], $_POST['password']); 
		if ($result)
		{
			if($_SESSION['userlevel'] == 3)
			{
				redirect_to("index.php");
			}
			else
			{
				redirect_to("dashboard/cargo_date.php");
			}
		}	
    }
    if (isset($_POST['next-3']))
    {
    	if (intval($_POST['doRegister']) == 1 || !empty($_POST['doRegister']))
      	{
      		if ($user->registercargo()==true) {
      			$result = $user->login($_POST['username'], $_POST['pass']); 
				if ($result)
				{
					if($_SESSION['userlevel'] == 3)
					{
						redirect_to("index.php");
					}
					else
					{
						redirect_to("dashboard/cargo_date.php");
					}
				}
      		}
      		
      	}
    }
    if (isset($_POST['step-4']))
    {
        
        $sql="SELECT * FROM `add_courier` WHERE id =".$_SESSION['courier_id'];
		$data = mysqli_query($con, $sql);
		$result = mysqli_fetch_array($data,MYSQLI_ASSOC);
		$cargo_vat = $result['cargo_vat'];
        $cargo_without_vat = $result['$cargo_without_vat'];
		if($_POST['service_type']=='standerd')
        {
            $cargo_vat = (double)$result['cargo_vat']+30;
            $cargo_without_vat = (double)$result['cargo_without_vat']+30;
        }
        if($_POST['service_type']=='express')
        {
            $cargo_vat = (double)$result['cargo_vat']+50;
            $cargo_without_vat = (double)$result['cargo_without_vat']+50;   
        }
    	$sql="UPDATE `add_courier` SET `cargo_vat`='".$cargo_vat."',`cargo_without_vat`='".$cargo_without_vat."',`service_type`='".$_POST['service_type']."',`pickup_date`='".$_POST['pickup_date']."',`pickup_hour`='".$_POST['pickup_hour']."',`pickup_until`='".$_POST['pickup_until']."',`delivery_until`='".$_POST['delivery_until']."',`cargo_pickupatnoon`='".$_POST['cargo_pickupatnoon']."',`deliver_date`='".$_POST['deliver_date']."',`delivery_hour`='".$_POST['delivery_hour']."',`cargo_deliveryatnoon`='".$_POST['cargo_deliveryatnoon']."',`cargo_flexible`='".$_POST['cargo_flexible']."' WHERE id=".$_SESSION['courier_id'];
    	if (mysqli_query($con, $sql)) {
		  redirect_to("dashboard/cargo_address.php"); 
		} else {
		  echo "Error: " . $sql . "<br>" . mysqli_error($con);
		}
    }
    if (isset($_POST['step-5']))
    {
    	$additional_data=array();
    	$r_additional_data=array();
		foreach ($_POST as $key => $value) {
			if(strncmp($key,'extra_',6)==0)
			{
				$additional_data[$key]=$value;
			}
			if(strncmp($key,'r_extra_',8)==0)
			{
				$r_additional_data[$key]=$value;
			}
		}
		$additional_data=json_encode($additional_data);
		$r_additional_data=json_encode($r_additional_data);
			$sql="UPDATE `add_courier` SET `s_name`='".$_POST['s_name']."',`address`='".$_POST['address']."',`phone`='".$_POST['phone']."',`email`='".$_POST['email']."',`r_name`='".$_POST['r_name']."',`r_email`='".$_POST['r_email']."',`r_address`='".$_POST['r_address']."',`r_addresspickup`='".$_POST['r_addresspickup']."',`r_phone`='".$_POST['r_phone']."',`city`='".$_POST['city']."',`lastname`='".$_POST['lastname']."',`r_lastname`='".$_POST['r_lastname']."',`street`='".$_POST['street']."',`r_street`='".$_POST['r_street']."',`addresspickup`='".$_POST['addresspickup']."',`pickupdetails`='".$_POST['pickupdetails']."',`r_pickupdetails`='".$_POST['r_pickupdetails']."',`refrence_no`='".$_POST['refrence_no']."',`r_refrence_no`='".$_POST['r_refrence_no']."',`additional_data`='".$additional_data."',`r_additional_data`='".$r_additional_data."',`company`='".$_POST['company']."',`r_company`='".$_POST['r_company']."',`city`='".$_POST['city']."',`country`='".$_POST['country']."',`r_city`='".$_POST['r_city']."',`r_country`='".$_POST['r_country']."' WHERE id=".$_SESSION['courier_id'];
	    	if (mysqli_query($con, $sql)) {
			  redirect_to("dashboard/cargo_delivery.php"); 
			} else {
			  echo "Error: " . $sql . "<br>" . mysqli_error($con);
			}
    }

    if (isset($_POST['step-6']))
    {
    	$shipment_file='';
    	
		if(file_exists($_FILES['shipment_file']['tmp_name']) || is_uploaded_file($_FILES['shipment_file']['tmp_name'])) {
			$target_dir = "assets/shippment/images/";
			$target_file = $target_dir . basename($_FILES["shipment_file"]["name"]);
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			// Check if image file is a actual image or fake image
			$check = getimagesize($_FILES["shipment_file"]["tmp_name"]);
			if($check !== false) {
			    if (move_uploaded_file($_FILES["shipment_file"]["tmp_name"], $target_file)) {
				    $shipment_file= basename( $_FILES["shipment_file"]["name"]);
				  } else {
				    echo "Sorry, there was an error uploading your file.";
				  }
			} else {
			    echo "File is not an image.";
			    $uploadOk = 0;
			}

		}
			$sql="UPDATE `add_courier` SET `person_contact_no`='".$_POST['person_contact_no']."',`truck_lift`='".$_POST['truck_lift']."',`floor_pickup`='".$_POST['floor_pickup']."',`deposite_collection`='".$_POST['deposite_collection']."',`deliver_goods`='".$_POST['deliver_goods']."',`phone_notification`='".$_POST['phone_notification']."',`transport_insurance`='".$_POST['transport_insurance']."',`floor_delivery`='".$_POST['floor_delivery']."',`driver_deposite_goods`='".$_POST['driver_deposite_goods']."' WHERE id=".$_SESSION['courier_id'];
			unset($_SESSION['courier_id']);
	    	if (mysqli_query($con, $sql)) {
			  	if($_SESSION['userlevel'] == 9)
				{
					redirect_to("dashboard/courier.php?do=list_courier");					
				}	
				elseif($_SESSION['userlevel'] == 1)	
				{
					redirect_to("dashboard/client.php");
				}	
				elseif($_SESSION['userlevel'] == 2)
				{
					redirect_to("dashboard/index.php");
				}
				else
				{
					if($_SESSION['userlevel'] == 3)
					{
						redirect_to("dashboard/dash_driver.php");
					}
				}
			} else {
			  echo "Error: " . $sql . "<br>" . mysqli_error($con);
			}
    }
    if (isset($_POST['ajax-data'])){
    	$sql="SELECT * FROM `add_courier` WHERE id =".$_POST['id'];
		$data = mysqli_query($con, $sql);
		$result = mysqli_fetch_array($data,MYSQLI_ASSOC);
		// echo "<pre>";
		// print_r($_POST['id']);
		// die();
		$total_item=0;
		$total_width=0;
		$total_height=0;
		$total_weight=0;
		$total_length=0;
		$result['combine_data']=json_decode($result['combine_data']);
		foreach ($result['combine_data'] as $key => $value) {
			$total_item=(int)$total_item+(int)$value->cargo_item;
			$total_width=(int)$total_width+(int)$value->cargo_width;
			$total_height=(int)$total_height+(int)$value->cargo_height;
			$total_weight=(int)$total_weight+(int)$value->cargo_weight;
			$total_length=(int)$total_length+(int)$value->cargo_length;
		}
		$result['total_item']=$total_item;
		$result['total_width']=$total_width;
		$result['total_height']=$total_height;
		$result['total_weight']=$total_weight;
		$result['total_length']=$total_length;
		
		header('Content-type: application/json');
		echo json_encode($result);
    }


    if (isset($_POST['setting-data'])){
    	$sql="SELECT * FROM `settings` WHERE id = 1";
		$data = mysqli_query($con, $sql);
		$result['setting'] = mysqli_fetch_array($data,MYSQLI_ASSOC);

		$sql="SELECT * FROM `add_courier` order by order_inv DESC";
		$data = mysqli_query($con, $sql);
		$add_courier = mysqli_fetch_array($data,MYSQLI_ASSOC);;
		$result['order_inv']=$add_courier['tracking']+1;
		$result['order_inv'] = str_pad($result['order_inv'], 6, '0', STR_PAD_LEFT);
		header('Content-type: application/json');
		echo json_encode($result);
    }
    
    if (isset($_GET['query'])) {
    	$query=explode(' (', $_GET['query']);
        
        
        $sql='SELECT * FROM `add_courier` WHERE `username` LIKE "%'.$query[0].'%"';    	
        $data = mysqli_query($con, $sql);
        $array = array();
        while ($row = mysqli_fetch_array($data,MYSQLI_ASSOC)) {
            $array[] = $row['username']." (".$row['order_inv'].")";
        }
        if(!empty($array))
        {
        	echo json_encode($array);
        	return;
        }
        else
        {
        	$sql='SELECT * FROM `add_courier` WHERE `order_inv` LIKE "%'.$query[0].'%"';	
        	$data = mysqli_query($con, $sql);
        	$array = array();
        	while ($row = mysqli_fetch_array($data,MYSQLI_ASSOC)) {
        	    $array[] = $row['username']." (".$row['order_inv'].")";
        	}
        	if(!empty($array))
        	{
        		echo json_encode($array);
        		return;
        	}
        	else
        	{
        		$sql='SELECT * FROM `add_courier` WHERE `company` LIKE "%'.$query[0].'%"';   	
        		$data = mysqli_query($con, $sql);
        		$array = array();
        		while ($row = mysqli_fetch_array($data,MYSQLI_ASSOC)) {
        		    $array[] = $row['company']." (".$row['order_inv'].")";
        		}
        		if(!empty($array))
        		{
        			echo json_encode($array);
        			return;
        		}
        		else
        		{
        			$sql='SELECT * FROM `add_courier` WHERE `address` LIKE "%'.$query[0].'%"';	
        			$data = mysqli_query($con, $sql);
        			$array = array();
        			while ($row = mysqli_fetch_array($data,MYSQLI_ASSOC)) {
        			    $array[] = $row['address']." (".$row['order_inv'].")";
        			}
        			if(!empty($array))
        			{
        				echo json_encode($array);
        				return;
        			}
        			else
        			{
        				$sql='SELECT * FROM `add_courier` WHERE `s_name` LIKE "%'.$query[0].'%"';
        				$data = mysqli_query($con, $sql);
        				$array = array();
        				while ($row = mysqli_fetch_array($data,MYSQLI_ASSOC)) {
        				    $array[] = $row['s_name']." (".$row['order_inv'].")";
        				}
        				if(!empty($array))
        				{
        					echo json_encode($array);
        					return;
        				}
        				else
        				{
        					$sql='SELECT * FROM `add_courier` WHERE `lastname` LIKE "%'.$query[0].'%"';	
        					$data = mysqli_query($con, $sql);
        					$array = array();
        					while ($row = mysqli_fetch_array($data,MYSQLI_ASSOC)) {
        					    $array[] = $row['lastname']." (".$row['order_inv'].")";
        					}
        					if(!empty($array))
        					{
        						echo json_encode($array);
        						return;
        					}
        					else
        					{
        						$sql='SELECT * FROM `add_courier` WHERE `r_company` LIKE "%'.$query[0].'%"';
        						$data = mysqli_query($con, $sql);
        						$array = array();
        						while ($row = mysqli_fetch_array($data,MYSQLI_ASSOC)) {
        						    $array[] = $row['r_company']." (".$row['order_inv'].")";
        						}
        						if(!empty($array))
        						{
        							echo json_encode($array);
        							return;
        						}
        						else
        						{
        
        							$sql='SELECT * FROM `add_courier` WHERE `r_address` LIKE "%'.$query[0].'%"';	
        							$data = mysqli_query($con, $sql);
        							$array = array();
        							while ($row = mysqli_fetch_array($data,MYSQLI_ASSOC)) {
        							    $array[] = $row['r_address']." (".$row['order_inv'].")";
        							}
        							if(!empty($array))
        							{
        								echo json_encode($array);
        								return;
        							}
        							else
        							{
        								$sql='SELECT * FROM `add_courier` WHERE `r_name` LIKE "%'.$query[0].'%"';
        								$data = mysqli_query($con, $sql);
        								$array = array();
        								while ($row = mysqli_fetch_array($data,MYSQLI_ASSOC)) {
        								    $array[] = $row['r_name']." (".$row['order_inv'].")";
        								}
        								if(!empty($array))
        								{
        									echo json_encode($array);
        									return;
        								}
        								else
        								{
        
        									$sql='SELECT * FROM `add_courier` WHERE `r_lastname` LIKE "%'.$query[0].'%"';	
        									$data = mysqli_query($con, $sql);
        									$array = array();
        									while ($row = mysqli_fetch_array($data,MYSQLI_ASSOC)) {
        									    $array[] = $row['r_lastname']." (".$row['order_inv'].")";
        									}
        									if(!empty($array))
        									{
        										echo json_encode($array);
        										return;
        									}
        									else
        									{
        									
        
        									}
        								}
        							}
        						}
        					}
        				}
        			}
        		}
        	}	
        }
	}

	if (isset($_POST['get_searched_data'])){
		$query=explode(' (', $_POST['query']);
		    	if(!isset($query[1]))
    	{
    		$query[1]='';
    	}
    	else
    	{
    		$query[1]=str_replace(')','',$query[1]);
    	}
    	$sql="SELECT * FROM `add_courier` WHERE `order_inv` LIKE '%".$query[1]."%'";
    	$data = mysqli_query($con, $sql);
		$result = mysqli_fetch_array($data,MYSQLI_ASSOC);		
		header('Content-type: application/json');
		echo json_encode($result);
    }
?>