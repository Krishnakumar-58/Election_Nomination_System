<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
    <title>Document</title>
    <style>
    .F 
    {
         max-width: 800px;
         margin: 50px auto;
         background: url(image/10.jpg);
         background-size: 100% 100%;
         padding: 20px 60px 80px 80px ;
         border-radius: 8px;
         box-shadow: 0 0 10px;
         /* text-align: center; */
     }
   .A 
   {
     width: 50%;
     padding: 10px;
     margin: 10px 0;
     border-radius: 5px;
     outline: 0;
     border: 1px solid;
   }
    .B 
    {
         padding: 10px 20px;
         background: #3D0A91;
         color: white;
         border: none;
         width: 50%;
         border-radius: 5px;
         text-decoration: none;
         transition: 50ms ease all;
     }
     .B:hover{
        background: white;
        color: #3D0A91;
        /* border: 1px solid; */
        box-shadow: 0 0 8px;
        text-decoration: none;
     }
    .c{
        display: inline-block;
        text-align: center;
        margin-left: 20%;
    
   }
    .c:hover{
    color: #3D0A91;

   }
#successMessage{
display: none;
 color: green;
  font-weight: bold;
   margin-top: 10px;
}
    </style>
</head>
<body>
   <?php include 'header.php'; ?>
<div class="container">
  <div class="row">
    <div class="col-sm-12">

   
<form class="F" id="registerForm">
  <h1 style="text-align:center;">Candidate Registration</h1>
  <input class="A" name="fullname" type="text" placeholder="Full Name" required>
  <input class="A" name="email" type="email" placeholder="Email" required>
  <input class="A" name="username" type="text" placeholder="Username" required>
  <input class="A" name="password" type="password" placeholder="Password" required>
  <button class="B" type="submit">Register</button>
</form>
 </div>
  </div>
</div>
<script>
document.getElementById("registerForm").addEventListener("submit", function (e) {
  e.preventDefault();
  const formData = new FormData(this);

  fetch("register.php", {
    method: "POST",
    body: formData
  })
  .then(res => res.text())
  .then(data => {
    if (data === "success") {
      alert("✅ Registered successfully!");
      window.location.href = "Login_Candi.php";
    } else {
      alert("❌ Registration failed. Try again.");
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