<?php
$host = "localhost";
$user = "root";
$password = '';
$db = 'EventSphere';

$con = mysqli_connect($host, $user, $password, $db);
if (mysqli_connect_errno()) {
    die("Failed to connect with MySQL: " . mysqli_connect_error());
} else {
    //echo "Connected to database";
}

$eventName = $_REQUEST['eventName'];
$dateTime = $_REQUEST['dateTime'];
$venue = $_REQUEST['venue'];
$attendance = $_REQUEST['attendance'];
$organizerName = $_REQUEST['organizerName'];
$contactPerson = $_REQUEST['contactPerson'];
$contactEmail = $_REQUEST['contactEmail'];
$contactPhone = $_REQUEST['contactPhone'];
$eventOverview = $_REQUEST['eventOverview'];
$estimatedBudget = $_REQUEST['estimatedBudget'];
$fundingSources = $_REQUEST['fundingSources'];
$resourceRequirements = $_REQUEST['resourceRequirements'];
$targetAudience = $_REQUEST['targetAudience'];
$promotionPlan = $_REQUEST['promotionPlan'];
$approvers = $_REQUEST['approvers'];
$detailfile = $_REQUEST['detailfile'];

$sql = "INSERT INTO eventmaster (eventname, datetime, venue, attendence, commiteename, contactperson, contactemail, contactphone, eventdetails, budget, fundingsources, promotionplan, targetaudience, approver, detailfile) 
        VALUES ('$eventName','$dateTime','$venue','$attendance','$organizerName','$contactPerson','$contactEmail','$contactPhone','$eventOverview','$estimatedBudget','$fundingSources','$promotionPlan','$targetAudience','$approvers','$detailfile')";

$result = mysqli_query($con, $sql);

if ($result) {
    header("Location: ../index.php");
} else {
    echo "Data cannot be inserted";
}
?>
