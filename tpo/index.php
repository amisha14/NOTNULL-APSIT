<!DOCTYPE html>
<html lang="en">
   <head>
      <title>APSIT | TPO</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
      <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css'>
      <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Comfortaa" />
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
      <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
      <script src='https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js'></script>
      <style>
         /*Include all the css into this section*/
         body{
         background-color: #017BE1;
         font-family: Comfortaa;
         font-style: normal;
         font-variant: normal;
         }
         .form-control{
         margin: 5px;
         padding:10px 15px;
         border-radius:0px;
         border-bottom: 3px solid #008BFF;
         border-right: 0px;
         border-left: 0px;
         color: #008BFF;
         /*            background:rgba(255,255,255,.1);*/
         }
         .custom-select{
         margin: 5px;
         height: 48px;
         border-radius:0px;
         border-bottom: 3px solid #008BFF;
         border-right: 0px;
         border-left: 0px;
         color: #008BFF;
         /*            background:rgba(255,255,255,.1);*/
         }
         div[class="invalid-feedback"]{
         margin: 5px;
         }
         .submit_btn{
         margin: 5px;
         padding:10px 15px;
         color:#008BFF;
         background-color: transparent;
         border-bottom: 3px solid #008BFF;
         border-right: 0px;
         border-left: 0px;
         /*                background:rgba(255,255,255,.1);*/
         }
         .add_btn{
         margin: 5px;
         border-radius: 0px;
         color:#008BFF;
         background-color: transparent;
         border-bottom: 3px solid #008BFF;
         border-right: 0px;
         border-left: 0px;
         /*                background:rgba(255,255,255,.1);*/
         }
         .add_btn:hover{
         margin: 5px;
         color:white;
         background-color: #008BFF;
         border-right: 0px;
         border-left: 0px;
         }
         .form_register{
         background:white;
         /*              margin-top:10%;*/
         padding: 20px;
         padding-top: 0px;
         margin-bottom: 20px;
         /*               width: 60%;*/
         }
         .header{
         background-color: #008BFF;
         font-size: 30px;
         padding: 10px;
         padding-top: 10px;
         font-weight: 500;
         color: white;
         margin-top: 10px;
         }
      </style>
   </head>
   <body >
      <div class="container">
         <div class="container form_register">
            <div class="row">
               <div class="col-12">
                  <p class="text-center header"> Register</p>
               </div>
            </div>
            <form class="needs-validation" action="add.php" method="POST" novalidate>
               <div class="form-row">
                  <div class="col-md-12 mb-3">
                  </div>
                  <div class="col-md-12 mb-3">
                     <input type="text" class="form-control" id="moodleid" name="moodleid" placeholder="Moodle ID" required>
                     <div class="invalid-feedback">
                        Please Enter Your Moodle ID
                     </div>
                  </div>
                  <div class="col-md-6 mb-3">
                     <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" required>
                     <div class="invalid-feedback">
                        Please Enter Your Name
                     </div>
                  </div>
                  <div class="col-md-6 mb-3">
                     <input type="email" class="form-control" id="email_id" name="email_id" placeholder="Email" required>
                     <div class="invalid-feedback">
                        Please Enter Your Email
                     </div>
                  </div>
                  <div class="col-md-6 mb-3">
                     <input type="text" class="form-control" id="phn_no" name="phn_no" placeholder="Phone No" required>
                     <div class="invalid-feedback">
                        Please Enter Your Phone No
                     </div>
                  </div>
                  <div class="col-md-6 mb-3">
                     <input type="date" class="form-control" id="date" name="date" placeholder="Date" required>
                     <div class="invalid-feedback">
                        Please Enter Your DOB
                     </div>
                  </div>
                  <div class="col-md-3 mb-3">
                     <input type="text" class="form-control" id="ssc" name="ssc" placeholder="SSC" required>
                     <div class="invalid-feedback">
                        Please Enter Your DOB
                     </div>
                  </div>
                  <div class="col-md-3 mb-3">
                     <input type="text" class="form-control" id="hsc" name="hsc" placeholder="HSC/Diploma" required>
                     <div class="invalid-feedback">
                        Please Enter Your DOB
                     </div>
                  </div>
                  <div class="col-md-6 mb-3">
                     <select class="custom-select" required>
                        <option >----Select---</option>
                        <option  value="Degree" >Degree</option>
                        <option value="Diploma" >Diploma</option>
                     </select>
                      <div class="invalid-feedback">
                        Please Enter Your SEM4
                     </div>
                  </div>
                  <div class="col-md-3 mb-3">
                     <input type="text" class="form-control" id="sem1" name="sem1" placeholder="SEM1" required>
                     <div class="invalid-feedback">
                        Please Enter Your SEM1
                     </div>
                  </div>
                  <div class="col-md-3 mb-3">
                     <input type="text" class="form-control" id="sem2" name="sem2" placeholder="SEM2" required>
                     <div class="invalid-feedback">
                        Please Enter Your SEM2
                     </div>
                  </div>
                  <div class="col-md-3 mb-3">
                     <input type="text" class="form-control" id="sem3" name="sem3" placeholder="SEM3" required>
                     <div class="invalid-feedback">
                        Please Enter Your SEM3
                     </div>
                  </div>
                  <div class="col-md-3 mb-3">
                     <input type="text" class="form-control" id="sem4" name="sem4" placeholder="SEM4" required>
                     <div class="invalid-feedback">
                        Please Enter Your SEM4
                     </div>
                  </div>
                  <div class="col-md-3 mb-3">
                     <input type="text" class="form-control" id="sem5" name="sem5" placeholder="SEM5" required>
                     <div class="invalid-feedback">
                        Please Enter Your SEM5
                     </div>
                  </div>
                  <div class="col-md-3 mb-3">
                     <input type="text" class="form-control" id="sem6" name="sem6" placeholder="SEM6" required>
                     <div class="invalid-feedback">
                        Please Enter Your SEM6
                     </div>
                  </div>
                  <div class="col-md-3 mb-3">
                     <input type="text" class="form-control" id="sem7" name="sem7" placeholder="SEM7" required>
                     <div class="invalid-feedback">
                        Please Enter Your SEM7
                     </div>
                  </div>
                  <div class="col-md-3 mb-3">
                     <input type="text" class="form-control" id="sem8" name="sem8" placeholder="SEM8" required>
                     <div class="invalid-feedback">
                        Please Enter Your SEM8
                     </div>
                  </div>
                  <div class="col-md-6 mb-3">
                     <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="placement">
                        <label class="custom-control-label" for="placement">Placement</label>
                     </div>
                  </div>
                  <div class="col-md-6 mb-3">
                     <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="higherstudies">
                        <label class="custom-control-label" for="higherstudies">Higher Studies</label>
                     </div>
                  </div>
                  <div class="col-md-6 mb-3">
                     <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="foreigneducation">
                        <label class="custom-control-label" for="foreigneducation">Foreign Education</label>
                     </div>
                  </div>
                  <div class="col-md-6 mb-3">
                     <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="entrepreneurship">
                        <label class="custom-control-label" for="entrepreneurship">Entrepreneurship</label>
                     </div>
                  </div>
                  <div class="col-md-6 mb-3">
                     <input type="file" class="form-control" id="photo" name="photo" placeholder="Photo" required>
                     <div class="invalid-feedback">
                        Please Enter Your Photo
                     </div>
                  </div>
                  <div class="col-md-6 mb-3">
                     <input type="file" class="form-control" id="aadharcard" name="aadharcard" placeholder="aadharcard" required>
                     <div class="invalid-feedback">
                        Please upload your aadhar card
                     </div>
                  </div>
                  <div class="col-md-6 mb-3">
                     <input type="file" class="form-control" id="certificate" name="certificate" placeholder="certificate" value=" Certifice" required>
                     <div class="invalid-feedback">
                        Please Enter Your certificates
                     </div>
                  </div>
               </div>
               <button id="validate" class="btn btn-primary submit_btn" type="submit">Submit form</button> 
            </form>
         </div>
      </div>
   </body>
   <script>
      /*Include all the javascript and jquery function in this section*/
       $(document).ready(function() {
    var wrapper = $(".input_fields_wrap"); //Fields wrapper
    var add_button = $(".add_fields_button"); //Add button ID
    var wrapper2 = $(".input_fields_wrap2");
    var add_button2 = $(".add_fields_button2");
    var wrapper3 = $(".input_fields_wrap3");
    var add_button3 = $(".add_fields_button3");    
    var x = 1; //initlal text box count
    var y = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        x++; //text box increment
        $(wrapper).append('<div><input type="text" name="mytext[]"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
    });
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); 
        x--;
    })
    
    $(add_button2).click(function(e){ //on add input button click
        e.preventDefault();
        y++; //text box increment
        $(wrapper2).append('<div><input type="text" name="mytext1[]"/><a href="#" class="remove_field2">Remove</a></div>'); //add input box
    });
    
    $(wrapper2).on("click",".remove_field2", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); 
        y--;
    })
    $(add_button3).click(function(e){ //on add input button click
        e.preventDefault();
        y++; //text box increment
        $(wrapper3).append('<div><input type="text" name="mytext1[]"/><a href="#" class="remove_field3">Remove</a></div>'); //add input box
    });
    
    $(wrapper3).on("click",".remove_field3", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); 
        y--;
    })    
});

             (function() {
                'use strict';
                window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                  form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                      event.preventDefault();
                      event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                  }, false);
                });
                }, false);
                })();
   </script>
</html>