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
            <label id="personal-picLabel" for="personal-pic">update image</label>
            <input type="file" name="personal-pic"  id="personal-pic">
            
         </div>

        <div class="right">
                       
                        <h3>Edit Profile</h3>
                     <div class="info_data">
                        <div class="data">
                            <h4>First name</h4> 
                            <input type = "text" placeholder="Haifa">
                            <h4>Email</h4> 
                            <input type = "text" placeholder="haifalingo@gmail.com">
                            <h4>city</h4> 
                            <select name = "city">
                                <option disabled>- Select a city -</option>
                                <option selected>Riyadh</option>
                                <option>Makkah</option>
                                <option>Madinah</option>
                                <option>Buraydah</option>
                                <option>Dammam</option>
                                <option>Abha</option>
                                <option>Tabuk</option>
                                <option>Hail</option>
                                <option>Arar</option>
                                <option>Jizan</option>
                                <option>Najran</option>
                                <option>Al-Baha</option>
                                <option>Sakaka</option>
                                </select>
                        
                         </div>
                         <div class="data">
                            <h4>Last name</h4>
                            <input type = "text" placeholder="Ahmed">
                            <h4>Password</h4> 
                            <input type = "password" placeholder="**********"  minlength="8" maxlength="16" >
                            <h4>Location</h4> 
                            <input type="text" name="phone" value= "" placeholder="Al-waten street , alsahafa , Riyadh<" maxlength="10">
                         </div>

                           

                    </div>
                    <br><br><br><br><br><br>
                    <div class="button-container2">
                        <button class="accept" onclick="window.location.href='learner-profile.html'" >Save Edit</button>
                        <button class="reject" onclick="window.location.href='learner-profile.html'" >Cancel Edit</button>
                    </div> 
                    <!--  <ul id="learnerProfilbutton">
                       <li id="greenButton"> <a href = "learner-profile.html"><input  id="greenButton" type="submit" value="Save Edit" >  </a></li>
                       <li id="reedButton"> <input  id="reedButton" type="reset" value="Cancel Edit" ></li>
                    </ul>  -->
         </div>
         <!--End of class "right" -->

 </div><!--End of class "ManageProfileBody" -->

    
    
    </body>

      </html>
