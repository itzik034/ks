<?php

if(isset($_GET['action']) && !empty($_GET['action']))
{
    $action = $_GET['action'];
}
else
{
    die("syntax error");
}

if($action == "t_f_name")
{
    $id = $_GET['t_id'];
    include("connection.php");
    $sql = "SELECT * FROM users WHERE id = '$id' LIMIT 1";
    $query = mysqli_query($conn, $sql);
    if(mysqli_num_rows($query) > 0)
    {
        while($row = mysqli_fetch_array($query))
        {
            echo $row['user-first_name'];
        }
    }
}

if($action == "t_l_name")
{
    $id = $_GET['t_id'];
    include("connection.php");
    $sql = "SELECT * FROM users WHERE id = '$id' LIMIT 1";
    $query = mysqli_query($conn, $sql);
    if(mysqli_num_rows($query) > 0)
    {
        while($row = mysqli_fetch_array($query))
        {
            echo $row['user-last_name'];
        }
    }
}

?>