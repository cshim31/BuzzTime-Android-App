<?php

	$con = mysqli_connect("localhost","sch1261315","Shim9602@","sch1261315");

	$userID = $_POST["userID"];
	$courseID = $_POST["courseNumber"];

	$statement = mysqli_prepare($con,"DELETE FROM SCHEDULE WHERE userID = ? AND courseID = ?");
	mysqli_stmt_bind_param($statement,"si",$userID,$courseID);
	mysqli_stmt_execute($statement);

	$response = array();
	$response["success"] = true;

	echo json_encode($response);
?>