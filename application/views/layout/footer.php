<!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
		  <a href="<?php echo base_url()?>">
            <img class="img-fluid logo" src="<?php echo base_url()?>/assets/img/logo.svg">
          </a>
		  </div>

          <div class="col-lg-3  col-md-6 footer-links">
            <p>
             1460 Broadway,<br>
              New York, NY 10036<br>
              <strong>Email:</strong><a href="#"> support@theforcereport.com</a><br>
              <strong>Phone:</strong> <a href="#">(917) 747-6198</a><br>
              
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <ul>
              <li> <a href="<?php echo base_url()?>">Home</a></li>
              <li> <a href="<?php echo base_url('about')?>">About</a></li>
              <li> <a href="<?php echo base_url('login')?>">Login</a></li>
              <li> <a href="<?php echo base_url('register');?>">Register</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <ul>
             
              <li> <a href="<?php echo base_url('sell')?>">Sell-Side</a></li>
             
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="col-md-6 me-md-auto  mt-auto p-2 mb-3 footer-newsletter">
        <form action="" id="subscribeform" method="post">
          <input type="email" name="email_id" placeholder="Email"><i class='fas fa-location-arrow' style='font-size:24px'></i>
		</form>
		<div class="subscribe_message"></div>
		<style>
		.copyright:hover{color:#fff;text-decoration:underline;!important}
		</style>
      <p class="text-md-start text-center">Join Our List (we send one email per quarter).</p>
      </div>
      <div class="social-links text-end mt-auto p-2 mb-3">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
       <!-- <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a> -->
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        <div><p>© Force Report All Rights Reserved | Website <a class="copyright" href="https://designbysunman.com/"> Design By Sunman</a></p></div>
      </div>
    </div>
  </footer><!-- End Footer -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
  $('#subscribeform').submit(function(e) {
    e.preventDefault();
    
    // Serialize the form data
    var formData = $(this).serialize();

    // Send the Ajax request
    $.ajax({
      url: '<?php echo base_url('subscribe');?>',
      type: 'POST',
      data: formData,
      dataType: 'json',
      success: function(response) {
        if (response.success) {
          // Display success message on the page
          $('.subscribe_message').text(response.message).addClass('success').removeClass('error');
        } else {
          // Display error message on the page
          $('.subscribe_message').text(response.message).addClass('error').removeClass('success');
        }
      },
      error: function() {
        // Display error message on the page
        $('.subscribe_message').text('An error occurred while submitting the form').addClass('error').removeClass('success');
      }
    });
  });
});
// Add event listener to show selected option in the overlay
const selectElement = document.querySelector('.custom-select select');
const overlayElement = document.querySelector('.custom-select .select-overlay');

selectElement.addEventListener('change', function() {
  overlayElement.textContent = this.options[this.selectedIndex].textContent;
});

</script>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url()?>assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="<?php echo base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url()?>assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?php echo base_url()?>assets/vendor/php-email-form/validate.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
   
<!-- Template Main JS File -->
  <script src="<?php echo base_url()?>assets/js/main.js"></script>
  <script src="<?php echo base_url()?>assets/js/countrystatecity.js"></script>
  