<?php
include "../backend/dbconfig.php";
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
         $_SESSION["formid"] = $formnum;
?>

<!doctype html>
<html class="no-js " lang="en">


<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content=" Owutech Admission Advisor :: Registration Form">

<title>:: Owutech Admission Advisor :: Registration Form</title>
<!-- Favicon-->
<link rel="icon" href="assets/images/logo.png" type="image/x-icon">
<!-- Custom Css -->
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/style.min.css">  
<link rel="stylesheet" href="assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css"/>
<link rel="stylesheet" href="assets/plugins/charts-c3/plugin.css"/>
<link rel="stylesheet" href="assets/plugins/jquery-steps/jquery.steps.css">
<link rel="stylesheet" href="assets/plugins/morrisjs/morris.min.css" />
</head>

<body class="theme-blush">


<?php

 $formnum = "REG29364547";
                          
 $sql = "select * from form_bio where regnum = '$formnum'" ;
 $result=mysqli_query($con,$sql);
 $row=mysqli_fetch_array($result);
  // output data of each row
 $firstname = $row["firstname"];
 $othername = $row["othername"];
 $surname = $row["surname"];
 $gender = $row["gender"];
 $dob = $row["dateofbirth"];
 $marital = $row["marital"];
 $nation = $row["nationality"];
 $stateorg = $row["stateorigin"];
 $lgaorg = $row["lgaorigin"];

 $sql = "select * from form_contact where regnum = '$formnum'" ;
 $result=mysqli_query($con,$sql);
 $row=mysqli_fetch_array($result);
  // output data of each row
 $email = $row["emailadd"];
 $phonenum = $row["phonenum"];
 $country = $row["country"];
 $restate = $row["res_state"];
 $relga = $row["res_lga"];
 $landmark = $row["landmark"];
 $address = $row["address"];
 $town = $row["town"];


 //Programme

 $sql = "select form_prog.progid, form_prog.entry, form_prog.olevel, programmes.progid, programmes.program, programmes.course, programmes.mode  from form_prog LEFT JOIN programmes on form_prog.progid = programmes.progid where regnum = '$formnum'" ;
 $result=mysqli_query($con,$sql);
 $row=mysqli_fetch_array($result);
 $mode = $row["mode"];
 $entry = $row["entry"];
 $olevel = $row["olevel"];
 $program = $row["program"];
 $course = $row["course"];

 //Next of Kin 
 $sql = "select * from form_kin where regnum = '$formnum'" ;
 $result=mysqli_query($con,$sql);
 $row=mysqli_fetch_array($result);
  // output data of each row
 $kname = $row["kin_name"];
 $relate = $row["kin_relate"];
 $kphone = $row["kin_phone"];
 $kadd = $row["kin_add"];

 //Sponsor Information 
 $sql = "select * from form_sponsor where regnum = '$formnum'" ;
 $result=mysqli_query($con,$sql);
 $row=mysqli_fetch_array($result);
  // output data of each row
 $sponsor = $row["sponsor_name"];
 $sjob = $row["sponsor_job"];
 $sphone = $row["sponsor_phone"];
 $sadd = $row["sponsor_add"];

//Sponson Information 
$sql = "select * from form_inst where regnum = '$formnum'" ;
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
 // output data of each row
$inst = $row["inst_name"];
$insty = $row["inst_year"];
$instc = $row["inst_cert"];

?>





