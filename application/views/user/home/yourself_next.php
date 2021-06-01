<div class="content">
  <div class="container">
    <div class="row">
      
      <input type="hidden" name="tab_ctrl" id="tab_ctrl" value="">
     
            <div class="col-xl-9 col-md-8">
        <div class="tab-content pt-0">
          <div class="tab-pane show active" id="user_profile_settings" >
            <div class="widget">
              <h4 class="widget-title"></h4>
              <form id="update_user" action="<?php echo base_url()?>user/dashboard/update_user" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="" />
   
                <div class="row">
                  <div class="col-xl-12">
                    <h5 class="form-title">Provide proof of photo ID you must choose one and upload</h5>
                  </div>
                </div>
      
<div class="row">
                  <div class="form-group col-xl-6">
                    <label class="mr-sm-2">passport</label>
                    <input class="form-control" type="file" value="" >
                  </div>
                  <div class="form-group col-xl-6">
                    <label class="mr-sm-2">Driving licence</label>
                    <input class="form-control" type="file" value="" >
                  </div>
                  <div class="form-group col-xl-6">
                    <label class="mr-sm-2">Biometric card</label>
                    <input class="form-control no_only" type="file"  value="<?php echo $get_details['mobileno']?>" name="mobileno" >
                  </div>
                  <div class="form-group col-xl-6">
                    <label class="mr-sm-2">ID card</label>
                    <input class="form-control no_only" type="file"  value="<?php echo $get_details['mobileno']?>" name="mobileno" >
                  </div>
                  <div class="form-group col-xl-6">
                    <label class="mr-sm-2">Resident permit</label>
                    <input type="file" class="form-control provider_datepicker" autocomplete="off" name="dob" value="">
                  </div>
                  <div class="form-group col-xl-6">
                    <label class="mr-sm-2">Other</label>
                    <input type="file" class="form-control provider_datepicker" autocomplete="off" name="dob" value="">
                  </div>               
</div>  
<div class="row">
                  <div class="col-xl-12">
                    <h5 class="form-title">Provide proof of right to work in your country you select a minimum of one and upload.</h5>
                  </div>
                </div>
      
<div class="row">
  <div class="form-group col-xl-6">
                    <label class="mr-sm-2">National Insurence</label>
                    <input class="form-control" type="file" value="" >
                  </div>
                  <div class="form-group col-xl-6">
                    <label class="mr-sm-2">passport</label>
                    <input class="form-control" type="file" value="" >
                  </div>
                  <div class="form-group col-xl-6">
                    <label class="mr-sm-2">Driving licence</label>
                    <input class="form-control" type="file" value="" >
                  </div>
                  <div class="form-group col-xl-6">
                    <label class="mr-sm-2">Biometric card</label>
                    <input class="form-control no_only" type="file"  value="<?php echo $get_details['mobileno']?>" name="mobileno" >
                  </div>
                  <div class="form-group col-xl-6">
                    <label class="mr-sm-2">ID card</label>
                    <input class="form-control no_only" type="file"  value="<?php echo $get_details['mobileno']?>" name="mobileno" >
                  </div>
                  <div class="form-group col-xl-6">
                    <label class="mr-sm-2">Resident permit</label>
                    <input type="file" class="form-control provider_datepicker" autocomplete="off" name="dob" value="">
                  </div>
                  <div class="form-group col-xl-6">
                    <label class="mr-sm-2">Other</label>
                    <input type="file" class="form-control provider_datepicker" autocomplete="off" name="dob" value="">
                  </div>               
</div>     
<div class="row">
                  <div class="col-xl-12">
                    <h5 class="form-title"> Provide proof of homes  address Must be less than 3 months old from the date of issue</h5>
                  </div>
                </div>  
<div class="row">
  <div class="form-group col-xl-6">
                    <label class="mr-sm-2">Telephone Bill</label>
                    <input class="form-control" type="file" value="" >
                  </div>
                  <div class="form-group col-xl-6">
                    <label class="mr-sm-2">Gas or electric bill</label>
                    <input class="form-control" type="file" value="" >
                  </div>
                  <div class="form-group col-xl-6">
                    <label class="mr-sm-2">Bank statement</label>
                    <input class="form-control" type="file" value="" >
                  </div>
                  <div class="form-group col-xl-6">
                    <label class="mr-sm-2">Letter from the government or school</label>
                    <input class="form-control no_only" type="file"  value="<?php echo $get_details['mobileno']?>" name="mobileno" >
                  </div>
                 
                  <div class="form-group col-xl-6">
                    <label class="mr-sm-2">Other</label>
                    <input type="file" class="form-control provider_datepicker" autocomplete="off" name="dob" value="">
                  </div>               
