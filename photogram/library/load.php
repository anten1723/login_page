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
