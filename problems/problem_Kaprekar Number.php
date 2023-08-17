<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    
    <title>Kaprekar Number in Java/Python</title>
 
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
#inside
{
     font-family: 'Roboto Mono', monospace;
     font-size:17px;
     font-weight:500;
     width: 100%;
     overflow-x: auto;
}
.red
{
   color:#E54422;
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


  




<h1 id="problemhead">Kaprekar Number</h1>
<br><br>
<p id="content_p">Problem to find the Kaprekar Number or not. Kaprekar Number is a given number is equal to the sum of the equal splited value of squared number.</p>
<br><br>

<pre id="inside">
 if <span class="red">n = 45</span>

        Square the number     : 45*45 = 2025
        Split Equally         : 20 and 25
        sum of the split value: 20+25 = n.So It's Kaprekar Number.


 if <span class="red">n = 297</span>

        Square the number     : 297*297 = 88209
        Split Equally         : 88 and 209
        sum of the split value: 88+209 = n.So It's Kaprekar Number.
</pre>
<br><br><br>

<h2>Example-1:</h2><br>
<div class="Example">
<pre>
<span id="IO">Input</span>    : n = 45
<span id="IO">Output</span>   : Kaprekar Number   
</pre>
</div>


<br><br>


<h2>Example-2:</h2><br>
<div class="Example">
<pre>
<span id="IO">Input</span>    : n = 297
<span id="IO">Output</span>   : Kaprekar Number   
</pre>
</div>


<br><br>


<h2>Example-3:</h2><br>
<div class="Example">
<pre>
<span id="IO">Input</span>    : n = 32
<span id="IO">Output</span>   : Not a Kaprekar Number   
</pre>
</div>

<br><br><br><hr><br><br><br>









<h1 id="problemhead">Solution</h1><br><br><br>
<div class="box">
 <div class="Button">
  <button  id="button2" class="active">Python</button>
</div>

 <div class="src">

<div class="JAVA">
<pre>

</div>
<div class="PYTHON">
<pre>
n = 45

m = n*n

m = str(m)

a = len(m)//2

b = m[:a]

c = m[a:]

d = int(b) + int(c)

if(d==n):

    print("Kaprekar Number")

else:

    print("Not a Kaprekar Number")
</pre>
</div>
    </div>


</div>
<br>
<br><br>
<h2>Output</h2><br><br>
<div class="output">
<pre>
Kaprekar Number 
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
