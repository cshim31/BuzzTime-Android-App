<?php

	header("Content-Type: text/html; charset =UTF-8");
	$con = mysqli_connect("localhost","sch1261315","Shim9602@","sch1261315");

	$courseUniversity = $_GET["courseUniversity"];
	$courseYear = $_GET["courseYear"];
	$courseTerm = $_GET["courseTerm"];
	$courseArea = $_GET["courseArea"];
	$courseMajor = $_GET["courseMajor"];

	$temp = 'Undergraduate Semester and Graduate Semester';
	$result1 = mysqli_query($con, "SELECT * FROM COURSE WHERE courseUniversity = '$courseUniversity' AND courseYear = '$courseYear' AND courseTerm = '$courseTerm' AND courseArea = '$courseArea' AND courseMajor = '$courseMajor'");

	$result2 = mysqli_query($con, "SELECT * FROM COURSE WHERE courseUniversity = '$temp' AND courseYear = '$courseYear' AND courseTerm = '$courseTerm' AND courseArea = '$courseArea' AND courseMajor = '$courseMajor'");


	$response = array();
	while($row = mysqli_fetch_array($result1)) {
		array_push($response,array("courseNumber" => $row[0], "courseUniversity" => $row[1], "courseYear" => $row[2], "courseTerm" => $row[3], "courseArea" => $row[4], "courseMajor" => $row[5],  "courseTitle" => $row[6],"courseCredit" => $row[7],  "courseProfessor" => $row[8], "courseTime" => $row[9], "courseLocation" => $row[10], "courseID" => $row[11], "courseDivide" => $row[12]));
	}
	while($row = mysqli_fetch_array($result2)) {
		array_push($response,array("courseNumber" => $row[0], "courseUniversity" => $row[1], "courseYear" => $row[2], "courseTerm" => $row[3], "courseArea" => $row[4], "courseMajor" => $row[5],  "courseTitle" => $row[6],"courseCredit" => $row[7],  "courseProfessor" => $row[8], "courseTime" => $row[9], "courseLocation" => $row[10], "courseID" => $row[11], "courseDivide" => $row[12]));
	}

	echo json_encode(array("response" => $response), JSON_UNESCAPED_UNICODE);
	mysqli_close($con);
?>