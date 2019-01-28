<?php

include 'db_con.php';


$id = $_GET['award'];

$select_trainee = "SELECT * FROM trainee WHERE id = '".$id."' ";
$trainee_query = mysqli_query($con, $select_trainee);

$trainee_row = $trainee_query->fetch_assoc();
	$trainee = $trainee_row['title'].' '.$trainee_row['fname'].' '.$trainee_row['mname'].' '.$trainee_row['lname'].' '. $trainee_row['suffix'] ;
	$cert_type = $trainee_row['type_of_cert'];
	$hrs = $trainee_row['hrs'];
	$cert_no = $trainee_row['cert_no'];
	$train_id = $trainee_row['train_id'];
	$topic = $trainee_row['topic'];




$exploded_topics = explode('<br>', $topic);
$json = json_encode($exploded_topics);


$select_training = "SELECT * FROM training WHERE id = '".$train_id."' ";
$training_query = mysqli_query($con, $select_training);
$training_row = $training_query->fetch_assoc();
	$venue_of_train = $training_row['venue'];
	$training_facility_id = $training_row['facility_id'];
	$date_start = $training_row['date_started'];
	$date_end = $training_row['date_ended'];
	$lgu_assigntory = $training_row['lgu_assigntory'];
	$module = $training_row['module_type'];
	$training_name = $training_row['train_name'];
	$award_venue = $training_row['venue_awarded'];
	$award_date = $training_row['date_awarded'];



$select_facility = "SELECT * FROM facility WHERE fac_id = '".$training_facility_id."' ";
$facility_query = mysqli_query($con, $select_facility);
$facility_row = $facility_query->fetch_assoc();
	$facility_facility_id = $facility_row['hfhudcode'];
	$facility_name = $facility_row['hfhudname'];
	$facility_region = $facility_row['region_code'];
	$facility_prov = $facility_row['province_code'];
	$facility_muncity = $facility_row['muncity_code'];
	$fac_id = $facility_row['fac_id'];

$select_logo = "SELECT * FROM training_facility WHERE fac_id = '".$fac_id."' ";
$logo_query = mysqli_query($con, $select_logo);
$logo = $logo_query->fetch_assoc();
$logo_name = $logo['logo'];


$select_prov = "SELECT * FROM province WHERE province_code = '".$facility_prov."' ";
$prov_query = mysqli_query($con, $select_prov);
$prov_row = $prov_query->fetch_assoc();
$prov_val = $prov_row['province_name'];


$select_muncity = "SELECT * FROM muncity WHERE muncity_code = '".$facility_muncity."' ";
$muncity_query = mysqli_query($con, $select_muncity);
$muncity_row = $muncity_query->fetch_assoc();
$muncity_val = $muncity_row['muncity_name'];

//creating the pdf output for the certificate
// x = --
// y = |
//x max 215.9
// 215.9 × 279.4 mm (Letter, portrait)


