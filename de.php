<?php
if(isset($_POST['submit'])){
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$querytype = $_POST['querytype'];
$message= $_POST['message'];

if(!empty($email) && !empty($message)){

    echo 'okay';
}
}

?>
<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- displays site properly based on user's device -->

  <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/favicon-32x32.png">
  
  <title>Frontend Mentor | Contact form</title>

  <!-- Feel free to remove these styles or customise in your own stylesheet 👍 -->
  <style>
    body{
      display: flex;
      padding: 0 10px;
      min-height: 100vh;
      align-items: center;
      justify-content: center;
      background: lightblue;
      color: green;
    }
    .attribution { font-size: 11px; text-align: center; }
    .attribution a { color: hsl(228, 45%, 44%); }
    .container{
      position: absolute;
    top: 50%;
       left: 50%;
       transform: translate(-50%, -50%);
      background-color: white;
      width: 650px;
      height: 100%;
      border-radius: 5px;
      padding-left: 30px;
      padding-right: 30px;
    }
    .container h1{
      font-size: 29px;
      font-weight: 600;
      padding: 10px 30px;
      
    }
    form .name{
      display: flex;
      align-items: center;
      margin-bottom: 20px;
      justify-content: space-between;
     
      
      
    }
    .email{
      margin-bottom: 20px;
    }
    .query{
      margin-bottom: 20px;
    }
   
    #name, #lastname{
      height: 30px;
      width: 280px;
      margin-top: 10px;
      outline: none;
      padding: 0 18px;
      font-size: 16px;
      border-radius: 5px;
      border: 1px solid #bfbfbf;
      
     
    }
    #email{
      height: 30px;
      width: 620px;
      margin-top: 10px;
      outline: none;
      padding: 0 18px;
      font-size: 16px;
      border-radius: 5px;
      border: 1px solid #bfbfbf;
    }
    #query{
      margin-top: 7px;
     
    }
    textarea{
      margin-top: 10px;
      outline: none;
      
      font-size: 16px;
      border-radius: 5px;
      border: 1px solid #bfbfbf;
     
      width: 100%;
      height: 100px;
     
    }
   
   #name:focus, #lastname:focus, #email:focus, textarea:focus{
    border: 2px solid green;
   }
   .radio{
    display: flex;
    align-items: center;
    
   }
   .radio-1, .radio-2{
   
    height: 30px;
      width: 280px;
    
      outline: none;
      padding: 0 18px;
      font-size: 16px;
      border-radius: 5px;
      border: 1px solid #bfbfbf;
      margin-top: 10px;
   }
   .radio-1{
    margin-right: 25px;
   }
   .submit .sub{
    outline: none;
    border: none;
    text-align: center;
    background: none;
    color: white;
    font-size: 18px;
    
   }
   .submit{
    border: none;
    text-align: center;
    margin-top: 43px;
    height: 30px;
    background: darkolivegreen;
    padding-top: 10px;
    color: white;
    border-radius: 5px;
    transition: background 1s;
    cursor: pointer;

   }
   .submit:hover{
    background: rgb(40, 51, 21);
   }
   @media(max-width: 600px){
    .container{
      width: 300px;
      height: 680px;
    }
    .container h1{
      padding: 1px 70px;
    }
    .container form{
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    form .name{
      flex-direction: column;
    }
    #email{
      width: 280px;
      
    }
    textarea{
      width: 100%;
      height: 130px;
    }
    .query{
      flex-direction: column;
      align-items: center;
    }
    .radio{
      flex-direction: column;
      align-items: center;
    }
    .radio-1{
      margin-right: 0;
    }
    .submit{
      margin-top: 10px;
      width: 100%;
    }
   
   }
   .firstname{
    margin-top: 10px;
   }
  </style>
</head>
<body>
 


  <div class="container">
   
  <h1>Contact Us</h1>
  <form action="#">
    <div class="name">
      <div class="firstname">
 <label>First Name *</label> <br><input type="text" name="firstname" id="name">
  </div>
<div class="firstname">
 <label> Last Name *</label><br> <input type="text" name="lastname" id="lastname">
</div>
</div>
<div class="email">
  <label>Email Address *</label><br> <input type="email" name="email" id="email">
</div>
<div class="query">
  <label>Query Type *</label><br>
  <div class="radio">
    <div class="radio-1">
<input type="radio" name="querytype" id="query">General Enquiry
</div>
<div class="radio-2">
 <input type="radio" name="querytype" id="query"> Support Request
</div>
</div>
</div>
<div class="message">
 <label for=""> Message *</label><br>
  <textarea name="message" id="" cols="30" rows="10" id="message"></textarea>
 
</div>
<div class="consent">
 <input type="checkbox" name="consent" id=""> I consent to being contacted by the team
  
</div>
<div class="submit">
 <input type="submit" value="Submit" name="submit" class="sub">

</div>
</form>
</div>


  
  <div class="attribution">
    Challenge by <a href="https://www.frontendmentor.io?ref=challenge">Frontend Mentor</a>. 
    Coded by <a href="#">Your Name Here</a>.
  </div>

</body>
</html>
