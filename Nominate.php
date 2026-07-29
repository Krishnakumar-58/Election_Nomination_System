<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Document</title>
        <style>
        .cards1
        {
           box-shadow: 0px 0px 10px #3D0A91;
           border: 1px solid;
           border-radius: 5px;
           transition: 1s ease all;
        }
       .cards1:hover
        {
           color: white;
           background: #3D0A91;
           box-shadow: 0px 0px 20px #ba0233;
           margin: 1px;
           padding-top: 1px;
        }
        </style>
    </head>
    <body>
 <?php include 'header.php'; ?>
<section class="py-5">
  <div class="container">
     <h1 class="text-center mb-4"><u>Welcome to the Digital Nomination System</u></h1>
    <h2 class="text-center text-primary mb-4">📢 Nomination Information</h2>
    <div class="row">
      <div class="col-md-6 mb-4">
        <div class="p-4 cards1  rounded">
          <h5 class="text-red">📌 Eligibility Criteria</h5>
          <ul>
            <li>Candidate must be an Indian citizen.</li>
            <li>Minimum age: 25 years.</li>
            <li>Must not hold any office of profit.</li>
            <li>Should be registered voter in the constituency.</li>
          </ul>
        </div>
      </div>

      <div class="col-md-6 mb-4">
        <div class="p-4 cards1  rounded">
          <h5 class="text-red">🗂️ Required Documents</h5>
          <ul>
            <li>Recent Photograph</li>
            <li>Signature (scanned)</li>
            <li>Aadhar Card Copy</li>
            <li>Party Affiliation Proof (if any)</li>
          </ul>
        </div>
      </div>

 

.
      <div class="col-md-12">
        <div class="p-4 cards1  rounded">
          <h5 class="text-red">📅 Important Dates</h5>
          <p><strong>Nomination Start Date:</strong> 1st August 2025</p>
          <p><strong>Last Date to Nominate:</strong> 10th August 2025</p>
          <p><strong>Scrutiny Date:</strong> 12th August 2025</p>
          <p><strong>Withdrawal Deadline:</strong> 14th August 2025</p>
        </div>
      </div>

    </div>
  </div>
</section>



  <?php 

   include 'footer.php';
   
   ?> 

                  
    </body>
</html>