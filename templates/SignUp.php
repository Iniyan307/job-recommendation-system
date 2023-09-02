<?php
        $conn = mysqli_connect("localhost", "root", "", "jrs1");
         
        
        $Name =  $_POST['name'];
        $PhoneNo = $_POST['PhoneNo'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        
         
        // Performing insert query execution
        // here our table name is college
        
        $stmt = $conn->prepare("insert into login(Name, PhoneNo, email, password) values(?, ?, ?, ?)");
		$stmt->bind_param("siss", $Name, $PhoneNo, $email, $password);
		$execval = $stmt->execute();
		header("Location:home.html");
        
        
        mysqli_close($conn);
        ?>