<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Voter ID Generator</title>
</head>
<body style="font-family: Arial, sans-serif; background: #f1f1f1; margin: 0; padding: 0;">

<div style="max-width: 700px; margin: 30px auto; background: #fff; padding: 20px; box-shadow: 0 0 10px rgba(0,0,0,0.2); border-radius: 10px;">
  <h2 style="text-align: center; color: #3700ffff; text-decoration:underline;">Voter ID Generator</h2>

  <form onsubmit="generateCard(event)">
    <label style="font-weight: bold;">Full Name:</label>
    <input type="text" id="name1" required style="width: 100%; padding: 10px; margin: 8px 0 16px; border: 1px solid #ccc; border-radius: 4px;">

    <label style="font-weight: bold;">Father's Name:</label>
    <input type="text" id="father" required style="width: 100%; padding: 10px; margin: 8px 0 16px; border: 1px solid #ccc; border-radius: 4px;">

    <label style="font-weight: bold;">Date of Birth:</label>
    <input type="text" id="dob" placeholder="DD/MM/YYYY" required style="width: 100%; padding: 10px; margin: 8px 0 16px; border: 1px solid #ccc; border-radius: 4px;">

    <label style="font-weight: bold;">Gender:</label>
    <select id="gender" required style="width: 100%; padding: 10px; margin: 8px 0 16px; border: 1px solid #ccc; border-radius: 4px;">
      <option value="">Select Gender</option>
      <option>Male</option>
      <option>Female</option>
      <option>Other</option>
    </select>

    <label style="font-weight: bold;">Address:</label>
    <textarea id="address" rows="3" required style="width: 100%; padding: 10px; margin: 8px 0 16px; border: 1px solid #ccc; border-radius: 4px;"></textarea>

    <label style="font-weight: bold;">Upload Photo:</label>
    <input type="file" id="photo" accept="image/*" onchange="previewImage()" required style="margin-bottom: 16px;">

    <button type="submit" style="width: 100%; padding: 12px; background: #3D0A91; color: white; font-size: 16px; border: none; border-radius: 5px; cursor: pointer;">Generate Voter ID</button>
  </form>

  <div id="card" style="margin-top: 20px; max-width: 550px; margin: 25px auto; padding: 15px; border: 2px solid #3D0A91; background: linear-gradient( 120deg,rgb(255, 140, 0), white, green);
 display: none;">
   <h5 style="text-align:center; text-decoration:underline;">Election Commission of India</h5>
  <h3 style="text-align:center;">Voter ID</h3>
    <img id="photoPreview" src="" alt="Voter Photo" style="height: 170px; width: 129px; object-fit: cover; border: 2px solid #ccc; padding:2px; margin-bottom: 20px; float:right;">
    <p><strong>Name:</strong> <span id="outName"></span></p>
    <p><strong>Father's Name:</strong> <span id="outFather"></span></p>
    <p><strong>DOB:</strong> <span id="outDOB"></span></p>
    <p><strong>Gender:</strong> <span id="outGender"></span></p>
    <p><strong>Address:</strong> <span id="outAddress"></span></p>
    <p><strong>Voter ID No:</strong> <span id="outID"></span></p>
    <button onclick="printCard()" style="width: 100%; padding: 12px; background: #3D0A91; color: white; font-size: 16px; border: none; border-radius: 5px; cursor: pointer; margin-top: 20px;">🖨️ Print</button>
  </div>
</div>

<script>
  function generateCard(e) {
    e.preventDefault();

    document.getElementById("outName").innerText = document.getElementById("name1").value;
    document.getElementById("outFather").innerText = document.getElementById("father").value;
    document.getElementById("outDOB").innerText = document.getElementById("dob").value;
    document.getElementById("outGender").innerText = document.getElementById("gender").value;
    document.getElementById("outAddress").innerText = document.getElementById("address").value;
    document.getElementById("outID").innerText = "IND" + Math.floor(100000 + Math.random() * 900000);

    document.getElementById("card").style.display = "block";
  }

  function previewImage() {
    const photoInput = document.getElementById("photo");
    const photoPreview = document.getElementById("photoPreview");

    const file = photoInput.files[0];
    if (file) {
      photoPreview.src = URL.createObjectURL(file);
    }
  }

  function printCard() {
    const cardContent = document.getElementById("card").innerHTML;
    const originalContent = document.body.innerHTML;
    document.body.innerHTML = cardContent;
    window.print();
    document.body.innerHTML = originalContent;
    location.reload();
  }
</script>

</body>
</html>
