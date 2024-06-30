<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        form {
            width: 300px;
            height: 550px;
            border: 1px solid #ffffff;
            padding: 1em;
            background-color: #ffffff;
            flex-direction: column;
        }

        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: auto;
        }

        h2 {
            text-align: center;
            color: #333333;
        }

        label {
            font-weight: bold;
        }

        input[type=text],
        input[type=email],
        textarea {
            width: 100%;
            padding: 10px;
            margin: 5px 0 15px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }

        textarea {
            resize: vertical;
            min-height: 100px;
        }

        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <form action="" method="POST">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="subject">Subject:</label><br>
        <input type="text" id="subject" name="subject" required><br><br>

        <label for="message">Message:</label><br>
        <textarea id="message" name="message" rows="4" required></textarea><br><br>

        <input type="submit" value="Submit" name="btn">
    </form>
</body>

</html>
<?php
if (isset($_POST['btn'])) {
    $to = "pirsadam05@gmail.com";
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $from = $_POST['email'];
    $headers = "From : $from";

    mail($to, $subject, $message, $headers);
    echo "Mail Succsesfully Send";
}
?>