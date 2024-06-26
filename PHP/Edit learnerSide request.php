<!DOCTYPE html>
<html>


<!--Editing language learning request
Author:renad-->


<head>
    <title>Edit learner Request</title>
    <meta charset="utf-8">
    <link href="../css/styles.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <!--header-->
    <?php include("LearnerHeaderFooter.php"); ?>
<!--header end-->

<div id="request-Post-box">

    <h2>Edit Language learning Request</h2>

    <form   ><!--will be sent to be proccesed later on -->
    
    <label for="lang">The language you want to learn</label>
    <div>
        <select id="lang" name="language" required> 
            <option  value="" disabled >Select a language...</option> <!-- Add a placeholder -->
       
        <option value="Afrikaans">Afrikaans</option>
        <option value="Albanian">Albanian</option>
        <option value="Arabic">Arabic</option>
        <option value="Armenian">Armenian</option>
        <option value="Basque">Basque</option>
        <option value="Bengali">Bengali</option>
        <option value="Bulgarian">Bulgarian</option>
        <option value="Catalan">Catalan</option>
        <option value="Cambodian">Cambodian</option>
        <option value="Chinese (Mandarin)">Chinese (Mandarin)</option>
        <option value="Croatian">Croatian</option>
        <option value="Czech">Czech</option>
        <option value="Danish">Danish</option>
        <option value="Dutch">Dutch</option>
        <option selected value="English">English</option>
        <option value="Estonian">Estonian</option>
        <option value="Fiji">Fiji</option>
        <option value="Finnish">Finnish</option>
        <option value="French">French</option>
        <option value="Georgian">Georgian</option>
        <option value="German">German</option>
        <option value="Greek">Greek</option>
        <option value="Gujarati">Gujarati</option>
        <option value="Hebrew">Hebrew</option>
        <option value="Hindi">Hindi</option>
        <option value="Hungarian">Hungarian</option>
        <option value="Icelandic">Icelandic</option>
        <option value="Indonesian">Indonesian</option>
        <option value="Irish">Irish</option>
        <option value="Italian">Italian</option>
        <option value="Japanese">Japanese</option>
        <option value="Javanese">Javanese</option>
        <option value="Korean">Korean</option>
        <option value="Latin">Latin</option>
        <option value="Latvian">Latvian</option>
        <option value="Lithuanian">Lithuanian</option>
        <option value="Macedonian">Macedonian</option>
        <option value="Malay">Malay</option>
        <option value="Malayalam">Malayalam</option>
        <option value="Maltese">Maltese</option>
        <option value="Maori">Maori</option>
        <option value="Marathi">Marathi</option>
        <option value="Mongolian">Mongolian</option>
        <option value="Nepali">Nepali</option>
        <option value="Norwegian">Norwegian</option>
        <option value="Persian">Persian</option>
        <option value="Polish">Polish</option>
        <option value="Portuguese">Portuguese</option>
        <option value="Punjabi">Punjabi</option>
        <option value="Quechua">Quechua</option>
        <option value="Romanian">Romanian</option>
        <option value="Russian">Russian</option>
        <option value="Samoan">Samoan</option>
        <option value="Serbian">Serbian</option>
        <option value="Slovak">Slovak</option>
        <option value="Slovenian">Slovenian</option>
        <option value="Spanish">Spanish</option>
        <option value="Swahili">Swahili</option>
        <option value="Swedish ">Swedish </option>
        <option value="Tamil">Tamil</option>
        <option value="Tatar">Tatar</option>
        <option value="Telugu">Telugu</option>
        <option value="Thai">Thai</option>
        <option value="Tibetan">Tibetan</option>
        <option value="Tonga">Tonga</option>
        <option value="Turkish">Turkish</option>
        <option value="Ukrainian">Ukrainian</option>
        <option value="Urdu">Urdu</option>
        <option value="Uzbek">Uzbek</option>
        <option value="Vietnamese">Vietnamese</option>
        <option value="Welsh">Welsh</option>
        <option value="Xhosa">Xhosa</option>
        
    </select><br>

    </div>
    
    <!-- 
    Code above adapted from Stack Overflow: 
    "List of all country languages for dropdown select menu HTML FORM [closed]" 
    (https://stackoverflow.com/questions/38909766/list-of-all-country-languages-for-dropdown-select-menu-html-form)
    -->
    
    
    <label>Proficiency Level:</label> <br>
    <input type="radio" id="beginner" name="proficiency" value="Beginner" required checked>
    <label for="beginner">Beginner</label>
    <input type="radio" id="intermediate" name="proficiency" value="Intermediate" required>
    <label for="intermediate">Intermediate</label>
    <input type="radio" id="advanced" name="proficiency" value="Advanced" required>
    <label for="advanced">Advanced</label><br>
    
    
    
    <label for="Date">Prefered schedule:</label>
    <input type="datetime-local" id="Date" name="schedule"  value="2024-02-13T07:00" required>
    <!--code adopted from w3schools:HTML Input Types
    url:https://www.w3schools.com/html/html_form_input_types.asp-->
    
    
    
    
    
    <br><label for="duration">Session duration</label>
    <select id="duration" name="Session_duration"  required>
<option value="" disabled >Select duration...</option>
    <option>20 minutes</option>
    <option selected>30 minutes</option>
    <option>40 minutes</option>
    <option>50 minutes</option>
    <option>60 minutes</option>
    
    </select>
    
    <br>
    <label for="comments">Comments (Optional)</label><br>
    <textarea id="comments" name="comments" rows="4" cols="50" placeholder="Enter your comments here...">I want to be better at speaking and understanding native English speakers in my company.</textarea>
   
    <div class="button-container2">
        <button class="accept" onclick="window.location.href='learnerReq.html'" >Save Edit</button>
        <button class="reject" onclick="window.location.href='learnerReq.html'" > Cancel Edit</button>
    </div> 

    
    
    
    </form>
    

</div>


</body>
</html>

