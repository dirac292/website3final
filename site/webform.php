<?php
        
        $message_sent=false;
     if(isset($_POST['email']) && $_POST['email'] != ''){
       if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
           //submit the form

       $userName =$_POST['name'];
       $userEmail =$_POST['email'];
       $messageSubject =$_POST['subject'];
       $message =$_POST['message'];
  
       $to ='mahipsite@gmail.com';
       $body="";
  
       $body .="From: ".$userName. "\r\n";
       $body .="Email: ".$userEmail. "\r\n";
       $body .="Message ".$message. "\r\n";
      
       mail($to,$messageSubject,$body);

         $message_sent=true;
       }
       else{
         $invalid_class_name ="form-invalid";
       }

      
            
     }

     

?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   

    <title>Harbans Singh</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;1,400&display=swap" rel="stylesheet">


</head>
<body>
<header>
 <nav id="header-nav" class="navbar navbar-default" >
  <div class="container">
      <div class="navbar-header">
          <a href="index.html" class="pull-left visible md visible-lg">
          <div id="logo-img" alt="Logo image"></div>   
          </a>   
          <div class="navbar-brand">
            <a href="index.html"><h1>Dr.Harbans Singh</h1></a>
            <p>
                
                <span>Certified Surgeon</span>
            </p>
           </div>
             
           
                         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" 
                             data-target="#collapsable-nav" aria-expanded="false">
                           <span class="sr-only">Toggle-navigation</span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                         </button>
           
            
           </div>
     
             <div id="collapsable-nav" class="collapse navbar-collapse">
                 <ul id="nav-list" class="nav navbar-nav navbar-right">
                    <li class="visible-xs">
                        <a href="index.html">
                          <span class="glyphicon glyphicon-home"></span>&nbspHome
                        </a>
                        </li>
                   
                   
                    <li>
                       <a href="about.html">
                           <span class="glyphicon glyphicon-info-sign"></span>
                           <br class="hidden-xs">About Doctor</a>
                       
                   </li>
     
                   <li>
                     <a href="learn.html">
                         <span class="glyphicon glyphicon-education"></span>
                         <br class="hidden-xs">Learning Videos</a>
                     
                    </li>
     
                    <li>
                     <a href="info.html">
                         <span class="glyphicon glyphicon-option-horizontal"></span>
                         <br class="hidden-xs">Information for Patients</a>
                     
                    </li>

                    <li class="active">
                        <a href="contact.html">
                            <span class="glyphicon glyphicon-earphone"></span>
                            <br class="hidden-xs">Contact us</a>
                       

                    </li>
                   
     
                 </ul>
     
             </div>
      
         </div> 
      </nav>
     
     </header>


<?php
if($message_sent):
?>
<h2>Thanks ,we'll be in touch</h2>
<?php
else:
?>
    <div id="main-content" class="container">
        <h2 id ="about-title" class="text-center">Contact us</h2>
        <div class="text-center">
     
        </div>
       
       <!-- <section class="row">
          <div>
     
     
     
             
          </div>

     
     
        </section> -->
     
        
           <form action="webform.php" method="POST" class="form">
             <div class="form-group ">
               <label for="name" class="form-label">Your Name</label>
               <input type="text" class="form-control" id="name" name="name" 
                 placeholder="Jane Doe" tabindex="1" required>
              </div>
             <div class="form-group">
              <label for="email" class="form-label">Email</label>
              <input <?= $invalid_class_name ?? "" ?> type="email" class="form-control" id="email" name="email" 
                placeholder="Jane@Doe.com" tabindex="2" required>
              </div>
            
             <div class="form-group">
               <label for="subject" class="form-label">Subject</label>
              <input type="text" class="form-control" id="subject" name="subject" 
                placeholder="Subject" tabindex="3" required>
            </div>
            <div class="form-group">
              <label for="message" class="form-label">Message</label>
             <textarea class="form-control" rows="5" cols="30" id="message" name="message" placeholder="Enter Message..." tabindex="4"></textarea>
           </div>

           <div>
             <button type="submit" class="btn">Submit</button>
           
         </div>


            
           </form>
         



     </div>
     <?php 
     endif;
     ?>


     <footer class="panel-footer">
      <div class="container">
         <div class="row">
           <section id="hours" class="col-sm-6">
             <span>Hours:</span><br>
             Mon-Sat: 10:0am-2:00pm<br>
             <hr class="visible-xs"> 
            </section>
    
            <section id="address" class="col-sm-6">
              <span>Address:</span><br>
              RG Stone Urology & Laparoscopy Hospital<br>
              194-195, Deepali Chowk, Pitam Pura<br>
              New Delhi, 110034<br>
              <hr class="visible-xs"> 
             </section>
    
             
    
            </div>
    
    
            <div class="text-center">&copy; Copyright Dr.Harbans Singh 2020
              
            </div>
    
    
    
    
        </div>
    
    
    
    
    
    </footer>
     

     <!-- jQuery (Bootstrap JS plugins depend on it) -->
  <script src="js/jquery-1.12.4.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/script.js"></script>

</body>
</html>
     