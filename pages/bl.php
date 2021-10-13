<?php
include "../include/header.php";
?>

<script>
    function getstval() {
    var stateval = $("#country_origin").val();
        
	$.ajax({          
        	type: "GET",
        	url: "../backend/getst.php",
        	data:'cntid='+stateval,
        	success: function(data){
           
                $("#state_origin").html(data);
              
        	}
	});
}
</script>

<script>
    function getlgaval() {
    var stateval = $("#state_origin").val();
        
	$.ajax({          
        
        type: "GET",
        	url: "../backend/getlga.php",
        	data:'stateid='+stateval,
        	success: function(data){
           
                $("#lga_origin").html(data);
              
        	}
	});
}
</script>
<script>
    function getstvalres() {
    var stateval = $("#country_res").val();
        
	$.ajax({          
        	type: "GET",
        	url: "../backend/getst.php",
        	data:'cntid='+stateval,
        	success: function(data){
           
                $("#state_res").html(data);
              
        	}
	});
}
</script>

<script>
    function getlgavalres() {
    var stateval = $("#state_res").val();
        
	$.ajax({          
        	type: "GET",
        	url: "../backend/getlga.php",
        	data:'stateid='+stateval,
        	success: function(data){
           
                $("#lga_res").html(data);
              
        	}
	});
}
</script>

<script>
    function getprog() {
    var stateval = $("#mode").val();
        
	$.ajax({          
        	type: "GET",
        	url: "../backend/getlga.php",
        	data:'modeid='+stateval,
        	success: function(data){
           
                $("#prog").html(data);
              
        	}
	});
}
</script>

<script>
    function getcourse() {
    var stateval = $("#prog").val();
        
	$.ajax({          
        	type: "GET",
        	url: "../backend/getlga.php",
        	data:'progid='+stateval,
        	success: function(data){
           
                $("#course").html(data);
              
        	}
	});
}
</script>

