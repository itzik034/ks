<?php

function get_class_name_by_id($class_id)
{
    include("connection.php");
    $sql = "SELECT * FROM classes WHERE id = '$class_id' LIMIT 1";
    $query = mysqli_query($conn, $sql);
    if(mysqli_num_rows($query) == 1)
    {
        while($row = mysqli_fetch_array($query))
        {
            return $row['class-name'];
        }
    }
}

?>