<section class="content">
 
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
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn"  type="button"><i class="zmdi zmdi-arrow-right"></i></button>                                
                </div>
            </div>
        </div>
    </div>
    
        <div class="container-fluid">
            <!-- Registration Form -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                    <form method="POST" action="../backend/forma.php" class="card auth_form"  enctype="multipart/form-data" >
                    <!-- Bio Data -->   
                    <div class="body">
                            <section>
                                 <div class="header">
                                     <h2><strong>:: Bio - data :: </strong></h2>
                                     <br>
                                     <br>
                                     <a ><img src="../backend/<?php echo   $_SESSION['passport']?>"  width="200" alt="profile-image"></a>
                                     
                                    </div>
                                    <br>
                                    <br>
                                     <div class="row clearfix">
                                   
                                         <div class="col-lg-3 col-md-3 col-sm-8">
                                             <label for="firstname"><small>First name</small></label>
                                              <div class="form-group">
                                                 <p><strong><?php echo $firstname ?></strong></p>
                                              </div>
                                         </div>
                                        <div class="col-lg-3 col-md-3 col-sm-8">
                                             <label for="othername"><small>Other name</small></label>    
                                             <div class="form-group">
                                                 <p><strong><?php echo $othername ?></strong></p>
                                              </div>
                                      </div>
                                      <div class="col-lg-3 col-md-3 col-sm-8">
                                                <label for="lastname"><small>Last name</small></label>
                                                <div class="form-group">
                                                 <p><strong><?php echo $surname ?></strong></p>
                                              </div>
                                      </div>
                                      <div class="col-lg-1 col-md-1 col-sm-8">
                                             <label for="gender"><small>Gender</small></label>    
                                             <div class="form-group">
                                                 <p><strong><?php echo $gender ?></strong></p>
                                              </div>
                                        </div>

                                        <div class="col-lg-2 col-md-2 col-sm-8">
                                            <label for="dateofbirth"><small>Date of Birth</small></label>    
                                            <div class="form-group">
                                                 <p><strong><?php echo $dob ?></strong></p>
                                              </div>
                                        </div>
                                   </div>
                                
                                
                                
                                
                                    <div class="row clearfix">
                                    <div class="col-lg-3 col-md-3 col-sm-8">
                                            <label for="marital"><small>Marital Status</small></label>    
                                            <div class="form-group">
                                                 <p><strong><?php echo $marital ?></strong></p>
                                              </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-8">
                                            <label for="country_origin"><small>Nationality</small></label>    
                                            <div class="form-group">
                                                 <p><strong><?php echo $nation ?></strong></p>
                                              </div>
                                        </div>  
                                   
   
                                        <div class="col-lg-3 col-md-3 col-sm-8">
                                            <label for="state_origin"><small>State of Origin</small></label>    
                                            <div class="form-group">
                                                 <p><strong><?php echo $stateorg ?></strong></p>
                                              </div>
                                        </div>
   
                                        <div class="col-lg-3 col-md-3 col-sm-8">
                                            <label for="lga_origin"> <small>LGA - Origin</small> </label>    
                                            <div class="form-group">
                                                 <p><strong><?php echo $lgaorg ?></strong></p>
                                              </div>
                                        </div>
                             </div>
                        </section>
                    </div>       

                         <!-- Contact Information -->   
                         <div class="body">
                            <section>
                                 <div class="header">
                                     <h2><strong> :: Contact Information :: </strong></h2>
                                 </div><br>
                                     <div class="row clearfix">
                                   
                                         <div class="col-lg-3 col-md-3 col-sm-8">
                                             <label for="app_email"><small> Email address </small></label>
                                             <div class="form-group">
                                                 <p><strong><?php echo $email ?></strong></p>
                                              </div>
                                         </div>
                                        <div class="col-lg-2 col-md-2 col-sm-8">
                                             <label for="app_phonenumber"><small> Phone Number</small></label>    
                                             <div class="form-group">
                                                 <p><strong><?php echo $phonenum ?></strong></p>
                                              </div>
                                      </div>
                                  
                                        <div class="col-lg-2 col-md-2 col-sm-8">
                                            <label for="country_res"><small>Country of Residence</small></label>    
                                            <div class="form-group">
                                                 <p><strong><?php echo $country ?></strong></p>
                                              </div>
                                        </div>  
                                   
   
                                        <div class="col-lg-2 col-md-2 col-sm-8">
                                            <label for="state_res"><small>State of Residence</small></label>    
                                            <div class="form-group">
                                                 <p><strong><?php echo $restate ?></strong></p>
                                              </div>
                                        </div>
   
                                        <div class="col-lg-3 col-md-3 col-sm-8">
                                            <label for="lga_res"><small> LGA - Residence </small></label>    
                                            <div class="form-group">
                                                 <p><strong><?php echo $relga ?></strong></p>
                                              </div>
                                        </div>
                                    </div>

                                    <div class="row clearfix">
                                   
                                         <div class="col-lg-3 col-md-3 col-sm-8">
                                             <label for="landmark">Landmark</label>
                                             <div class="form-group">
                                                 <p><strong><?php echo $landmark ?></strong></p>
                                              </div>
                                         </div>
                                        <div class="col-lg-6 col-md-6 col-sm-8">
                                             <label for="fulladdress">Street and Full Address</label>    
                                             <div class="form-group">
                                                 <p><strong><?php echo $address ?></strong></p>
                                              </div>
                                      </div>
                                         <div class="col-lg-3 col-md-3 col-sm-8">
                                             <label for="town">Town | Area | City</label>
                                             <div class="form-group">
                                                 <p><strong><?php echo $town ?></strong></p>
                                              </div>
                                         </div>
                                    </div>
                        </section>
                    </div>    
                    
                     <!-- Selected Programme -->   
                     <div class="body">
                            <section>
                                 <div class="header">
                                     <h2><strong> ::  Prospective Programme :: </strong></h2>
                                 </div><br>
                                     <div class="row clearfix">
                                         
                                     <div class="col-lg-2 col-md-4 col-sm-8">
                                     <label for="entrymode"><small>Mode of Entry</small></label>    
                                     <div class="form-group">
                                                 <p><strong><?php echo strtoupper($entry) ?></strong></p>
                                      </div>
                                </div>  
                                        <div class="col-lg-2 col-md-4 col-sm-8">
                                             <label for="mode"><small> Mode of Study</small></label>    
                                             <div class="form-group">
                                                 <p><strong><?php echo strtoupper($mode) ?></strong></p>
                                      </div>
                                    </div>



                                     <div class="col-lg-3 col-md-4 col-sm-8">
                                             <label for="prog"><small> Programme</small></label>    
                                             <div class="form-group">
                                                 <p><strong><?php echo strtoupper($program) ?></strong></p>
                                      </div>
                                    </div>
                                    <div class="col-lg-5 col-md-8 col-sm-8">
                                             <label for="course"><small>Course of Study</small></label>    
                                             <div class="form-group">
                                                 <p><strong><?php echo strtoupper($course) ?></strong></p>
                                      </div>
                                    </div>
                                </div>
                        
                           
                            
                                </section>
                                <section>
                                 <div class="header">
                                     <h2><strong>:: Academic Records :: </strong></h2>
                                 </div>
                                 <br>
                                 <div class="row clearfix"> 
                         
                                                 <p><strong>SSCE O'Level Result ::  Number of Sitting - <?php echo strtoupper($olevel) ?></strong></p>
                                         
                               

                               
                            </div>
                                   
