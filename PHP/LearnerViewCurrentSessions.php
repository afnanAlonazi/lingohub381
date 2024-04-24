<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Current Sessions</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@7.0.0/css/flag-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <link href="../css/styles.css" type="text/css" rel="stylesheet">

</head>

<body>
    <?php include("LearnerHeaderFooter.php"); ?>
    <h2 id="h2session">Current Sessions</h2>
    <div class="content">
        <div class="session-info">
            <img src="femalepartner1.jpg" id="Partnerpicture1" alt="Partner picture">
            <span class="fi fi-de"></span>
            <p>
                <span class="session-partner-label">Partner Name:</span>
                <span class="session-partner">Amanda Davis</span>
                <br>
                <span class="session-language-label">Language:</span>
                <span class="session-language">German</span>
                <br>
                <span class="session-date-label">Session Date:</span>
                <span class="session-date">03/05/2023</span>
                <br>
                <span class="session-time-label">Session Time:</span>
                <span class="session-time">03:00 PM - 04:00 PM</span>
                <br>
            </p>

            <div class="button-container1">
                <button class="contact" onclick="window.location.href='mailto:amandalingo@gmail.com'">Contact</button>
            </div>

        </div>
        <br>
        <div class="session-info">
            <img src="malepartner1.jpg" id="Partnerpicture2" alt="Partner picture">
            <span class="fi fi-gb"></span>
            <p>
                <span class="session-partner-label">Partner Name:</span>
                <span class="session-partner">John Ken</span>
                <br>
                <span class="session-language-label">Language:</span>
                <span class="session-language">English</span>
                <br>
                <span class="session-date-label">Session Date:</span>
                <span class="session-date">03/04/2023</span>
                <br>
                <span class="session-time-label">Session Time:</span>
                <span class="session-time">10:00 AM - 11:00 AM</span>
                <br>
            </p>

            <div class="button-container1">
                <button class="contact" onclick="window.location.href='mailto:johnlingo@gmail.com'">Contact</button>
            </div>
        </div>
        <br>
        <div class="session-info">
            <img src="femalepartner2.jpg" id="Partnerpicture3" alt="Partner picture">
            <span class="fi fi-sa"></span>
            <p>
                <span class="session-partner-label">Partner Name:</span>
                <span class="session-partner">Lamia Saad</span>
                <br>
                <span class="session-language-label">Language:</span>
                <span class="session-language">Arabic</span>
                <br>
                <span class="session-date-label">Session Date:</span>
                <span class="session-date">03/0/2023</span>
                <br>
                <span class="session-time-label">Session Time:</span>
                <span class="session-time">01:00 AM - 01:30 PM</span>
                <br>
            </p>
            <div class="button-container1">
                <button class="contact" onclick="window.location.href='mailto:lamialingo@gmail.com'">Contact</button>
            </div>
        </div>
        
    </div>
 

</body>