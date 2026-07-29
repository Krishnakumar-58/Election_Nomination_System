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
        /* Login styling */
         .A
         {
           
            background: url(image/11.jpg);
            background-size: 100% 100%;
             max-width: 900px;
             margin: 70px auto;
             padding: 80px;
             border-radius: 8px;
             box-shadow: 0 0 10px #3D0A91;
             text-align: center;
         }

         /* .B{
           
         } */

    input, button 
    {
         width: 80%;
         padding: 10px;
         margin: 10px 0;
     }

    button 
    {
         background: #3D0A91;
         color: white;
         border: none;
       
         border-radius: 10px;
         transition: 50ms ease all;
     }
     button:hover{
        background: white;
        color: #3D0A91;
        box-shadow: 0 0 10px;
        border-radius: 10px;
     }

    </style>
</head>
<body>
  <?php include 'header.php'; ?>

<!-- Admin Login Form -->
<div class="container B">
  <div class="row">
    <div class="col-sm-12">
      <div class="A">
        <h1 style="color: white;">Admin Login</h1> <br> 
        <input id="username" style=" background: none; box-shadow: 0 0 50px inset white;" type="text" placeholder="Username" required> <br> <br>
        <input id="password" style=" background: none; box-shadow: 0 0 50px inset white;" type="password" placeholder="Password" required> <br> <br>
        <button onclick="loginCandidate()">Login</button>
        <!-- Success message -->
        <div id="loginMessage" style="display: none; color: green; font-weight: bold; margin-top: 10px;">
          ✅ Login Successful!
        </div>
      </div>
    </div>
  </div>
</div>


<script>
  function loginCandidate() {
    const email = document.getElementById("username").value.trim();
    const password = document.getElementById("password").value.trim();

    if (!email || !password) {
      alert("Please enter both email and password.");
      return;
    }

    fetch('aadmin_login.php', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify({ email, password })
    })
    .then(res => res.json())
    .then(data => {
      if (data.status === "success") {
        document.getElementById("loginMessage").style.display = "block";
        setTimeout(() => {
          window.location.href = "Admin_Dashboard.php";
        }, 1500);
      } else {
        alert("❌ Invalid Credentials");
      }
    })
    .catch(err => {
      alert("⚠️ Error logging in.");
      console.error(err);
    });
  }
</script>


          <?php include 'footer.php'; ?>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

        </body>
        </html>