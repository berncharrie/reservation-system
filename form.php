
<?php 

	session_start();
	include("connection.php");
	include("functions.php");

$user_data = check_login($con);

  if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $fullname = $_POST['fullname'];
    $idnumber = $_POST['idnumber'];
    $email = $_POST['email'];
    
    
    $course = $_POST['course'];
   
    $document = $_POST['document'];
    $purpose = $_POST['purpose'];

      if (!empty($fullname)  && !empty($email)   && !empty($course)   && !empty($document) && !empty($purpose))
      {
          $query = "insert into request_form (fullname, idnumber, email,  course,  document, purpose) values ('$fullname', '$idnumber', '$email',  '$course',  '$document', '$purpose')";

             mysqli_query($con, $query);
      
          header("Location: confirmation.php");
          die;
      }else{
          echo "Please fill everything up. :>";
      }
    }
 ?>



 <!DOCTYPE html>

<html lang="en" dir="ltr">
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
    <div class="title">Reservation Form
      <p> Personal Information</p>
    </div>

    <div class="content">

      <form action="#" method="post">
        <div class="user-details">

          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" name="fullname" value="<?php echo $user_data['fullname']; ?>" placeholder="Enter name" required>
          </div>

           <div class="input-box">
            <span class="details">ID number</span>
            <input type="text" name="idnumber" value="<?php echo $user_data['idnumber']; ?>" placeholder="Enter ID number" required>
          </div>

          <div class="input-box">

            <span class="details">Email</span>
            <input type="text" name="email" value="<?php echo $user_data['email']; ?>" placeholder="Enter email" required>
          </div>
          <div class="input-box">
            <span class="details">Address</span>
            <input type="text" name="address" value="<?php echo $user_data['address']; ?>" placeholder="Enter address" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" name="phone"  value="<?php echo $user_data['phone']; ?>" placeholder="Enter your number" required>
          </div>

         

          <div class="input-box">
            <span class="details">Course</span>
            <input type="text" name="course" value="<?php echo $user_data['course']; ?>  <?php echo $user_data['year']; ?> year" placeholder="Enter course" required>
          </div>
          
        </div>
        <div class="gender-details">
          <input type="radio" name="gender"	value="Male" id="dot-1">
          <input type="radio" name="gender" value="Female" id="dot-2">
          <input type="radio" name="gender" value="Others" id="dot-3">
          <span class="gender-title">Gender</span>

          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Prefer not to say</span>
            </label>
          </div>
        </div>






         <div class="title"><p>Request of Credential</p></div>

        <div class="select-container"> 
         
            <label for="select-1">Select the document you need: </label>


        <div  class="selection-box">
             
            <select id="select-1" name="request" onchange="price()" >
              <option value="none">--Select--</option>
              <option value="1">Transcript of Records   </option>
              <option value="2">Form 137 </option>
            
            </select>
        </div>
          
    
         <label for="certification">For certification: </label>
          <div class="selection-box">
            

            <select  name="purpose" id="certification" >
              <option value="none">--Select--</option>
              <option value="3">Officially enrolled  </option>
              <option value="4">Subject enrolled</option>
              <option value="5">GPA </option>
              <option value="6">Earned Units  </option>
              <option value="7">Subjects with grades </option>
              
            </select>

          </div>
              <label for="purpose-of-document">Purpose of Document:</label>
         
          <div class="selection-box">
            

            <select  name="document" id="purpose-of-document" onchange="showOthers(this)">

              <option value="none">--Select--</option>
              <option value="evaluation">Evaluation </option>
              <option value="scholarship">Scholarship </option>
              <option value="board-exam">Board Exam  </option>
              <option value="employment">Employment </option>
              <option value="personal-file">Personal File  </option>

              <option value="ranking">Ranking</option>
              <option value="6">Others</option>
              
            </select>

          </div>


            
          <div class="others" id="hidden_div">
            <span class="details">Others:</span>
            <input type="text" placeholder="Please specify" >
          </div>
          
          
          </div>

        <div class="button">
          <input type="submit" value="Submit" >
        </div>
  
          <div class="total-content">
          <p>TOTAL:  </p>
          
        </div> 
      </form>
    </div>
  </div>





</body>
</html>
