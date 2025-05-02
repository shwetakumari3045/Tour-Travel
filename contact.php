<?php
include("./inc/header.php");
?>

<?php
session_start();
?>
  

<section class="contact-field1">
        <div class="container">
            <div class="row">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3540.41828953503!2d77.68434961470267!3d27.456234182896527!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397377bf55d4fb9b%3A0x735c77447f67306f!2sFauji%20tours%20and%20travel!5e0!3m2!1sen!2sin!4v1592047769697!5m2!1sen!2sin" width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            </div>
        
            </section>

  <section>
  <div class="container mt-5">
  <?php
                if(isset($_SESSION['description'])){
                ?>
                 <div class="mb-3 alert alert-success">
                    <?= $_SESSION['description'] ?>
                </div>
                <?php
                unset($_SESSION['description']);
               }
               ?> 
    <div class="row align-items-start">

      <!-- Left Side: Form -->
      <div class="col-md-8"> 
        <form action="add-contact-todo.php" method="POST" class="row ">
          <!-- Name -->
          <div class="col-md-6">
            <input type="text" class="form-control" name="name" placeholder="Name*" style="height: 42px;">
          </div>
          <!-- Email -->
          <div class="col-md-6">
            <input type="email" class="form-control" name="email" placeholder="Email*" style="height: 42px;">
          </div>
          <!-- Subject -->
          <div class="col-12 mt-4">
        
            <input type="text" class="form-control" name="subject" placeholder="Subject*" style="height: 42px;">
          </div>
          <!-- Message -->
          <div class="col-12 mt-4">
        
            <textarea class="form-control" name="description" rows="10" placeholder="Comment*"></textarea>
          </div>
          <!-- Submit Button -->
          <div class="col-12 mt-4">
            <button type="submit" class="btn d-flex justify-content-center align-items-center text-white mb-3" 
        style="background-color: #e34b11; height: 50px; width: 140px;">
 SEND
</button>

          </div>
        </form>
      </div>

      <!-- Right Side: Contact Info -->
  <div class="col-md-4">
  <div class="bg-light text-center p-3 rounded mb-4">
    <i class="fa-solid fa-square-phone fa-2x text-primary mb-3 text-warning" ></i>
    <p class="text-center">
      <span>Phone :</span>
      <span class="item text-warning fw-bold"> +91-9876543210 9457076473</span>
    </p>
  </div>
  <div class="bg-light text-center p-3 rounded mb-4">
  <i class="fa-solid fa-envelope fa-2x text-primary mb-3 text-warning"></i>
    <p class="text-center">
      <span>Email :</span>
      <span class="item text-warning fw-bold"> faujitourandtravels@gmail.com</span>
      <span>Website : </span>
      <span class="item text-warning fw-bold">www.faujitourandtravels.com</span>
    </p>

  </div>
  <div class="bg-light text-center p-3 rounded mb-4">
  <i class="fa-solid fa-location-dot fa-2x text-primary mb-3 text-warning"></i>
    <p class="text-center">
      <span class="item text-warning fw-bold">H-63, Balaji Puram, Moti Nagar, Ext,
      Mathura, Uttar Pradesh 281006</span>
    </p>
  </div>
</div>


      

    </div>
  </div>
</section>
    
<?php

include("./inc/footer.php");
?>