<?php
function generateRandomString($length = 8) {
    $characters = '012345678909876543210';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
		 $token = generateRandomString();
         $formnum ="REG".$token;
?>
<section class="content">
<?php
							
                            if (isset($_SESSION['acctinfo']) && $_SESSION['acctinfo'])
                            {
                              printf('<b>%s</b>', $_SESSION['acctinfo']);
                              unset($_SESSION['acctinfo']);
                            }
                          ?>  
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Registration Form Number : <?php echo $formnum; ?></h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Owutech</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Admission Advisor</a></li>
                        <li class="breadcrumb-item active">Registration Form</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">                
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>                                
                </div>
            </div>
        </div>
    </div>

        <div class="container-fluid">
            <!-- Registration Form -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                    <form method="POST" action="../backend/forma.php" class="card auth_form" >
                    <!-- Bio Data -->   
                    <div class="body">
                            <section>
                                 <div class="header">
                                     <h2><strong> Form Number ::  <?php echo $formnum; ?> :: </strong>Bio - data</h2>
                                 </div>
                                     <div class="row clearfix">
                                   
                                         <div class="col-lg-4 col-md-4 col-sm-8">
                                             <label for="email_address_2"><small>First name</small></label>
                                              <div class="form-group">
                                                 <input type="text" name="firstname" class="form-control" placeholder="First name" tabindex="1"    >
                                              </div>
                                         </div>
                                        <div class="col-lg-4 col-md-4 col-sm-8">
                                             <label for="email_address_2"><small>Other name</small></label>    
                                             <div class="form-group">
                                                 <input type="text" name="othername" class="form-control" placeholder="Other name" tabindex="2"    >
                                             </div>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-sm-8">
                                                <label for="email_address_2"><small>Last name</small></label>
                                                <div class="form-group">
                                                  <input type="text" name="lastname" class="form-control" autocomplete="new-password"  tabindex="3"  placeholder="Last name"  >
                                               </div>
                                      </div>
                                   </div>
                                
                                <br>
                                   <div class="row clearfix">
                                    
                                       <div class="col-lg-4 col-md-4 col-sm-8">
                                             <label for="gender"><small>Gender</small></label>    
                                             <div class="form-group">
                                                <select  name="gender" class="form-control show-tick ms select2" data-placeholder="Select"  tabindex="4"   >
                                                    <option value="">select gender</option>
                                                    <option value="MALE">Male</option>
                                                    <option value="FEMALE">Female</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-4 col-sm-8">
                                            <label for="email_address_2"><small>Date of Birth</small></label>    
                                            <div class="form-group">
                                                <input type="date" name="dateofbirth" class="form-control" placeholder="00-00-0000"  tabindex="5"   >
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-4 col-sm-8">
                                            <label for="gender"><small>Marital Status</small></label>    
                                            <div class="form-group">
                                               <select  name="marital" class="form-control show-tick ms select2" data-placeholder="Select"  tabindex="6"    >
                                                   <option value="">select </option>
                                                   <option value="Single">Single</option>
                                                   <option value="Married">Married</option>
                                                   <option value="alone">Separated / Divorced/ Widow / Widower</option>
                                               </select>
                                           </div>
                                        </div>
                                    </div>
                                
                                <br>
                                    <div class="row clearfix">
                                    
                                        <div class="col-lg-4 col-md-4 col-sm-8">
                                            <label for="email_address_2"><small>Nationality</small></label>    
                                            <div class="form-group">
                                                <select type="text" name="country_origin" id="country_origin"  onchange="getstval();"  tabindex="7"   class="form-control show-tick ms select2" data-placeholder="Select"  >
                                                    <option value="">select Nationality</option>
<?php
                               
 $sql_query = "select DISTINCT country from location ORDER BY country ASC " ;
$result = mysqli_query($con,$sql_query);
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo '<option value"'.$row["country"].'">'.$row["country"].'</option>';
  }
}
?>
                                                </select>
                                            </div>
                                        </div>  
                                   
   
                                        <div class="col-lg-4 col-md-4 col-sm-8">
                                            <label for="email_address_2"><small>State of Origin</small></label>    
                                            <div class="form-group">
                                                <select type="text" name="state_origin" id="state_origin" onchange="getlgaval();"  tabindex="8"  class="form-control show-tick ms select2" data-placeholder="Select" >
                                                    <option value="">select </option>
                                                </select>
                                           </div>
                                        </div>
   
                                        <div class="col-lg-4 col-md-4 col-sm-8">
                                            <label for="email_address_2"> <small>LGA - Origin</small> </label>    
                                            <div class="form-group">
                                               <select type="text" name="lga_origin" id="lga_origin" class="form-control show-tick ms select2"  tabindex="9"  data-placeholder="Select" >
                                                   <option value="">select LGA</option>
                                               </select>
                                           </div>
                                        </div>
                             </div>
                        </section>
                    </div>       

                         <!-- Contact Information -->   
                         <div class="body">
                            <section>
                                 <div class="header">
                                     <h2><strong> Form Number ::  <?php echo $formnum; ?> :: </strong>Contact Information</h2>
                                 </div><br>
                                     <div class="row clearfix">
                                   
                                         <div class="col-lg-6 col-md-6 col-sm-8">
                                             <label for="email_address_2"><small> Applicant Email address </small></label>
                                              <div class="form-group">
                                                 <input type="email" name="app_email" class="form-control" placeholder="xyz@abc.com" tabindex="10"    >
                                              </div>
                                         </div>
                                        <div class="col-lg-6 col-md-6 col-sm-8">
                                             <label for="email_address_2"><small>Applicant Phone Number</small></label>    
                                             <div class="form-group">
                                                 <input type="tel" name="app_phonenumber" class="form-control" placeholder="08012345678" tabindex="11"    >
                                             </div>
                                      </div>
                                   </div>
                                
                                <br>
                                    <div class="row clearfix">
                                    
                                        <div class="col-lg-4 col-md-4 col-sm-8">
                                            <label for="email_address_2"><small>Country of Residence</small></label>    
                                            <div class="form-group">
                                                <select type="text" name="country_res" id="country_res"  onchange="getstvalres();"  tabindex="12"  class="form-control show-tick ms select2" data-placeholder="Select"  >
                                                    <option value="">select country</option>
<?php
                               
 $sql_query = "select DISTINCT country from location ORDER BY country ASC " ;
