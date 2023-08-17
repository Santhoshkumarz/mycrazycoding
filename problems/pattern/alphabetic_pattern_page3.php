<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    
    <title>Alphabetic pattern page 3 in Python</title>
 
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/style.css">

  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="file:///E:/fontawesome/css/all.css">
    <meta name="Keywords" content="alphabet pattern in python,reverse alphabet pattern in python,alphabet pattern programs in python,alphabet pyramid pattern in python,alphabet triangle pattern in python,alphabetical pattern in python,a alphabet pattern in python,alphabet pattern python,python alphabet pattern,alphabet patterns in python,alphabet pattern printing in python,print alphabet pattern in python,alphabet pattern programs in python using while loop">
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
   include "alphabetic_sidebar.php";
    ?>
  
  
  
</div>

<div class="content">

<div class="mob_ad">
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7569865976437849"
     crossorigin="anonymous"></script>
<!-- horizontal -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-7569865976437849"
     data-ad-slot="4855091186"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>


<h1 id="problemhead">Alphabetic Pattern-11</h1>
<br><br>



<div class="box">
 <div class="Button">

  <button  class="active" id="button2" >Python</button>
</div>

 <div class="src">

<div class="JAVA">
<pre>

</div>
<div class="PYTHON">
<pre>
n=5
for x in range(65,65+n):
    for y in range((n+65)-x,1,-1):
        print(" ",end="")
    for z in range(65,1+x):
        print(chr(x),end="")
    print()
</pre>
</div>
    </div>


</div>
<br>
<br><br>
<h1 id="problemhead">Output:</h1><br><br>
<div class="output1">
<pre>
    A
   BB
  CCC
 DDDD
EEEEE
</pre>
</div>


<br><br><br><hr><br><br><br>


<h1 id="problemhead">Alphabetic Pattern-12</h1>
<br><br>



<div class="box">
 <div class="Button">
  <button  class="active" id="button2" >Python</button>
</div>

 <div class="src">

<div class="JAVA">
<pre>

</div>
<div class="PYTHON">
<pre>
n=5
for x in range(65,65+n):
    for y in range((n+65)-x,1,-1):
        print(" ",end="")
    for z in range(65,1+x):
        print(chr(z),end="")
    print()
</pre>
</div>
    </div>


</div>
<br>
<br><br>
<h1 id="problemhead">Output:</h1><br><br>
<div class="output1">
<pre>
    A
   AB
  ABC
 ABCD
ABCDE
</pre>
</div>


<br><br><br><hr><br><br><br>


<h1 id="problemhead">Alphabetic Pattern-13</h1>
<br><br>



<div class="box">
 <div class="Button">
  <button  class="active" id="button2" >Python</button>
</div>

 <div class="src">

<div class="JAVA">
<pre>

</div>
<div class="PYTHON">
<pre>
n=5
for x in range(64+n,64,-1):
    for y in range(0,(n+64)-x):
        print(" ",end="")
    for z in range(64,x):
        print(chr(x),end="")
    print()
</pre>
</div>
    </div>


</div>
<br>
<br><br>
<h1 id="problemhead">Output:</h1><br><br>
<div class="output1">
<pre>
EEEEE
 DDDD
  CCC
   BB
    A
</pre>
</div>


<br><br><br><hr><br><br><br>


<h1 id="problemhead">Alphabetic Pattern-14</h1>
<br><br>



<div class="box">
 <div class="Button">
  <button  class="active" id="button2" >Python</button>
</div>

 <div class="src">

<div class="JAVA">
<pre>

</div>
<div class="PYTHON">
<pre>
n=5
for x in range(1,n+1):
    for y in range(1,x):
        print(" ",end="")
    for z in range(65,(66+n)-x):
        print(chr(z),end="")
    print()
</pre>
</div>
    </div>


</div>
<br>
<br><br>
<h1 id="problemhead">Output:</h1><br><br>
<div class="output1">
<pre>
ABCDE
 ABCD
  ABC
   AB
    A
</pre>
</div>


<br><br><br><hr><br><br><br>

<h1 id="problemhead">Alphabetic Pattern-15</h1>
<br><br>



<div class="box">
 <div class="Button">
  <button  class="active" id="button2" >Python</button>
</div>

 <div class="src">

<div class="JAVA">
<pre>

</div>
<div class="PYTHON">
<pre>
n=5
i=(n-1)
k=1
for x in range(65,65+n):
    for y in range(0,i):
        print(" ",end="")
    for z in range(0,k):
        print(chr(x),end="")
    print()
    i-=1
    k+=2
</pre>
</div>
    </div>


</div>
<br>
<br><br>
<h1 id="problemhead">Output:</h1><br><br>
<div class="output1">
<pre>
    A
   BBB
  CCCCC
 DDDDDDD
EEEEEEEEE
</pre>
</div>

<br><br><br>



<div class="pagination">
 
  <a  href="alphabetic_pattern_page1.php">1</a>
  <a  href="alphabetic_pattern_page2.php">2</a>
  <a  class="active" href="alphabetic_pattern_page3.php">3</a>
  <a  href="alphabetic_pattern_page4.php">4</a>
  <a  href="alphabetic_pattern_page5.php">5</a>
  <a href="alphabetic_pattern_page4.php">&raquo;</a>
</div>



<br><br><br><br><hr><br><br><br><br>




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
<br><br><br><br><br><br>










</div>


    <?php
   include "footer.php";
    ?>


  </body>
</html>
