<?php
// PHP code goes here

$variable = "Hello, world!";
?>

<!DOCTYPE html>
<html>
<head>
  <title>Payment Failed</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f5f5f5;
    }

    .container {
      max-width: 600px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border: 1px solid #ddd;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      margin-top: 50px;
    }

    h1 {
      color: #e74c3c;
      margin-bottom: 20px;
    }

    p {
      margin-bottom: 20px;
    }

    .button {
      display: inline-block;
      padding: 10px 20px;
      background-color: #e74c3c;
      color: #fff;
      text-decoration: none;
      border-radius: 4px;
    }

    .button:hover {
      background-color: #c0392b;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Payment Failed</h1>
    <p>Sorry, your payment was not successful. Please try again later or contact customer support for assistance.</p>
    <a href="http://localhost/sslcommerz/payment.php" class="button">Contact Customer Support</a>
  </div>
</body>
</html>
