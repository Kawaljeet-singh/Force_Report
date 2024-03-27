<!DOCTYPE html>
<html lang="en">
   <?php $this->load->view("layout/head")?>
   <body>
      <?php $this->load->view("layout/header")?>
      <main id="main">
         <!-- ======= data-table ======= -->
         <section id="register" class="data-table">
            <div class="container">
                 <div class="row justify-content-center">
                     <div class="col-sm-12 col-md-8">
                        <div class="col-sm-12 text-center">
                           <h1>Register as</h1>
                        </div>
                        <div class="row justify-content-center my-5">
                           <?php $i=0; foreach($register_type as $sys) { $i++;?>
                           <div class="col-sm-12 col-md-4 ">
                              <div class="form-check">
                                 <input class="form-check-input" <?php if ($i==1) {echo "checked='true'";}?> required type="radio" name="registertype"  id="exampleRadios<?php echo $sys->sys_Id?>" value="<?php echo $sys->sys_Id?>" onchange="checkRadioSelection()">
                                 <label class="form-check-label" for="register_t<?php echo $sys->sys_Id?>">
                                 <?php echo $sys->sys_name?>
                                
                              </div>
                           </div>
                           <?php }?>
                        </div>
                        <form method="POST" name="family_office" action="">
                        <div class="row mb-3 " id="sector-1">
                            <div class="col-sm-6 mb-4">
                              <div class="form-check p-0">
                                 <input type="text" class="form-control" id="f_name" name="f_name" placeholder="First Name">
                              </div> 
                           </div>
                           <div class="col-sm-6 mb-4">
                              <div class="form-check p-0">
                                 <input type="text" class="form-control"  name="l_name" placeholder="Last Name">
                              </div>
                           </div>
                           <div class="col-sm-6 mb-4">
                              <div class="form-check p-0">
                                 <input type="text" class="form-control"  name="email" placeholder="User Email*">
                              </div>
                           </div>
                           <div class="col-sm-6 mb-4">
                              <div class="form-check p-0">
                                 <input type="text" class="form-control"  name="phone" placeholder="Phone">
                              </div>
                           </div>
                           <div class="col-sm-6 mb-4">
                              <div class="form-check p-0">
                                 <input type="text" class="form-control"  name="family_office" placeholder="Family Office">
                              </div>
                           </div>
                           <div class="col-sm-6 mb-4">
                              <div class="form-check p-0">
                                 <input type="text" class="form-control"  name="firm_name" placeholder="Firm Name">
                              </div>
                           </div>
                           <div class="col-sm-6 mb-4">
                              <div class="form-check p-0">
                                 <input type="password" class="form-control" id="password"  name="password" placeholder="Password*">
                              </div>
                           </div>
						   <div class="col-sm-6 mb-4">
                              <div class="form-check p-0">
                                 <input type="password" class="form-control"  id="confirm_password"  name="confirm_password" placeholder="Confirm Password*">
                              </div>
                           </div>
                          
                           <div class="col-sm-6 col-md-3 mb-4">
                              <div class="form-check p-0">
                                 <select name="country" class="countries " id="countryId">
									<option value="">Select Country</option>
								</select>
                              </div>
                           </div>
                           <div class="col-sm-6 col-md-3 mb-4">
                              <div class="form-check p-0">
                                <select name="state" class="states " id="stateId">
									<option value="">Select State</option>
								</select>
                              </div>
                           </div>
                           <div class="col-sm-6 col-md-3 mb-4">
                              <div class="form-check p-0">
								<select name="city" class="cities" id="cityId">
									<option value="">Select City</option>
								</select>                                 
								 </div>
                           </div>
                            <div class="col-sm-6 col-md-3 mb-4">
                              <div class="form-check p-0">
                                 <select  name="sf">
                                    <option value="917ddb65-f8ad-11ed-9f7d-3c7c3f5b04d2">SFO</option>
                                    <option value="a2e13801-f8ad-11ed-9f7d-3c7c3f5b04d2">MFO</option>
                                 </select>
                              </div>
                           </div>
                           
                           <div class="col-sm-6 mb-4">
                               <div class="input-group mb-3">
                                  <span class="input-group-text dd">$</span>
                                 <input type="text" class="form-control dd"  name="amount" placeholder="Total Investment Amount">
                                </div>
                              <div class="form-check p-0">
                                 
                              </div>
                           </div>
                           <div class="col-sm-6 mb-4">
                               
                              <div class="form-check p-0">
                                  <input type="text" class="form-control"  name="sizeby" placeholder="Number of Investment">
                              </div>
                           </div>
                           
                             <div class="col-sm-12 col-md-12 py-2">
                                 <input class="check" type="checkbox" name="anonymous" value="1" >
                                 <label>I want my information to stay anonymous</label>
                              </div>
                           <div class="col-lg-12">
                              <div class="col-sm-12 text-center my-5">
                                 <h1 style="color:#55AB33;">Investment Sector</h1>
                              </div>
                           </div>
                           <?php foreach ($invest_sector as $inv)
                              {
                              ?>
                           <div class="col-sm-4 col-md-4 py-2">
                              <input class="check" type="checkbox" name="sector_id[]"  value="<?php echo $inv->inv_ID;?>" >
                              <label><?php echo $inv->inv_sector;?></label>
                           </div>
                           <?php }?>
                           <div class="col-sm-12 text-center my-5" >
                              <h1 style="color:#1FB8EF;">Stage of Investment</h1>
                           </div>
                           <div class="row mb-3" id="sectors">
                              <?php foreach ($invest_stage as $inv)
                                 {
                                 ?>
                              <div class="col-sm-4 col-md-4 py-2">
                                 <input class="check" type="checkbox" name="invest_stage[]" value="<?php echo $inv->inv_ID;?>" >
                                 <label><?php echo $inv->inv_sector;?></label>
                              </div>
                              <?php }?>
                           </div>
                           <div class="col-sm-12 text-center my-5" id="sectors">
                              <h1 style="color:#FC9A0A;">Structure Of Investment</h1>
                           </div>
                           <?php foreach ($invest_structure as $inv)
                              {
                              ?>
                           <div class="col-sm-4 mb-4">
                              <input class="check" type="checkbox" name="invest_structure[]" value="<?php echo $inv->inv_ID;?>" >
                              <label><?php echo $inv->inv_sector;?></label>
                           </div>
                          
                           <?php }?>
                                <div class="col-12">
                                    <input type="hidden" name="register_type" value="1">
                                     <div class="col-sm-12 mb-4 text-center">
                                        <div class="message"></div>
                                        <input type="submit"  value="Submit" class="view-chat-btn">
                                     </div>
                                      <div class="col-sm-12 text-center d-none">
                                     <img class="img-fluid" src="<?php echo base_url()?>/assets/img/company.png">
                                  </div>
                                  </div>
                                 
                        
                        </form></div>
                        <form method="POST" name="sell_side" action="">
                        <div class="row d-none" id="sector-2">
                            <div class="col-sm-6 mb-4">
                              <div class="form-check p-0">
                                 <input type="text" class="form-control" id="f_name" name="f_name" placeholder="First Name">
                              </div> 
                           </div>
                           <div class="col-sm-6 mb-4">
                              <div class="form-check p-0">
                                 <input type="text" class="form-control"  name="l_name" placeholder="Last Name">
                              </div>
                           </div>
                           <div class="col-sm-6 mb-4">
                              <div class="form-check p-0">
                                 <input type="text" class="form-control"  name="email" placeholder="User Email*">
                              </div>
                           </div>
                           <div class="col-sm-6 mb-4">
                              <div class="form-check p-0">
                                 <input type="text" class="form-control"  name="phone" placeholder="Phone">
                              </div>
                           </div>
                           <div class="col-sm-6 mb-4">
                              <div class="form-check p-0">
                                 <input type="text" class="form-control"  name="family_office" placeholder="Position in Firm">
                              </div>
                           </div>
                           <div class="col-sm-6 mb-4">
                              <div class="form-check p-0">
                                 <input type="text" class="form-control"  name="firm_name" placeholder="Firm Name">
                              </div>
                           </div>
                           <div class="col-sm-6 mb-4">
                              <div class="form-check p-0">
                                 <input type="password" class="form-control" id="spassword"  name="password" placeholder="Password*">
                              </div>
                           </div>
						   <div class="col-sm-6 mb-4">
                              <div class="form-check p-0">
                                 <input type="password" class="form-control"  id="confirm_password"  name="confirm_password" placeholder="Confirm Password*">
                              </div>
                           </div>
                          
                           <div class="col-sm-6 col-md-4 mb-4">
                              <div class="form-check p-0">
                                 <select name="country" class="countries " id="countryId">
									<option value="">Select Country</option>
								</select>
                              </div>
                           </div>
                           <div class="col-sm-6 col-md-4 mb-4">
                              <div class="form-check p-0">
                                <select name="state" class="states" id="stateId">
									<option value="">Select State</option>
								</select>
                              </div>
                           </div>
                           <div class="col-sm-6 col-md-4 mb-4">
                              <div class="form-check p-0">
								<select name="city" class="cities " id="cityId">
									<option value="">Select City</option>
								</select>                                 
								 </div>
                           </div>
                             
                            
                             <div class="col-12  ">
                                <input type="hidden" name="register_type" value="2">
                                     <div class="col-sm-12 mb-4 text-center">
                                        <div class="message"></div>
                                        <input type="submit"  value="Submit" class="view-chat-btn">
                                     </div>
                                      <div class="col-sm-12 text-center d-none">
                                     <img class="img-fluid" src="<?php echo base_url()?>/assets/img/company.png">
                                  </div>
                                  </div>
                                 
                                  
                        </div>
                        </form>
                        <form method="POST" name="service_provider" action="">
                        <div class="row d-none" id="sector-3">
                            <div class="col-sm-6 mb-4">
                              <div class="form-check p-0">
                                 <input type="text" class="form-control" id="f_name" name="f_name" placeholder="First Name">
                              </div> 
                           </div>
                           <div class="col-sm-6 mb-4">
                              <div class="form-check p-0">
                                 <input type="text" class="form-control"  name="l_name" placeholder="Last Name">
                              </div>
                           </div>
                           <div class="col-sm-6 mb-4">
                              <div class="form-check p-0">
                                 <input type="text" class="form-control"  name="email" placeholder="User Email*">
                              </div>
                           </div>
                           <div class="col-sm-6 mb-4">
                              <div class="form-check p-0">
                                 <input type="text" class="form-control"  name="phone" placeholder="Phone">
                              </div>
                           </div>
                            <div class="col-sm-6 mb-4">
                              <div class="form-check p-0">
                                 <input type="password" class="form-control" id="ppassword"  name="password" placeholder="Password*">
                              </div>
                           </div>
                             
                            
						   <div class="col-sm-6 mb-4">
                              <div class="form-check p-0">
                                 <input type="password" class="form-control"  id="confirm_password"  name="confirm_password" placeholder="Confirm Password*">
                              </div>
                           </div>
                           <div class="col-sm-6 mb-4">
                              <div class="form-check p-0">
                                 <input type="text" class="form-control"  name="firm_name" placeholder="Firm Name">
                              </div>
                           </div>
                          
                             <div class="col-sm-6 mb-4">
                                 <div class="form-check p-0">
                                    <input type="text" class="form-control"  name="firm_descriptions"  placeholder="Position in firm" />
                                </div>
                              </div>
                                         <div class="col-sm-6 mb-4">
                                 <div class="form-check p-0">
                                    <select name="sector_of_invests">
                                       <option>Investment Sector</option>
                                       <?php foreach ($invest_sector as $inv)
                                          {
                                          ?>
                                       <option value="<?php echo $inv->inv_key;?>"><?php echo $inv->inv_sector;?></option>
                                       <?php }?>
                                    </select>
                                   
                                 </div>
                              </div>
                          
                               <div class="col-sm-6 mb-4">
                              <div class="form-check p-0">
                                 <select name="country" class="countries " id="countryId">
									<option value="">Select Country</option>
								</select>
                              </div>
                           </div>
                           <div class="col-sm-6 mb-4">
                              <div class="form-check p-0">
                                <select name="state" class="states " id="stateId">
									<option value="">Select State</option>
								</select>
                              </div>
                           </div>
                           <div class="col-sm-6 mb-4">
                              <div class="form-check p-0">
								<select name="city" class="cities " id="cityId">
									<option value="">Select City</option>
								</select>                                 
								 </div>
                           </div>
                           
                             <div class="col-sm-6 mb-4">
                                 <div class="form-check p-0">
                                    <select  name="category">
                                       <option>Category</option>
                                       <?php foreach ($category as $inv)
                                          {
                                               $pageTitleWithoutTop = str_replace('Top', '', $inv->page_title);
                                          ?>
                                       <option value="<?php echo $inv->uuid;?>"><?php echo $pageTitleWithoutTop;?></option>
                                       <?php }?>
                                    </select>
                              </div>
                              </div>
                         
                            <div class="col-sm-12 col-md-12 py-2">
                                 <p>Optional Information About Your Client(s)</p>
                              </div>
                              <div class="col-sm-6 mb-4">
                                 <div class="form-check p-0">
                                    <select  name="invest_structures">
                                       <option>Structure of Investment</option>
                                       <?php foreach ($invest_structure as $inv)
                                          {
                                          ?>
                                       <option value="<?php echo $inv->inv_key;?>"><?php echo $inv->inv_sector;?></option>
                                       <?php }?>
                                    </select>
                                 </div>
                              </div>
                          
                           
                            <div class="col-sm-6 mb-4">
                              <div class="form-check p-0">
                               <input type="text" class="form-control"  name="sizeby" placeholder="Number of Investment">
                              </div>
                           </div>
                          
                          
                              <div class="col-sm-6 mb-4">
                                 <div class="form-check p-0">
                                    <select   name="invest_stages">
                                       <option>Stage of Investment</option>
                                       <?php foreach ($invest_stage as $inv)
                                          {
                                          ?>
                                       <option value="<?php echo $inv->inv_key;?>"><?php echo $inv->inv_sector;?></option>
                                       <?php }?>
                                    </select>
                                 </div>
                              </div>
                           
                               <div class="col-12  ">
                                   <input type="hidden" name="register_type" value="3">
                                     <div class="col-sm-12 mb-4 text-center">
                                        <div class="message"></div>
                                        <input type="submit"  value="Submit" class="view-chat-btn">
                                        
                                     </div>
                                      <div class="col-sm-12  text-center d-none">
                                     <img class="img-fluid" src="<?php echo base_url()?>/assets/img/company.png">
                                  </div>
                                  </div>
                                
                            </div>
                         </form>
                     </div>
                  </div>
                 
            </div>
            </div>
          
         </section>
         <!-- End Why Us Section -->
      </main>
      <!-- End #main -->
      <?php $this->load->view("layout/footer")?>
      <script>
         function checkRadioSelection() {
         	var selectedRadioId = document.querySelector('input[name="registertype"]:checked').id;
         	if (selectedRadioId === 'exampleRadios1') {
         		document.getElementById('sector-1').classList.remove('d-none');
         		document.getElementById('sector-2').classList.add('d-none');
         		document.getElementById('sector-3').classList.add('d-none');
         		 
         	}
         		else if (selectedRadioId === 'exampleRadios2') {
         		document.getElementById('sector-1').classList.add('d-none');
         		document.getElementById('sector-2').classList.remove('d-none');
         		document.getElementById('sector-3').classList.add('d-none');
         	}
         		else if (selectedRadioId === 'exampleRadios3') {
         		document.getElementById('sector-1').classList.add('d-none');
         		document.getElementById('sector-2').classList.add('d-none');
         		document.getElementById('sector-3').classList.remove('d-none');
         	}
         }
      </script>
	  
      
