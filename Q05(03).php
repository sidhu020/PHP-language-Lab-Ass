<?php


// Write program Json Serializable form first name and last name get value. in php

// Define first name and last name variables
$first_name = "who";
$last_name = "are you";

// Create an associative array with the first name and last name fields
$data = array(
    "first_name" => $first_name,
    "last_name" => $last_name
);

// Encode the data as JSON and print it
$json = json_encode($data);
echo $json;

?>