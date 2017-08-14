<?php
$now = date('m/d/Y');
if(isset($_POST['acct']) && ($_POST['acct']) == ""){
    $acct = "N/A";
} else if(is_numeric($_POST['acct'])) {
    $acct = $_POST['acct'];
} else {
    $acct = "Invalid Acct Input";
}
if(isset($_POST['pcp']) && ($_POST['pcp']) == ""){
    $pcp = "N/A";
} else if(is_string($_POST['pcp'])) {
    $pcp = $_POST['pcp'];
} else {
    $pcp = "Invalid PCP Input";
}
if(isset($_POST['room']) && ($_POST['room']) == ""){
    $room = "N/A";
} else if(is_numeric($_POST['room'])) {
    $room = $_POST['room'];
} else {
    $room = "Invalid Room Input";
}
if(isset($_POST['pname']) && ($_POST['pname']) == ""){
    $pname = "N/A";
} else  if(is_string($_POST['pname'])) {
    $pname = $_POST['pname'];
} else {
    $pname = "Invalid Patient Name Input";
}
if(isset($_POST['ssn']) && ($_POST['ssn']) == ""){
    $ssn = "N/A";
} else if(preg_match("/(\d\d\d)-(\d\d)-(\d\d\d\d)/", $_POST['ssn'])) {
    $ssn = $_POST['ssn'];
} else {
    $ssn = "Invalid SSN Input";
}
if(isset($_POST['address']) && ($_POST['address']) == ""){
    $address = "N/A";
} else if(is_string($_POST['address'])) {
    $address = $_POST['address'];
} else {
    $address = "Invalid Address Input";
}
if(isset($_POST['city']) && ($_POST['city']) == ""){
    $city = "N/A";
} else if(is_string($_POST['city'])){
    $city = $_POST['city'];
} else {
    $city = "Invalid City Data";
}
if(isset($_POST['state']) && ($_POST['state']) == ""){
    $state = "N/A";
} else if(is_string($_POST['state'])){
    $state = $_POST['state'];
} else {
    $state = "Invalid State Data";
}
if(isset($_POST['zip']) && ($_POST['zip']) == ""){
    $zip = "N/A";
} else if(is_numeric($_POST['zip'])) {
    $zip = $_POST['zip'];
} else {
    $zip = "Invalid Zip Code Input";
}
if(isset($_POST['phone']) && ($_POST['phone']) == ""){
    $phone = "N/A";
} else if(preg_match("/\((\d\d\d)\)(\d\d\d)-(\d\d\d\d)/", $_POST['phone'])) {
    $phone = $_POST['phone'];
} else {
    $phone = "Invalid Phone Input";
}
if(isset($_POST['dob']) && ($_POST['dob']) == ""){
    $dob = "N/A";
} else if(preg_match("/(\d\d)\/(\d\d)\/(\d\d\d\d)/", $_POST['dob'])) {
    $dob = $_POST['dob'];
} else {
    $dob = "Invalid DOB Input";
}
if(isset($_POST['sex']) && ($_POST['sex']) == ""){
    $sex = "N/A";
} else if(is_string($_POST['sex'])) {
    $sex = $_POST['sex'];
} else {
    $sex = "Invalid Sex Input";
}
if(isset($_POST['race']) && ($_POST['race']) == ""){
    $race = "N/A";
} else if(is_string($_POST['race'])) {
    $race = $_POST['race'];
} else {
    $race = "Invalid Race Input";
}
if(isset($_POST['height']) && ($_POST['height']) == ""){
    $height = "N/A";
} else if((preg_match("/(\d)'(\d)\"/", $_POST['height']) || preg_match("/(\d)'(\d\d)\"/", $_POST['height']))) {
    $height = $_POST['height'];
} else {
    $height = "Invalid Height Input";
}
if(isset($_POST['weight']) && ($_POST['weight']) == ""){
    $weight = "N/A";
} else if(is_numeric($_POST['weight'])) {
    $weight = $_POST['weight'] . " lbs";
} else {
    $weight = "Invalid Weight Input";
}
if(isset($_POST['fhistory']) && ($_POST['fhistory']) == ""){
    $fhistory = "N/A";
} else if(is_string($_POST['fhistory'])) {
    $fhistory = $_POST['fhistory'];
} else {
    $fhistory = "Invalid Family History Input";
}
if(isset($_POST['allergies']) && ($_POST['allergies']) == ""){
    $allergies = "N/A";
} else if(is_string($_POST['allergies'])) {
    $allergies = $_POST['allergies'];
} else {
    $allergies = "Invalid Allergies Input";
}
if(isset($_POST['pemployer']) && ($_POST['pemployer']) == ""){
    $pemployer = "N/A";
} else if(is_string($_POST['pemployer'])) {
    $pemployer = $_POST['pemployer'];
} else {
    $pemployer = "Invalid Patient Employer Input";
}
if(isset($_POST['reason']) && ($_POST['reason']) == ""){
    $reason = "N/A";
} else if(is_string($_POST['reason'])) {
    $reason = $_POST['reason'];
} else {
    $reason = "Invalid Reason For Visit Input";
}
if(isset($_POST['insurance']) && ($_POST['insurance']) == ""){
    $insurance = "N/A";
} else if(is_string($_POST['insurance'])) {
    $insurance = $_POST['insurance'];
} else {
    $insurance = "Invalid Insurance Input";
}
if(isset($_POST['diagnosis']) && ($_POST['diagnosis']) == ""){
    $diagnosis = "N/A";
} else if(is_string($_POST['diagnosis'])) {
    $diagnosis = $_POST['diagnosis'];
} else {
    $diagnosis = "Invalid Diagnosis Input";
}

echo "<html>
    <head>
    <meta charset=\"UTF-8\">
    <title>Patient Chart</title>
    </head>
    <link rel=\"stylesheet\" href=\"style.css\" />
	  <body>
	  <fieldset>
	  		<h1 style=\"color: red\">
	  				 Patient Chart
	  		</h1>
	  		<hr />
	  		<p id=\"main-paragraph\">
	  				Account Number: $acct <br>
	  				Admit Date: $now <br>
	  				Primary Care Physician: $pcp <br>
	  				Room #: $room <br>
	  				Patient Name: $pname <br>
	  				SSN: $ssn <br>
	  				Address: $address $city, $state $zip<br>
	  				Phone #: $phone <br>
	  				DOB: $dob <br>
	  				Sex: $sex <br>
	  				Race: $race <br>
	  				Height: $height <br>
	  				Weight: $weight <br>
	  				Family History: $fhistory <br>
	  				Allergies: $allergies <br>
	  				Patient Employer: $pemployer <br>
	  				Reason For Visit: $reason <br>
	  				Insurance Plan: $insurance <br>
	  				Current Diagnosis: $diagnosis 
	  		</p>
	  	</fieldset>
	   </body>
	  </html>";
?>