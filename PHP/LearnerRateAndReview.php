<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <link href="../css/styles.css" type="text/css" rel="stylesheet">
    <title>Review and Rate</title>
</head>

<body>
    <?php include("LearnerHeaderFooter.php"); ?>
    <div class="contentrate">
        <div class="image-container">
            <img src="femalepartner2.jpg" alt="Partner picture">
            <p>Partner</p>
            <span class="partner-reviewed">Lamia Saad</span>

        </div>
        <div class="form-container">
            <h2 id="h2session">Leave a Review </h2>
            <div class="form-group">
                <label for="fname">First Name:</label><br>
                <input type="text" id="fname" name="firstname" placeholder="Enter your first name">
            </div>

            <div class="form-group">
                <label for="lname">Last Name:</label><br>
                <input type="text" id="lname" name="lastname" placeholder="Enter your last name">
            </div>

            <div class="form-group">
                <label>Rate the session:</label><br>
                <div class="rate">
                    <input type="radio" id="star5" name="rate" value="5">
                    <label for="star5" title="5 stars">5 stars</label>
                    <input type="radio" id="star4" name="rate" value="4">
                    <label for="star4" title="4 stars">4 stars</label>
                    <input type="radio" id="star3" name="rate" value="3">
                    <label for="star3" title="3 stars">3 stars</label>
                    <input type="radio" id="star2" name="rate" value="2">
                    <label for="star2" title="2 stars">2 stars</label>
                    <input type="radio" id="star1" name="rate" value="1">
                    <label for="star1" title="1 star">1 star</label>
                </div>
            </div>

            <div class="form-group">
                <label>How was your experience?</label><br>
                <textarea placeholder="Tell us about it!"></textarea>
            </div>




            <div class="form-group" id="submit-button-group">     <input type="submit" value="Submit" id="submit-btn"> </div>
        </div>
    </div>
    

</body>

</html>