<!DOCTYPE html>
<html>
    <head>
        <title>CodeIgniter</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 20px;
                padding: 0;
            }

            h1, h2, h3 {
                color: #333;
            }

            .main {
                background-color: #f4f4f4;
                padding: 10px;
                margin-bottom: 10px;
            }

            a {
                text-decoration: none;
                color: #007BFF;
                margin-right: 10px;
            }

            a:hover {
                text-decoration: underline;
            }

            form {
                margin-top: 20px;
            }

            label {
                display: block;
                margin-bottom: 5px;
            }

            input,
            select {
                margin-bottom: 10px;
                padding: 8px;
                width: 20%;
            }

            input[type="submit"] {
                background-color: #007BFF;
                color: #fff;
                cursor: pointer;
            }

            input[type="submit"]:hover {
                background-color: #0056b3;
            }

            .success-message {
                color: green;
            }

            .error-message {
                color: red;
            }

            p {
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <h1><?= esc($title) ?></h1>
        
<!-- La variable $title se recibe del Controller Pages -->