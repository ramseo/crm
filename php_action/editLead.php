<?php

require_once 'core.php';

//$valid['success'] = array('success' => false, 'messages' => array());
$Id = $_GET['id'];
if ($_POST) {

	// echo "<pre>";
	// print_r($_POST);
	// exit;

	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$location = $_POST['location'];
	$follow_ups = $_POST['follow_ups'];
	$percentage = $_POST['percentage'];
	$status = $_POST['status'];

	// print_r($status);
	// exit;

	$sql = "UPDATE `inquiry_data` SET name = '$name', phone = '$phone', email = '$email', location = '$location', follow_ups = '$follow_ups', percentage = '$percentage'  , status = '$status' WHERE id = '$Id'";

	if ($connect->query($sql) === TRUE) {
		$valid['success'] = true;
		$valid['messages'] = "Successfully Updated";
		if ($status == 1) {
			header('location:../new-lead.php');
		} elseif ($status == 2) {
			header('location:../working-lead.php');
		} elseif ($status == 3) {
			header('location:../contact-lead.php');
		} elseif ($status == 4) {
			header('location:../qualified-lead.php');
		} elseif ($status == 5) {
			header('location:../failed-lead.php');
		} else {
			header('location:../closed-lead.php');
		}
	} else {
		$valid['success'] = false;
		$valid['messages'] = "Error while updating the leads";
	}

	$connect->close();

	echo json_encode($valid);
} // /if $_POST