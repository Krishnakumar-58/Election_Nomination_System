<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
    <title> Online Election Nomination candidate </title>
    <style>
      .cards:hover
      {
        box-shadow: 0px 0px 20px #3D0A91;
        padding: 1px;
      }
      .cards1
      {
         box-shadow: 0px 0px 15px #3D0A91;
         border: 1px solid;
         border-radius: 5px;
         transition: 1s ease all;
      }
       .cards1:hover
      {
        color: white;
        background: #3D0A91;
        box-shadow: 0px 0px 15px #ba0233;
        padding: 1px;
      }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  </head>
 <body>
  <!-- nav link -->
 <?php include 'header.php'; ?>

        <div id="home" class="section">
          <div class="container py-12">
            <div class="text-center mb-12">
              <marquee " behavior="alternate" direction>Disclaimer- This is not a real website 
              <span style="color: red;">Election Nominations System</span>,only created for college Project </marquee>
            </div>
          </div>
          <!-- slider -->
          <div id="carouselExampleSlidesOnly" class="carousel slide"
            data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZ8iKjEXamFebV0TuIwY8VfPMDZO4ZNGmANKhNoPfmbQ&s" class="d-block w-100" height="500px" alt="...">
              </div>
              <div class="carousel-item">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRnRlI0z5BDUpIdoas_wbsaUYqtTBmDGf1BsFuMMvewGQ&s=10" class="d-block w-100" height="500px" alt="...">
              </div>
              <div class="carousel-item">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXyn472PiGgJkf7Dva8DO3yJaVuh3IQlXMWjJxAqZpzg&s=10" class="d-block w-100" height="500px" alt="...">
              </div>
            </div>
          </div>

        <!-- Home Section -->
        <div id="home" class="section">
            <div class="container py-12">
                <div class="text-center mb-12"> <br>
                    <h1 class="text-4xl text-gray-900 mb-4">One Platform for Election
                Nomination & Voter Services</h1>
                    <p class="text-xl text-gray-600"
                        style="max-width: 48rem; margin: 0 auto;"> यह एक कॉलेज प्रोजेक्ट है इसमें आपका डाटा सेव है इसमें टेस्टिंग के लिए आप अपना रियल डाटा नहीं भी देंगे तो चलेगा
                                                                 <br>
               This web application allows citizens to participate in
                democratic processes easily — nominate as a candidate, register
                as a voter, view candidate profiles, and print voter ID.</p>
                </div></div></div></div></div></div></div></div>
   <!-- voter generator  -->
<?php 
   include 'voter.php';
   ?>
        <!-- Guidence -->
                 <div class="container">
                  <div class="row">
                    <div class="col-sm-12">
  <section class="py-5">
  <div class="container">
    <h2 class="text-center mb-4 text-primary">📝 How to Nominate Yourself</h2>
    <div class="row g-4">
      <div class="col-md-3">
        <div class="card h-100 shadow-sm">
          <div class="card-body cards1 text-center">
            <h5 class="card-title">1. Register</h5>
            <p class="card-text" >Create an account by providing basic information and verifying your identity.</p>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card h-100 shadow-sm">
          <div class="card-body cards1 text-center">
            <h5 class="card-title">2. Login</h5>
            <p class="card-text">Access your dashboard by logging in with your registered credentials.</p>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card h-100 shadow-sm">
          <div class="card-body cards1 text-center">
            <h5 class="card-title">3. Fill Nomination</h5>
            <p class="card-text">Complete the nomination form with personal, constituency, and party details.</p>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card h-100 shadow-sm">
          <div class="card-body cards1 text-center">
            <h5 class="card-title">4. Upload Documents</h5>
            <p class="card-text" >Upload your photo, signature, and ID proof securely to complete the process.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
</div>
<hr>
            </div>
                 </div>

                <!-- 4 Box Card Section -->
