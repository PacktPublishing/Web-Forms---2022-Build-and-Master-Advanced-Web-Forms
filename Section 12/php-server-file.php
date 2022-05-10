<?php

// set up two arrays - one for errors and one for the data
$errors = [];
$data = [];

// create our error messages
if(empty($_POST['username'])) {
    $errors['username'] = 'Your funky username is required.';
}

if(empty($_POST['favFood'])) {
    $errors['favFood'] = 'Choose a food, man.';
}

// check whether we have any errors, and create our data array accordingly
if(!empty($errors)) {
    $data['success'] = false; 
    $data['errors'] = $errors;
} else {
    $data['success'] = true;
    $data['message'] = 'Success. The data has been submitted to the server!';
}

// echo back our results to the client (browser), and I want the format to be in JSON
echo json_encode($data);

?>