<?php
if ($service_data==1) { ?>
<div class="content">
  <div class="container">
    <div class="row">
      
      <input type="hidden" name="tab_ctrl" id="tab_ctrl" value="">
     
            <div class="col-xl-9 col-md-8">
        <div class="tab-content pt-0">
          <div class="tab-pane show active" id="user_profile_settings" >
            <div class="widget">
              <h4 class="widget-title">THE APPLICATION PROCESSES FOR CLEANING SERVICES</h4>
              <form id="update_user" action="<?php echo base_url()?>user/dashboard/update_user" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="" />
   
                <div class="row">
                  <div class="col-xl-12">
                    <h5 class="form-title"></h5>
                  </div>
                  <div class="form-group col-xl-12">
                    <div class="media align-items-center mb-3">
                      
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">1. What are you applying as or for? You can ONLY pick ONE.</label>

<div class="form-check">
  <input class="form-check-input coupon_question" type="checkbox" value="" id="flexCheckDefault" onchange="valueChanged()">
  <label class="form-check-label" for="flexCheckDefault">
    Employee  
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
    Subcontractors
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Self- employed   
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
    As a business with own employees – will need bigger dashboard space for them & their 

      individual staff
  </label>
</div>
                  </div>


<div class="form-group col-xl-12">
                    <label class="mr-sm-2">3. What are the areas would you like to work in?</label>

<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Just around my postcode  
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
    10 miles outside my postcode 
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
     30 miles  
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
     50 miles
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
     All over the country
  </label>
</div>
                  </div>
<div class="answer">
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">4. As part of our requirement, we are expected to carry out few checks for everyone in our platform. Our Vetting Status checks is the central to our service provision. Therefore, all paperwork Must be completed before your profile could be live of our site or start work with us.   By clicking this box means you have given us your permission to out your check.</label>
                    <label class="mr-sm-2">I</label>
                    <input class="form-control" type="text" value="" >
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2"> Qualification to carry out the job you applied for</label>
                    <input class="form-control" type="email" value="" >
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">Car insurance </label>
                    <input class="form-control" type="text" value="" >
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">Mot certificate</label>
                    <input class="form-control no_only" type="text"  value="<?php echo $get_details['mobileno']?>" name="mobileno" >
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">Driving licence</label>
                    <input class="form-control no_only" type="text"  value="<?php echo $get_details['mobileno']?>" name="mobileno" >
                  </div>
                  <div class="form-group col-xl-6">
                    <label class="mr-sm-2">Proof of address</label>
                    <input type="text" class="form-control provider_datepicker" autocomplete="off" name="dob" value="">
                  </div>
                  <div class="form-group col-xl-6">
                    <label class="mr-sm-2">Valid driving licence</label>
                    <input type="text" class="form-control provider_datepicker" autocomplete="off" name="dob" value="">
                  </div>
                  <div class="form-group col-xl-6">
                    <label class="mr-sm-2">Utility bill dated within the last three months</label>
                    <input type="text" class="form-control provider_datepicker" autocomplete="off" name="dob" value="">
                  </div>
                  <div class="form-group col-xl-6">
                    <label class="mr-sm-2">Rental/Mortgage agreement or council tax bill for the current year must provide</label>
                    <input type="text" class="form-control provider_datepicker" autocomplete="off" name="dob" value="" required>
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">Right to work in the country</label>
                    <input class="form-control no_only" type="text"  value="<?php echo $get_details['mobileno']?>" name="mobileno" required>
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">Business registration certificate</label>
                    <input class="form-control no_only" type="text"  value="<?php echo $get_details['mobileno']?>" name="mobileno" required>
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">Business insurance</label>
                    <input class="form-control no_only" type="text"  value="<?php echo $get_details['mobileno']?>" name="mobileno" required>
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">Method statement</label>
                    <input class="form-control no_only" type="text"  value="<?php echo $get_details['mobileno']?>" name="mobileno" required>
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">Proof of ID –Passport / Valid driving licence </label>
                    <input class="form-control no_only" type="text"  value="<?php echo $get_details['mobileno']?>" name="mobileno" required>
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">3-6 customer references from the last 24 months including customer’s name, telephone number and/or email addres</label>
                    <input class="form-control no_only" type="text"  value="<?php echo $get_details['mobileno']?>" name="mobileno" required>
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">Two References- name of last employers, telephone number and/or email and business address</label>
                    <input class="form-control no_only" type="text"  value="<?php echo $get_details['mobileno']?>" name="mobileno" required>
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">Bank Information for payment </label>
                    <input class="form-control no_only" type="text"  value="<?php echo $get_details['mobileno']?>" name="mobileno" required>
                  </div>
</div>
<div class="form-group col-xl-12">
                    <label class="mr-sm-2">5. Would you provide your own material and tools?</label>

<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Yes  
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
    No 
  </label>
</div>

                  </div>
<div class="form-group col-xl-12">
                    <label class="mr-sm-2">6. Have you got your own transport if applicable to your role chosen? </label>

<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
     Yes
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
     No
  </label>
</div>
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">7. Will you have other employment while working with us?</label>

<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
     No, Just you
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
     Yes, will Have other employment 
  </label>
</div>
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">8. Will you be willing to train into other areas if opportunity arises? </label>

<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
    Yes
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
    No
  </label>
</div>
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">9. You are expected to wear our uniform as you have to present to our client as us do you 
agree?</label>

<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Yes  
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
   No 
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    N/ A – reason why  
  </label>

                  </div></div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">10. What are the areas you are qualify on and applying for please tick as appropriate?</label>

<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    General cleaning   
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
    Commercial clean 
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
     Deep clean  
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
     Industrial
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
     Factory
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
     Specialized / Bio-hazards 
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
     Fogging
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
     Other
  </label>
</div>
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">
    11.  Do you own or have access to any cleaning materials, tools, or equipment?</label>

<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Hoovers  
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
  Cleaning commercial and materials  
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Fogging machines www.tazzerclean.co.uk/ 
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Industrial cleaning machine 
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Other – please list 
  </label>
</div>

                  </div>
                  <!--<div class="col-xl-12">
                    <h5 class="form-title">name5</h5>
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">name6</label>
                    <input type="text" class="form-control" name="address" value="">
                  </div>
                  <div class="form-group col-xl-6">
                    <label class="mr-sm-2">name7</label>
                    <select class="form-control" id="country_id" name="country_id" >
                      <option value=''>name8</option>
                      <option value=''></option> 
                    </select>
                  </div>
                  <div class="form-group col-xl-6">
                    <label class="mr-sm-2">name9</label>
                    <select class="form-control" name="state_id" id="state_id" >
                    </select>
                  </div>
                  <div class="form-group col-xl-6">
                    <label class="mr-sm-2">name10</label>
                    <select class="form-control" name="city_id" id="city_id">
                    </select>
                  </div>
                  <div class="form-group col-xl-6">
                    <label class="mr-sm-2">name11</label>
                    <input type="text" class="form-control" name="pincode" value="" >
                  </div> -->  
                  <div class="form-group col-xl-12">
                    <button name="form_submit" id="form_submit" class="btn btn-primary pl-5 pr-5" type="submit">Next</button>
                  </div>
                  <input type="hidden" id="country_id_value" value="">
            <input type="hidden" id="state_id_value" value="">
            <input type="hidden" id="city_id_value" value="">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> 

<?php }
if ($service_data==2) { ?>
<div class="content">
  <div class="container">
    <div class="row">
      
      <input type="hidden" name="tab_ctrl" id="tab_ctrl" value="">
     
            <div class="col-xl-9 col-md-8">
        <div class="tab-content pt-0">
          <div class="tab-pane show active" id="user_profile_settings" >
            <div class="widget">
              <h4 class="widget-title">THE APPLICATION PROCESSES FOR HANDYMAN SERVICES</h4>
              <form id="update_user" action="<?php echo base_url()?>user/dashboard/update_user" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="" />
   
                <div class="row">
                  <div class="col-xl-12">
                    <h5 class="form-title"></h5>
                  </div>
                  <div class="form-group col-xl-12">
                    <div class="media align-items-center mb-3">
                      
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">1. What are you applying as or for? You can ONLY pick ONE.</label>

<div class="form-check">
  <input class="form-check-input coupon_question" type="checkbox" value="" id="flexCheckDefault" onchange="valueChanged()">
  <label class="form-check-label" for="flexCheckDefault">
    Employee  
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
    Subcontractors
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Self- employed   
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
    As a business with own employees – will need bigger dashboard space for them & their 

      individual staff
  </label>
</div>
                  </div>



<div class="form-group col-xl-12">
                    <label class="mr-sm-2">2. What are the areas would you like to work in?</label>

<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Just around my postcode  
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
    10 miles outside my postcode 
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
     30 miles  
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
     50 miles
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
     All over the country
  </label>
</div>
                  </div>
<div class="answer">
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">3. As part of our requirement, we are expected to carry out few checks for everyone in our platform. Our Vetting Status checks is the central to our service provision. Therefore, all paperwork Must be completed before your profile could be live of our site or start work with us.   By clicking this box means you have given us your permission to out your check.</label>
                    <label class="mr-sm-2">  DBS </label>
                    <input class="form-control" type="text" value="" >
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">  Qualification to carry out the job you applied for</label>
                    <input class="form-control" type="email" value="" >
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">Car insurance  </label>
                    <input class="form-control" type="text" value="" >
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">Mot certificate</label>
                    <input class="form-control no_only" type="text"  value="<?php echo $get_details['mobileno']?>" name="mobileno"  required>
                  </div>
                  <div class="form-group col-xl-6">
                    <label class="mr-sm-2">Proof of address</label>
                    <input type="text" class="form-control provider_datepicker" autocomplete="off" name="dob" value="">
                  </div>
                  <div class="form-group col-xl-6">
                    <label class="mr-sm-2">Valid driving licence</label>
                    <input type="text" class="form-control provider_datepicker" autocomplete="off" name="dob" value="">
                  </div>
                  <div class="form-group col-xl-6">
                    <label class="mr-sm-2">Utility bill dated within the last three months</label>
                    <input type="text" class="form-control provider_datepicker" autocomplete="off" name="dob" value="">
                  </div>
                  <div class="form-group col-xl-6">
                    <label class="mr-sm-2">Rental/Mortgage agreement or council tax bill for the current year must provide</label>
                    <input type="text" class="form-control provider_datepicker" autocomplete="off" name="dob" value="" required>
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">Right to work in the country</label>
                    <input class="form-control no_only" type="text"  value="<?php echo $get_details['mobileno']?>" name="mobileno" required>
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">Business registration certificate</label>
                    <input class="form-control no_only" type="text"  value="<?php echo $get_details['mobileno']?>" name="mobileno" required>
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">Business insurance</label>
                    <input class="form-control no_only" type="text"  value="<?php echo $get_details['mobileno']?>" name="mobileno" required>
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">Method statement</label>
                    <input class="form-control no_only" type="text"  value="<?php echo $get_details['mobileno']?>" name="mobileno" required>
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">Proof of ID –Passport / Valid driving licence </label>
                    <input class="form-control no_only" type="text"  value="<?php echo $get_details['mobileno']?>" name="mobileno" required>
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">3-6 customer references from the last 24 months including customer’s name, telephone number and/or email addres</label>
                    <input class="form-control no_only" type="text"  value="<?php echo $get_details['mobileno']?>" name="mobileno" required>
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">Two References- name of last employers, telephone number and/or email and business address</label>
                    <input class="form-control no_only" type="text"  value="<?php echo $get_details['mobileno']?>" name="mobileno" required>
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">Bank Information for payment </label>
                    <input class="form-control no_only" type="text"  value="<?php echo $get_details['mobileno']?>" name="mobileno" required>
                  </div>
</div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">4. Would you provide your own material and tools?</label>

<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Yes  
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
    No 
  </label>
</div>

                  </div>
<div class="form-group col-xl-12">
                    <label class="mr-sm-2">5.  Have you got your own transport if applicable to your role chosen? </label>

<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
     Yes
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
     No
  </label>
</div>
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">6. Will you have other employment while working with us?</label>

<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
     No, Just you
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
     Yes, will Have other employment 
  </label>
</div>
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">7. Will you be willing to train into other areas if opportunity arises? </label>

<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
    Yes
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
    No
  </label>
</div>
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">8. You are expected to wear our uniform as you have to present to our client as us do you 
agree?</label>

<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Yes  
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
   No 
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    N/ A – reason why  
  </label>

                  </div></div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">9. What are the areas you are qualify on or applying for please tick as appropriate? </label>

<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
   General handyman – no qualification requires      
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
  Garage Door Repair    
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Fence and Gate Repair    
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
     Kitchen Repair and Refurbishment 
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
    Bathroom Tilers 
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
    Fence and Gate Installation 
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
   Garage Door Installation   
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
    Handyman 
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Internal Fitter    
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
    Paint Removal and Stripping  
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
     Picture Hanging and Art Installation   
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
    Cabinetry 
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
    Pipes Maintenance and Taps Fixtures 
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
    Splashback and worktops Repair 
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
    Shelving Repair and Installation  
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
   Switches and Outlets  
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
   Polycarbonate roof and sheet Installation     
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
   Polycarbonate roof and sheet Repairs   
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Shop Fitters and Audio Visual    
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
   Shop Fitters and Audio Visual  
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
   Steel Furniture and Tree Surgery  
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
  Demolition   
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
   Drainage and Sewage  
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
    Civil Engineering    
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
  Electricity or Electrical       
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
  Refurbishments, Carpentry and Joinery    
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
   Decoration and Painting Interior      
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
   Play or Playhouse Equipment and Construction   
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
  Door Repair Services   
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
  Kitchen Tiling   
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
   General Tiling   
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
   Drywall and Plaster boards Repair  
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
  General Plastering       
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
  Furniture and Flat Pack Assembling     
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
  Man, and Van Service      
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
  Taps and Fixture Installation   
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
   TV, Home Mounting and Theatre Installation    
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
    Worktops and Splash backs Installation 
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
   Grouting and Caulking and Sealing  
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
   Wallpapering   
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
   Internal conservatory roof Installation      
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
    Conservatory Repair  
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
   Lift Services     
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
   Sea Defence Work  
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
    Sport and Playground 
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
 Glazing    
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
   Ground worksGround worksGround works  
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
  Highway   
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
  Heating, Air Conditioning and Gas      
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
  Furniture and Soft Furnishings    
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
  Bridge Assessment and Repairs      
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
  Skip Hire   
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
   Bird Netting   
  </label>
</div>

                  </div>
                  
                  <!-- <div class="form-group col-xl-6">
                    <label class="mr-sm-2">name4</label>
                    <input type="text" class="form-control provider_datepicker" autocomplete="off" name="dob" value="">
                  </div>
                  
                  <div class="col-xl-12">
                    <h5 class="form-title">name5</h5>
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">name6</label>
                    <input type="text" class="form-control" name="address" value="">
                  </div>
                  <div class="form-group col-xl-6">
                    <label class="mr-sm-2">name7</label>
                    <select class="form-control" id="country_id" name="country_id" >
                      <option value=''>name8</option>
                      <option value=''></option> 
                    </select>
                  </div>
                  <div class="form-group col-xl-6">
                    <label class="mr-sm-2">name9</label>
                    <select class="form-control" name="state_id" id="state_id" >
                    </select>
                  </div>
                  <div class="form-group col-xl-6">
                    <label class="mr-sm-2">name10</label>
                    <select class="form-control" name="city_id" id="city_id">
                    </select>
                  </div>
                  <div class="form-group col-xl-6">
                    <label class="mr-sm-2">name11</label>
                    <input type="text" class="form-control" name="pincode" value="" >
                  </div> -->  
                  <div class="form-group col-xl-12">
                    <button name="form_submit" id="form_submit" class="btn btn-primary pl-5 pr-5" type="submit">Next</button>
                  </div>
                  <input type="hidden" id="country_id_value" value="">
            <input type="hidden" id="state_id_value" value="">
            <input type="hidden" id="city_id_value" value="">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>  
<?php }
if ($service_data==3) { ?>
<div class="content">
  <div class="container">
    <div class="row">
      
      <input type="hidden" name="tab_ctrl" id="tab_ctrl" value="">
     
            <div class="col-xl-9 col-md-8">
        <div class="tab-content pt-0">
          <div class="tab-pane show active" id="user_profile_settings" >
            <div class="widget">
              <h4 class="widget-title">THE APPLICATION PROCESSES FOR DOMESTIC HELPERS</h4>
              <form id="update_user" action="<?php echo base_url()?>user/dashboard/update_user" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="" />
   
                <div class="row">
                  <div class="col-xl-12">
                    <h5 class="form-title"></h5>
                  </div>
                  <div class="form-group col-xl-12">
                    <div class="media align-items-center mb-3">
                      
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">1. What are you applying as or for? You can ONLY pick ONE.</label>

<div class="form-check">
  <input class="form-check-input coupon_question" type="checkbox" value="" id="flexCheckDefault" onchange="valueChanged()">
  <label class="form-check-label" for="flexCheckDefault">
    Employee  
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
    Subcontractors
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Self- employed   
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
    As a business with own employees – will need bigger dashboard space for them & their 

      individual staff
  </label>
</div>
                  </div>


<div class="form-group col-xl-12">
                    <label class="mr-sm-2">2. What are the areas would you like to work in?</label>

<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Just around my postcode  
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
    10 miles outside my postcode 
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
     30 miles  
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
     50 miles
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
     All over the country
  </label>
</div>
                  </div>
<div class="answer">
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">4. As part of our requirement, we are expected to carry out few checks for everyone in our platform. Our Vetting Status checks is the central to our service provision. Therefore, all paperwork Must be completed before your profile could be live of our site or start work with us.   By clicking this box means you have given us your permission to out your check.</label>
                    <label class="mr-sm-2">I</label>
                    <input class="form-control" type="text" value="" >
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2"> Qualification to carry out the job you applied for</label>
                    <input class="form-control" type="email" value="" >
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">Car insurance </label>
                    <input class="form-control" type="text" value="" >
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">Mot certificate</label>
                    <input class="form-control no_only" type="text"  value="<?php echo $get_details['mobileno']?>" name="mobileno" required>
                  </div>
                  <div class="form-group col-xl-6">
                    <label class="mr-sm-2">Proof of address</label>
                    <input type="text" class="form-control provider_datepicker" autocomplete="off" name="dob" value="">
                  </div>
                  <div class="form-group col-xl-6">
                    <label class="mr-sm-2">Valid driving licence</label>
                    <input type="text" class="form-control provider_datepicker" autocomplete="off" name="dob" value="">
                  </div>
                  <div class="form-group col-xl-6">
                    <label class="mr-sm-2">Utility bill dated within the last three months</label>
                    <input type="text" class="form-control provider_datepicker" autocomplete="off" name="dob" value="">
                  </div>
                  <div class="form-group col-xl-6">
                    <label class="mr-sm-2">Rental/Mortgage agreement or council tax bill for the current year must provide</label>
                    <input type="text" class="form-control provider_datepicker" autocomplete="off" name="dob" value="" required>
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">Right to work in the country</label>
                    <input class="form-control no_only" type="text"  value="<?php echo $get_details['mobileno']?>" name="mobileno" required>
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">Business registration certificate</label>
                    <input class="form-control no_only" type="text"  value="<?php echo $get_details['mobileno']?>" name="mobileno" required>
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">Business insurance</label>
                    <input class="form-control no_only" type="text"  value="<?php echo $get_details['mobileno']?>" name="mobileno" required>
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">Method statement</label>
                    <input class="form-control no_only" type="text"  value="<?php echo $get_details['mobileno']?>" name="mobileno" required>
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">Proof of ID –Passport / Valid driving licence </label>
                    <input class="form-control no_only" type="text"  value="<?php echo $get_details['mobileno']?>" name="mobileno" required>
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">3-6 customer references from the last 24 months including customer’s name, telephone number and/or email addres</label>
                    <input class="form-control no_only" type="text"  value="<?php echo $get_details['mobileno']?>" name="mobileno" required>
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">Two References- name of last employers, telephone number and/or email and business address</label>
                    <input class="form-control no_only" type="text"  value="<?php echo $get_details['mobileno']?>" name="mobileno" required>
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">Bank Information for payment </label>
                    <input class="form-control no_only" type="text"  value="<?php echo $get_details['mobileno']?>" name="mobileno" required>
                  </div>
</div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">4. Would you provide your own material and tools?</label>

<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Yes  
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
    No 
  </label>
</div>

                  </div>
<div class="form-group col-xl-12">
                    <label class="mr-sm-2">5.  Have you got your own transport if applicable to your role chosen? </label>

<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
     Yes
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
     No
  </label>
</div>
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">6. Will you have other employment while working with us?</label>

<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
     No, Just you
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
     Yes, will Have other employment 
  </label>
</div>
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">7. Will you be willing to train into other areas if opportunity arises? </label>

<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
    Yes
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
    No
  </label>
</div>
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">8. You are expected to wear our uniform as you have to present to our client as us do you 
agree?</label>

<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Yes  
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
   No 
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    N/ A – reason why  
  </label>

                  </div></div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">9. What are the areas you are qualify on or applying for please tick as appropriate? </label>

<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
   Shopping      
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
  Pick-up and delivery     
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Meals   
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
     Porters- Market, shops, airport, bus and train station, hotels, Airbnb, etc 
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
   Helping with budgeting, bills, paperwork
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
   Laundry/ Ironing, decluttering 
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
  Companionship, Games, and Rest break
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
    Support with hospital visit / GP/ holidays, friends, and family visit.
  </label>
</div>

</div>
                  <!-- <div class="form-group col-xl-6">
                    <label class="mr-sm-2">name4</label>
                    <input type="text" class="form-control provider_datepicker" autocomplete="off" name="dob" value="">
                  </div>
                  
                  <div class="col-xl-12">
                    <h5 class="form-title">name5</h5>
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">name6</label>
                    <input type="text" class="form-control" name="address" value="">
                  </div>
                  <div class="form-group col-xl-6">
                    <label class="mr-sm-2">name7</label>
                    <select class="form-control" id="country_id" name="country_id" >
                      <option value=''>name8</option>
                      <option value=''></option> 
                    </select>
                  </div>
                  <div class="form-group col-xl-6">
                    <label class="mr-sm-2">name9</label>
                    <select class="form-control" name="state_id" id="state_id" >
                    </select>
                  </div>
                  <div class="form-group col-xl-6">
                    <label class="mr-sm-2">name10</label>
                    <select class="form-control" name="city_id" id="city_id">
                    </select>
                  </div>
                  <div class="form-group col-xl-6">
                    <label class="mr-sm-2">name11</label>
                    <input type="text" class="form-control" name="pincode" value="" >
                  </div> -->  
                  <div class="form-group col-xl-12">
                    <button name="form_submit" id="form_submit" class="btn btn-primary pl-5 pr-5" type="submit">Next</button>
                  </div>
                  <input type="hidden" id="country_id_value" value="">
            <input type="hidden" id="state_id_value" value="">
            <input type="hidden" id="city_id_value" value="">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php }
