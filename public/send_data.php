<?php

$con=mysqli_connect("localhost","root","","fe_admission");

if(isset($_POST['submit'])) {


	$choice1 = $_POST['choice1'];
	$choice2 = $_POST['choice2'];
	$choice3 = $_POST['choice3'];
	$choice4 = $_POST['choice4'];
	$choice5 = $_POST['choice5'];

	$img = $_FILES['img']['name'];
	$tmp_name = $_FILES['img']['tmp_name'];
	move_uploaded_file($tmp_name,"images/student_images/".$img);

	$studentName = $_POST['studentName'];
	$address = $_POST['address'];
	$permanentAddress = $_POST['permanentAddress'];
	$date = $_POST['dob'];
	$birthPlace = $_POST['birthPlace'];
	$gender = $_POST['gender'];
	$bloodgrp = $_POST['bloodgrp'];
	$aadhar = $_POST['aadhar'];
	$category = $_POST['category'];
	$caste = $_POST['caste'];
	$religion = $_POST['religion'];
	$domicile = $_POST['domicile'];
	$nationality = $_POST['nationality'];
	$emailid = $_POST['emailid'];
	$capId = $_POST['capId'];

	$fName = $_POST['fName'];
	$fOccupation = $_POST['fOccupation'];
	$mName = $_POST['mName'];
	$mOccupation = $_POST['mOccupation'];
	$income = $_POST['income'];
	$gName = $_POST['gName'];
	$gContact = $_POST['gContact'];
	$gAddress = $_POST['gAddress'];

	$cContact = $_POST['cContact'];
	$fContact = $_POST['fContact'];
	$mContact = $_POST['mContact'];
	$landline = $_POST['landline'];

	$hscMaths = $_POST['hscMaths'];
	$hscPhysics = $_POST['hscPhysics'];
	$hscChem = $_POST['hscChem'];
	$hscTotal = $_POST['hscTotal'];
	$cetMerit = $_POST['cetMerit'];
	$cetMaths = $_POST['cetMaths'];
	$cetPhysics = $_POST['cetPhysics'];
	$cetChem = $_POST['cetChem'];
	$cetTotal = $_POST['cetTotal'];
	$jeeMerit = $_POST['jeeMerit'];
	$jeeMaths = $_POST['jeeMaths'];
	$jeePhysics = $_POST['jeePhysics'];
	$jeeChem = $_POST['jeeChem'];
	$jeeTotal = $_POST['jeeTotal'];

	$hscTotal = $_POST['hscTotal'];
	$hscObtained = $_POST['hscObtained'];
	$hscYear = $_POST['hscYear'];
	$hscBoard = $_POST['hscBoard'];
	$sscTotal = $_POST['sscTotal'];
	$sscObtained = $_POST['sscObtained'];
	$sscYear = $_POST['sscYear'];
	$sscBoard = $_POST['sscBoard'];
	$diplomaTotal = $_POST['diplomaTotal'];
	$diplomaObtained = $_POST['diplomaObtained'];
	$diplomaYear = $_POST['diplomaYear'];
	$diplomaBoard = $_POST['diplomaBoard'];

	$transaction = $_POST['transaction'];

	$insert1 = mysqli_query($con , "INSERT INTO `student_details` (`NAME`,`Course_1`,`Course_2`,`Course_3`,`Course_4`,`Course_5`,`Address_1`,`Address_2`,`DOB`,`POB`,`gender`,`blood_gp`,`aadhar_no`,`category`,`sub_cast`,`religion`,`maha_domicile`,`nationality`,`emailid`,`cap_app_id`,`student_img`) VALUES ('$studentName','$choice1','$choice2','$choice3','$choice4','$choice5','$address','permanentAddress','$date','$birthPlace','$gender','$bloodgrp','$aadhar','$category','$caste','$religion','$domicile','nationality','$emailid','$capId','$img')");

	$insert2 = mysqli_query($con, "INSERT INTO `otherdetails` (`father_name`,`mother_name`,`father_occup`,`mother_occup`,`annual_income`,`guradian_name`,`father_contact`,`mother_contact`,`cand_contact`,`guardian_contact`,`landline`,`transaction_id`) VALUES ('$fName','$mName','$fOccupation','$mOccupation','$income','$gName','$fContact','$mContact','$cContact','$gContact','$landline','$transaction')");

	$insert3 = mysqli_query($con, "INSERT INTO `mark_details` (`hsc_math`,`hsc_ph`,`hsc_chem`,`hsc_total`,`cet_cap_merit_no`,`cet_math`,`cet_phy`,`cet_chem`,`cet_total`,`jee_cap_merit_no`,`jee_math`,`jee_phy`,`jee_chem`,`jee_total`,`hsc_marks`,`hsc_yop`,`ssc_marks`,`ssc_yop`,`hsc_boardname`,`ssc_boardname`,`diploma_marks`,`diploma_yop`,`diploma_boradname`,`ssc_total`,`diploma_total`) VALUES ('$hscMaths','$hscPhysics','$hscChem','$hscTotal','$cetMerit','$cetMaths','$cetPhysics','$cetChem','$cetTotal','$jeeMerit','$jeeMaths','$jeePhysics','$jeeChem','$jeeTotal','$hscObtained','$hscYear','$sscObtained','$sscYear','$hscBoard','$sscBoard','$diplomaObtained','$diplomaYear','$diplomaBoard','$sscTotal','$diplomaTotal')");

	if(($insert1)&&($insert2)&&($insert3)) {
		echo "<h2>Form submitted successfully<h2><br>";
		echo "<a href=''>Go to FCRIT website</a><br><br>";

		$sql = "SELECT `Application_NO` FROM `student_details` WHERE cap_app_id='$capId'";
		$result = $con->query($sql);
		$row = $result->fetch_assoc();
		$id = $row["Application_NO"];
		echo "Your application id is ".$id;
	}




}	

?>