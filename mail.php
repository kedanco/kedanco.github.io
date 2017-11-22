<?php

$to      = "kelvinchowjunjie120@hotmail.com";
$subject = 'Project Enquiry';


$name = check_input($_POST['name'], 'Enter your name');
$contact = check_input($_POST['contact']);
$email = check_input($_POST['email']);
$budget = check_input($_POST['budget']);
$description = check_input($_POST['description']);

$message = "New Project Enquiry from $name

Name: $name
Contact: $contact
Email: $email

Description: $description

Budget around $budget

";
// $headers = 'From: webmaster@example.com' . "\r\n" .
//     'Reply-To: webmaster@example.com' . "\r\n" .
//     'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message);

header('Location: contact.html');
exit();

/* Functions we used */
function check_input($data, $problem='')
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    if ($problem && strlen($data) == 0)
    {
        show_error($problem);
    }
    return $data;
}

?> 