if ($service_data==4) { ?>
<div class="content">
  <div class="container">
    <div class="row">
      
      <input type="hidden" name="tab_ctrl" id="tab_ctrl" value="">
     
            <div class="col-xl-9 col-md-8">
        <div class="tab-content pt-0">
          <div class="tab-pane show active" id="user_profile_settings" >
            <div class="widget">
              <h4 class="widget-title">THE APPLICATION PROCESSES FOR FACILITIES / PROPERTY MANAGEMENT SERVICE</h4>
              <form id="update_user" action="<?php echo base_url()?>user/dashboard/update_user" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="" />
   
                <div class="row">
                  <div class="col-xl-12">
                    <h5 class="form-title"></h5>
                  </div>
                  <div class="form-group col-xl-12">
                    <div class="media align-items-center mb-3">
                      
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">1. What are you applying as or for? You can ONLY pick ONE.</label>

<div class="form-check">
  <input class="form-check-input coupon_question" type="checkbox" value="" id="flexCheckDefault" onchange="valueChanged()">
  <label class="form-check-label" for="flexCheckDefault">
    Employee  
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
    Subcontractors
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Self- employed   
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
    As a business with own employees – will need bigger dashboard space for them & their 

      individual staff
  </label>
</div>
                  </div>



<div class="form-group col-xl-12">
                    <label class="mr-sm-2">3. What are the areas would you like to work in?</label>

<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Just around my postcode  
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
    10 miles outside my postcode 
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
     30 miles  
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
     50 miles
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
     All over the country
  </label>
</div>
                  </div>
<div class="answer">
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">4. As part of our requirement, we are expected to carry out few checks for everyone in our platform. Our Vetting Status checks is the central to our service provision. Therefore, all paperwork Must be completed before your profile could be live of our site or start work with us.   By clicking this box means you have given us your permission to out your check.</label>
                    <label class="mr-sm-2">I</label>
                    <input class="form-control" type="text" value="" >
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2"> Qualification to carry out the job you applied for</label>
                    <input class="form-control" type="email" value="" >
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">Car insurance </label>
                    <input class="form-control" type="text" value="" >
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">Mot certificate</label>
                    <input class="form-control no_only" type="text"  value="<?php echo $get_details['mobileno']?>" name="mobileno"  required>
                  </div>
                  <div class="form-group col-xl-6">
                    <label class="mr-sm-2">Proof of address</label>
                    <input type="text" class="form-control provider_datepicker" autocomplete="off" name="dob" value="">
                  </div>
                  <div class="form-group col-xl-6">
                    <label class="mr-sm-2">Valid driving licence</label>
                    <input type="text" class="form-control provider_datepicker" autocomplete="off" name="dob" value="">
                  </div>
                  <div class="form-group col-xl-6">
                    <label class="mr-sm-2">Utility bill dated within the last three months</label>
                    <input type="text" class="form-control provider_datepicker" autocomplete="off" name="dob" value="">
                  </div>
                  <div class="form-group col-xl-6">
                    <label class="mr-sm-2">Rental/Mortgage agreement or council tax bill for the current year must provide</label>
                    <input type="text" class="form-control provider_datepicker" autocomplete="off" name="dob" value="" required>
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">Right to work in the country</label>
                    <input class="form-control no_only" type="text"  value="<?php echo $get_details['mobileno']?>" name="mobileno" required>
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">Business registration certificate</label>
                    <input class="form-control no_only" type="text"  value="<?php echo $get_details['mobileno']?>" name="mobileno" required>
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">Business insurance</label>
                    <input class="form-control no_only" type="text"  value="<?php echo $get_details['mobileno']?>" name="mobileno" required>
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">Method statement</label>
                    <input class="form-control no_only" type="text"  value="<?php echo $get_details['mobileno']?>" name="mobileno" required>
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">Proof of ID –Passport / Valid driving licence </label>
                    <input class="form-control no_only" type="text"  value="<?php echo $get_details['mobileno']?>" name="mobileno" required>
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">3-6 customer references from the last 24 months including customer’s name, telephone number and/or email addres</label>
                    <input class="form-control no_only" type="text"  value="<?php echo $get_details['mobileno']?>" name="mobileno" required>
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">Two References- name of last employers, telephone number and/or email and business address</label>
                    <input class="form-control no_only" type="text"  value="<?php echo $get_details['mobileno']?>" name="mobileno" required>
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">Bank Information for payment </label>
                    <input class="form-control no_only" type="text"  value="<?php echo $get_details['mobileno']?>" name="mobileno" required>
                  </div>
<div class="answer">
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">4. Would you provide your own material and tools?</label>

<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Yes  
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
    No 
  </label>
</div>

                  </div>
<div class="form-group col-xl-12">
                    <label class="mr-sm-2">5.  Have you got your own transport if applicable to your role chosen? </label>

<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
     Yes
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
     No
  </label>
</div>
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">6. Will you have other employment while working with us?</label>

<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
     No, Just you
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
     Yes, will Have other employment 
  </label>
</div>
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">7. Will you be willing to train into other areas if opportunity arises? </label>

<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
    Yes
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
    No
  </label>
</div>
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">8. You are expected to wear our uniform as you have to present to our client as us do you 
agree?</label>

<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Yes  
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
   No 
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    N/ A – reason why  
  </label>

                  </div></div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">9. What are the areas you are qualify on or applying for please tick as appropriate?  </label>

<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
  Cleaning     
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
  Catering/Vending    
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Security    
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
     Front of House 
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Preventative Maintenance    
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Post room services    
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Switch board & help desk services    
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Relocation, Home / office removal     
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    housekeeping and janitorial,    
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Garden and Lawn Maintenance,    
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Building Fabric & Asset maintenance,    
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Mall management, & Mail Room management.    
  </label>
</div>
</div>
                  <!-- <div class="form-group col-xl-6">
                    <label class="mr-sm-2">name4</label>
                    <input type="text" class="form-control provider_datepicker" autocomplete="off" name="dob" value="">
                  </div>
                  
                  <div class="col-xl-12">
                    <h5 class="form-title">name5</h5>
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">name6</label>
                    <input type="text" class="form-control" name="address" value="">
                  </div>
                  <div class="form-group col-xl-6">
                    <label class="mr-sm-2">name7</label>
                    <select class="form-control" id="country_id" name="country_id" >
                      <option value=''>name8</option>
                      <option value=''></option> 
                    </select>
                  </div>
                  <div class="form-group col-xl-6">
                    <label class="mr-sm-2">name9</label>
                    <select class="form-control" name="state_id" id="state_id" >
                    </select>
                  </div>
                  <div class="form-group col-xl-6">
                    <label class="mr-sm-2">name10</label>
                    <select class="form-control" name="city_id" id="city_id">
                    </select>
                  </div>
                  <div class="form-group col-xl-6">
                    <label class="mr-sm-2">name11</label>
                    <input type="text" class="form-control" name="pincode" value="" >
                  </div> -->  
                  <div class="form-group col-xl-12">
                    <button name="form_submit" id="form_submit" class="btn btn-primary pl-5 pr-5" type="submit">Next</button>
                  </div>
                  <input type="hidden" id="country_id_value" value="">
            <input type="hidden" id="state_id_value" value="">
            <input type="hidden" id="city_id_value" value="">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>  
<?php }

