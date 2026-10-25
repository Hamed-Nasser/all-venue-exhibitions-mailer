<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email'])) {
    // Sanitize inputs
    $companyName   = htmlspecialchars(trim($_POST['companyName'] ?? ''));
    $contactPerson = htmlspecialchars(trim($_POST['contactPerson'] ?? ''));
    $email         = filter_var(trim($_POST['email'] ?? ''), FILTER_VALIDATE_EMAIL);
    $country       = htmlspecialchars(trim($_POST['country'] ?? ''));
    $products      = htmlspecialchars(trim($_POST['products'] ?? ''));
    $phone         = htmlspecialchars(trim($_POST['phone'] ?? ''));

    // Handle multiple expos (only allow known values)
    $allowed  = ['Nigeria', 'Tanzania', 'Uganda', 'Kenya'];
    $expos    = array_intersect((array)($_POST['expos'] ?? []), $allowed);
    $expoList = !empty($expos) ? implode(", ", $expos) : 'Not selected';

    if (!$email) {
        die("Invalid email address.");
    }

    // Prepare email
    $to      = "info@mxmexhibitions.com, mud@african-fairs.com, sherkhan@mxmexhibitions.com, sher@african-fairs.com";
    $subject = "Agro Calendar 26-27 Inq";
    $today   = date("l, F j, Y, g:i a");

    $message = <<<EOT
$today [EST]

Company Name: $companyName
Contact Person: $contactPerson
Email: $email
Country: $country
Phone: $phone
Products: $products
Selected Expo(s): $expoList
EOT;

    $headers = [
        'From' => 'info@afro-fairs.com',
        'Reply-To' => $email,
        'Content-Type' => 'text/plain; charset=UTF-8',
    ];

    $formattedHeaders = '';
    foreach ($headers as $key => $value) {
        $formattedHeaders .= "$key: $value\r\n";
    }

    if (!mail($to, $subject, $message, $formattedHeaders)) {
        die("Failed to send email. Please try again.");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Agro & Poultry Africa 2026-27 – Thank You</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    body { background: #f1f3f6; font-family: Arial, Helvetica, sans-serif; }
    .thank-you-container { max-width: 600px; margin: 4rem auto; background: #fff; padding: 2rem; border-radius: 10px; box-shadow: 0px 4px 15px rgba(0,0,0,0.1); text-align: center; }
    .thank-you-title { background-color: #38E31A; color: #fff; font-weight: 700; padding: 1rem; border-radius: 8px; display: inline-block; width: 100%; margin-bottom: 1rem; }
    h5 { color: #333; margin-top: 1rem; }
</style>
</head>
<body>

<div class="thank-you-container">
    <div class="thank-you-title">THANK YOU FOR SUBMITTING THE FORM!</div>
    <h5>We have received your data and we will get back to you soon.</h5>
</div>

</body>
</html>
