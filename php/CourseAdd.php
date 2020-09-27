<?php

	$con = mysqli_connect("localhost","sch1261315","Shim9602@","sch1261315");

	$userID = $_POST["userID"];
	$courseNumber = $_POST["courseNumber"];

	$statement = mysqli_prepare($con,"INSERT INTO SCHEDULE VALUES (?,?)");
	mysqli_stmt_bind_param($statement,"ss",$courseNumber,$userID);
	mysqli_stmt_execute($statement);

	$response = array();
	$response["success"] = true;

	echo json_encode($response);
?>