<div class="container my-5">
  <div class="row g-4">

    <div class="col-md-3 col-sm-6">
      <div class="card h-100 cards">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ3BpfYxghmL--p6NXGwasO7tPexuz3HSDGyQMUvQVa2A&s=10" class="card-img-top" height="180px" alt="Nomination">
        <div class="card-body">
          <h5 class="card-title">Nomination Info</h5>
          <p class="card-text">Easily submit your nomination securely online.</p>
          <a href="Nominate.php" class="btn btn-primary btn-sm">Apply Now</a>
        </div>
      </div>
    </div>

    <div class="col-md-3 col-sm-6">
      <div class="card h-100 cards">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRic-V5rRWS_BA16lZvbSRh7_3g4NOJG4878m86U0HQgQ&s=10" class="card-img-top" height="180px" alt="Registration">
        <div class="card-body">
          <h5 class="card-title">Register/Login</h5>
          <p class="card-text">Register yourself to become a verified voter.</p>
          <a href="Regi_Candidate.php" class="btn btn-primary btn-sm">Register</a>
        </div>
      </div>
    </div>

    <div class="col-md-3 col-sm-6">
      <div class="card h-100 cards">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR3jsoi2-Aor4gcOOQvpQHM8aLKi_79RUCj5PGQaFedaQ&s=10" class="card-img-top" height="180px" alt="Voter ID">
        <div class="card-body">
          <h5 class="card-title">Nomination From</h5>
          <p class="card-text">Download your digital voter ID after verification.</p>
          <a href="Nomination_form.php" class="btn btn-primary btn-sm">Fill Up Now</a>
        </div>
      </div>
    </div>

    <div class="col-md-3 col-sm-6">
      <div class="card h-100 cards">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS1D9BargpIbLsd5K9or7sCN2CZVIyWbWBZr_iu-qwtww&s=10" class="card-img-top" height="180px" alt="Status">
        <div class="card-body">
          <h5 class="card-title">Application Status</h5>
          <p class="card-text">Track the current status of your nomination.</p>
          <a href="Nomination_status.php" class="btn btn-primary btn-sm">Check Now</a>
        </div>
      </div>
    </div>
<hr>
  </div>
</div>


<div class="container my-5">
  <h2 class="text-center mb-4">Frequently Asked Questions ❓ (FAQs)</h2>
  <div class="row">
    
    <!-- First Accordion -->
    <div class="col-md-6 mb-3">
      <div class="accordion" id="faqAccordionLeft">
        <div class="accordion-item">
          <h2 class="accordion-header" id="faq1">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#ans1" aria-expanded="true">
              Who can file a nomination?
            </button>
          </h2>
          <div id="ans1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordionLeft">
            <div class="accordion-body">
              Any Indian citizen meeting the eligibility criteria set by the Election Commission can file a nomination.
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="faq2">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ans2">
              What documents are required?
            </button>
          </h2>
          <div id="ans2" class="accordion-collapse collapse" data-bs-parent="#faqAccordionLeft">
            <div class="accordion-body">
              You need to upload a valid photo ID, signature, and a copy of your Aadhar card.
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="faq3">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ans3">
              How to check nomination status?
            </button>
          </h2>
          <div id="ans3" class="accordion-collapse collapse" data-bs-parent="#faqAccordionLeft">
            <div class="accordion-body">
              Login to your dashboard and click on “Nomination Status” to see updates.
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Second Accordion -->
    <div class="col-md-6 mb-3">
      <div class="accordion" id="faqAccordionRight">
        <div class="accordion-item">
          <h2 class="accordion-header" id="faq4">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#ans4" aria-expanded="true">
              Is there a deadline to file nomination?
            </button>
          </h2>
          <div id="ans4" class="accordion-collapse collapse show" data-bs-parent="#faqAccordionRight">
            <div class="accordion-body">
              Yes, all nominations must be submitted before the last date announced by the Election Commission.
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="faq5">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ans5">
              Can I withdraw my nomination?
            </button>
          </h2>
          <div id="ans5" class="accordion-collapse collapse" data-bs-parent="#faqAccordionRight">
            <div class="accordion-body">
              Yes, candidates may withdraw their nomination before the withdrawal deadline.
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="faq6">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ans6">
              Who can I contact for support?
            </button>
          </h2>
          <div id="ans6" class="accordion-collapse collapse" data-bs-parent="#faqAccordionRight">
            <div class="accordion-body">
              Please contact your local election office or email support@electionportal.gov.
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>



<!-- Bootstrap JS (at bottom of your body) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


<!-- Location  -->
 <div class="container">
  <div class="row">
    <div class="col-sm-12">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d142607.14207248902!2d83.24683533656778!3d26.552792137822568!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399114b99ffb4bc9%3A0x67df7573d8f3259a!2sMahamaya%20Polytechnic%20Of%20Information%20Technology%2C%20Hariharpur%2CGorakhpur!5e0!3m2!1sen!2sin!4v1753306425633!5m2!1sen!2sin" width="100%" height="400" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> </div>
  </div>
 </div>


   

 <!-- footer link -->
 <?php 

   include 'footer.php';
   
   ?>
      <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
    </body>
  </html>