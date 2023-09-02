<?php
        $conn = mysqli_connect('localhost','root','','jrs1');
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT * FROM PYINDEX";
        $result = $conn->query($sql);
        $row = $result -> fetch_assoc();

        // $sql2 = "SELECT email FROM 'login'";
        // $email = $conn->query($sql);
        // $e = $email -> fetch_row();
        // echo $e;

        // $score=$_COOKIE["score"];
        // $sql3 = "UPDATE `login` SET `Score` = '$score' WHERE `login`.`email` = '$e';";
        // $conn->query($sql3);

    $conn->close();
?>

<!DOCTYPE html>
<html>
    <head>
    <title>Results</title>
    <script src="https://kit.fontawesome.com/1935d064dd.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="quiz.css">
    </head>
<body>
    <div class="container">
        <div class="quiz-box">

            <div id="quiz">
                <h1>Recommended Job</h1>
            </div>
        

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

function appDev() 
{
    echo "<h2>App Dev</h2>
    <ul><li>Understand client requirements and how they translate in application features</li>
    <li>Design creative prototypes according to specifications</li>
    <li>Evaluate existing applications to reprogram, update and add new features</li></ul>
    <h2>Average CTC : 5.3 Lakhs</h2>";
}
function BackendDev()
{
    echo "<h2>Back-end Dev</h2>
    <ul><li>Participate in the entire application lifecycle, focusing on coding and debugging</li>
    <li>In-depth understanding of the entire web development process</li>
    <li>Collaborate with Front-end developers to integrate user-facing elements with server side logic</li></ul>
    <h2>Average CTC :5.5 Lakhs</h2>";
}
function FrontendDev()
{
    echo "<h2>Front-end Dev</h2>
    <ul><li>Using markup languages like HTML to create user-friendly web pages</li>
    <li>Maintaining and improving website</li>
    <li>Optimizing applications for maximum speed</li></ul>
    <h2>Average CTC :4.6 Lakhs</h2>";
}
function dbAdmin()
{
    echo "<h2>DB Admin</h2>
    <ul><li>Build database systems of high availability and quality depending on each end user’s specialised role</li>
    <li>Design and implement database in accordance to end users information needs and views</li>
    <li>Define users and enable data distribution to the right user, in appropriate format and in a timely manner</li></ul>
    <h2>Average CTC :10.3 Lakhs</h2>";
}
function dbDev()
{
    echo"<h2>DB Dev</h2>
        <ul><li>Design stable, reliable and effective databases</li>
        <li>Optimize and maintain legacy systems</li>
        <li>Modify databases according to requests and perform tests</li></ul>
        <h2>Average CTC : 5.3 Lakhs</h2>";
}
function FullstackDev()
{
    echo "<h2>FullStack Dev </h2>
    <ul><li>Participating in the design and creation of scalable software</li>
    <li>Writing clean, functional code on the front- and back-end</li>
    <li>Testing and fixing bugs or other coding issues</li></ul>
    <h2>Average CTC :6.5 Lakhs</h2>";
}
function Sde()
{
    echo "<h2>SDE</h2>
    <ul><li>Executing full lifecycle software development</li>
    <li>Programming well-designed, testable, efficient code</li>
    <li>Producing specifications and determine operational feasibility</li></ul>
    <h2>Average CTC :18 Lakhs</h2>";
}
function Testing()
{
    echo "<h2>Software Tester </h2>
    <ul><li>Reviewing software requirements and preparing test scenarios.</li>
    <li>Executing tests on software usability.</li>
    <li>Analyzing test results on database impacts, errors or bugs, and usability.</li></ul>
    <h2>Average CTC :3.8 Lakhs</h2>";
}
function DataScientist()
{
    echo "<h2>Data Scientist </h2>
    <ul><li>Identify valuable data sources and automate collection processes</li>
    <li>Undertake preprocessing of structured and unstructured data</li>
    <li>Analyze large amounts of information to discover trends and patterns</li></ul>
    <h2>Average CTC :10 Lakhs</h2>";
}
function DataAnalyst()
{
    echo "<h2>Data Analyst</h2>
    <ul><li>Interpret data, analyze results using statistical techniques and provide ongoing reports</li>
    <li>Develop and implement databases, data collection systems, data analytics and other strategies that optimize statistical efficiency and quality</li>
    <li>Acquire data from primary or secondary data sources and maintain databases/data systems</li></ul>
    <h2>Average CTC :4.4 Lakhs</h2>";
}
function MLEngineer()
{
    echo "<h2>ML Engineer </h2>
    <ul><li>Designing and developing machine learning and deep learning systems</li>
    <li>Running machine learning tests and experiments</li>
    <li>Implementing appropriate ML algorithms</li></ul>
    <h2>Average CTC :7.5 Lakhs</h2>";
}
function CloudArchitect()
{
    echo "<h2>Cloud Architect </h2>
    <ul><li>Creating a well-informed cloud strategy and managing the adaptation process</li>
    <li>Evaluating cloud applications, hardware, and software</li>
    <li>Developing and organizing cloud systems</li></ul>
    <h2>Average CTC :20 Lakhs</h2>";
}
function CloudSecurityAnalyst()
{
    echo "<h2>CloudSecurityAnalyst </h2>
    <ul><li>Design, develop and facilitate implementation of the City’s cloud security architecture</li>
    <li>Identify, evaluate and communicate cloud-related risks and vulnerabilities, and propose recommended remediations </li>
    <li>Investigate cloud services configuration, IAM, network exposure</li></ul>
    <h2>Average CTC :8 Lakhs</h2>";
}
function ProjectCoordinator()
{
    echo "<h2>ProjectCoordinator </h2>
    <ul><li>Coordinating project schedules, resources, equipment and information</li>
    <li>Liaising with clients to identify and define project requirements, scope and objectives</li>
    <li>Ensuring that clients’ needs are met as the project evolves</li></ul>
    <h2>Average CTC :4.5 Lakhs</h2>";
}
function BusinessAnalyst()
{
    echo "<h2>BusinessAnalyst </h2>
    <ul><li>Defining configuration specifications and business analysis requirements</li>
    <li>Performing quality assurance</li>
    <li>efining reporting and alerting requirements</li></ul>
    <h2>Average CTC :7 Lakhs</h2>";
}
function SEOSpecialist()
{
    echo "<h2>SEO Specialist </h2>
    <ul><li>Optimizing copy and landing pages for search engine optimization</li>
    <li>Performing ongoing keyword research including discovery and expansion of keyword opportunities</li>
    <li>Researching and implementing content recommendations for organic SEO success</li></ul>
    <h2>Average CTC :4 Lakhs</h2>";
}
function SocialMediaMarketing()
{
    echo "<h2>SocialMediaMarketing </h2>
    <ul><li>Running company social media advertising campaigns.</li>
    <li>Formulating high-quality novel written and visual content for each social media campaign.</li>
    <li>Building a social media presence by maintaining a solid online presence.</li></ul>
    <h2>Average CTC :4.1 Lakhs</h2>";
}
?>

</div>
</div>
</body>


</body>
</html>