if (isset($_GET['award'])) {
require 'fpdf181/fpdf.php';
$pdf = new FPDF('P', 'mm', 'Letter');

$pdf->AddPage();
//border
$pdf->SetLineWidth(2);
$pdf->SetDrawColor(68,0,123);
$pdf->Rect(20,20,176,240,'D');

//icon
$pdf->Image('icon/wah_icon.png', 40,25 ,27); //wah logo
$pdf->Image('icon/tarlac_logo.jpg', 93, 22.8, 31);	//tarlac logo
$pdf->Image('facility_logos/'.$logo_name.'', 146, 25.2, 25);

//text
$pdf->SetFont('times', 'B', 12); //font type - styl bold italic or regular but i use regular - font size
$pdf->MultiCell(0, 5, "\n \n", 0, "C", 0);
$pdf->MultiCell(0, 5, "\n \n \n \n \n \n \n Award this", 0, "C", 0); //award this txt

$pdf->SetFont('times', 'B', 22); //font for cert completion
$pdf->SetTextColor(68,0,123); //font color rgb
$pdf->MultiCell(0, 5, "Certificate of " .$cert_type. "", 0, "C", 0);

// function numform($cert_no){
//  $formnum = sprintf('%04', $cert_no);
// }

$pdf->SetFont('times', 'B', 12); //font for cert_num
$pdf->SetTextColor(0,0,0);
$pdf->MultiCell(0, 5, "(Certificate # ".$cert_no. ")", 0, "C", 0);
$pdf->MultiCell(0, 4, "\n to", 0, "C", 0);

// /line for name
$pdf->SetLineWidth(0.5);
$pdf->SetDrawColor(0,0,0);
$pdf->SetFont('times', 'B', 24);
$pdf->MultiCell(0, 3, "\n \n \n", 0, "C", 0);
$pdf->MultiCell(0, 5, "" .ucwords($trainee). "\n", 0, 'C', 0);
$pdf->Rect(33,93.5,150,.2,'D');
//$pdf->Line(30, 98, 185, 98);

$pdf->SetFont('times', 'B', 12);
$pdf->MultiCell(0, 2, "", 0 , "C", 0);
$pdf->MultiCell(0, 5, "for completing the training on", 0, "C", 0);
$pdf->MultiCell(0, 3, "", 0, "C", 0);
$pdf->MultiCell(0,5,"ELECTRONIC HEALTH RECORDING SYSTERM (EHR)", 0, "C", 0);

$pdf->SetFont('times', 'B', 22); //font for cert completion
$pdf->SetTextColor(68,0,123); //font color rgb
$pdf->MultiCell(0, 2, "", 0, "C", 0);
$pdf->MultiCell(0,5,"".ucwords($training_name)."", 0, "C", 0);

function start_date($date_start){
	$dstart = date('F j', strtotime($date_start));
	return $dstart;
}

function end_date($date_end){
	$dend = date('j Y', strtotime($date_end));
	return $dend;
}


$pdf->SetFont('times', 'B', 12); //font for cert_num
$pdf->SetTextColor(0,0,0);
$pdf->MultiCell(0, 3, "", 0, "C", 0);
$pdf->MultiCell(0, 5, "from " .start_date($date_start). "-" .end_date($date_end). " at " .$venue_of_train. "",0, "C", 0);


$pdf->Multicell(0, 5, "
	This certificate is awarded based on participant's performance
	and attendance rating for the duration of the training.
	For this Certificate of ". $cert_type .", the awardee satisfactorily completed
	all the requirements for the following EHR topics: ", 0, 'C', 0);

//topics in here
$pdf->SetTextColor(68,0,123); //font color rgb
$modules1 = "";
$bullet = 1;
$marginer = 154;
foreach (json_decode($json) as $key => $value) {
	$pdf->Text(55, $marginer, $bullet . ". " . $value . "");
	$bullet += 1;
	$marginer += 5;
}

function numberTowords($hrs)
{
$ones = array(
0 =>"zero",
1 => "one",
2 => "two",
3 => "three",
4 => "four",
5 => "five",
6 => "six",
7 => "seven",
8 => "eight",
9 => "nine",
10 => "ten",
11 => "eleven",
12 => "twelve",
13 => "thirteen",
14 => "fourteen",
15 => "fifteen",
16 => "sixteen",
17 => "seventeen",
18 => "eighteen",
19 => "nineteen",
// "014" => "FOURTEEN"
);
$tens = array(
0 => "zero",
1 => "ten",
2 => "twenty",
3 => "thirty",
4 => "forty",
5 => "ffifty",
6 => "sixty",
7 => "seventy",
8 => "eighty",
9 => "ninety"
);
$hundreds = array(
"hundred",
"thousand",
"million",
"billion",
"trillion",
"quadrillion"
); //limit t quadrillion
$hrs = number_format($hrs,2,".",",");
$hrs_arr = explode(".",$hrs);
$wholenum = $hrs_arr[0];
$decnum = $hrs_arr[1];
$whole_arr = array_reverse(explode(",",$wholenum));
krsort($whole_arr,1);
$rettxt = "";
foreach($whole_arr as $key => $i){
while(substr($i,0,1)=="0")
$i=substr($i,1,5);
if($i < 20){
//echo "getting:".$i;
$rettxt .= $ones[$i];
}elseif($i < 100){
if(substr($i,0,1)!="0")  $rettxt .= $tens[substr($i,0,1)];
if(substr($i,1,1)!="0") $rettxt .= " ".$ones[substr($i,1,1)];
}else{
if(substr($i,0,1)!="0") $rettxt .= $ones[substr($i,0,1)]." ".$hundreds[0];
if(substr($i,1,1)!="0")$rettxt .= " ".$tens[substr($i,1,1)];
if(substr($i,2,1)!="0")$rettxt .= " ".$ones[substr($i,2,1)];
}
if($key > 0){
$rettxt .= " ".$hundreds[$key]." ";
}
}
if($decnum > 0){
$rettxt .= " and ";
if($decnum < 20){
$rettxt .= $ones[$decnum];
}elseif($decnum < 100){
$rettxt .= $tens[substr($decnum,0,1)];
$rettxt .= " ".$ones[substr($decnum,1,1)];
}
}
return $rettxt;
}

function day($award_date){
	$dayformat = date('jS', strtotime($award_date));
	return $dayformat;
}

function monthyear($award_date){
	$monyrformat = date('F Y', strtotime($award_date));
	return $monyrformat;
}

$pdf->SetTextColor(0,0,0); //font color rgb
$pdf->MultiCell(0, 15, "\n \n \n \n", 0, "C", 0);
!$pdf->MultiCell(0, 2, "", 0, "C", 0);
$pdf->MultiCell(0, 5, "This further certifies that the awardee successfully completed
the required "	.numberTowords($hrs). " hours (" .$hrs. ") of seminar and hands-on training
on the modules outlined above. This certificate is awarded
this " .day($award_date). " day of " .monthyear($award_date). " at " .$award_venue. ".", 0, 'C', 0);
$pdf->MultiCell(0, 13, "", 0, "C", 0);

$pdf->Cell(10, 3, "", 0, 0, 'C');
$pdf->Cell(90, 3, "Engr. Dennis Norman T. Go", 0, 0, 'C');
$pdf->Cell(10, 3, "", 0, 0, "C");
$pdf->Cell(70, 3, "" .$lgu_assigntory. "", 0, 0, 'C');
$pdf->Cell(10, 3, "", 0, 0, 'C');
$pdf->MultiCell(0, 3, "\n", 0, "C", 0);
$pdf->line(35, 246, 95, 246);
$pdf->line(125, 246, 185, 246);

$pdf->SetFont('times', '', 7.5);
$pdf->Cell(10, 3, "", 0, 0, 'C');
$pdf->Cell(90, 8, "President", 0, 0, "C");
$pdf->Cell(10, 3, "", 0, 0, "C");
$pdf->Cell(70, 8, "LGU Signatory", 0, 0, "C");
$pdf->Cell(10, 3, "", 0, 0, 'C');
$pdf->MultiCell(0, 2.3, "\n", 0, "C", 0);
$pdf->Cell(10, 3, "", 0, 0, 'C');
$pdf->Cell(90, 8, "Wireless Access for Health Initiative, Inc.", 0, 0, "C");
$pdf->Cell(10, 3, "", 0, 0, "C");
$pdf->Cell(70, 8, "".$muncity_val.", ".$prov_val.", Philippines", 0, 0, "C");

$pdf->Image('president_sign.png', 55, 230, 20);


$pdf->Output();
}


 ?>
