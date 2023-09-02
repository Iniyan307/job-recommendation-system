<!DOCTYPE html>
<html>
    <head>
    <title>Search</title>
    <!-- <script src="https://kit.fontawesome.com/1935d064dd.js" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="quiz.css">
    </head>
<body>
    <div class="container">
        <div class="quiz-box">

            <div id="quiz">
                <h1>Contact Details:</h1>
            </div>


<?php
    $conn = mysqli_connect('localhost','root','','jrs1');
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    }
    // $sql = "SELECT * FROM login";
    // $result = $conn->query($sql);
    // $row = $result -> fetch_assoc();

    if($_POST["AptitudeScore"]==""  or $_POST["TechnicalScore"]==""){
        echo "<h2>Enter score...!</h2>
              <a href='search.html'>Exit</a>";
    }
    else
    {
        $job=trim($_POST["job"]);
        $MinAScore=trim($_POST["AptitudeScore"]);
        $MinTScore=trim($_POST["TechnicalScore"]);
        // $query=$conn->prepare("SELECT * FROM login WHERE score>='%$MinScore%' AND job=''%$job%");
        $sql = "SELECT * FROM login WHERE AptitudeScore>='%$MinAScore%' AND TechnicalScore>='%$MinTScore%' AND job like '%$job%'";
        $result = $conn->query($sql);
        $row = $result -> fetch_assoc();

        
        // print_r($row);
        if($row != NULL)
        {
            foreach ($row as $key => $value) {
                if($key!='ID' and $key!='password')
                {
                    echo '<h2>' . $key . " : " . $value . "</br></h2>";
                }
            }
        }
        else
        {
            echo '<h2>No candidates available</h2>';
        }
        // $str = implode(" ",$row);  
        // echo $str;

    }
?>

</div>
</div>
</body>
</html>