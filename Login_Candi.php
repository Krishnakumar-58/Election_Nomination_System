<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
    <title>Document</title>
    <style>
        /* Login styling */
         .A
         {
           
            background: url(image/11.jpg);
            background-size: 100% 100%;
             max-width: 900px;
             margin: 70px auto;
             padding: 100px;
             border-radius: 8px;
             box-shadow: 0 0 10px #3D0A91;
             text-align: center;
         }
    input, button 
    {
         width: 100%;
         padding: 10px;
         margin: 10px 0;
     }

    button 
    {
         background: #3D0A91;
         color: white;
         border: none;
         border-radius: 5px;
         transition: 50ms ease all;
     }
     button:hover{
        background: white;
        color: #3D0A91;
        box-shadow: 0 0 10px;
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
      <div class="A">
   <h1 style="color: white;">Candidate Login 📲</h1> <br>

<input id="email" type="text" placeholder="Enter Email Id" required style=" background: none; box-shadow: 0 0 50px inset white;"> <br> <br>
<input id="password" type="password" placeholder="Password" required style=" background: none; box-shadow: 0 0 50px inset white;"> <br> <br>
<button id="loginBtn">Login</button> <br>
<a href="Regi_Candidate.php" style="color: red;">Register</a>

</div>
    </div>
  </div>
</div>
<script>
document.getElementById("loginBtn").addEventListener("click", function () {
  const email = document.getElementById("email").value.trim();
  const password = document.getElementById("password").value.trim();

  fetch("login.php", {
    method: "POST",
    headers: { "Content-Type": "application/x-www-form-urlencoded" },
    body: `email=${email}&password=${password}`
  })
  .then(res => res.text())
  .then(data => {
    if (data === "success") {
      window.location.href = "welcome_cand.php";
    } else {
      alert("❌ Invalid email or password!");
    }
  });
});
</script>


            <!-- FOOTER PAGE -->
 <?php 

   include 'footer.php';
   
   ?>
        </body>
        </html>