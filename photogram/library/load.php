<?
function load_template($name)
{
    include $_SERVER['DOCUMENT_ROOT'] . "/photogram/_template/$name.php";
}
function validate_credentials($username, $password)
{
    if ($username == "anten@gmail.com" and $password == "anten")
        return true;
    else
        return false;
}

function signup($username, $password, $email_address, $phone)
{

    $servername = "mysql.selfmade.ninja";
    $username = "anten1723";
    $password = "Anten20007";
    $dbname = "anten1723_signup";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = INSERT INTO `auth` (`username`, `password`, `email`, `phone`, `blocked`, `active`)
    VALUES ('$user', '$pass', '$email', '$phone', '0', '0');

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        $error=false;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        $error=$conn->error
    }

    $conn->close();
}
