<?php
	$java = $_POST['java'];
    $python = $_POST['python'];
    $CCpp = $_POST['CCpp'];
    $HTML = $_POST['HTML'];
    $CSS = $_POST['CSS'];
    $Js = $_POST['Js'];
    $Sequel = $_POST['Sequel'];
    $kotlin = $_POST['kotlin'];
    $CHash = $_POST['CHash'];
    $dotNet = $_POST['dotNet'];
    $php = $_POST['php'];
    $R = $_POST['R'];
    $ruby = $_POST['ruby'];
    $others = $_POST['others'];

	$conn = new mysqli('localhost','root','','jrs1');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} 
	else 
	{
		$stmt = $conn->prepare("insert into quiz1(java, python, CCpp, HTML, CSS, Js, Sequel, Kotlin, CHash, dotNet, php, R, ruby, others) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssssssssssss", $java, $python, $CCpp, $HTML, $CSS, $Js, $Sequel, $kotlin, $CHash, $dotNet, $php, $R, $ruby, $others);
		$execval = $stmt->execute();
		echo $execval;
		header("Location:QUIZ2.html"); 
		$stmt->close();
		$conn->close();
	}
?>