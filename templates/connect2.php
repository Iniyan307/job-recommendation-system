<?php
	$Communication = $_POST['Communication'];
    $Creativity = $_POST['Creativity'];
    $CriticalThinking = $_POST['CriticalThinking'];
    $ProblemSolving = $_POST['ProblemSolving'];
    $AppliedMathematics = $_POST['AppliedMathematics'];
    $Leadership = $_POST['Leadership'];
    $ProjectManagement = $_POST['ProjectManagement'];
    $TeamManagement = $_POST['TeamManagement'];
    $Multitasking = $_POST['Multitasking'];
    $Statergy = $_POST['Statergy'];
    $Budgeting = $_POST['Budgeting'];
    $Planning = $_POST['Planning'];
    $WritingSkills = $_POST['WritingSkills'];

	$conn = new mysqli('localhost','root','','jrs1');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into quiz2(Communication, Creativity, CriticalThinking, ProblemSolving, AppliedMathematics, Leadership, ProjectManagement, TeamManagement, Multitasking, Statergy, Budgeting, Planning, WritingSkills) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssssssssss", $Communication, $Creativity, $CriticalThinking, $ProblemSolving, $AppliedMathematics, $Leadership, $ProjectManagement, $TeamManagement, $Multitasking, $Statergy, $Budgeting, $Planning, $WritingSkills);
		$execval = $stmt->execute();
		echo $execval;
		header("Location:QUIZ.html");
		$stmt->close();
		$conn->close();
	}
?>