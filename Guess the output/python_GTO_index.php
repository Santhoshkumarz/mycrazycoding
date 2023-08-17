<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
   
    <title>Guess the output in python</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/java_style1.css">

  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="file:///E:/fontawesome/css/all.css">

   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="file:///E:/jquery.js"></script>
    <script data-ad-client="ca-pub-7569865976437849" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://kit.fontawesome.com/3b841b11ba.js" crossorigin="anonymous"></script>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+Mono:wght@600&display=swap');
      @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@500;600;700&display=swap');

.main
{
   display: flex;
             flex-wrap: wrap;
              flex-direction: row-reverse;


   width: 80%;
}

.questions_list
{

     display: flex;
     flex-wrap: wrap;
     justify-content: center;
     margin: auto;
     width: 15%;

     background:#EBF5FB ;
     



  padding: 10px;



  border-radius: 10px;
  
}
.questions_list button
{
   background-color: #AED6F1; /* Green */
   border: none;
   color: black;
   padding: 10px 10px;
   text-align: center;
   text-decoration: none;
   display: inline-block;
   font-size: 16px;
   margin: 8px 2px;
   cursor: pointer;
}


.questions_list .active
{
  background: blue;
  color:white;
}
.quiz
{
    
  margin: auto;
  width: 70%;
  height: 100%;
  padding: 10px;
  margin-top:6%;
  padding: 12px;


	border-radius: 10px;
	 background:#EBF5FB ;


}

.quiz .options span
{
   
    float: right;
    display: none;

}
.quiz .question
{
   margin-top: 10px;
   margin-bottom: 10px;
}

.quiz .question .code
{
   background:white;
   color:black;
   padding: 10px;
   font-family: 'Noto Sans Mono', monospace;
    font-size:13px;
    overflow: auto;
 
   border-left: 3px solid blue;
}
.quiz .options .option1, .option2, .option3, .option4
{
    font-family: 'Noto Sans Mono', monospace;
    font-size: 13px;

    padding: 12px; 
    margin: 25px 1px 25px 1px;
    cursor: pointer;
    background:#D6EAF8;
    transition: 0.8s;
    border-radius: 10px;

}
.quiz .options .option1:hover, .option2:hover, .option3:hover, .option4:hover
{
   background:#AED6F1;
}
.right
{
  display: flex;
  padding: 10px;
  justify-content: flex-end;
}

.quiz hr
{
   background:black;
}

h1
{
   font-family: 'Open Sans', sans-serif;
   font-size: 18px;
   color:black;
   padding-bottom: 15px;
}
#nextbtn
{
  font-family: 'Open Sans', sans-serif;
    background-color:  #007bff;
    border-radius: 10px; 
   border: none;
   color: white;
   padding: 8px 18px;
   text-align: center;
   text-decoration: none;
   display: inline-block;
   font-size: 16px;
   margin: 8px 2px;
   cursor: pointer;
}
#nextbtn:hover
{
  background-color: blue;
}
.bottom_ad
{
	display:none;
}
@media screen and (max-width: 800px)
{
      .questions_list
      {
          width: 100%;
        
          border-radius: 0px;
      }

      .main
      {
             margin-top:18%;
             width: 100%;
              
           }




      .quiz
      {
             width: 100%;
             border-radius: 0px;
           
      }
      body
      {
      	   background:#EBF5FB ;
      }
      .bottom_ad
      {
      	  display:block;
      }
}



    </style>


  </head>
  <body>
  <?php
   include "nav.php";
    ?>


 <div id="side" class="sidebar">

<div class="topics">
  <h1 id="H1">TURORIALS</h1>
  <a  href="../java/java_index.php" id="A" ><i class="fas fa-arrow-alt-circle-right"></i> Java</a>
  <a href="../python/py_index.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Python</a>
  <a href="../SQL/SQL_index.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> SQL</a><br>
 <hr>
 <h1 id="H1">GUESS OUTPUT</h1>

<a class="active" href="python_GTO_index.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i>Python</a><br>
<hr>
</div>
<br><br>
</div>







<div class="main">




<div class="quiz">

<div class="question">
<h1><span class="q_num">1</span>. What will be the output of following PYTHON code?</h1>
<pre class="code">
a = 0

b = 0

print(a%b)
</pre>
</div><br><hr><br>

<div class="options">

<div class="option1">0</div>
<div class="option2">1</div>
<div class="option3">None</div>
<div class="option4">Error</div>  

</div>

<div class="right"><button id="nextbtn">Next</button></div>

</div>






<div class="questions_list" id="q_list">


  
<button class="active" id="btn_1">1</button>
<button id="btn_2">2</button>
<button id="btn_3">3</button>
<button id="btn_4">4</button>
<button id="btn_5">5</button>
<button id="btn_6">6</button>
<button id="btn_7">7</button>
<button id="btn_8">8</button>
<button id="btn_9">9</button>
<button id="btn_10">10</button>
<button id="btn_11">11</button>
<button id="btn_12">12</button>
<button id="btn_13">13</button>
<button id="btn_14">14</button>
<button id="btn_15">15</button>


</div>







</div>






<div class="ads">
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7569865976437849"
     crossorigin="anonymous"></script>
<!-- right_side_ad -->
<ins class="adsbygoogle"
     style="display:inline-block;width:200px;height:500px"
     data-ad-client="ca-pub-7569865976437849"
     data-ad-slot="2673909034"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script> 
  
</div>




<script src="javascript/myscript.js"></script>
<script src="javascript/script.js"></script>



<div class="bottom_ad">
	<br><br><hr><br><br>


	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- vertical -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-7569865976437849"
     data-ad-slot="6174436937"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>

</div>




  </body>
</html>
