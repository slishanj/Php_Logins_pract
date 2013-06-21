<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$con = mysqli_connect("localhost", "root", "SLISHAN", "c_hash_db", "3306");
if (mysqli_connect_errno()) {
    echo "failed to connect:" . mysqli_connect_error();
} else {
    echo '<h1>Done!</h1>';
}
?>
