
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ViewMyRequestWithTheirStatus</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="../css/styles.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
  <?php include("partnerHeaderFooter.php"); ?>
        

  <h2 id="h2session"> My Request With Their Status</h2> 

  <table class="tableReq">
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Language</th>
            <th>Date</th>
            <th>Time</th>
            <th>Price</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <tr class="even-row">
            <td>1</td>
            <td>Lamia saad</td>
            <td>German</td>
            <td>3/3/2023</td>
            <td>9:00AM - 10:00AM</td>
            
            <td>200 SAR</td>
            <td class="Green">Accepted</td>
          </tr >
            <tr class="even-row">
            <td>2</td>
            <td>sarah Mohammad</td>
            <td>German</td>
            <td>3/2/2023</td>
            <td>10:00AM - 11:30AM</td>
           
            <td>300SAR</td>
            <td class="Red">Rejected</td>
          </tr>
          <tr class="even-row">
            <td>3</td>
            <td>Noura</td>
            <td>Chinese</td>
            <td>23/1/2024</td>
            <td>11:00AM - 1:00PM</td>
            
            <td>400SAR</td>
            <td class="Gray">Pending</td>
          </tr>
          <tr class="even-row">
            <td>4</td>
            <td>Amal</td>
            <td>German</td>
            <td>15/12/2023</td>
            <td>6:00PM - 8:00PM</td>
            
            <td>400 SAR</td>
            <td class="Red">Rejected</td>
          </tr>
          <tr class="even-row">
            <td>5</td>
            <td>Haifa</td>
            <td>German</td>
            <td>8/11/2023</td>
            <td>1:00PM - 3:00PM</td>
            
            <td>400 SAR</td>
            <td class="Red">Rejected</td>
          </tr>
          <tr class="even-row">
            <td>6</td>
            <td>Suasan</td>
            <td>German</td>
            <td>9/6/2023</td>
            <td>7:00AM - 10:00AM</td>
            
            <td>600 SAR</td>
            <td class="Gray">Pending</td>
          </tr>
          <tr class="even-row">
            <td>7</td>
            <td>Maya Mohammad</td>
            <td>German</td>
            <td>3/2/2023</td>
            <td>10:00AM - 11:30AM</td>
            <td>300 SAR</td>
            <td class="Green">Accepted</td>
          </tr>
          <tr  class="even-row">
            <td>8</td>
            <td>Judy</td>
            <td>German</td>
            <td>1/8/2023</td>
            <td>4:00PM - 7:00PM</td>
            
            <td>600 SAR</td>
            <td class="Red">Rejected</td>
          </tr>
          <tr class="even-row">
            <td>9</td>
            <td>Saud Ibrahim</td>
            <td>German</td>
            <td>3/01/2023</td>
            <td>3:00PM - 3:30PM</td>
            <td>100 SAR</td>
            <td class="Green">Accepted</td>
          </tr>
          <tr class="even-row">
            <td>10</td>
            <td>Haifa Ahmad</td>
            <td>German</td>
            <td>3/02/2023</td>
            <td>9:00AM - 10:00AM</td>
            <td>200 SAR</td>
            <td class="Green">Accepted</td>
          </tr>
        </tbody>

    </table>
    
</body>
</html>
