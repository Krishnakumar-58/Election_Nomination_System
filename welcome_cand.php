<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
    <title>Document</title>
    <style>
        /* dashboard styling */
         .dash
         {
             max-width: 100%;
             /* margin: 50px auto; */
             text-align: center;
             height: 80vh;
             padding: 70px;
            
         }

       
    .A
    {
         display: inline-block;
         margin: 30px;
         padding: 10px 35px;
         background: #3D0A91;
         color: white;
         border-radius: 6px;
         text-decoration: none;
     }

     .A:hover
     {
        color: #3D0A91;
        background: white;
        box-shadow: 0 0 9px;
     }
  
    </style>
</head>
<body>

 <?php 

   include 'header.php';
   
   ?>

<!-- dashboard -->
  <div class="container dash">
    <br><br><br>
    <h1>Welcome, Candidate 🙏🏻</h1>
    <br>
      <center> <p> fill the form ⬇️</p> </center>
    <a class="A" href="Nomination_form.php">Fill Nomination Form</a>
    <a class="A" href="Nomination_status.php">Check Nomination Status</a> <br>
    <a class="A" href="Login_Candi.php" style="background: red;">Logout</a>
  </div>

            
            <!-- FOOTER PAGE -->
 <?php 

   include 'footer.php';
   
   ?>
        </body>
        </html>