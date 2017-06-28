<?php

$conn = mysqli_connect('localhost', 'root', '', 'ecommerseone');

if(!$conn) {
    die("Connection Faled: ");
}

// define('BASEURL', '/projects/');