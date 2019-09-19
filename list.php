<?php 

	include 'connection.php';

	$sql = "SELECT * FROM users";

	$result = $conn->query($sql);

	if(mysqli_num_rows($result)){
		while ($row[] = mysqli_fetch_assoc($result)) {
			$json = json_encode($row);
		}
	}else{
		echo json_encode('result not found');
	}

	echo $json;

	$conn->close();

 ?>