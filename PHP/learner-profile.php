<!DOCTYPE html>

<html>

    <head>
        <meta charset="UTF-8">
        <title>My Profile</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="../css/styles.css" type="text/css" rel="stylesheet">

</head>

<body id = "ProfileManage">
<?php include("LearnerHeaderFooter.php"); ?>




 <div class ="ManageProfileBody" >
        <div class="left">
            <img  src="femalelearner1.jpg" id="img" alt="Personal photo">   
            
        </div>

        <div class="right">
                       
                        <h3>MY Profile</h3>
                     <div class="info_data">
                        <div class="data">
                            <h4>First name</h4> 
                            <p>Haifa</p>
                            <h4>Email</h4> 
                            <p>haifalingo@gmail.com</p>
                            <h4>city</h4> 
                            <p>Riyadh</p>
                        
                         </div>
                         <div class="data">
                            <h4>Last name</h4>
                            <p>Ahmad</p>
                            <h4>Location</h4> 
                            <p>Al-waten street , alsahafa , Riyadh</p>
                         </div>

                           

                    </div>
                    <br><br><br><br><br><br>
                    <div class="button-container2">
                        <button class="contact" onclick="window.location.href='learner-Editeprofile.html'">Edit profile</button>
                        <button class="buttonreview" onclick="window.location.href='learner-deleteProfile.html'">Delete profile</button>
                    </div>
                    <!-- <ul id="learnerProfilbutton">
                       <li> <a href = "learner-Editeprofile.html">Edit profile</a></li>
                       <li> <a href = "learner-deleteProfile.html">Delete profile</a></li>
                    </ul> -->
         </div>
         <!--End of class "right" -->

 </div><!--End of class "ManageProfileBody" -->


    
    </body>

      </html>