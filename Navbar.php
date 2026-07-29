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
        .navbar-brand{
            color: white;
            border-radius: 20px 0px 20px 0px;
            border: 1px dashed;
             transition: all ease 1s;
             box-shadow: 0px 0px 10px;
             width: 88px;
             height: 40px;
             text-align: center;
             
        }
        .nav{
        width: 100px;
        padding-left: 5px;
       
        }
        .navbar-brand:hover{
            border-radius: 0px 20px 0px 20px;
            color: #3D0A91;
            box-shadow: 1px 1px 10px white;
            background: white;
            border: 1px dashed black;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <nav class="navbar nav1 ">
  <div class="container-fluid">
   <a class="navbar-brand" href="index.php"> Home</a>
    <a class="navbar-brand nav" href="Nominate.php"> Nominate</a>
 <a class="navbar-brand" href="Register_Login.php">Login</a>
              <a class="navbar-brand" href="Nomination_status.php"> Status</a>
              <a class="navbar-brand" id="Admin" href="Admin_Login.php"> Admin</a>
    <form class="d-flex" role="search">
      <h2 class="text-light">🗳️ Election Portal</h2>
    </form>
  </div>
</nav>


            



            <!-- FOOTER PAGE -->
<footer style="background: #3D0A91;" class="text-white pt-4 pb-3 mt-5">
  <div class="container text-center text-md-start">
    <div class="row">

      
      <div class="col-md-4 mb-3">
        <h5>About Portal</h5>
        <p>
          This portal allows candidates to register and submit nominations online securely and efficiently.
        </p>
      </div>

 
      <div class="col-md-4 mb-3">
        <h5>Quick Links</h5>
        <ul class="list-unstyled">
          <li><a href="index.php" class="text-white text-decoration-none">Home</a></li>
          <li><a href="register.php" class="text-white text-decoration-none">Register</a></li>
          <li><a href="Nomination_form.php" class="text-white text-decoration-none">Nominate</a></li>
          <li><a href="status.php" class="text-white text-decoration-none">Status</a></li>
        </ul>
      </div>

     
      <div class="col-md-4 mb-3">
        <h5>Contact Us</h5>
        <p>Email: support@electionportal.com</p>
        <p>Phone: +91-9876543210</p>
      </div>
    </div>
  </div>

  <div class="text-center py-2">
    © 2025 Election Nomination Portal | All rights reserved
  </div>
</footer>

</div></div></div>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

        </body>
        </html>