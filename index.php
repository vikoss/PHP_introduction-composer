<?php

require __DIR__ . '/vendor/autoload.php';

echo "
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Composer</title>
    <style>
    p {
        margin-top: 300px;
    }
    code {
        font-size: 24px;
        display: block;
    }
    body {
        font-family: 'Arial';
        background-color: #CD88AF;
        color: #440026;
        text-align: center;
    }
    </style>
</head>
<body>
    <h1>Probando nuestras funciones ayudantes</h1>
    <code>".upper('Hello World!')."</code>
    <code>".lower('Hello World!')."</code>
    <p>".dateNow()."</p>
</body>
</html>
";
