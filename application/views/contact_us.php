<!DOCTYPE html>
<html lang="en">
 <?php $this->load->view("layout/head")?>

<body>
  <?php $this->load->view("layout/header")?>

  

  <main id="main">

    <!-- ======= data-table ======= -->
    <section id="login" class="data-table">
      <div class="container ">
			<div class="row justify-content-center">
				<div class="col-sm-12 text-center">
					<h1>Contact <span>Us</span></h1>
				</div>
				<div class="col-sm-6 mt-5" >
    				 <div id="thankYouMsg" class="mt-3" style="display: none;">
                            Thank you for your message!
                        </div>
				<!-- ... (previous code) ... -->
                <form id="contactForm" name=>
                    <div class="mb-3">
                      
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" required>
                    </div>
                    <div class="mb-3">
                       <textarea  name="message" id="message" placeholder="Management Description"></textarea>
                    </div>
                    <button type="submit" class="view-chat-btn">Submit</button>
                </form>
                <!-- ... (remaining code) ... -->
                
				</div>
				<div class="col-sm-6 mt-5">
			        <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=652&amp;height=551&amp;hl=en&amp;q=1460 Broadway,New York NY 10036, USA&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://gachanymph.com/">Gacha Nymph APK</a></div><style>.mapouter{position:relative;text-align:right;width:652px;height:551px;}.gmap_canvas {overflow:hidden;background:none!important;width:652px;height:551px;}.gmap_iframe {width:652px!important;height:551px!important;}</style></div>
			    </div>
					</div>
				 
					  <div class="col-sm-12 mt-5 text-center d-none">
					 <img class="img-fluid" src="<?php echo base_url()?>/assets/img/company.png">
					</div>
					 </div>
					
					
			</div>
			
      </div>
    </section><!-- End Why Us Section -->

  </main><!-- End #main -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#contactForm").submit(function(e) {
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url('submit_contact'); ?>", // Change the URL to your controller method
                    data: $(this).serialize(),
                    success: function(response) {
                        $("#contactForm").hide();
                        $("#thankYouMsg").show();
                    }
                });
            });
        });
    </script>
  <?php $this->load->view("layout/footer")?>
  

</body>

</html>