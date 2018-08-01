<?php include('form_process.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="styles/normalize.css">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/slick.css">
    <link rel="stylesheet" href="styles/slick-theme.css">
    <link rel="stylesheet" href="styles/all.css"> <!--FontAwesome 5.1.0-->
    <link rel="shortcut icon" type="image/png" href="images/favicon2.png">
    <title>BW Roofing</title>
</head>
<body>
    <header>
        <img id="logo" src="images/logo.png" alt="logo">
        <ul id="desknav">
            <a href="index.html"><li id="top">Home</li></a>
            <a href="services.html"><li>Services</li></a>
            <a href="about.html"><li>About</li></a>
            <a href="#"><li class="active">Contact</li></a>
        </ul>
    </header>
    <nav>
        <div class="container" onclick="myFunction()">
            <div id="up" class="up">

            </div>
            <div id="mid" class="mid">

            </div>
            <div id="low" class="low">
                
            </div>
        </div>
        <ul id="mobnav">
            <a href="#"><li id="top">Home</li></a>
            <a href="services.html"><li>Services</li></a>
            <a href="about.html"><li>About</li></a>
            <a href="contact.php"><li class="active">Contact</li></a>
        </ul>
    </nav>

    <div class="mainarea">
        <h3 class="pgtitle">Contact</h3>
        <form id="contact" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
            <h4 class="pgsub">Contact us today, and get a reply within 24 hours!</h4>
            <fieldset>
                <input placeholder="Your Name" type="text" name="name" value="<?= $name ?>" tabindex="1" autofocus>
                <span class="error"><?= $name_error ?></span>
            </fieldset>
            <fieldset>
                <input placeholder="Your Email Address" type="text" name="email" value="<?= $email ?>" tabindex="2">
                <span class="error"><?= $email_error ?></span>
            </fieldset>
            <fieldset>
                <textarea value="<?= $message ?>" name="message" tabindex="5" placeholder="Your Message"></textarea>
            </fieldset>
            <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
            </fieldset>
            <div class="success"><?= $success ?></div>
        </form>
    </div>

    <footer></footer>

    <script type="text/javascript" src="scripts/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="scripts/slick.js"></script>
    <script type="text/javascript" src="scripts/homeslick.js"></script>
    <script type="text/javascript" src="scripts/script.js"></script>
</body>
</html>