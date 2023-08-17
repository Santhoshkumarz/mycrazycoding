<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    
    <title>Error report</title>
 
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/java_style1.css">

  
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="file:///E:/fontawesome/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="file:///E:/jquery.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color:#E91A0C;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #D32E23;
}

.container_contact {
  border-radius: 5px;

 background-image: linear-gradient(270deg,#EDF6F8  0%,#DBF2F9 100%);
  padding: 20px;
} 

.content
{
   width: 50%;
    margin: 0 auto;


}  

 @media (max-width:500px)
 {
   .content
{
   width: 100%;
    margin: 0;


}  
 }



  </style>
  </head>
  <body>
     <?php
   include "nav.php";
    ?>


<div class="content">
<h1 id="problemhead">Error Report</h1><br><br>




<div class="container_contact">
<form action="mail.php" method="post">
    <label for="fname">Your Name</label>
    <input type="text" id="fname" name="name" placeholder="Your name..">



    <label for="subject">Message</label>
    <textarea id="subject" name="message" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Sent" name="sendMailBtn">
  </form>
</div>














  

</div>
</div>


<br><br><br><br><br><br><br><br>
<div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Tutorials</h3>
                        <ul>
                            <li><a href="java/java_index.php">Java</a></li>
                            <li><a href="python/py_index.php">Python</a></li>
                            <li><a href="problems/problems_index.php">Problems</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Website</h3>
                        <ul>
                            <li><a href="about.php">About us</a></li>
                            <li><a href="error_report.php">Error Report</a></li>
                            <li><a href="term_of_use.php">Terms & Conditions</a></li>
                             <li><a href="privacy_policy.php">Privacy Policy</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>mycrazycoding</h3>
                        <p>Our website is a free platform To learn Programming. Our goal is to make user's learn programming easily.</p>
                    </div>
                    <div class="col item social">


                      <a target="_blank" href="https://www.facebook.com/Mycrazycoding-111216087387260/events/?ref=page_internal"><i class="icon ion-social-facebook"></i></a>

                      <a target="_blank" href="https://twitter.com/mycrazycoding"><i class="icon ion-social-twitter"></i></a>

                         <a target="_blank" href="https://www.instagram.com/mycrazycoding/"><i class="icon ion-social-instagram"></i></a>



                      <a target="_blank" href="https://youtube.com/channel/UCOAmhGOjwvnSCKT74aZAhYQ"><i class="icon ion-social-youtube"></i></a>


                      


                    </div>
                </div>
                <p class="copyright">mycrazycoding © 2021</p>
            </div>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
