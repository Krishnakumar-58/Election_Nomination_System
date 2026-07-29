<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
    <title>Document</title>
    <style>
        nav{
            background: #3D0A91;
        }
     
      
    .status-box 
    {
        /* max-width: 800px; */
        height: 47vh;
         text-align: center;
         margin-top: 200px; 
    }

    .status 
    {
         font-size: 22px;
         color: blue;
     }

.Back{
         display: inline-block;
         margin: 30px;
         padding: 10px 35px;
         background: #3D0A91;
         color: white;
         border-radius: 6px;
         text-decoration: none;
}
  .Back:hover
     {
        color: #3D0A91;
        background: white;
        box-shadow: 0 0 9px;
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
  <div class="status-box">
    <h1>Nomination Status</h1> <br>
    <p class="status">Status: <strong style="color: red;">Pending</strong></p>
    <a class="Back" href="index.php">Back to Home</a>

  </div>
          </div>
    </div>
 </div>  


 <?php 

   include 'footer.php';
   
   ?> 

                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

        </body>
        </html>