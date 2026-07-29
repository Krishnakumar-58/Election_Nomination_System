<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
    <title>Document</title>
    <style>
        nav{
            background: #3D0A91;
        }
       .container-fluid .navbar-brand {
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
      .container-fluid .navbar-brand:hover{
            border-radius: 0px 20px 0px 20px;
            color: #3D0A91;
            box-shadow: 1px 1px 10px white;
            background: white;
            border: 1px dashed black;
        }

        /* Guidence styling */
        .A:hover{
          box-shadow: 0 0 10px;
        }
    </style>
  </head>
  <body>
    <div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <nav  class="navbar nav1">
            <div class="container-fluid">
             <a class="navbar-brand" href="index.php"  > Home</a>
                <a class="navbar-brand nav" href="Nominate.php"> Nominate</a>
                 <a href="Regi_Candidate.php" class="navbar-brand">Register</a>
                  <a class="navbar-brand" href="Login_Candi.php">Login</a>
                  <a href="Admin_Login.php" class="navbar-brand" > Admin</a>              
                <h2 class="text-light">🗳️ Election Portal</h2>
           
            </div>
          </nav>
        </div>
        <!-- itna hi hai navbar  -->


          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>