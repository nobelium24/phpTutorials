<?php
session_start();
//The code below deletes a session if the query string == noname
if ($_SERVER['QUERY_STRING'] == 'noname') {
    unset($_SESSION['name']);
}
$name = $_SESSION["name"] ?? "Guest";


//get cookie 
$gender = $_COOKIE['gender'] ?? 'Unknown';

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza app</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style>
        .brand{
            background-color: #cbb09c !important;
        }
        .brand-text{
            color: #cbb09c !important;
        }
        form{
            max-width: 460px;
            margin: 20px auto;
            padding: 20px;
        }
    </style>    
</head>
    <body class="grey lighten-4">
        <nav class="white z-depth-0">
            <div class="container">
                <a href="index.php" class="brand-logo brand-text">NOBELIUM'S PIZZA</a>
                <ul id="nav-mobile" class="right hide-on-small-and-down">
                    <li class="grey-text">Hello <?php echo htmlspecialchars($name) ?></li>
                    <li class="grey-text">Gender: <?php echo htmlspecialchars($gender) ?></li>
                    <li>
                        <a href="add.php" class="btn brand z-depth-0">ADD PIZZA</a>
                    </li>

                </ul>

            </div>

        </nav>