<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
    <title>Document</title>
    <style>
       
         .A {
            max-width: 800px;
             margin: 30px auto;
             background: url('image/14.jpg');
             background-size:100% 100%;
             padding: 20px;
             border-radius: 8px;
             box-shadow: 0 0 10px #ccc;
        }

    .B 
    {
    width: 100%;
     padding: 10px;
     margin: 10px 0;   
     background:none;
     }

    .C 
    {
      display: inline-block;
    padding: 10px 20px;
     background: #3D0A91;
     color: white;
     border: none;
     width: 100%; 
     border-radius: 5px;
     text-align: center;
     text-decoration: none;
       }
       .C:hover{
        color: #3D0A91;
        background: white;
        box-shadow: 0 0 8px;
        transition: 100ms ease all;
        
       }

    </style>
</head>
<body>
  
 <?php 

   include 'header.php';
   
   ?>

   <div class="container">
    <div class="row">
      <div class="col-sm-12">

<form class="A" action="submit_nomination.php" method="POST" enctype="multipart/form-data">
  <h1 style="text-align: center;">Candidate Nomination Form</h1> <br>
  <input class="B" type="text" name="name" placeholder="Full Name" required>
  <input class="B" type="number" name="age" placeholder="Age" required>
  <select class="B" name="gender" required>
    <option value="">Select Gender</option>
    <option>Male</option>
    <option>Female</option>
    <option>Other</option>
  </select>
  <input class="B" type="text" name="party" placeholder="Party Name" required>
  
  <label>Upload Photo</label>
  <input class="B" type="file" name="photo" required>
  <label>Upload Signature</label>
  <input class="B" type="file" name="signature" required>
  <label>Upload Aadhar</label>
  <input class="B" type="file" name="aadhar" required>
 
  <input type="checkbox" id="terms" required>
  <label for="terms">I agree to the <a href="#">Terms and Conditions</a></label>
  <br><br>
  <button type="submit" class="C">Submit Nomination</button>
</form>
</div>
    </div>
   </div>

<!-- FOOTER PAGE -->
 <?php 

   include 'footer.php';
   
   ?>
        </body>
        </html>