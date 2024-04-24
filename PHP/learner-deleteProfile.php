<!DOCTYPE html>

<html>

<head>

        <meta charset="UTF-8">
        <title>Delete Profile</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="../css/styles.css" type="text/css" rel="stylesheet">

</head>

<body id = "ProfileManage">
    <?php include("LearnerHeaderFooter.php"); ?>

    <div class ="ManageProfileBody" >
        <div class="right">
                       
            <h3>delete  Profile</h3>
            <img src="Delete-Icon.png"  id="deletepic" alt="delete">  
            <h4 id="delet_acc">Please enter your password to delete your account:</h4>
            <h5 id="delet_acc">This action will delete your profaile</h5>
            <input type = "password" placeholder="Enter new password" id="password_deleteaccount">
            <br><br><br><br><br><br>
            <div class="button-container2">
                <button class="reject"  onclick="window.location.href='homepage.html'" >Delete </button>
                <button class="contact" onclick="window.location.href='learner-profile.html'" >Cancel </button>
            </div>
            <!--<ul id="delete">
                <li id="reedButton"><a href = "homepage.html"><input  id="reedButton" type="submit" value="Delete "></a></li>
                <li > <a href = "learner-profile.html">Cancel</a></li>
             </ul> -->
    </div>
   


    </div>

        
</body>

  </html>