</div>   
<div class="row">
                  <div class="col-xl-12">
                    <h5 class="form-title">Provide proof of qualification obtained chose and upload</h5>
                  </div>
                </div>  
<div class="row">
  <div class="form-group col-xl-6">
                    <label class="mr-sm-2">NVQ</label>
                    <input class="form-control" type="file" value="" >
                  </div>
                  <div class="form-group col-xl-6">
                    <label class="mr-sm-2">GCE</label>
                    <input class="form-control" type="file" value="" >
                  </div>
                  <div class="form-group col-xl-6">
                    <label class="mr-sm-2">A Levels</label>
                    <input class="form-control" type="file" value="" >
                  </div>
                  <div class="form-group col-xl-6">
                    <label class="mr-sm-2">College degree</label>
                    <input class="form-control no_only" type="file"  value="<?php echo $get_details['mobileno']?>" name="mobileno" >
                  </div>
                  <div class="form-group col-xl-6">
                    <label class="mr-sm-2">University degree</label>
                    <input type="file" class="form-control provider_datepicker" autocomplete="off" name="dob" value="">
                  </div> 
                  <div class="form-group col-xl-6">
                    <label class="mr-sm-2">HND</label>
                    <input type="file" class="form-control provider_datepicker" autocomplete="off" name="dob" value="">
                  </div> 
                  <div class="form-group col-xl-6">
                    <label class="mr-sm-2">Vocational qualification</label>
                    <input type="file" class="form-control provider_datepicker" autocomplete="off" name="dob" value="">
                  </div> 
                  <div class="form-group col-xl-6">
                    <label class="mr-sm-2">I don't have any qualifications</label>
                    <input type="file" class="form-control provider_datepicker" autocomplete="off" name="dob" value="">
                  </div> 

                 
                  <div class="form-group col-xl-6">
                    <label class="mr-sm-2">Other</label>
                    <input type="file" class="form-control provider_datepicker" autocomplete="off" name="dob" value="">
                  </div> 
                  <div class="form-group col-xl-6">
                    <label class="mr-sm-2">Please add name and upload</label>
                    <input type="file" class="form-control provider_datepicker" autocomplete="off" name="dob" value="">
                  </div>              
</div>  
<div class="row">
                  <div class="col-xl-12">
                    <h5 class="form-title">For business only</h5>
                  </div>
                </div>  
      
<div class="row">
  <div class="form-group col-xl-6">
                    <label class="mr-sm-2">Company registration number</label>
                    <input class="form-control" type="file" value="" >
                  </div>
                  <div class="form-group col-xl-6">
                    <label class="mr-sm-2">Company registration document</label>
                    <input class="form-control" type="file" value="" >
                  </div>
                  <div class="form-group col-xl-6">
                    <label class="mr-sm-2">Business insurance</label>
                    <input class="form-control" type="file" value="" >
                  </div>
                  <div class="form-group col-xl-6">
                    <label class="mr-sm-2">Method statement</label>
                    <input class="form-control no_only" type="file"  value="<?php echo $get_details['mobileno']?>" name="mobileno" >
                  </div>
                  <div class="form-group col-xl-6">
                    <label class="mr-sm-2">Proof of trading address</label>
                    <input type="file" class="form-control provider_datepicker" autocomplete="off" name="dob" value="">
                  </div> 
                  <div class="form-group col-xl-6">
                    <label class="mr-sm-2">The ID of the responsible individual</label>
                    <input type="file" class="form-control provider_datepicker" autocomplete="off" name="dob" value="">
                  </div> 
                  <div class="form-group col-xl-6">
                    <label class="mr-sm-2">Other</label>
                    <input type="file" class="form-control provider_datepicker" autocomplete="off" name="dob" value="">
                  </div>              
</div>        
                   <!--<div class="col-xl-12">
                    <h5 class="form-title">name5</h5>
                  </div>
                  <div class="form-group col-xl-12">
                    <label class="mr-sm-2">name6</label>
                    <input type="file" class="form-control" name="address" value="">
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
                    <input type="file" class="form-control" name="pincode" value="" >
                  </div> -->  
                  <div class="form-group col-xl-12">
                    <button name="form_submit" id="form_submit" class="btn btn-primary pl-5 pr-5" type="submit">Submit</button>
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
