<?php
	$con = mysqli_connect("localhost","sch1261315","Shim9602@","sch1261315");
	$result = mysqli_query($con,"SELECT * FROM ANNOUNCEMENT ORDER BY announcementDate DESC;");
	$response = array();

	while($row = mysqli_fetch_array($result)) {
		array_push($response,array("announcementContent" => $row[0], "announcementTitle" => $row[1], "announcementDate" => $row[2]));
	}
	
// Response to app part
//return encoding to jsonobject
	echo json_encode(array("response" => $response));
	mysqli_close($con);
?>