<script>
$(function() {
  // Initialize form validation on the registration form
  var form = $("form[name='family_office']");
  
  form.validate({
    // Specify validation rules
    rules: {
        f_name: "required",
      l_name: "required",
      email: {
        required: true,
        email: true
      },
    
      phone: {
        required: true,
        digits: true,
        maxlength: 10,
        minlength: 10
      },
      password: {
        required: true,
        minlength: 6
      },
      confirm_password: {
        required: true,
        minlength: 6,
        equalTo: "#password"
      },
      amount: {
        required: true,
        digits: true
      },
      sizeby: {
        digits: true
      },
      // Add more validation rules for other fields as needed
    },
    // Specify validation error messages
    messages: {
      f_name: "Required Field",
      l_name: "Required Field",
      email: "Required Field",
      phone: {
        required: "Required Field",
       
      },
      password: {
        required: "Required Field",
        minlength: "Password must be at least 6 characters long"
      },
      confirm_password: {
        required: "Required Field",
        minlength: "Password must be at least 6 characters long",
        equalTo: "Passwords do not match"
      },
      amount: {
        required: "Required Field",
        digits: "Please enter only digits"
      },
      sizeby: {
        digits: "Please enter only digits"
      },
      // Add more error messages for other fields as needed
    },
    // Submit the form via AJAX if it is valid
    submitHandler: function(form, event) {
      // Prevent default form submission
      event.preventDefault();

      var formData = new FormData(form);

      // Send the Ajax request
      $.ajax({
        url: '<?php echo base_url('register_submit');?>',
        type: 'POST',
        data: formData,
        processData: false, // Prevent jQuery from automatically transforming the data into a query string
        contentType: false,
        dataType: 'json',
        success: function(response) {
          if (response.success) {
            // Display success message on the page
            $('.message').text(response.message).addClass('success').removeClass('error');
          } else {
            // Display error message on the page
            $('.message').text(response.message).addClass('error').removeClass('success');
          }
        },
        error: function() {
          // Display error message on the page
          $('.message').text('An error occurred while submitting the form').addClass('error').removeClass('success');
        }
      });
    }
  });

  
});

