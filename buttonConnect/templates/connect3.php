<?php
        $conn = mysqli_connect('localhost','root','','jrs1');
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            }
            $sql = "SELECT * FROM PYINDEX";
            $result = $conn->query($sql);
            $row = $result -> fetch_assoc();
    $conn->close();
?>

<!DOCTYPE html>
<html>
<body>
    <div>
        <!-- PYSCRIPT -->
        <py-script src="JRS.py"></py-script>
        RECOMMENDED JOB:
    </div>
</body>
</html>

<?php
$ch = $row["PYINDEX"];
switch ($ch) 
{
    case 1:
        appDev();
        break;
    case 2:
        BackendDev();
        break;
    case 3:
        FrontendDev();
        break;
    case 4:
        dbAdmin();
        break; 
    case 5:
        dbDev();
        break; 
    case 6:
        FullstackDev();
        break;
    case 7:
        Sde();
        break;
    case 8:
        Testing();
        break;
    case 9:
        DataScientist();
        break;
    case 10:
        DataAnalyst();
        break;
    case 11:
        MLEngineer();
        break;
    case 12:
        CloudArchitect();
        break;
    case 13:
        CloudSecurityAnalyst();
        break;
    case 14:
        ProjectCoordinator();
        break;
    case 15:
        BusinessAnalyst();
        break;
    case 16:
        SEOSpecialist();
        break;
    case 17:
        SocialMediaMarketing();
        break;
}

function appDev() {
    echo "appDev ";
}
function BackendDev()
{
    echo "BackendDev ";
}
function FrontendDev()
{
    echo "FrontendDev ";
}
function dbAdmin()
{
    echo "dbAdmin ";
}
function dbDev()
{
    echo "dbDev ";
}
function FullstackDev()
{
    echo "FullstackDev ";
}
function Sde()
{
    echo "Sde ";
}
function Testing()
{
    echo "Testing ";
}
function DataScientist()
{
    echo "DataScientist";
}
function DataAnalyst()
{
    echo "DataAnalyst";
}
function MLEngineer()
{
    echo "MLEngineer";
}
function CloudArchitect()
{
    echo "CloudArchitect";
}
function CloudSecurityAnalyst()
{
    echo "CloudSecurityAnalyst";
}
function ProjectCoordinator()
{
    echo "ProjectCoordinator ";
}
function BusinessAnalyst()
{
    echo "BusinessAnalyst";
}
function SEOSpecialist()
{
    echo "SEOSpecialist";
}
function SocialMediaMarketing()
{
    echo "SocialMediaMarketing";
}
?>

