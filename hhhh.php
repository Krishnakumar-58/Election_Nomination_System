<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Indian Voter ID Generator</title>
  <style>
    /* body {
      font-family: Arial, sans-serif;
      background: #f2f2f2;
      margin: 0;
      padding: 20px;
    } */

    /* h2 {
      text-align: center;
    } */

    /* .container {
      max-width: 900px;
      margin: auto;
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      justify-content: space-between;
    } */

    /* form, .card {
      background: white;
      padding: 20px;
      box-shadow: 0 0 10px rgba(0,0,0,0.2);
      flex: 1 1 45%;
      border-radius: 8px;
    } */

    /* input, select {
      width: 100%;
      margin-bottom: 12px;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
    } */

    /* button {
      width: 100%;
      background-color: #4CAF50;
      color: white;
      padding: 10px;
      border: none;
      border-radius: 4px;
      font-size: 16px;
      cursor: pointer;
    } */

    /* .card img {
      height: 120px;
      width: 100px;
      object-fit: cover;
      border: 2px solid #444;
      margin-bottom: 10px;
    } */

    /* .voter-card {
      background-color: #e9f0ff;
      padding: 15px;
      border: 2px solid #333;
      border-radius: 8px;
      font-size: 15px;
    } */

    /* .voter-card h4 {
      margin-bottom: 10px;
    } */
  </style>
</head>
<body>

  <h2 style="text-align: center;">Voter ID Generator</h2>
  <div class="container" style=" max-width: 900px;
      margin: auto;
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      justify-content: space-between;">
    <!-- Form -->
    <form id="voterForm" style=" background: white; padding: 20px; box-shadow: 0 0 10px rgba(0,0,0,0.2); flex: 1 1 45%;
      border-radius: 8px;">
      <input style=" width: 100%; margin-bottom: 12px; padding: 10px; border: 1px solid #ccc; border-radius: 4px;" type="text" id="name" placeholder="Full Name" required>
      <input style=" width: 100%; margin-bottom: 12px; padding: 10px; border: 1px solid #ccc; border-radius: 4px;" type="text" id="father" placeholder="Father's Name" required>
      <input style=" width: 100%; margin-bottom: 12px; padding: 10px; border: 1px solid #ccc; border-radius: 4px;" type="date" id="dob" required>
      <select style=" width: 100%; margin-bottom: 12px; padding: 10px; border: 1px solid #ccc; border-radius: 4px;" id="gender" required>
        <option value="">Select Gender</option>
        <option>Male</option>
        <option>Female</option>
        <option>Other</option>
      </select>
      <textarea id="address" placeholder="Address" required></textarea>
      <input style=" width: 100%; margin-bottom: 12px; padding: 10px; border: 1px solid #ccc; border-radius: 4px;" type="text" id="voterId" placeholder="Voter ID Number" required>
      <label for="photo">Upload Photo</label>
      <input style=" width: 100%; margin-bottom: 12px; padding: 10px; border: 1px solid #ccc; border-radius: 4px;" type="file" id="photo" accept="image/*" required>
      <button style=" width: 100%; background-color: #4CAF50; color: white; padding: 10px; border: none; border-radius: 4px; font-size: 16px; cursor: pointer;" type="button" onclick="generateCard()">Generate Voter ID</button>
    </form>

    <!-- Output -->
    <div id="outputCard" style="display:none;  height: 120px;  width: 100px; object-fit: cover; border: 2px solid #444; margin-bottom: 10px;  background: white; padding: 20px; box-shadow: 0 0 10px rgba(0,0,0,0.2); flex: 1 1 45%; border-radius: 8px;">
      <div class="voter-card" style=" margin-bottom: 10px; background-color: #e9f0ff; padding: 15px; border: 2px solid #333; border-radius: 8px; font-size: 15px;">
        <h4 style="margin-bottom: 10px;">Election Commission of India</h4>
        <img id="outputPhoto" style=" height: 120px; width: 100px; object-fit: cover; border: 2px solid #444; margin-bottom: 10px;" src="" alt="Voter Photo">
        <p><strong>Name:</strong> <span id="outName"></span></p>
        <p><strong>Father's Name:</strong> <span id="outFather"></span></p>
        <p><strong>DOB:</strong> <span id="outDOB"></span></p>
        <p><strong>Gender:</strong> <span id="outGender"></span></p>
        <p><strong>Address:</strong> <span id="outAddress"></span></p>
        <p><strong>Voter ID:</strong> <span id="outVoterId"></span></p>
      </div>
    </div>
  </div>

  <script>
    function generateCard() {
      const name = document.getElementById("name").value;
      const father = document.getElementById("father").value;
      const dob = document.getElementById("dob").value;
      const gender = document.getElementById("gender").value;
      const address = document.getElementById("address").value;
      const voterId = document.getElementById("voterId").value;
      const photo = document.getElementById("photo").files[0];

      if (!name || !father || !dob || !gender || !address || !voterId || !photo) {
        alert("Please fill all fields and upload a photo.");
        return;
      }

      const reader = new FileReader();
      reader.onload = function (e) {
        document.getElementById("outputPhoto").src = e.target.result;
        document.getElementById("outName").textContent = name;
        document.getElementById("outFather").textContent = father;
        document.getElementById("outDOB").textContent = dob;
        document.getElementById("outGender").textContent = gender;
        document.getElementById("outAddress").textContent = address;
        document.getElementById("outVoterId").textContent = voterId;

        document.getElementById("outputCard").style.display = "block";
      };
      reader.readAsDataURL(photo);
    }
  </script>

</body>
</html>
