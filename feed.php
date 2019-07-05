<?php
	$con = mysqli_connect("localhost","id5399154_root","atikrant007","id5399154_mydatabase");
	$username=$_POST['username'];
	$event_name=$_POST['select_event'];
	$q1 = $_POST['q1'];
	$q2 = $_POST['q2'];
	$q3 = $_POST['q3'];
	$q4 = $_POST['q4'];
	$q5 = $_POST['q5'];
	$q6 = $_POST['q6'];
	$comments = $_POST['comments'];
	
	if($_POST['submit'])
	{
		$sql = mysqli_query($con,"Insert into feedback_record(username,event_name,q1,q2,q3,q4,q5,q6,comments) values('$username','$event_name','$q1','$q2','$q3','$q4','$q5','$q6','$comments')");
		
		if ($sql) {
			header('location:feed_thank.html');
		}
		else{
			echo "failed to save your feedback";
		}
		mysqli_query($sql);

	}
?>