<?php      
    
    $email = $_POST['email'];  
    $password = $_POST['password']; 
      
    $conn = new mysqli("localhost", "root", "","jrs1");  
    if($conn->connect_error) {  
        die("Failed to connect with MySQL: ".$conn->connect_error);  
    }  
    else{
        $stmt=$conn->prepare("select * from login where email = ?");
        $stmt->bind_param("s",$email);
        $stmt->execute();
        $stmt_result=$stmt->get_result();
        if($stmt_result->num_rows>0){
            $data = $stmt_result->fetch_assoc();
            if($data['password']===$password){
        		header("Location:home.html"); 
            }
             else{
                echo "<h2>Invalid email or password<h2>";
            }
        }
        else{
            echo "<h2>Invalid email or password<h2>";
        }
    }
?>