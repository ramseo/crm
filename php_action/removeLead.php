<?php

require_once 'core.php';


//$valid['success'] = array('success' => false, 'messages' => array());

//$categoriesId = $_POST['categoriesId'];
$Id = $_GET['id'];
if ($Id) {
	$sql = "DELETE FROM `inquiry_data` WHERE id = {$Id}";

	if ($connect->query($sql) === TRUE) {
		$valid['success'] = true;
		$valid['messages'] = "Successfully Removed";
		header('location:../lead.php');
	} else {
		$valid['success'] = false;
		$valid['messages'] = "Error while remove the lead";
	}

	$connect->close();

	echo json_encode($valid);
} // /if $_POST