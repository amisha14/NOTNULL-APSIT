<! DOCTYPE html>
<html>
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
        
         font-family: Comfortaa;
         font-style: normal;
         font-variant: normal;
         }
         .form-control{
         margin: 5px;
         padding:10px 15px;
         border-radius:0px;
         border:2px solid #008BFF;
        
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
        
         font-size: 22px;
       
         
         font-weight: 900;
         color: #008BFF;
         margin-top: 10px;
           
         }
      </style>
   </head>
   <body>
      <div class="container">
         <div class="container form_register">
           
            <form class="needs-validation" method="POST" novalidate>
                
               <div class="form-row">
                
                   <div class="col-12 ">
                      <p class="text-center header">Career Objective    </p>
                   </div>
                
                  <div class="col-md-12 mb-3">
                    
                    
                     <textarea class="form-control" placeholder="CAREER OBJECTIVE"></textarea>
                     <div class="invalid-feedback">
                        Please Enter Your Name
                     </div>
                  </div>
                    <div class="col-md-12 mb-3">
                      <p class="text-center header">Education Qualification</p>
                   </div>
                  
                   
              
            
            <p class="text-center team"> Team Member 1</p>
            <div class="form-row">
               <div class="col-md-6 mb-3">
                  
                  <input type="text" class="form-control" id="moodle_id_1" name="moodle_id_1" placeholder="Moodle ID" required>
                  <div class="invalid-feedback">
                     Please Enter Your Moodle ID
                  </div>
               </div>
               <div class="col-md-6 mb-3">
                
                  <input type="text" class="form-control" id="name_1" name="name_1" placeholder="Full Name" required>
                  <div class="invalid-feedback">
                     Please Enter Your Name
                  </div>
               </div>
               <div class="col-md-6 mb-3">
                  
                  <input type="email" class="form-control" id="email_id_1" name="email_id_1" placeholder="Email" required>
                  <div class="invalid-feedback">
                     Please Enter Your Name
                  </div>
               </div>
               <div class="col-md-6 mb-3">
                  
                  <input type="text" class="form-control" id="phn_no_1" name="phn_no_1" placeholder="Phone No" required>
                  <div class="invalid-feedback">
                     Please Enter Your Name
                  </div>
               </div>
            </div>
           
              
           
           
            <button class="btn btn-primary submit_btn" type="submit">Submit form</button>
               
                  <div class="col-md-12 mb-3">
                    
                   
                     <input type="text" class="form-control"  placeholder="TECHNICAL SKILLS">
                     <div class="invalid-feedback">
                        Please Enter Your Name
                     </div>
                  </div>
                  <div class="col-md-12 mb-3">
                     
                     <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Working Experience">
                     <div class="invalid-feedback">
                        Please Enter Your Name
                     </div>
                  </div>
                  <div class="col-md-12 mb-3">
                    
                     <textarea class="form-control" placeholder="Project Name And Description" row="3"></textarea>
                     <div class="invalid-feedback">
                        Please Enter Your Name
                     </div>
                  </div>
                  
                  <div class="col-md-12 mb-3">
                     
                     <input type="text" class="form-control" placeholder="Working Experience">
                     <div class="invalid-feedback">
                        Please Enter Your Name
                     </div>
                  </div>
                  <div class="col-md-12 mb-3">
                     <button class="add_fields_button2 add_btn">Extra Curricular Activities</button>
                     <input type="text" name="mytext1[]">
                     <div class="invalid-feedback">
                        Please Enter Your Name
                     </div>
                  </div>
                  <div class="col-md-12 mb-3">
                     <h4>Personal Details</h4>
                     <hr>
                     <label for="exampleFormControlTextarea1">DATE OF BIRTH</label>
                     <input type="date" id="dob"><br>                    
                     <div class="invalid-feedback">
                        Please Enter Your Name
                     </div>
                  </div>
                  <div class="col-md-12 mb-3">
                     <label for="exampleFormControlTextarea1">Gender</label>
                     <select id="inputState" class="form-control">
                        <option value="0">-Select Gender-</option>
                        <option value="1">Male</option>
                        <option value="2">Female</option>
                     </select>
                     <div class="invalid-feedback">
                        Please Enter Your Name
                     </div>
                  </div>
                  <div class="col-md-12 mb-3">
                     <button class="add_fields_button3">Languages</button><br>
                     <input type="text" name="mytext1[]" placeholder="English.. etc">
                     <div class="invalid-feedback">
                        Please Enter Your Name 
                     </div>
                  </div>
                  <label for="inputAddress">Address</label>
                  <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St"><br><br>
                  
               </div>
               
            </form>
             
             
             
               
             
             
         </div>
      </div>
       <script>
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

</script>
   </body>
</html>