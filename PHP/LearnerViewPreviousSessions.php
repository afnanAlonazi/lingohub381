<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Previous Sessions</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@7.0.0/css/flag-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <link href="../css/styles.css" type="text/css" rel="stylesheet">
</head>

<body>
    <header id = "LearnerHPage">
        <img class = "logo" src = "weblogo.png" alt = "logo" height=50>
            
            <ul class = "nav_bar">
                <li><a href = "leanerhome.html"> Home</a></li>
                <li><a href = "learnerReq.html"> Request</a></li>
                <li><a href = "LearnerViewCurrentSessions.html">Current session</a></li>
                <li><a href = "LearnerViewPreviousSessions.html">Previous session</a></li>
                <li><a href = "partnerList.html">Partner list</a></li>
                <li><a href = "learner-profile.html">Manage Profile</a></li>
            </ul>
           
            <div >
                <button class="cta" onclick="window.location.href='homepage.html'">Sign out</button>
            </div>
    </header>

    <h2 id="h2session">Previous Sessions</h2>

    <div class="content">

        <div class="session-info">
            <img src="femalepartner2.jpg" id="Partnerpicture4" alt="Partner picture">
            <span class="fi fi-sa"></span>

            <p>
                <span class="session-partner-label">Partner Name:</span>
                <span class="session-partner">Lamia Saad</span>
                <br>
                <span class="session-language-label">Language:</span>
                <span class="session-language">Arabic</span>
                <br>
                <span class="session-date-label">Session Date:</span>
                <span class="session-date">02/04/2023</span>
                <br>
                <span class="session-time-label">Session Time:</span>
                <span class="session-time">03:00 PM - 03:30 PM</span>
                <br>
            </p>

            <div class="button-container2">
                <button class="contact" onclick="window.location.href='mailto:amandalingo@gmail.com'">Contact</button>
                <button class="buttonreview" onclick="window.location.href='LearnerRateAndReview.html'">Review</button>
            </div>

        </div>

    </div>

    <footer>
        <!-- <table class="tableF">
            <tr>
                <th><a href="aboutUs.html"> About Us </a></th>
                <th><a href="FAQ.html"> FAQs </a></th>
                <th><a href="ContactUs.html"> Contact Us </a></th>
            </tr>
        </table> -->
        <div class="icons">
            <h4>Share the website</h4>

            <a href="https://facebook.com" target="_blank">
                <i class="fa-brands fa-facebook fa-2x"></i>
            </a>

            <a href="https://twitter.com" target="_blank">
                <i class="fa-brands fa-twitter fa-2x"></i>
            </a>

            <a href="https://linkedin.com" target="_blank">
                <i class="fa-brands fa-linkedin fa-2x"></i>
            </a>

            <a href="https://instagram.com" target="_blank">
                <i class="fa-brands fa-instagram fa-2x"></i>
            </a>

            <a href="https://web.whatsapp.com" target="_blank">
                <i class="fa-brands fa-whatsapp fa-2x"></i>
            </a>
            <br>
            lingo hub &copy; 2024
        </div>
    </footer>
</body>

</html>