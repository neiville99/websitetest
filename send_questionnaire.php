<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $company_name = htmlspecialchars($_POST['company_name']);
    $industry = htmlspecialchars($_POST['industry']);
    $company_size = htmlspecialchars($_POST['company_size']);
    $current_systems = htmlspecialchars($_POST['current_systems']);
    $business_challenges = htmlspecialchars($_POST['business_challenges']);
    $desired_outcomes = htmlspecialchars($_POST['desired_outcomes']);
    $budget_range = htmlspecialchars($_POST['budget_range']);
    $services_needed = isset($_POST['services_needed']) ? implode(", ", $_POST['services_needed']) : "";
    $timeline = htmlspecialchars($_POST['timeline']);
    $contact_preference = htmlspecialchars($_POST['contact_preference']);
    $additional_info = htmlspecialchars($_POST['additional_info']);

    // Additional project questionnaire fields if any

    // Email setup
    $to = "neivillem28@gmail.com"; // Replace with your email address
    $subject = "New Questionnaire Submission";
    $body = "Company Name: $company_name\n"
        . "Industry: $industry\n"
        . "Company Size: $company_size\n"
        . "Current Systems: $current_systems\n"
        . "Business Challenges: $business_challenges\n"
        . "Desired Outcomes: $desired_outcomes\n"
        . "Budget Range: $budget_range\n"
        . "Services Needed: $services_needed\n"
        . "Timeline: $timeline\n"
        . "Contact Preference: $contact_preference\n"
        . "Additional Info: $additional_info\n";

    $headers = "From: no-reply@yourdomain.com"; // Replace with a domain email

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "Your questionnaire has been submitted successfully!";
    } else {
        echo "There was a problem sending your submission. Please try again.";
    }
}
?>
