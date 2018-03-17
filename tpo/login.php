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
        width: 100%;
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
         margin-top: 20px;
            
         }
      </style>
   </head>
   <body >
      <div class="container">
         <div class="container" style="margin-top:10%;">
             <div class="row">
             <div class="col-4">
                  
               </div>
                 <div class="col-4 form_register">
                      <div class="row">
               
               <div class="col-12">
                  <p class="text-center header">Login</p>
               </div>
                
            </div>
            <form class="needs-validation" action="add.php" method="POST" novalidate>
               <div class="form-row">
                  <div class="col-md-12 mb-3">
                  </div>
                  <div class="col-md-12 mb-3">
                     <input type="text" class="form-control" id="pho_no" name="pho_no" placeholder="Phone No." required>
                     <div class="invalid-feedback">
                       Please Enter Your Phone No.
                     </div>
                  </div>
                  <div class="col-md-12 mb-3">
                     <input type="text" class="form-control" id="pin" name="pin" placeholder="PIN" required>
                     <div class="invalid-feedback">
                        Please Enter Your PIN
                     </div>
                  </div>
                
                  
               </div>
               <button id="validate" class="btn btn-primary submit_btn" type="submit" >LOG IN</button> 
            </form>
               </div><div class="col-4">
                  
               </div>
             </div>
        
         </div>
      </div>
   </body>
   <script>
      /*Include all the javascript and jquery function in this section*/
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