<?php
$sql_query = "select * from form_exam where regnum = '$formnum' ORDER BY regtim ASC " ;
$result = mysqli_query($con,$sql_query);
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {

echo '   <div class="row clearfix">
                                        <div class="col-lg-4 col-md-4 col-sm-8">
                                             <label for="examyear1"><small>Exam year</small></label>
                                              <div class="form-group">
                                              <p><strong>'.$row["examyear"].'</strong></p>
                                                </div>
                                         </div>
                                        <div class="col-lg-4 col-md-4 col-sm-8">
                                             <label for="examnum1"><small>Exam Number</small></label>    
                                             <div class="form-group">
                                              <p><strong>'.$row["examregnum"].'</strong></p>
                                                </div>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-sm-8">
                                                <label for="examtype1"><small>Exam Type</small></label>
                                                <div class="form-group">
                                                <p><strong>'.$row["examtype"].'</strong></p>
                                                  </div>
                                      </div>
                                   </div>';
                  ?>
<?php
  }
}
?>
<br>
                               
 <div class="row clearfix">                               
<?php
$sql_query = "select form_grades.subjectid, form_grades.grade, subjectlist.subject, subjectlist.subjectid from form_grades left join subjectlist on form_grades.subjectid = subjectlist.subjectid where regnum = '$formnum'  " ;
$result = mysqli_query($con,$sql_query);
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {

echo '   
                                    
                                   <div class="col-lg-3 col-md-3 col-sm-8">
                                             <label for="subject1"><small>Subject</small></label>    
                                             <div class="form-group">
                                                <p><strong>'.$row["subject"].'</strong></p>
                                                  </div>
                                        </div>

                                        <div class="col-lg-2 col-md-3 col-sm-8">
                                            <label for="grade1"><small>Grade</small></label>    
                                            <div class="form-group">
                                                <p><strong>'.$row["grade"].'</strong></p>
                                                  </div>
                                        </div>
                                        ';
                                        ?>
                                        <?php
                                          }
                                        }
                                        ?>
                                     </div>
                               <br>
                               <br>
                             <div class="row clearfix">
                             <div class="col-lg-6 col-md-6 col-sm-8">
                                             <label for="last_inst"><small>Last Institution Attended</small></label>    
                                             <div class="form-group">
                                                 <p><strong><?php echo $inst ?></strong></p>
                                            </div>
                              </div>     
                              <div class="col-lg-3 col-md-3 col-sm-8">
                                             <label for="last_year"><small>Year Attended</small></label>
                                             <div class="form-group">
                                                 <p><strong><?php echo $insty ?></strong></p>
                                            </div>
                                </div>
                                
                                <div class="col-lg-3 col-md-3 col-sm-8">
                                     <label for="last_credential"><small>Certificate Obtained</small></label>    
                                     <div class="form-group">
                                                 <p><strong><?php echo $instc ?></strong></p>
                                            </div>
                                </div>
                             </div>
                        </section>
                    </div>       

                         <!-- Contact Information -->   
                         <div class="body">
                            <section>
                                 <div class="header">
                                     <h2><strong> :: Significant Other / Next of Kin :: </strong></h2>
                                 </div><br>
                                     <div class="row clearfix">
                                   
                                         <div class="col-lg-8 col-md-8 col-sm-8">
                                             <label for="kin_name"><small> Fullname - Next of Kin </small></label>
                                             <div class="form-group">
                                                 <p><strong><?php echo $kname ?></strong></p>
                                            </div>
                                         </div>

                                         <div class="col-lg-4 col-md-4 col-sm-8">
                                            <label for="kin_relate"><small>Relationship - Next of Kin</small></label>    
                                            <div class="form-group">
                                                 <p><strong><?php echo $relate ?></strong></p>
                                             </div>
                                        </div>

                                        
                                   </div>
                                
                                
                                    <div class="row clearfix">
                                    
                                    <div class="col-lg-4 col-md-4 col-sm-8">
                                             <label for="kin_phone"><small> Phone Number - Next of Kin</small></label>    
                                             <div class="form-group">
                                                 <p><strong><?php echo $kphone ?></strong></p>
                                             </div>
                                      </div>
   
                                      <div class="col-lg-8 col-md-8 col-sm-8">
                                             <label for="kin_add"><small> Full Address - Next of Kin</small></label>    
                                             <div class="form-group">
                                                 <p><strong><?php echo $kadd ?></strong></p>
                                             </div>
                                      </div>
                                    </div>

                   

                          <!-- Sponsor Information -->   
                       
                                 <div class="header">
                                     <h2><strong> ::  Sponsor Information :: </strong></h2>
                                 </div><br>
                                     <div class="row clearfix">
                                   
                                         <div class="col-lg-8 col-md-8 col-sm-8">
                                             <label for="sponsor_name"><small> Fullname - Sponsor </small></label>
                                             <div class="form-group">
                                                 <p><strong><?php echo $sponsor ?></strong></p>
                                             </div>
                                         </div>

                                         <div class="col-lg-4 col-md-4 col-sm-8">
                                             <label for="sponsor_job"><small> Occupation - Sponsor </small></label>
                                             <div class="form-group">
                                                 <p><strong><?php echo $sjob ?></strong></p>
                                             </div>
                                         </div> 

                                        
                                   </div>
                                
                              
                                    <div class="row clearfix">
                                    
                                        <div class="col-lg-4 col-md-4 col-sm-8">
                                             <label for="sponsor_phone"><small> Phone Number -  Sponsor</small></label>    
                                             <div class="form-group">
                                                 <p><strong><?php echo $sphone ?></strong></p>
                                             </div>
                                      </div>
   
                                      <div class="col-lg-8 col-md-8 col-sm-8">
                                             <label for="sponsor_add"><small> Full Address - Sponsor</small></label>    
                                             <div class="form-group">
                                                 <p><strong><?php echo $sadd?></strong></p>
                                             </div>
                                      </div>
                                    </div>

                                    <br>

                        </section>
                    </div> 
                    
                    <p><strong>Filled and Submitted by :: <?php echo 	$_SESSION['uniqueid']?></strong></p>
                    
                     <div class="body">
                            <section>
                                 <div class="header">
                                     <h2><strong>  ::  Attestation :: </strong></h2>
                                 </div><br>
                                
               
                         <div class="row clearfix"> 


                        <div class="checkbox">
                            <input id="declared" type="checkbox" checked required="yes" tabindex="51">
                            <label for="declared">
                                <p>1. I declare that the stated information above is to the best of my knowledge and belief, accurate in every details and;</p></small>
                            </label>
                        </div>

                        <div class="checkbox">
                            <input id="declared2" type="checkbox" checked required="yes" tabindex="52">
                            <label for="declared2">
                                <p>2. That if I am admitted, I shall abide by the rules and regulations of Owu College of Management Technology. </p></small>
                            </label>
                        </div>
                        <div class="checkbox">
                            <input id="declared3" type="checkbox" checked required="yes" tabindex="53">
                            <label for="declared3">
                                <p>3. That if I do not have five credits with English and Mathematics compulsory, my certificate shall be witheld.</p>
                                </label>
                        </div>

                        <div class="checkbox">
                            <input id="declared4" type="checkbox" checked required="yes" tabindex="54">
                            <label for="declared4">
                                <p>4. That I have never been expelled from any Institution of learning for any misdemeanour.</p></small>
                            </label>
                        </div>

                         </div>
                         <div class="row clearfix"> 

                                  <div class="col-lg-6 col-md-6 col-sm-8">
                                    <button tabindex="55" onclick ="pushdata();"class="btn btn-raised btn-success btn-lg btn-block btn-round waves-effect"><h6>Submit Form and Print </h6> </button>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-8">
                                    <button type="reset" class="btn btn-raised btn-warning btn-lg btn-block btn-round waves-effect"><h6>Cancel Form </h6> </button>
                                </div>   
                                      
                              
                         </div>
                            
                           
                            
                        </section>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
            </div>
        </div>
    </div>
<!-- Jquery Core Js -->

<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->

<script src="assets/plugins/jquery-validation/jquery.validate.js"></script> <!-- Jquery Validation Plugin Css -->
<script src="assets/plugins/jquery-steps/jquery.steps.js"></script> <!-- JQuery Steps Plugin Js -->

<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js -->
<script src="assets/js/pages/forms/form-wizard.js"></script>
<script src="assets/js/feed.js"></script>
</body>


</html>