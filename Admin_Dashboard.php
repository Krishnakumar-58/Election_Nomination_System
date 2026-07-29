<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Dashboard</title>
  <style>
    h1 {
      color: #2fff00ff;
      text-decoration: underline;
    }

    h3, h1 {
      margin-top: 20px;
      text-align: center;
      color: #003366;
    }

    table {
      width: 90%;
      margin: 20px auto;
      border-collapse: collapse;
      background-color: white;
      text-align: center;
    }

    th, td {
      padding: 12px;
      border: 1px solid #ccc;
      text-align: center;
    }

    th {
      background-color: #3D0A91;
      color: white;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    .btn {
      padding: 6px 12px;
      border: none;
      border-radius: 4px;
      color: white;
      background-color: #28a745;
      cursor: pointer;
    }

    .btn.reject {
      background-color: red;
    }

    img {
      width: 60px;
      height: auto;
    }
  </style>
</head>
<body>

<?php include 'header.php'; ?>

<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <br>
      <h1>Welcome to Admin Dashboard</h1>
      <br>
      <h3>Submitted Nominations</h3>

      <table>
        <tr>
          <th>Candidate Name</th>
          <th>Party</th>
          <th>Age</th>
          <th>Photo</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
<?php
session_start();
if (!isset($_SESSION['admin_email'])) {
    header("Location: home.php");
    exit;
}
?>

        <?php
       
        $conn = new mysqli("sql306.infinityfree.com", "if0_40973933", "XNNDku2uB0", "if0_40973933_election");

        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }

     
        $sql = "SELECT * FROM nomination";
        $result = $conn->query($sql);
        $id = 1;

        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['name']) . "</td>";
            echo "<td>" . htmlspecialchars($row['party']) . "</td>";
            echo "<td>" . htmlspecialchars($row['age']) . "</td>";
            echo "<td><img src='" . $row['photo'] . "' alt='Photo'></td>";
            echo "<td id='status$id'>Pending</td>";
            echo "<td>
                    <button class='btn' onclick='approve($id)'>Approve</button>
                    <button class='btn reject' onclick='reject($id)'>Reject</button>
                  </td>";
            echo "</tr>";
            $id++;
          }
        } else {
          echo "<tr><td colspan='6'>No nominations found.</td></tr>";
        }

        $conn->close();
        ?>
      </table>

      <script>
        function approve(id) {
          document.getElementById("status" + id).innerText = "Approved";
          document.getElementById("status" + id).style.color = "green";
        }

        function reject(id) {
          document.getElementById("status" + id).innerText = "Rejected";
          document.getElementById("status" + id).style.color = "red";
        }
      </script>
    </div>
  </div>
  <a style="display:flex; border: 1px solid; height:30px; width:70px; float:right; background:red; color:white;" href="logout.php">Logout</a>
<br>
</div>




<?php include 'footer.php'; ?>

</body>
</html>
