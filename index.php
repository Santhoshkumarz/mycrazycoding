<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
   
    <title>mycrazycoding</title>
    <link rel="stylesheet" href="css/style.css">


    <script src="https://kit.fontawesome.com/3b841b11ba.js" crossorigin="anonymous"></script>
     
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="file:///E:/fontawesome/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="file:///E:/jquery.js"></script>
    <script data-ad-client="ca-pub-7569865976437849" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <style>

 body
 {
   

   background-image: linear-gradient(90deg,#D6EAF8  5%,#AED6F1 100%);
 }    
.main
{
	margin-top: 12%;
	display: flex;
	flex-wrap: wrap;
	justify-content: space-around;
	
	height: 100%;
	width: 100%;
	
	padding: 20px;


}
.main .box
{

	height: 180px;
	
	width: 200px;
	padding: 20px;
	margin:50px;
	border-radius: 10px;
	background-image: linear-gradient(270deg,#EDF6F8  0%,#DBF2F9 100%);


}
.main .box hr
{
	background:black;
}

.main .box .circle h2
{
	color:white;
	font-size: 4.5em;
	padding: 30px 0;
}

.main .box h1
{
	text-align: center;
	color:black;
	font-size: 18px;

}
.main .box .center
{
	padding: 40px;
	display: flex;
  justify-content: center;
 align-content: center;
}
.main .box .center button
{
	 background-color: black; /* Green */
  border: none;
  color: white;
  padding: 8px 18px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
  border-radius: 10px;

}


.main .box .center button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.main .box .center button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.main .box .center button:hover span {
  padding-right: 25px;
}

.main .box .center button:hover span:after {
  opacity: 1;
  right: 0;
}
.main .box .center button:focus
{
	border: none;
}
.circle1,.circle2
{
	position: absolute;
	
	color:#FCF3CF ;
	
	z-index: -1;
	
	display:none;
	
}

.circle1
{
	top:20%;
	left: 25%;
}
.circle2
{
	top:80%;
	left: 80%;
}
#home
{

	color:#291A25;
}

    </style>
  </head>
  <body>
  <?php
   include "nav.php";
    ?>



<div class="main">
	<h1 id="home">Learn to code free</h1>

<div class="box">
<h1>JAVA</h1><hr>
<div class="center"><button onclick="window.location.href='java/java_introduction.php'" style="vertical-align:middle"><span>LEARN</span></button></div>

</div>


<div class="box">

<h1>PYTHON</h1><hr>
<div class="center"><button onclick="window.location.href='python/py_index.php'" style="vertical-align:middle"><span>LEARN</span></button></div>	
</div>








<div class="box">
<h1>SQL</h1><hr>
<div class="center"><button onclick="window.location.href='SQL/SQL_index.php'" style="vertical-align:middle"><span>LEARN</span></button></div>  
</div>




<div class="box">
<h1>JSON</h1><hr>
<div class="center"><button onclick="window.location.href='json/Introduction'" style="vertical-align:middle"><span>LEARN</span></button></div>	
</div>


<div class="box">
<h1>PROBLEMS</h1><hr>
<div class="center"><button onclick="window.location.href='problems/problems_index.php'" style="vertical-align:middle"><span>LEARN</span></button></div>	
</div>


<div class="box">
<h1>OUTPUT GUESS</h1><hr>
<div class="center"><button onclick="window.location.href='Guess the output/python_GTO_index.php'" style="vertical-align:middle"><span>LEARN</span></button></div>  
</div>



<div class="box">
<h1>Javascript</h1><hr>
<div class="center"><button onclick="window.location.href='javascript/js_index.php'" style="vertical-align:middle"><span>LEARN</span></button></div>

</div>

<div class="box">
<h1>Online Compiler</h1><hr>
<div class="center"><a href="https://www.online-ide.com/"><button  style="vertical-align:middle"><span>LEARN</span></button></a></div>

</div>

<div class="box">
<h1>BOOKS</h1><hr>
<div class="center"><button onclick="window.location.href='Books/Books_selection.php'" style="vertical-align:middle"><span>LEARN</span></button></div>

</div>




<div class="box">
<h1>Quiz Test</h1><hr>
<div class="center"><button onclick="window.location.href='mcq/HTML/Quiz_home.html'" style="vertical-align:middle"><span>LEARN</span></button></div>



</div>










</div>

 

<div class="circle1">
	<i class="fa-solid fa-star"></i>
</div>

<div class="circle2">
	<i class="fa-solid fa-star"></i>
</div>




<br><br><br><br><br>


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
