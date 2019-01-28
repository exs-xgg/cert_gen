<?php 
include 'db_con.php';


if (isset($_GET['facility'])) {
	$fac_name = $_GET['facility'];
	if (empty($fac_name)) {
		echo "Enter the ".'"'.'<b>'."Facility Name".'</b>'.'"';
	}
	else{
	$search_fac = "SELECT * FROM facility WHERE hfhudname LIKE '%" . $fac_name . "%' ";
	$search_query = mysqli_query($con, $search_fac)or die($con->error);
	if (mysqli_num_rows($search_query)> 0 ) {
		echo '<table class="table table-responsive table-striped table-hover"> 
		 			<thead>
		 			<tr>
		 			<th> Facility Name </th>
		 			<th> Facility ID </th>
		 			<th> Hfhudcode # </th>
		 			<th> Action <th>
		 			<tr>
		 			</thead>
		 			<tbody>
		 			';
		while ($row = $search_query->fetch_assoc()) {
		 
		echo $table = '<tr>
		 			<td> '.$row['hfhudname'].' </td>
		 			<td> '.$row['fac_id'].' </td>
		 			<td> '.$row['hfhudcode'].' </td>
		 			<td> <a href="update_facility_form.php?upd='.$row['hfhudcode'].'" class="btn btn-info"> Update </a> </td>
		 			<td> <a href="update_facility_process.php?del='.$row['hfhudcode'].'" class="btn btn-danger"> Delete </a> </td>
		 			<tr>';
		}
		echo '<tbody>
		 		   </table> ';
	}
	else{
		echo "No Facility Name Like ".'"'.'<b>'.$fac_name.'</b>'.'"';
	}
	}

}


if (isset($_GET['del'])) {
	 $del = $_GET['del'];
	$search_train_facility = "SELECT * FROM facility WHERE hfhudcode = '".$del."' ";
	$search_query = mysqli_query($con, $search_train_facility)or die($con->error);
	if (mysqli_num_rows($search_query)>0) {
		while ($fac_row = $search_query->fetch_assoc()) {
			$fac_id = $fac_row['fac_id'];
		}
	}
	$del_train_fac = "DELETE FROM training_facility WHERE fac_id = '".$fac_id."' ";
	$del_query = mysqli_query($con, $del_train_fac);
	$delete_facility = "DELETE FROM facility WHERE hfhudcode = '$del' ";
	if (mysqli_query($con, $delete_facility) === TRUE) {
		header('location:update_facility.php');
	}
	
}

if (isset($_POST['update_btn'])) {
	//echo $oldfile = $_POST['oldfile'];
	$region = $_POST['region'];
	$province = $_POST['province'];
	$muncity = $_POST['muncity'];
	$facility_name = $_POST['facility_name'];
	$id = $_POST['id'];
	echo $tf_id = $_POST['tf_id'];
	

	$select_img = "SELECT * FROM training_facility WHERE id = '".$tf_id."' ";
	$img_query = mysqli_query($con, $select_img);
	if (mysqli_num_rows($img_query)>0) {
		$img_row = $img_query->fetch_assoc();
		echo $img = $img_row['logo'];
		
	}




	$select_province = "SELECT * FROM province WHERE province_name = '".$province."' ";
	$province_query = mysqli_query($con, $select_province);
	if (mysqli_num_rows($province_query)>0) {
		while ($prov_row = $province_query->fetch_assoc()) {
		   $prov_code = $prov_row['province_code'];
	}
	}
	else{
		echo "No Province Code";
	}
	$select_muncity = "SELECT * FROM muncity WHERE muncity_name = '".$muncity."' ";
	$muncity_query = mysqli_query($con, $select_muncity);
	if (mysqli_num_rows($muncity_query)>0) {
		while ($muncity_row = $muncity_query->fetch_assoc()) {
		  $muncity_val = $muncity_row['muncity_code']; 
	}	
	}
	else{
		echo "No Muncity Code";
	}

	$update = "UPDATE facility SET region_code = $region, province_code = '$prov_code', muncity_code = '$muncity_val', hfhudname = '$facility_name' WHERE id = $id  ";
	
	if (mysqli_query($con, $update) === TRUE) {
		header('location:update_facility.php');
	}
	else{
		die($con->error);
	}



}

if (isset($_POST['upload_logo'])) {
	$logo = $_FILES['logo'];
	echo $tf_id = $_POST['tf_id'];
	//update img
		if (empty($logo)) {
			// $update_logo = "UPDATE training_facility SET logo = '$img' WHERE id = '$tf_id' ";
			// if (mysqli_query($con, $update_logo) === TRUE) {
				
			// }
		}
		else{
		$logoname = $_FILES['logo']['name'];
		$logotype = $_FILES['logo']['type'];
		$logotmp = $_FILES['logo']['tmp_name'];
		$image = move_uploaded_file($logotmp, "facility_logos/$logoname");
		$update_logo = "UPDATE training_facility SET logo = '$logoname' WHERE id = '$tf_id' ";
			if (mysqli_query($con, $update_logo) === TRUE) {
		header('location:update_facility.php');
		}
		else{
			die($con->error);
		}				
		}
}


?>