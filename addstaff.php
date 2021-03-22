<?php
    $con = mysqli_connect("localhost", "root", "", "register");
    $sql = "SELECT * FROM staff";
    $result = mysqli_query($con, $sql);
    $row_count = mysqli_num_rows($result);
    $i=1;
    
    while ($row = mysqli_fetch_assoc($result)) {
    	echo'. $row['title'].';
?>