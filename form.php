<!DOCTYPE html>
<?php
  require_once 'checkuser.php';
  require 'userinfo.php';
  include "connection.php";
?>
<html>
  <head>
    <meta charset="UTF-8">
    
   <link rel="stylesheet" type="text/css" media="screen" href="form-css.php">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Form</title>
     <link rel="icon" type="image/png" href="Favicon.png">
     <script type="text/javascript" src="form.js"></script>
   </head>
<body>




  <div class="container">
    <div class="title">Requested Reservation
    </div>

    <div class="content">

      <form action="form2.php" method = "POST">
        <br>
      <div class="title"><p>Request of Credential</p></div>
      <div class="select-container"> 
            Note: Each document is 150 PHP and each certification is 100 PHP<br><br>

      <label>Select the document you need: </label>
      <div  class="selection-box">
          <select name ="document">
                                <option value = "">--Select--</option>
                                <option value = "Transcript of Records">Transcript of Records</option>
                                <option value = "Form 137">Form 137</option>
            </select>
      </div>


      <label>For certification: </label>
      <div  class="selection-box">
          <select name ="certification">
                                <option value = "">--Select--</option>
                                <option value = "Officially Enrolled">Officially Enrolled</option>
                                <option value = "Subject enrolled">Subject enrolled</option>
                                <option value = "GPA">GPA</option>
                                <option value = "Earned Units">Earned Units</option>
                                <option value = "Subjects with grade">Subjects with grades</option>
            </select>
      </div>


      <label>Purpose of Document:</label>
      <div  class="selection-box">
          <select name ="purpose">
                                <option value = "">--Select--</option>
                                <option value = "Evaluation">Evaluation</option>
                                <option value = "Scholarship">Scholarship</option>
                                <option value = "Board Exam">Board Exam</option>
                                <option value = "Employment">Employment</option>
                                <option value = "Personal File">Personal File</option>
                                <option value = "Ranking">Ranking</option>
                                <option value = "Others">Others</option>
            </select>
      </div>

     <div class="button">
            <input name= "submit" type="submit" class="button" value="SUBMIT">

     </div>
                
                
       
      </div>
          </form>
    </div>
  </div>

</body>
</html>
