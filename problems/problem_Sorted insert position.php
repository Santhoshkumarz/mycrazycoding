<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    
    <title>Sorted insert position in Java/Python</title>
 
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


  




<h1 id="problemhead">Sorted insert position</h1>

<br><br>
<p id="content_p">Problem to find which index is perfect to insert the k value for ascending order.</p>

<br><br>


<h2>Example-1:</h2><br>
<div class="Example">
<pre>
<span id="IO">Input</span>    : n = [ 3, 8, 9, 29]  k = 4
<span id="IO">Output</span>   : 1
<span id="IO">Explain</span>  : If insert the k value in index 1 to become list in ascending order.  
</pre>
</div>


<br><br>


<h2>Example-2:</h2><br>
<div class="Example">
<pre>
<span id="IO">Input</span>    : n = [ 1, 2, 4, 5]  k = 7
<span id="IO">Output</span>   : 4
<span id="IO">Explain</span>  : If insert the k value in index 4 to become list in ascending order.  
</pre>
</div>

<br><br>


<h2>Example-3:</h2><br>
<div class="Example">
<pre>
<span id="IO">Input</span>    : n = [ 3, 5, 7, 9]  k = 2
<span id="IO">Output</span>   : 0
<span id="IO">Explain</span>  : If insert the k value in index 0 to become list in ascending order.  
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
n = [ 3, 8, 9, 29]

k = 4

if(k in n):

    a = n.index(k)

    print(a)

else:

    n.append(k)

    n = sorted(n)

    c = n.index(k)

    print(c)
</pre>
</div>
    </div>


</div>
<br>
<br><br>
<h2>Output</h2><br><br>
<div class="output">
<pre>
1 
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