$(function() {
  // Initialize form validation on the registration form
  var form = $("form[name='sell_side']");
 

  form.validate({
    // Specify validation rules
    rules: {
    f_name: "required",
      l_name: "required",
      email: {
        required: true,
        email: true
      },
      phone: {
        required: true,
        digits: true,
        maxlength: 10,
        minlength: 10
      },
      password: {
        required: true,
        minlength: 6
      },
      confirm_password: {
        required: true,
        minlength: 6,
        equalTo: "#spassword"
      },
      amount: {
        required: true,
        digits: true
      },
      sizeby: {
        digits: true
      },
      // Add more validation rules for other fields as needed
    },
    // Specify validation error messages
    messages: {
      f_name: "Required Field",
      l_name: "Required Field",
      email: "Required Field",
      phone: {
        required: "Required Field",
        
      },
      password: {
        required: "Required Field",
        minlength: "Password must be at least 6 characters long"
      },
      confirm_password: {
        required: "Required Field",
        minlength: "Password must be at least 6 characters long",
        equalTo: "Passwords do not match"
      },
      amount: {
        required: "Required Field",
        digits: "Please enter only digits"
      },
      sizeby: {
        digits: "Please enter only digits"
      },
      // Add more error messages for other fields as needed
    },
    // Submit the form via AJAX if it is valid
    submitHandler: function(form, event) {
      // Prevent default form submission
      event.preventDefault();

      var formData = new FormData(form);

      // Send the Ajax request
      $.ajax({
        url: '<?php echo base_url('register_submit');?>',
        type: 'POST',
        data: formData,
        processData: false, // Prevent jQuery from automatically transforming the data into a query string
        contentType: false,
        dataType: 'json',
        success: function(response) {
          if (response.success) {
            // Display success message on the page
            $('.message').text(response.message).addClass('success').removeClass('error');
          } else {
            // Display error message on the page
            $('.message').text(response.message).addClass('error').removeClass('success');
          }
        },
        error: function() {
          // Display error message on the page
          $('.message').text('An error occurred while submitting the form').addClass('error').removeClass('success');
        }
      });
    }
  });
 
});