if ($service_data==5) { ?>
<div class="content">
  <div class="container">
    <div class="row">
      
      <input type="hidden" name="tab_ctrl" id="tab_ctrl" value="">
     
            <div class="col-xl-9 col-md-8">
        <div class="tab-content pt-0">
          <div class="tab-pane show active" id="user_profile_settings" >
            <div class="widget">
              <h4 class="widget-title">THE APPLICATION PROCESSES FOR CLEARANCE AND CLEAN-UP SERVICES</h4>
              <form id="update_user" action="<?php echo base_url()?>user/dashboard/update_user" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="" />
   
                <div class="row">
                  <div class="col-xl-12">
                    <h5 class="form-title"></h5>
                  </div>
                  <div class="form-group col-xl-12">
                    <div class="media align-items-center mb-3">
                      
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">1. What are you applying as or for? You can ONLY pick ONE.</label>

<div class="form-check">
  <input class="form-check-input coupon_question" type="checkbox" value="" id="flexCheckDefault" onchange="valueChanged()">
  <label class="form-check-label" for="flexCheckDefault">
    Employee  
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
    Subcontractors
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Self- employed   
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
    As a business with own employees – will need bigger dashboard space for them & their 

      individual staff
  </label>
</div>
                  </div>



<div class="form-group col-xl-12">
                    <label class="mr-sm-2">3. What are the areas would you like to work in?</label>

<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Just around my postcode  
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
    10 miles outside my postcode 
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
     30 miles  
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
     50 miles
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
     All over the country
  </label>
</div>
                  </div>
<div class="answer">
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">4. As part of our requirement, we are expected to carry out few checks for everyone in our platform. Our Vetting Status checks is the central to our service provision. Therefore, all paperwork Must be completed before your profile could be live of our site or start work with us.   By clicking this box means you have given us your permission to out your check.</label>
                    <label class="mr-sm-2">I</label>
                    <input class="form-control" type="text" value="" >
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2"> Qualification to carry out the job you applied for</label>
                    <input class="form-control" type="email" value="" >
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">Car insurance </label>
                    <input class="form-control" type="text" value="" >
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">Mot certificate</label>
                    <input class="form-control no_only" type="text"  value="<?php echo $get_details['mobileno']?>" name="mobileno"  required>
                  </div>
                   <div class="form-group col-xl-6">
                    <label class="mr-sm-2">Proof of address</label>
                    <input type="text" class="form-control provider_datepicker" autocomplete="off" name="dob" value="">
                  </div>
                  <div class="form-group col-xl-6">
                    <label class="mr-sm-2">Valid driving licence</label>
                    <input type="text" class="form-control provider_datepicker" autocomplete="off" name="dob" value="">
                  </div>
                  <div class="form-group col-xl-6">
                    <label class="mr-sm-2">Utility bill dated within the last three months</label>
                    <input type="text" class="form-control provider_datepicker" autocomplete="off" name="dob" value="">
                  </div>
                  <div class="form-group col-xl-6">
                    <label class="mr-sm-2">Rental/Mortgage agreement or council tax bill for the current year must provide</label>
                    <input type="text" class="form-control provider_datepicker" autocomplete="off" name="dob" value="" required>
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">Right to work in the country</label>
                    <input class="form-control no_only" type="text"  value="<?php echo $get_details['mobileno']?>" name="mobileno" required>
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">Business registration certificate</label>
                    <input class="form-control no_only" type="text"  value="<?php echo $get_details['mobileno']?>" name="mobileno" required>
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">Business insurance</label>
                    <input class="form-control no_only" type="text"  value="<?php echo $get_details['mobileno']?>" name="mobileno" required>
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">Method statement</label>
                    <input class="form-control no_only" type="text"  value="<?php echo $get_details['mobileno']?>" name="mobileno" required>
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">Proof of ID –Passport / Valid driving licence </label>
                    <input class="form-control no_only" type="text"  value="<?php echo $get_details['mobileno']?>" name="mobileno" required>
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">3-6 customer references from the last 24 months including customer’s name, telephone number and/or email addres</label>
                    <input class="form-control no_only" type="text"  value="<?php echo $get_details['mobileno']?>" name="mobileno" required>
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">Two References- name of last employers, telephone number and/or email and business address</label>
                    <input class="form-control no_only" type="text"  value="<?php echo $get_details['mobileno']?>" name="mobileno" required>
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">Bank Information for payment </label>
                    <input class="form-control no_only" type="text"  value="<?php echo $get_details['mobileno']?>" name="mobileno" required>
                  </div>
</div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">4. Would you provide your own material and tools?</label>

<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Yes  
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
    No 
  </label>
</div>

                  </div>
<div class="form-group col-xl-12">
                    <label class="mr-sm-2">5.  Have you got your own transport if applicable to your role chosen? </label>

<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
     Yes
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
     No
  </label>
</div>
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">6. Will you have other employment while working with us?</label>

<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
     No, Just you
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
     Yes, will Have other employment 
  </label>
</div>
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">7. Will you be willing to train into other areas if opportunity arises? </label>

<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
    Yes
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
    No
  </label>
</div>
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">8. You are expected to wear our uniform as you have to present to our client as us do you 
agree?</label>

<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Yes  
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
   No 
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    N/ A – reason why  
  </label>

                  </div></div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">9. What are the areas you are qualify on or applying for please tick as appropriate? </label>

<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
   Man & Van and Clearance       
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
 Bins, Bags, Sacks, or rubbish removal    
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
   House & office Clearance     
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
     Trade waste clean-up
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
     Business waste
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
    Bin washing 
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
    Event Management clean-up and clearance
  </label>
</div>
</div>
                  <!-- <div class="form-group col-xl-6">
                    <label class="mr-sm-2">name4</label>
                    <input type="text" class="form-control provider_datepicker" autocomplete="off" name="dob" value="">
                  </div>
                  
                  <div class="col-xl-12">
                    <h5 class="form-title">name5</h5>
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">name6</label>
                    <input type="text" class="form-control" name="address" value="">
                  </div>
                  <div class="form-group col-xl-6">
                    <label class="mr-sm-2">name7</label>
                    <select class="form-control" id="country_id" name="country_id" >
                      <option value=''>name8</option>
                      <option value=''></option> 
                    </select>
                  </div>
                  <div class="form-group col-xl-6">
                    <label class="mr-sm-2">name9</label>
                    <select class="form-control" name="state_id" id="state_id" >
                    </select>
                  </div>
                  <div class="form-group col-xl-6">
                    <label class="mr-sm-2">name10</label>
                    <select class="form-control" name="city_id" id="city_id">
                    </select>
                  </div>
                  <div class="form-group col-xl-6">
                    <label class="mr-sm-2">name11</label>
                    <input type="text" class="form-control" name="pincode" value="" >
                  </div> -->  
                  <div class="form-group col-xl-12">
                    <button name="form_submit" id="form_submit" class="btn btn-primary pl-5 pr-5" type="submit">Next</button>
                  </div>
                  <input type="hidden" id="country_id_value" value="">
            <input type="hidden" id="state_id_value" value="">
            <input type="hidden" id="city_id_value" value="">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>  
<?php }
if ($service_data==6) { ?>
<div class="content">
  <div class="container">
    <div class="row">
      
      <input type="hidden" name="tab_ctrl" id="tab_ctrl" value="">
     
            <div class="col-xl-9 col-md-8">
        <div class="tab-content pt-0">
          <div class="tab-pane show active" id="user_profile_settings" >
            <div class="widget">
              <h4 class="widget-title">THE APPLICATION PROCESSES FOR GARDENING AND MAINTENANCE SERVICES</h4>
              <form id="update_user" action="<?php echo base_url()?>user/dashboard/update_user" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="" />
   
                <div class="row">
                  <div class="col-xl-12">
                    <h5 class="form-title"></h5>
                  </div>
                  <div class="form-group col-xl-12">
                    <div class="media align-items-center mb-3">
                      
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">1. What are you applying as or for? You can ONLY pick ONE.</label>

<div class="form-check">
  <input class="form-check-input coupon_question" type="checkbox" value="" id="flexCheckDefault" onchange="valueChanged()">
  <label class="form-check-label" for="flexCheckDefault">
    Employee  
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
    Subcontractors
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Self- employed   
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
    As a business with own employees – will need bigger dashboard space for them & their 

      individual staff
  </label>
</div>
                  </div>



<div class="form-group col-xl-12">
                    <label class="mr-sm-2">3. What are the areas would you like to work in?</label>

<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Just around my postcode  
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
    10 miles outside my postcode 
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
     30 miles  
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
     50 miles
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
     All over the country
  </label>
</div>
                  </div>
<div class="answer">
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">4. As part of our requirement, we are expected to carry out few checks for everyone in our platform. Our Vetting Status checks is the central to our service provision. Therefore, all paperwork Must be completed before your profile could be live of our site or start work with us.   By clicking this box means you have given us your permission to out your check.</label>
                    <label class="mr-sm-2">I</label>
                    <input class="form-control" type="text" value="" >
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2"> Qualification to carry out the job you applied for</label>
                    <input class="form-control" type="email" value="" >
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">Car insurance </label>
                    <input class="form-control" type="text" value="" >
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">Mot certificate</label>
                    <input class="form-control no_only" type="text"  value="<?php echo $get_details['mobileno']?>" name="mobileno"  required>
                  </div>
                   <div class="form-group col-xl-6">
                    <label class="mr-sm-2">Proof of address</label>
                    <input type="text" class="form-control provider_datepicker" autocomplete="off" name="dob" value="">
                  </div>
                  <div class="form-group col-xl-6">
                    <label class="mr-sm-2">Valid driving licence</label>
                    <input type="text" class="form-control provider_datepicker" autocomplete="off" name="dob" value="">
                  </div>
                  <div class="form-group col-xl-6">
                    <label class="mr-sm-2">Utility bill dated within the last three months</label>
                    <input type="text" class="form-control provider_datepicker" autocomplete="off" name="dob" value="">
                  </div>
                  <div class="form-group col-xl-6">
                    <label class="mr-sm-2">Rental/Mortgage agreement or council tax bill for the current year must provide</label>
                    <input type="text" class="form-control provider_datepicker" autocomplete="off" name="dob" value="" required>
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">Right to work in the country</label>
                    <input class="form-control no_only" type="text"  value="<?php echo $get_details['mobileno']?>" name="mobileno" required>
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">Business registration certificate</label>
                    <input class="form-control no_only" type="text"  value="<?php echo $get_details['mobileno']?>" name="mobileno" required>
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">Business insurance</label>
                    <input class="form-control no_only" type="text"  value="<?php echo $get_details['mobileno']?>" name="mobileno" required>
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">Method statement</label>
                    <input class="form-control no_only" type="text"  value="<?php echo $get_details['mobileno']?>" name="mobileno" required>
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">Proof of ID –Passport / Valid driving licence </label>
                    <input class="form-control no_only" type="text"  value="<?php echo $get_details['mobileno']?>" name="mobileno" required>
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">3-6 customer references from the last 24 months including customer’s name, telephone number and/or email addres</label>
                    <input class="form-control no_only" type="text"  value="<?php echo $get_details['mobileno']?>" name="mobileno" required>
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">Two References- name of last employers, telephone number and/or email and business address</label>
                    <input class="form-control no_only" type="text"  value="<?php echo $get_details['mobileno']?>" name="mobileno" required>
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">Bank Information for payment </label>
                    <input class="form-control no_only" type="text"  value="<?php echo $get_details['mobileno']?>" name="mobileno" required>
                  </div>
</div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">4. Would you provide your own material and tools?</label>

<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Yes  
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
    No 
  </label>
</div>

                  </div>
<div class="form-group col-xl-12">
                    <label class="mr-sm-2">5.  Have you got your own transport if applicable to your role chosen? </label>

<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
     Yes
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
     No
  </label>
</div>
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">6. Will you have other employment while working with us?</label>

<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
     No, Just you
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
     Yes, will Have other employment 
  </label>
</div>
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">7. Will you be willing to train into other areas if opportunity arises? </label>

<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
    Yes
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
    No
  </label>
</div>
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">8. You are expected to wear our uniform as you have to present to our client as us do you 
agree?</label>

<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Yes  
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
   No 
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    N/ A – reason why  
  </label>

                  </div></div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">9. What are the areas you are qualify on or applying for please tick as appropriate? </label>

<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
   Garden Sprinkler System Installation      
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
Gazebo Installation
      
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
Trellis Installation, Pergola and Arbor
     
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
Pond and Water Feature Repair and Maintenance
    
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
Awning Installation
    
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
Fence and Gate Installation
    
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
Fence and Gate Repair
    
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
Gazebo Repair and Maintenance
    
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
Hot Tub and Maintenance
    
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
Hot Tub and Spa Repair
    
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
Lawn Mower Repair
    
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
Lawn Turfing and Seeding
    
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
Play Equipment Construction
    
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
Retaining Well Construction
    
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
Security Fence Installation
    
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
Tree and Shrub Planting, Maintenance and Removal
    
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
Tree Surgery and Removal
    
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
Snow Ploughing
    
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
Tree Surgery and Removal
    
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
Well System Work
    
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
Soil Irrigation
    
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
Xeriscaping
    
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
Deck Installation and Management
    
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
Wildlife
    
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
Fertilizing
    
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
Garden Clearance
    
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
Garden Sprinkler System Repair and Maintenance
    
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
Grass Cutting
    
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
Outdoor Lighting and Power
    
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
Play Equipment Repair
    
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
Greenhouse Construction
    
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
Landscape Design
    
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
Patio Cover Repair and Maintenance
    
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
Pond and Water feature Installation
    
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
Gardening
    
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
Landscaping
    
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
Lawn Care
    
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
Hot Tub and Spa Cleaning
    
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
Artificial Turf Installation
    
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
Barbecue Installation
    
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
Garden Shed Construction
    
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
Patio Service
    
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
Artificial Turf Repair
    
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
Boulder Placement
    
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
Garden Maintenance Services
    
  </label>
</div>

</div>
                  <!-- <div class="form-group col-xl-6">
                    <label class="mr-sm-2">name4</label>
                    <input type="text" class="form-control provider_datepicker" autocomplete="off" name="dob" value="">
                  </div>
                  
                  <div class="col-xl-12">
                    <h5 class="form-title">name5</h5>
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">name6</label>
                    <input type="text" class="form-control" name="address" value="">
                  </div>
                  <div class="form-group col-xl-6">
                    <label class="mr-sm-2">name7</label>
                    <select class="form-control" id="country_id" name="country_id" >
                      <option value=''>name8</option>
                      <option value=''></option> 
                    </select>
                  </div>
                  <div class="form-group col-xl-6">
                    <label class="mr-sm-2">name9</label>
                    <select class="form-control" name="state_id" id="state_id" >
                    </select>
                  </div>
                  <div class="form-group col-xl-6">
                    <label class="mr-sm-2">name10</label>
                    <select class="form-control" name="city_id" id="city_id">
                    </select>
                  </div>
                  <div class="form-group col-xl-6">
                    <label class="mr-sm-2">name11</label>
                    <input type="text" class="form-control" name="pincode" value="" >
                  </div> -->  
                  <div class="form-group col-xl-12">
                    <button name="form_submit" id="form_submit" class="btn btn-primary pl-5 pr-5" type="submit">Next</button>
                  </div>
                  <input type="hidden" id="country_id_value" value="">
            <input type="hidden" id="state_id_value" value="">
            <input type="hidden" id="city_id_value" value="">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>  

<?php }
//echo $service_data;
?>
<script type="text/javascript">
    function valueChanged()
    {
        if($('.coupon_question').is(":checked"))   
            $(".answer").hide();
        else
            $(".answer").show();
    }
</script> 