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

function signup($user, $pass, $email, $phone)
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

    $sql = "INSERT INTO `auth` (`username`, `password`, `email`, `phone`, `blocked`, `active`)
    VALUES ('$user', '$pass', '$email', '$phone', '0', '1');";
    $error = false;

    if ($conn->query($sql) === TRUE) {
        $error = false;
    } else {
        $error = $conn->error;
    }

    $conn->close();
    return $error;
}