$(function() {
  // Initialize form validation on the registration form
  $("form[name='service_provider']").validate({
    // Specify validation rules
    rules: {
         f_name: "required",
      l_name: "required",
      email: {
        required: true,
        email: true
      },
      
      phone: {
        required: true,
        digits: true,
        maxlength: 10,
		minlength: 10
      },
      password: {
        required: true,
        minlength: 6
      },
      confirm_password: {
        required: true,
        minlength: 6,
        equalTo: "#ppassword"
      },
	  amount: {
        required: true,
        digits: true
         
      },
       sizeby: {
       
        digits: true
         
      },
      // Add more validation rules for other fields as needed
    },
    // Specify validation error messages
    messages: {
         f_name: "Required Field",
      l_name: "Required Field",
      email: "Required Field",
       phone: {
        required: "Required Field",
        digits: "Please enter only digits",
         minlength: "Phone number must be exactly 10 digits",
        maxlength: "Phone number must be exactly 10 digits"
      },
      password: {
        required: "Required Field",
        minlength: "Password must be at least 6 characters long"
      },
      confirm_password: {
        required: "Required Field",
        minlength: "Password must be at least 6 characters long",
        equalTo: "Password do not match"
      },
	   amount: {
        required: "Required Field",
        digits: "Please enter only digits"
      },
        sizeby: {
        digits: "Please enter only digits"
      },
      // Add more error messages for other fields as needed
    },
    // Submit the form via AJAX if it is valid
    submitHandler: function(form, event) {
      // Prevent default form submission
      event.preventDefault();

              var formData = new FormData(form);
         
             // Send the Ajax request
             $.ajax({
               url: '<?php echo base_url('register_submit');?>',
               type: 'POST',
               data: formData,
			   processData: false, // Prevent jQuery from automatically transforming the data into a query string
        contentType: false,
               dataType: 'json',
               success: function(response) {
                 if (response.success) {
                   // Display success message on the page
                   $('.message').text(response.message).addClass('success').removeClass('error');
                 } else {
                   // Display error message on the page
                   $('.message').text(response.message).addClass('error').removeClass('success');
                 }
               },
               error: function() {
                 // Display error message on the page
                 $('.message').text('An error occurred while submitting the form').addClass('error').removeClass('success');
               }
             });
    }
  });
});

</script>


   </body>
</html>
