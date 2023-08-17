<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    
    <title>Print the Diagonals of a Matrix in Java/Python</title>
 
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
  color: red;
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


  




<h1 id="problemhead">Print the Diagonals of a Matrix</h1>
<br><br>
<p id="content_p">Problem to find the Diagonals of a Matrix.</p>
<br>
<br>
<pre id="inside">
If matrix is like this,

<span class="red">1</span>  2  3  4
4  <span class="red">3</span>  2  1
7  8  <span class="red">9</span>  6
6  5  4  <span class="red">3</span>

The Diagonals are 1,3,9,3.
</pre>

<br><br><br>

<h2>Example-1:</h2><br>
<div class="Example">
<pre>
<span id="IO">Input</span>    : n = [[ 1, 2, 3, 4],[ 4, 3, 2, 1],[ 7, 8, 9, 6],[ 6, 5, 4, 3]]
<span id="IO">Output</span>   : [1, 3, 9, 3]
</pre>
</div>


<br><br>


<h2>Example-2:</h2><br>
<div class="Example">
<pre>
<span id="IO">Input</span>    : n = [[ 1, 2, 3],[ 4, 5, 6],[ 7, 8, 9]]
<span id="IO">Output</span>   : [1, 5, 9]
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
n = [[ 1, 2, 3, 4],[ 4, 3, 2, 1],[ 7, 8, 9, 6],[ 6, 5, 4, 3]]

l = []

for i in range(len(n)):

    l.append(n[i][i])

print(l)
</pre>
</div>
    </div>


</div>
<br>
<br><br>
<h2>Output</h2><br><br>
<div class="output">
<pre>
[1, 3, 9, 3]
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
