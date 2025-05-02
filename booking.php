<?php
include("./inc/header.php");
?>

<?php
session_start();
?>



<section>
<div class="container mt-5">
    <form action="add-booking-todo.php" method="POST"> 
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
      <div class="row mb-3">
        <div class="col-md-6">
          <label for="name" class="form-label text-secondary fw-bolder">Name</label>
          <input type="text" class="form-control" name="name" placeholder="Your name">
        </div>
        <div class="col-md-6">
          <label for="email" class="form-label text-secondary fw-bolder">Email ID</label>
          <input type="email" class="form-control" name="email" placeholder="Email address">
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-md-6">
          <label for="phone" class="form-label text-secondary fw-bolder">Phone No.</label>
          <input type="tel" class="form-control" name="phone" placeholder="Phone number">
        </div>
        <div class="col-md-6">
          <label for="city" class="form-label text-secondary fw-bolder">City</label>
          <input type="text" class="form-control" name="city" placeholder="City">
        </div>
      </div>

      <div class="mb-3">
        <label for="address" class="form-label text-secondary fw-bolder">Address</label>
        <textarea class="form-control" name="address" rows="2" placeholder="Address"></textarea>
      </div>

      <div class="row mb-3">
        <div class="col-md-6">
          <label for="car" class="form-label text-secondary fw-bolder">Select Your Car Booking</label>
          <select class="form-select" name="booking">
            <option selected disabled>--------Select Your Car--------</option>
            <option value="Tata">Tata Indigo</option>
            <option value="suv">SUV</option>
            <option value="Swift">Swift</option>
            <option value="Swift">Swift Dezire</option>
            <option value="Innova">Innova</option>
            <option value="Tempo">Tempo Traveller</option>
            <option value="Bus">Bus</option>
            <option value="Ertiga">Ertiga</option>
            <option value="Anu">Anu other Car</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="persons" class="form-label text-secondary fw-bolder">No. of Persons</label>
          <input type="number" class="form-control" name="persons" placeholder="No. of Persons">
        </div>
      </div>

      <div class="mb-3">
        <label for="headline"  class="form-label text-secondary fw-bolder">Message Headline</label>
        <input type="text" class="form-control" name="headline" placeholder="Subject">
      </div>

      <div class="mb-3">
        <label for="message" class="form-label text-secondary fw-bolder">Your Message or Enquiry</label>
        <textarea class="form-control" name="message" rows="4" placeholder="Write your message here----"></textarea>
      </div>

      <div class="col-12 mt-4">
            <button type="submit" class="btn d-flex justify-content-center align-items-center text-white mb-3" 
        style="background-color: #e34b11; height: 50px; width: 140px;">
 Send message
</button>
    </form>
  </div>
</section>


  <?php
include("./inc/footer.php");
?>