$result = mysqli_query($con,$sql_query);
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo '<option value"'.$row["country"].'">'.$row["country"].'</option>';
  }
}
?>
                                                </select>
                                            </div>
                                        </div>  
                                   
   
                                        <div class="col-lg-4 col-md-4 col-sm-8">
                                            <label for="email_address_2"><small>State of Residence</small></label>    
                                            <div class="form-group">
                                                <select type="text" name="state_res" id="state_res" onchange="getlgavalres();"  tabindex="13"  class="form-control show-tick ms select2" data-placeholder="Select" >
                                                    <option value="">select </option>
                                                </select>
                                           </div>
                                        </div>
   
                                        <div class="col-lg-4 col-md-4 col-sm-8">
                                            <label for="email_address_2"><small> LGA - Residence </small></label>    
                                            <div class="form-group">
                                               <select type="text" name="lga_res" id="lga_res" class="form-control show-tick ms select2" tabindex="14"   data-placeholder="Select">
                                                   <option value="">select LGA</option>
                                               </select>
                                           </div>
                                        </div>
                                    </div>

                                    <br>

                                    <div class="row clearfix">
                                   
                                         <div class="col-lg-3 col-md-3 col-sm-8">
                                             <label for="email_address_2">Landmark</label>
                                              <div class="form-group">
                                                 <input type="text" name="landmark" class="form-control" placeholder="Nearest Bus Stop"  tabindex="15"  >
                                              </div>
                                         </div>
                                        <div class="col-lg-6 col-md-6 col-sm-8">
                                             <label for="email_address_2">Street and Full Address</label>    
                                             <div class="form-group">
                                                 <input type="text" name="fulladdress" class="form-control" placeholder="1 ABC Street"  tabindex="16"  >
                                             </div>
                                      </div>
                                         <div class="col-lg-3 col-md-3 col-sm-8">
                                             <label for="email_address_2">Town | Area | City</label>
                                              <div class="form-group">
                                                 <input type="text" name="town" class="form-control" placeholder="Ikeja"  tabindex="17"  >
                                              </div>
                                         </div>
                                    </div>
                        </section>
                    </div>    
                    
                     <!-- Selected Programme -->   
                     <div class="body">
                            <section>
                                 <div class="header">
                                     <h2><strong> Form Number ::  <?php echo $formnum; ?> :: </strong>Prospective Programme</h2>
                                 </div><br>
                                     <div class="row clearfix"> 
                                        <div class="col-lg-4 col-md-4 col-sm-8">
                                             <label for="gender"><small>Preferred Mode of Study</small></label>    
                                             <div class="form-group">
                                                <select  name="mode_study" id="mode" class="form-control show-tick ms select2"  tabindex="18"  onchange="getprog();" >
                                                    <option value="">select </option>
                                                    <?php
                               
                               $sql_query = "select DISTINCT mode from programmes ORDER BY mode ASC " ;
                              $result = mysqli_query($con,$sql_query);
                              if (mysqli_num_rows($result) > 0) {
                                // output data of each row
                                while($row = mysqli_fetch_assoc($result)) {
                                  echo '<option value"'.$row["mode"].'">'.strtoupper($row["mode"]).'</option>';
                                }
                              }
                              ?>
                                                </select>
                                            </div>
                                    </div>



                                     <div class="col-lg-4 col-md-4 col-sm-8">
                                             <label for="gender"><small>Preferred Programme</small></label>    
                                             <div class="form-group">
                                                <select  name="prog" id="prog" class="form-control show-tick ms select2" tabindex="19"   onchange="getcourse();" >
                                                    <option value="">select </option>
                                                   
                                                </select>
                                            </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-8">
                                             <label for="gender"><small>Preferred Course of Study</small></label>    
                                             <div class="form-group">
                                                <select  name="course" id="course" class="form-control show-tick ms select2" tabindex="20"   >
                                                    <option value="">select </option>
                                                </select>
                                            </div>
                                    </div>
                                </div>
                         <div class="row clearfix"> 
                                
                                <div class="col-lg-4 col-md-4 col-sm-8">
                                     <label for="gender"><small>Mode of Entry</small></label>    
                                            <div class="form-group">
                                            <select  name="entrymode" id="entrymode" class="form-control show-tick ms select2"  tabindex="22"  >
                                                    <option value="">select </option>
                                                    <option value="utme">JAMB UTME</option>
                                                    <option value="regular">Regular</option>
                                                    <option value="direct">DIRECT ENTRY</option>
                                                </select>
                                            </div>
                                </div>        
                                <div class="col-lg-4 col-md-4 col-sm-8">
                                     <label for="gender"><small>O'Level - Number of Sitting</small></label>    
                                            <div class="form-group">
                                                <select  name="numssce" id="mumssce" class="form-control show-tick ms select2"  tabindex="23" >
                                                    <option value="">select </option>
                                                    <option value="1">One Sitting</option>
                                                    <option value="2">Two Sitting</option>
                                                    <option value="0">Awaiting Result</option>
                                                </select>
                                            </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-8">
                                     <label for="gender"><small>Highest Credential</small></label>    
                                            <div class="form-group">
                                                <select  name="highest" id="highest" class="form-control show-tick ms select2"  tabindex="24"  >
                                                    <option value="">select </option>
                                                    <option value="ssce">SSCE</option>
                                                    <option value="nd">ND</option>
                                                    <option value="nce">NCE</option>
                                                    <option value="hnd">HND</option>
                                                    <option value="bsc">BSC</option>
                                                </select>
                                            </div>
                                </div>
                            </div>
                            
                                <div class="col-lg-6 col-md-6 col-sm-8">
                                    <input type="submit" id="submit" />
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-8">
                                    <button type="reset" class="btn btn-raised btn-warning btn-lg btn-block btn-round waves-effect">Cancel</button>
                                </div>
                            
                                </section>
                            
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Jquery Core Js --> 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->

<script src="assets/plugins/jquery-validation/jquery.validate.js"></script> <!-- Jquery Validation Plugin Css -->
<script src="assets/plugins/jquery-steps/jquery.steps.js"></script> <!-- JQuery Steps Plugin Js -->

<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js -->
<script src="assets/js/pages/forms/form-wizard.js"></script>
</body>


</html>