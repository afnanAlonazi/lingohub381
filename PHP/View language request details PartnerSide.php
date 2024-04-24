<!DOCTYPE html>
<html>
    <!--view languge request details for partner
    Author:renad-->
<head>
<meta charset="UTF-8">
<title>Job request Details</title>

<link href="../css/styles.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" >


</head>
<body>
   <!--header-->
   <?php include("partnerHeaderFooter.php"); ?>
<!--header end--> 
    
    
    <!--will be using artificil data for phase 1-->
    <div id="My-RequestsLearner">
        <!-- <h3> Requests#1</h3> -->
        
        <ul>
            
            <li>
                
                <h3> Request#1</h3>
                
                <p>Language: English</p>
                <p>Proficiency Level: Beginner</p>
                <p>Preferred Schedule: <time datetime="2024-02-13 07:00">2024-02-13 07:00 AM</time></p>
                <p>Duration: 30 minutes</p>
                <p>Comments: I want  speaking and understanding native English speakers in my
                    company.</p>
                    <p id="back-link"><a href="JobRequestlist.html">Back to Request list</a></p>
                <!-- Links to edit and cancel pages -->
                <div class="button-container2">
                    <button class="accept" onclick="window.location.href=''" > Accept   </button>
                    <button class="reject" onclick="window.location.href=''" >Reject </button>
                </div> 
               </li>
            </ul>
           
            <!--can have more requests later-->
            <ul>
            <li>
                <h3> Request#2</h3>
            
                <p>Language: German</p>
                <p>Proficiency Level: Beginner</p>
                <p>Preferred Schedule: <time datetime="2024-02-13 07:00">2024-02-20 08:00 AM</time></p>
                <p>Duration: 1 hour</p>
                <p>Comments: I want speaking and understanding native German speakers in my
                    company.
                    </p>
                    <p id="back-link"><a href="JobRequestlist.html">Back to Request list</a></p>
                <!-- Links to edit and cancel pages -->
                <div class="button-container2">
                    <button class="accept" onclick="window.location.href=''" > Accept   </button>
                    <button class="reject" onclick="window.location.href=''" >Reject </button>
                </div>  
               
            </li>
        </ul>
        <ul>
            <li>
                <h3> Request#3</h3>
                <p>Language: Spanish</p>
                <p>Proficiency Level: Beginner</p>
                <p>Preferred Schedule: <time datetime="2024-02-13 07:00">2024-02-22 09:00 AM</time></p>
                <p>Duration: 2 hours</p>
                <p>Comments:  I want speaking and understanding native Spanish speakers in my
                    company.</p>
                    <p id="back-link"><a href="JobRequestlist.html">Back to Request list</a></p>
                <!-- Links to edit and cancel pages -->
                <div class="button-container2">
                    <button class="accept" onclick="window.location.href=''" > Accept   </button>
                    <button class="reject" onclick="window.location.href=''" >Reject </button>
                </div> 
               
            </li>
        </ul>
      
    </div>
     
      
        
    
</body>


</html>
