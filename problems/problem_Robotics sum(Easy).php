<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    
    <title>Robotics sum in Java/Python</title>
 
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/style.css">

  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="file:///E:/fontawesome/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    <script src="file:///E:/jquery.js"></script>
    <script src="javascript/myscript.js"></script>

    <script data-ad-client="ca-pub-7569865976437849" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
   
<style>
.JAVA
{
    display: none;
}
#FP
{
    list-style-type:disc;
}
#inside
{
   font-family: 'Roboto', sans-serif;
    font-size:20px;
    font-weight: 500;
}
</style>
<script>
$(document).ready(function()
{

  $("#button2").click(function()
  {
    $(this).addClass('active').siblings().removeClass('active')
    $(".PYTHON").show();
    $(".JAVA").hide();


  });
  $("#button1").click(function()
  {
    $(this).addClass('active').siblings().removeClass('active')
    $(".JAVA").show();
    $(".PYTHON").hide();
  });
});


 





</script>

  </head>
  <body>
    <?php
   include "nav.php";
    ?>
  
  
<?php
   include "sidebar.php";
    ?>
  
  
  
</div>

<div class="content">
  
<h1 id="problemhead">Robotics sum-1</h1>
<br><br>


<p id="content_p">Problem the input "R","L","U","D" denotes to right, left, up and down respectively.</p>

<br><br>

<h1 id="inside">Input</h1><br>

<ol id="FP">
  <li>If it consists of "R"  move one point towards right in the graph.</li>
  <li>If it consists of "L" move one point towards left in the graph.</li>
  <li>If it consists of "U" move one point upwards in the graph.</li>
  <li>If it consists of "D" move one point downwards in the graph.</li>

</ol>

<br><br>

<h1 id="inside">output</h1><br>

<ol id="FP">
  <li>After performing all the process print the X and Y coordinates.</li>
</ol>

<br><br>




<h2>Example-1:</h2><br>
<div class="Example">
<pre>
<span id="IO">Input</span>    : n = "RRLDDUUU"
<span id="IO">Output</span>   : 1 1
<span id="IO">Explain</span>  : The final output is x=1 and y=1   
</pre>
</div>


<br><br>


<h2>Example-2:</h2><br>
<div class="Example">
<pre>
<span id="IO">Input</span>    : n = "RLDU"
<span id="IO">Output</span>   : 0 0 
<span id="IO">Explain</span>  : The final output is x=0 and y=0.  
</pre>
</div>



<br><br>


<h2>Example-3:</h2><br>
<div class="Example">
<pre>
<span id="IO">Input</span>    : n = "RRLUU"
<span id="IO">Output</span>   : 1 2 
<span id="IO">Explain</span>  : The final output is x=1 and y=2.  
</pre>
</div>


<br><br><br><hr><br><br><br>









<h1 id="problemhead">Solution</h1><br><br><br>
<div class="box">
 <div class="Button">
  <button  id="button2" class="active" >Python</button>
</div>

 <div class="src">

<div class="JAVA">
<pre>
</pre>
</div>
<div class="PYTHON">
<pre>
n = "RRLDDUUU"

x = 0

y = 0

for i in n:

    if(i=="R"):
        x+=1
    if(i=="L"):
        x-=1
    if(i=="U"):
        y+=1
    if(i=="D"):
        y-=1

print(x,y)
</pre>
</div>
    </div>


</div>
<br>
<br><br>
<h2>Output</h2><br><br>
<div class="output">
<pre>
1 1
</pre>
</div>
<br><br><br><hr><br><br><br>





<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- google -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-7569865976437849"
     data-ad-slot="8524240436"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>





<br><br><br>



    <?php
   include "footer.php";
    ?>









</div>

  </body>
</html>
